<?php

namespace ITBMedia\FortnoxBundle\Service;

use ITBMedia\FortnoxBundle\Event\TokenRefreshEvent;

use ITBMedia\FortnoxBundle\Exception\FortnoxException;
use ITBMedia\FortnoxBundle\Factory\CacheFactory;
use ITBMedia\FortnoxBundle\Factory\LockStoreFactory;
use ITBMedia\FortnoxBundle\Model\Article;
use ITBMedia\FortnoxBundle\Model\Contract;
use ITBMedia\FortnoxBundle\Model\Customer;
use ITBMedia\FortnoxBundle\Model\Invoice;
use ITBMedia\FortnoxBundle\Model\Offer;
use ITBMedia\FortnoxBundle\Model\Order;
use ITBMedia\FortnoxBundle\Model\Response\ArticlesResponse;
use ITBMedia\FortnoxBundle\Model\Response\CompanyInformationResponse;
use ITBMedia\FortnoxBundle\Model\Response\ContractsResponse;
use ITBMedia\FortnoxBundle\Model\Response\CustomersResponse;
use ITBMedia\FortnoxBundle\Model\Response\DeleteResponse;
use ITBMedia\FortnoxBundle\Model\Response\InvoicesResponse;
use ITBMedia\FortnoxBundle\Model\Response\OffersResponse;
use ITBMedia\FortnoxBundle\Model\Response\OrdersResponse;
use ITBMedia\FortnoxBundle\Model\Response\PrintTemplatesResponse;
use ITBMedia\FortnoxBundle\Model\Response\UnitsResponse;
use ITBMedia\FortnoxBundle\Model\Token;
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Lock\LockFactory;
use Symfony\Component\Lock\Store\FlockStore;

use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Contracts\Cache\ItemInterface;

class FortnoxService
{
    private ParameterBagInterface $parameterBag;
    private EventDispatcherInterface $eventDispatcher;
    private LockStoreFactory $lockStoreFactory;
    private CacheFactory $cacheFactory;
    private CacheItemPoolInterface $cache;
    private $logger;
    private $onRefreshToken;

    const DEFAULT_RETRY_ATTEMPTS = 5;
    const DEFAULT_EARLY_RETRY_ATTEMPTS = 2;
    const DEFAULT_CACHE_EXPIRY = 3600;
    const LOG_FILE = "fortnoxServiceLogs.txt";
    const CACHE_NAMESPACE = "FortnoxRefreshKeys";

    public function setLogger($logger)
    {
        $this->logger = $logger;
        return $this;
    }

    public function setOnRefreshToken($onRefreshToken)
    {
        $this->onRefreshToken = $onRefreshToken;
        return $this;
    }


    private function addLog($text, $context = array())
    {
        if ($this->logger) {
            $this->logger->info($text, $context ?? []);
            return;
        }
        // if (!file_exists(self::LOG_FILE)) touch(self::LOG_FILE);
        // $t = microtime(true);
        // $micro = sprintf("%06d", ($t - floor($t)) * 1000000);
        // $d = new \DateTime(date('Y-m-d H:i:s.' . $micro, $t));
        // $current = file_get_contents(self::LOG_FILE);
        // $currentDate = $d->format("Y-m-d H:i:s.u");
        // $current .= "-------------" . $currentDate . "-------------\n";
        // $current .= $text . "\n\n";
        // file_put_contents(self::LOG_FILE, $current);
    }

    public function __construct(
        ParameterBagInterface $parameterBag,
        EventDispatcherInterface $eventDispatcher,
        LockStoreFactory $lockStoreFactory,
        CacheFactory $cacheFactory
    ) {
        $this->parameterBag = $parameterBag;
        $this->eventDispatcher = $eventDispatcher;
        $this->lockStoreFactory = $lockStoreFactory;
        $this->cacheFactory = $cacheFactory;
        $this->cache = $cacheFactory->createCacheAdapter();

        // $this->cache = new FilesystemAdapter(self::CACHE_NAMESPACE, 0, __DIR__ . '/cache');
    }

    /**
     * @param Token $token
     * @return string
     */
    public function getMe(Token $token): string
    {
        return $this->call($token, 'GET', 'me', []);
    }

    /**
     * @param Token $token
     * @return CompanyInformationResponse
     */
    public function getCompanyInformation(Token $token): CompanyInformationResponse
    {
        $response = $this->call($token, 'GET', 'companyinformation', [], false);
        return CompanyInformationResponse::deserialize($response);
    }


    #region customer
    public function getUnits(Token $token, array $params = []): UnitsResponse
    {
        $response = $this->call($token, 'GET', 'units', $params, false);
        return UnitsResponse::deserialize($response);
    }
    #endregion
    #region customer
    public function getCustomers(Token $token, array $params = []): CustomersResponse
    {
        $response = $this->call($token, 'GET', 'customers', $params, false);
        return CustomersResponse::deserialize($response);
    }

    /**
     * @param Token $token
     * @param array $params
     * @return CustomersResponse
     */
    public function getAllCustomers(
        Token $token,
        array $params = [],
        int $limit = 500
    ): CustomersResponse {
        $allCustomers = [];
        $params['limit'] = $limit;

        do {
            $ordersReCustomersResponse = $this->getCustomers($token, array_merge($params, ['offset' => count($allCustomers)]));
            $allCustomers = array_merge($allCustomers, $ordersReCustomersResponse->getCustomers());
        } while (count($allCustomers) < $ordersReCustomersResponse->getMetaInformation()->getTotalResources());

        return $ordersReCustomersResponse->setCustomers($allCustomers);
    }

    public function createCustomer(Token $token, Customer $customer): Customer
    {
        $response = $this->call($token, 'POST', "customers", array('Customer' => $customer->toArray()), true)['Customer'];
        return Customer::fromArray($response);
    }
    public function getCustomer(Token $token, string $number, array $params = []): Customer
    {
        $response = $this->call($token, 'GET', "customers/$number", $params, true)['Customer'];
        return Customer::fromArray($response);
    }
    public function updateCustomer(Token $token, Customer $customer): Customer
    {
        $number = $customer->getCustomerNumber();
        $response = $this->call($token, 'PUT', "customers/$number", array('Customer' => $customer->toArray()), true)['Customer'];
        return Customer::fromArray($response);
    }
    #endregion
    #region article
    public function getArticles(Token $token, array $params = []): ArticlesResponse
    {
        $response = $this->call($token, 'GET', 'articles', array_merge($params, array("filter" => "active")), false);
        return ArticlesResponse::deserialize($response);
    }
    public function getArticle(Token $token, string $number, array $params = []): Article
    {
        $response = $this->call($token, 'GET', "articles/$number", $params, true)['Article'];
        return Article::fromArray($response);
    }
    public function createArticle(Token $token, Article $article): Article
    {
        $response = $this->call($token, 'POST', "articles", array('Article' => $article->toArray()), true)['Article'];
        return Article::fromArray($response);
    }
    public function updateArticle(Token $token, Article $article): Article
    {
        $number = $article->getArticleNumber();
        $response = $this->call($token, 'PUT', "articles/$number", array('Article' => $article->toArray()), true)['Article'];
        return Article::fromArray($response);
    }
    public function deleteArticle(Token $token, Article $article): DeleteResponse
    {
        $number = $article->getArticleNumber();
        $response = $this->call($token, 'DELETE', "articles/$number")['Article'];
        return DeleteResponse::fromArray($response);
    }


    /**
     * @param Token $token
     * @param array $params
     * @param int $limit
     * @return OffersResponse
     */
    public function getAllOffers(
        Token $token,
        array $params = [],
        int $limit = 500
    ): OffersResponse {

        $allOffers = [];
        $params['limit'] = $limit;

        do {
            $offersResponse = $this->getOffers($token, array_merge($params, ['offset' => count($allOffers)]));
            $allOffers = array_merge($allOffers, $offersResponse->getOffers());
        } while (count($allOffers) < $offersResponse->getMetaInformation()->getTotalResources());

        return $offersResponse->setOffers($allOffers);
    }


    #endregion
    #region offers
    public function getOffers(Token $token, array $params = []): OffersResponse
    {
        if (!isset($params["sortby"])) $params["sortby"] = "documentnumber";
        if (!isset($params["sortorder"])) $params["sortorder"] = "descending";
        $response = $this->call($token, 'GET', 'offers', $params, false);
        return OffersResponse::deserialize($response);
    }
    public function getOffer(Token $token, string $number, array $params = []): Offer
    {
        $response = $this->call($token, 'GET', "offers/$number", $params, true)['Offer'];
        return Offer::fromArray($response);
    }
    public function createOffer(Token $token, Offer $offer): Offer
    {
        $response = $this->call($token, 'POST', "offers", array('Offer' => $offer->toArray([], true)), true)['Offer'];
        return Offer::fromArray($response);
    }
    public function updateOffer(Token $token, Offer $offer): Offer
    {
        $response = $this->call($token, 'PUT', "offers/" . $offer->getDocumentNumber(), array('Offer' => $offer->toArray([], true)), true)['Offer'];
        return Offer::fromArray($response);
    }
    public function previewOffer(Token $token, string $number, array $params = [])
    {
        return $this->call($token, "GET", "offers/$number/preview", $params);
    }
    public function createOrderFromOffer(Token $token, string $number, array $params = []): Offer
    {
        $response = $this->call($token, 'PUT', "offers/$number/createorder", $params, true)['Offer']; // Fortnox docs says this should return a Order, but it returns a Offer??
        return Offer::fromArray($response);
    }
    public function createInvoiceFromOffer(Token $token, string $number, array $params = []): Offer
    {
        $response = $this->call($token, 'PUT', "offers/$number/createinvoice", $params, true)['Offer']; // Fortnox docs says this should return a Order, but it returns a Offer??
        return Offer::fromArray($response);
    }
    public function cancelOffer(Token $token, string $number, array $params = []): Offer
    {
        $response = $this->call($token, 'PUT', "offers/$number/cancel", $params, true)['Offer'];
        return Offer::fromArray($response);
    }
    public function setOfferAsSent(Token $token, string $number, array $params = []): Offer
    {
        $response = $this->call($token, "PUT", "offers/$number/externalprint", $params, true)['Offer'];
        return Offer::fromArray($response);
    }
    public function sendOfferAsEmail(Token $token, string $number, array $params = []): Offer
    {
        $response = $this->call($token, "GET", "offers/$number/email", $params, true)['Offer'];
        return Offer::fromArray($response);
    }
    /**
     * @param Token $token
     * @param array $params
     * @return OrdersResponse
     */
    public function getAllOrders(
        Token $token,
        array $params = [],
        int $limit = 500
    ): OrdersResponse {

        $allOrders = [];
        $params['limit'] = $limit;

        do {
            $ordersReOrdersResponse = $this->getOrders($token, array_merge($params, ['offset' => count($allOrders)]));
            $allOrders = array_merge($allOrders, $ordersReOrdersResponse->getOrders());
        } while (count($allOrders) < $ordersReOrdersResponse->getMetaInformation()->getTotalResources());

        return $ordersReOrdersResponse->setOrders($allOrders);
    }
    #endregion
    #region orders
    public function getOrders(Token $token, array $params = []): OrdersResponse
    {
        if (!isset($params["sortby"])) $params["sortby"] = "documentnumber";
        if (!isset($params["sortorder"])) $params["sortorder"] = "descending";
        $response = $this->call($token, 'GET', 'orders', $params, false);
        return OrdersResponse::deserialize($response);
    }
    public function getOrder(Token $token, string $number, array $params = []): Order
    {
        $response = $this->call($token, 'GET', "orders/$number", $params, true)['Order'];
        return Order::fromArray($response);
    }
    public function createOrder(Token $token, Order $order): Order
    {
        $response = $this->call($token, 'POST', "orders", array('Order' => $order->toArray([], true)), true)['Order'];
        return Order::fromArray($response);
    }
    public function updateOrder(Token $token, Order $order): Order
    {
        $response = $this->call($token, 'PUT', "orders/" . $order->getDocumentNumber(), array('Order' => $order->toArray([], true)), true)['Order'];
        return Order::fromArray($response);
    }
    public function previewOrder(Token $token, string $number, array $params = [])
    {
        return $this->call($token, "GET", "orders/$number/preview", $params);
    }
    public function createInvoiceFromOrder(Token $token, string $number, array $params = []): Order
    {
        $response = $this->call($token, 'PUT', "orders/$number/createinvoice", $params, true)['Order'];
        return Order::fromArray($response);
    }
    public function cancelOrder(Token $token, string $number, array $params = []): Order
    {
        $response = $this->call($token, 'PUT', "orders/$number/cancel", $params, true)['Order'];
        return Order::fromArray($response);
    }
    public function setOrderAsSent(Token $token, string $number, array $params = []): Order
    {
        $response = $this->call($token, "PUT", "orders/$number/externalprint", $params, true)['Order'];
        return Order::fromArray($response);
    }
    public function sendOrderAsEmail(Token $token, string $number, array $params = []): Order
    {
        $response = $this->call($token, "GET", "orders/$number/email", $params, true)['Order'];
        return Order::fromArray($response);
    }

    /**
     * @param Token $token
     * @param array $params
     * @return ContractsResponse
     */
    public function getAllContracts(
        Token $token,
        array $params = [],
        int $limit = 500
    ): ContractsResponse {

        $allContracts = [];
        $params['limit'] = $limit;

        do {
            $contractsResponse = $this->getContracts($token, array_merge($params, ['offset' => count($allContracts)]));
            $allContracts = array_merge($allContracts, $contractsResponse->getContracts());
        } while (count($allContracts) < $contractsResponse->getMetaInformation()->getTotalResources());

        return $contractsResponse->setContracts($allContracts);
    }

    #endregion
    #region contracts
    public function getContracts(Token $token, array $params = []): ContractsResponse
    {
        if (!isset($params["sortby"])) $params["sortby"] = "documentnumber";
        if (!isset($params["sortorder"])) $params["sortorder"] = "descending";
        $response = $this->call($token, 'GET', 'contracts', $params, false);
        return ContractsResponse::deserialize($response);
    }
    public function getContract(Token $token, string $number, array $params = []): Contract
    {
        if (!isset($params["sortby"])) $params["sortby"] = "documentnumber";
        if (!isset($params["sortorder"])) $params["sortorder"] = "descending";
        $response = $this->call($token, 'GET', "contracts/$number", $params, true)['Contract'];
        return Contract::fromArray($response);
    }
    public function createContract(Token $token, Contract $contract): Contract
    {
        $response = $this->call($token, 'POST', "contracts", array('Contract' => $contract->toArray([], true)), true)['Contract'];
        return Contract::fromArray($response);
    }
    public function updateContract(Token $token, Contract $contract): Contract
    {
        $response = $this->call($token, 'PUT', "contracts/" . $contract->getDocumentNumber(), array('Contract' => $contract->toArray([], true)), true)['Contract'];
        return Contract::fromArray($response);
    }
    public function createInvoiceFromContract(Token $token, string $number, array $params = []): Contract
    {
        $response = $this->call($token, 'PUT', "contracts/$number/createinvoice", $params, true)['Contract']; //Should'nt it return Invoice?
        return Contract::fromArray($response);
    }
    public function setContractAsFinished(Token $token, string $number, array $params = []): Contract
    {
        $response = $this->call($token, 'PUT', "contracts/$number/finish", $params, true)['Contract']; //Should'nt it return Invoice?
        return Contract::fromArray($response);
    }

    /**
     * @param Token $token
     * @param array $params
     * @return InvoicesResponse
     */
    public function getAllInvoices(
        Token $token,
        array $params = [],
        int $limit = 500
    ): InvoicesResponse {

        $allInvoices = [];
        $params['limit'] = $limit;

        do {
            $invoicesResponse = $this->getInvoices($token, array_merge($params, ['offset' => count($allInvoices)]));
            $allInvoices = array_merge($allInvoices, $invoicesResponse->getInvoices());
        } while (count($allInvoices) < $invoicesResponse->getMetaInformation()->getTotalResources());

        return $invoicesResponse->setInvoices($allInvoices);
    }
    #endregion
    #region invoices
    public function getInvoices(Token $token, array $params = []): InvoicesResponse
    {
        if (!isset($params["sortby"])) $params["sortby"] = "documentnumber";
        if (!isset($params["sortorder"])) $params["sortorder"] = "descending";
        $response = $this->call($token, 'GET', 'invoices', $params, false);
        return InvoicesResponse::deserialize($response);
    }
    public function getInvoice(Token $token, string $number, array $params = []): Invoice
    {
        $response = $this->call($token, 'GET', "invoices/$number", $params, true);

        return Invoice::fromArray($response['Invoice']);
    }
    public function getWayOfDeliveries(Token $token, array $params = []): Invoice
    {
        $response = $this->call($token, 'GET', "wayofdeliveries", $params, true)['WayOfDeliveries'];
        return Invoice::fromArray($response);
    }
    public function createInvoice(Token $token, Invoice $invoice): Invoice
    {
        $response = $this->call($token, 'POST', "invoices", array('Invoice' => $invoice->toArray([], true)), true)['Invoice'];
        return Invoice::fromArray($response);
    }
    public function updateInvoice(Token $token, Invoice $invoice): Invoice
    {
        $response = $this->call($token, 'PUT', "invoices/" . $invoice->getDocumentNumber(), array('Invoice' => $invoice->toArray([], true)), true)['Invoice'];
        return Invoice::fromArray($response);
    }
    public function previewInvoice(Token $token, string $number, array $params = [])
    {
        return $this->call($token, "GET", "invoices/$number/preview", $params);
    }
    public function cancelInvoice(Token $token, string $number, array $params = []): Invoice
    {
        $response = $this->call($token, 'PUT', "invoices/$number/cancel", $params, true)['Invoice'];
        return Invoice::fromArray($response);
    }
    public function creditInvoice(Token $token, string $number, array $params = []): Invoice
    {
        $response = $this->call($token, 'PUT', "invoices/$number/credit", $params, true)['Invoice'];
        return Invoice::fromArray($response);
    }
    public function bookkeepInvoice(Token $token, string $number, array $params = []): Invoice
    {
        $response = $this->call($token, 'PUT', "invoices/$number/bookkeep", $params, true)['Invoice'];
        return Invoice::fromArray($response);
    }
    public function setInvoiceAsSent(Token $token, string $number, array $params = []): Invoice
    {
        $response = $this->call($token, "PUT", "invoices/$number/externalprint", $params, true)['Invoice'];
        return Invoice::fromArray($response);
    }
    public function sendInvoiceAsEmail(Token $token, string $number, array $params = []): Invoice
    {
        $response = $this->call($token, "GET", "invoices/$number/email", $params, true)['Invoice'];
        return Invoice::fromArray($response);
    }
    public function sendInvoiceAsEInvoice(Token $token, string $number, array $params = []): Invoice
    {
        $response = $this->call($token, "GET", "invoices/$number/einvoice", $params, true)['Invoice'];
        return Invoice::fromArray($response);
    }
    #endregion
    #region templates
    public function getPrintTemplates(Token $token, array $params = []): PrintTemplatesResponse
    {
        $response = $this->call($token, 'GET', 'printtemplates', $params, true);
        return PrintTemplatesResponse::fromArray($response);
    }

    private function checkIfCacheIsValid($cacheItem)
    {
        if (!$cacheItem) return null;

        if (!$cacheItem->isHit()) return false;

        $cacheItemData = $cacheItem->get();
        if (!$cacheItemData) return false;

        $data = gettype($cacheItemData) === 'string' ? json_decode($cacheItemData) : $cacheItemData;
        if (!$data) return false;
        if (empty((array) $data)) return false;

        return  true;
    }
    private function getCacheToken($refreshToken)
    {
        if (!$refreshToken) return null;
        $cacheItem = $this->cache->getItem($refreshToken);
        $cacheItemDataIsValid = $this->checkIfCacheIsValid($cacheItem);
        if ($cacheItemDataIsValid) {
            $cacheItemData = $cacheItem->get();
            return Token::deserialize($cacheItemData);
        }
        return null;
    }

    private function setCacheToken($refreshToken, $newRefreshToken)
    {

        $expiresIn = $newRefreshToken["expires_in"] ?? self::DEFAULT_CACHE_EXPIRY;
        if (!is_int($expiresIn) || $expiresIn <= 0) {
            $expiresIn = self::DEFAULT_CACHE_EXPIRY;
        }

        $cacheItem = $this->cache->getItem($refreshToken);
        $cacheItem->set($newRefreshToken);
        $cacheItem->expiresAfter($expiresIn - 60); // Remove 60 seconds to make sure the token is not expired when we use it
        $this->cache->save($cacheItem);
    }

    private function refreshTokenWithLock(Token $token): Token
    {
        $this->addLog("Refreshing token with lock");
        header('X-Refresh-Token: ' . "true");
        $refreshToken = $token->getRefreshToken();

        if (!$refreshToken) throw new \Exception('Fortnox: Missing refresh token');


        if ($cachedToken = $this->getCacheToken($refreshToken)) {
            header('X-Refresh-Token-Cache-Without-Lock: ' . "true");
            header('X-Refresh-Token-Cache: ' . "true");
            $this->addLog("Using cached token: ", $cachedToken->serialize());

            return $cachedToken;
        }

        $store = $this->lockStoreFactory->createStore();
        $lockFactory = new LockFactory($store);
        $refreshLock = $lockFactory->createLock('token_refresh_' . $refreshToken);

        try {
            if ($refreshLock->acquire(true)) {
                if ($cachedToken = $this->getCacheToken($refreshToken)) {
                    header('X-Refresh-Token-Cache-Without-Lock: ' . "true");
                    header('X-Refresh-Token-Cache: ' . "true");
                    $this->addLog("Using cached token2: ", $cachedToken->serialize());

                    return $cachedToken;
                }

                $newRefreshToken = $this->refreshToken($token)->serialize();
                $this->addLog("New refresh token: ", $newRefreshToken);
                if (!$newRefreshToken) throw new \Exception('Fortnox: Missing refresh token');

                $this->setCacheToken($refreshToken, $newRefreshToken);
                sleep(1); // Sleep for 1 second to make sure the cache is saved before we release the lock

                return Token::deserialize($newRefreshToken);
            } else {
                throw new \Exception('Failed to acquire lock for token refresh.');
            }
        } finally {
            $refreshLock->release();
        }
    }
    private function refreshToken(Token $token): Token
    {
        $this->addLog("Refreshing token with request: ", $token->serialize());
        $ch = curl_init();
        $secret = base64_encode($this->parameterBag->get('fortnox_bundle.client_id') . ':' . $this->parameterBag->get('fortnox_bundle.client_secret'));

        curl_setopt($ch, CURLOPT_URL, "https://apps.fortnox.se/oauth-v1/token");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            http_build_query(
                array(
                    "grant_type" => "refresh_token",
                    "refresh_token" => $token->getRefreshToken(),
                )
            )
        );
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-type: application/x-www-form-urlencoded',
                'Authorization: Basic ' . $secret,
            )
        );
        $res = curl_exec($ch);
        $content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
        $response_code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $body = substr($res, $header_size);
        curl_close($ch);

        $this->addLog("Fortnox API refreshToken response: $response_code:",  array(
            "content_type" => $content_type,
            "response_code" => $response_code,
            "body" => $body,
        ));


        if ($content_type === "application/json") {
            if ($response_code < 200 || $response_code > 299) {
                $response = json_decode($body, true);
                $response['status_code'] = $response_code;
                array_walk_recursive($response, function ($item, $key) use (&$error) {
                    $error[strtolower($key)] = $item;
                });
                if (isset($error['status_code'], $error['code'], $error['message'], $error['error'])) {
                    throw new FortnoxException($error['status_code'], $error['code'], $error['message']);
                } else {
                    throw new HttpException($response['status_code'], json_encode(array_merge($response, $error)));
                }
            }
        }

        if ($res && ($arrayRes = json_decode($res, true)) && isset($arrayRes['error']) || isset($arrayRes['error_description'])) {
            throw new FortnoxException($response_code, $response_code, $arrayRes['error'] . ": " . $arrayRes['error_description']);
        }

        $newToken = Token::deserialize($res);
        $newToken->setReference($token->getReference());
        $this->addLog("New token: ", $newToken->serialize());
        $this->eventDispatcher->dispatch(new TokenRefreshEvent($newToken), TokenRefreshEvent::NAME);
        if ($this->onRefreshToken && is_callable($this->onRefreshToken)) call_user_func($this->onRefreshToken, $newToken);

        return $newToken;
    }

    public function call(Token $token, string $method, string $path, array $data = [], bool $serialize = false, int $earlyRetriesLeft = FortnoxService::DEFAULT_EARLY_RETRY_ATTEMPTS, $retryCount = FortnoxService::DEFAULT_RETRY_ATTEMPTS)
    {
        $this->addLog("[$path]");
        if ($cachedToken = $this->getCacheToken($token->getRefreshToken())) {
            header('X-Refresh-Token-Cache-Early: ' . "true");
            $this->addLog("Using early cached token: ", $cachedToken->serialize());
            $token = $cachedToken;
        }

        $ch = curl_init();
        $headers = array();
        $headers[] = 'Authorization: Bearer ' . $token->getAccessToken();
        $orignialPath = $path;

        if (in_array($method, array('POST', 'PUT'))) {
            $headers[] = 'Content-Type: application/json';
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        } else {
            $path .= "?" . http_build_query($data);
        }

        $this->addLog("[$path] With params: ", array(
            "method" => $method,
            "headers" => $headers,
            "earlyRetriesLeft" => $earlyRetriesLeft,
            "retryCount" => $retryCount,
        ));

        curl_setopt($ch, CURLOPT_URL, "https://api.fortnox.se/3/$path");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, true);

        $res = curl_exec($ch);
        $content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
        $response_code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($res, 0, $header_size);
        $body = substr($res, $header_size);
        curl_close($ch);

        $this->addLog("[$path] ($response_code) Fortnox API response rest: ", array(
            "content_type" => $content_type,
            "response_code" => $response_code,
            "header" => $header,
            "body" => $body,
        ));

        if ($earlyRetriesLeft && ($response_code === 401 || $response_code === 403)) {
            $sleepSeconds = 1 << (FortnoxService::DEFAULT_EARLY_RETRY_ATTEMPTS - $earlyRetriesLeft);
            sleep($sleepSeconds);
            $newToken = $this->refreshTokenWithLock($token);
            if ($this->onRefreshToken && is_callable($this->onRefreshToken)) call_user_func($this->onRefreshToken, $newToken);

            $this->addLog("[$path] Retrying with new Token token ($earlyRetriesLeft): ", $newToken->serialize());
            return $this->call($newToken, $method, $orignialPath, $data, $serialize, $earlyRetriesLeft - 1);
        }

        header('X-Retry-Attempt: ' . (FortnoxService::DEFAULT_RETRY_ATTEMPTS - $retryCount));

        if ($content_type === "application/json") {
            if ($response_code < 200 || $response_code > 299) {
                $response = json_decode($body, true);
                $response['status_code'] = $response_code;
                array_walk_recursive($response, function ($item, $key) use (&$error) {
                    $error[strtolower($key)] = $item;
                });
                if (isset($error['status_code'], $error['code'], $error['message'], $error['error'])) {
                    throw new FortnoxException($error['status_code'], $error['code'], $error['message']);
                } else {
                    throw new HttpException($response['status_code'], json_encode(array_merge($response, $error)));
                }
            }
            if ($serialize) {
                return json_decode($body, true);
            } else {
                return $body;
            }
        } else {
            if ($response_code === 429) {
                if ($retryCount <= 0) {
                    $message = $body || "Fortnox API rate limit reached";
                    throw new HttpException($response_code, $message);
                }
                // $this->logger->info($token->getRefreshToken() . " retryCount left " . $retryCount . "/" . FortnoxService::DEFAULT_RETRY_ATTEMPTS);
                $sleepSeconds = 1 << (FortnoxService::DEFAULT_RETRY_ATTEMPTS - $retryCount);
                // $this->logger->info($token->getRefreshToken() . " Fortnox API rate limit reached, sleeping for " . $sleepSeconds . " seconds");

                sleep($sleepSeconds);

                // Retry the request recursively without returning anything yet
                return $this->call($token, $method, $orignialPath, $data, $serialize, $earlyRetriesLeft, $retryCount - 1);
            }

            return array('body' => $body, 'status' => $response_code, 'headers' => $this->get_headers_from_curl_response($header));
        }
    }

    public function get_headers_from_curl_response(string $responseHeaders)
    {
        $headers = array();
        $header_text = substr($responseHeaders, 0, strpos($responseHeaders, "\r\n\r\n"));
        foreach (explode("\r\n", $header_text) as $i => $line) {
            if ($i === 0) {
                $headers['http_code'] = $line;
            } else {
                list($key, $value) = explode(': ', $line);

                $headers[$key] = $value;
            }
        }
        return $headers;
    }
}
