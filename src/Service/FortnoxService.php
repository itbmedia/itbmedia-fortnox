<?php
namespace ITBMedia\FortnoxBundle\Service;
use ITBMedia\FortnoxBundle\Event\TokenRefreshEvent;

use ITBMedia\FortnoxBundle\Exception\FortnoxException;
use ITBMedia\FortnoxBundle\Model\Article;
use ITBMedia\FortnoxBundle\Model\Contract;
use ITBMedia\FortnoxBundle\Model\Customer;
use ITBMedia\FortnoxBundle\Model\Invoice;
use ITBMedia\FortnoxBundle\Model\Offer;
use ITBMedia\FortnoxBundle\Model\Order;
use ITBMedia\FortnoxBundle\Model\Response\ArticlesResponse;

use ITBMedia\FortnoxBundle\Model\Response\ContractsResponse;
use ITBMedia\FortnoxBundle\Model\Response\CustomersResponse;
use ITBMedia\FortnoxBundle\Model\Response\InvoicesResponse;
use ITBMedia\FortnoxBundle\Model\Response\OffersResponse;
use ITBMedia\FortnoxBundle\Model\Response\OrdersResponse;
use ITBMedia\FortnoxBundle\Model\Response\PrintTemplatesResponse;
use ITBMedia\FortnoxBundle\Model\Token;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class FortnoxService{
    private ParameterBagInterface $parameterBag;
    private EventDispatcherInterface $eventDispatcher;
    public function __construct(ParameterBagInterface $parameterBag, EventDispatcherInterface $eventDispatcher) {
        $this->parameterBag = $parameterBag;
        $this->eventDispatcher = $eventDispatcher;
    }
    #region customer
    public function getCustomers(Token $token, array $params = []) : CustomersResponse
    {
        $response = $this->call($token, 'GET', 'customers', $params, false);
        return CustomersResponse::deserialize($response);
    }
    public function createCustomer(Token $token, Customer $customer) : Customer
    {
        $response = $this->call($token, 'POST', "customers", array('Customer' => $customer->toArray()), true)['Customer'];
        return Customer::fromArray($response);
    }
    public function getCustomer(Token $token, string $number, array $params = []) : Customer
    {
        $response = $this->call($token, 'GET', "customers/$number", $params, true)['Customer'];
        return Customer::fromArray($response);
    }
    public function updateCustomer(Token $token, Customer $customer) : Customer
    {
        $number = $customer->getCustomerNumber();
        $response = $this->call($token, 'PUT', "customers/$number", array('Customer' => $customer->toArray()), true)['Customer'];
        return Customer::fromArray($response);
    }
    #endregion
    #region article
    public function getArticles(Token $token, array $params = []) : ArticlesResponse
    {
        $response = $this->call($token, 'GET', 'articles', $params, false);
        return ArticlesResponse::deserialize($response);
    }
    public function getArticle(Token $token, string $number, array $params = []) : Article
    {
        $response = $this->call($token, 'GET', "articles/$number", $params, true)['Article'];
        return Article::fromArray($response);
    }
    #endregion
    #region offers
    public function getOffers(Token $token, array $params = []) : OffersResponse
    {
        $response = $this->call($token, 'GET', 'offers', $params, false);
        return OffersResponse::deserialize($response);
    }
    public function getOffer(Token $token, string $number, array $params = []) : Offer
    {
        $response = $this->call($token, 'GET', "offers/$number", $params, true)['Offer'];
        return Offer::fromArray($response);
    }
    public function createOffer(Token $token, Offer $offer) : Offer
    {
        $response = $this->call($token, 'POST', "offers", array('Offer' => $offer->toArray()), true)['Offer'];
        return Offer::fromArray($response);
    }
    public function updateOffer(Token $token, Offer $offer) : Offer
    {
        $response = $this->call($token, 'PUT', "offers/".$offer->getDocumentNumber(), array('Offer' => $offer->toArray()), true)['Offer'];
        return Offer::fromArray($response);
    }
    public function previewOffer(Token $token, string $number, array $params = [])
    {
        return $this->call($token, "GET", "offers/$number/preview", $params);
    }
    public function createOrderFromOffer(Token $token, string $number, array $params = []) : Offer
    {
        $response = $this->call($token, 'PUT',"offers/$number/createorder", $params, true)['Offer'];
        return Offer::fromArray($response);
    }
    #endregion
    #region orders
    public function getOrders(Token $token, array $params = []) : OrdersResponse
    {
        $response = $this->call($token, 'GET', 'orders', $params, false);
        return OrdersResponse::deserialize($response);
    }
    public function getOrder(Token $token, string $number, array $params = []) : Order
    {
        $response = $this->call($token, 'GET', "orders/$number", $params, true)['Order'];
        return Order::fromArray($response);
    }
    public function createOrder(Token $token, Order $order) : Order
    {
        $response = $this->call($token, 'POST', "orders", array('Order' => $order->toArray()), true)['Order'];
        return Order::fromArray($response);
    }
    public function updateOrder(Token $token, Order $order) : Order
    {
        $response = $this->call($token, 'PUT', "orders/".$order->getDocumentNumber(), array('Order' => $order->toArray()), true)['Order'];
        return Order::fromArray($response);
    }
    #endregion
    #region contracts
    public function getContracts(Token $token, array $params = []) : ContractsResponse
    {
        $response = $this->call($token, 'GET', 'contracts', $params, false);
        return ContractsResponse::deserialize($response);
    }
    public function getContract(Token $token, string $number, array $params = []) : Contract
    {
        $response = $this->call($token, 'GET', "contracts/$number", $params, true)['Contract'];
        return Contract::fromArray($response);
    }
    public function createContract(Token $token, Contract $contract) : Contract
    {
        $response = $this->call($token, 'POST', "contracts", array('Contract' => $contract->toArray()), true)['Contract'];
        return Contract::fromArray($response);
    }
    public function updateContract(Token $token, Contract $contract) : Contract
    {
        $response = $this->call($token, 'PUT', "contracts/".$contract->getDocumentNumber(), array('Contract' => $contract->toArray()), true)['Contract'];
        return Contract::fromArray($response);
    }
    #endregion
    #region invoices
     public function getInvoices(Token $token, array $params = []) : InvoicesResponse
     {
         $response = $this->call($token, 'GET', 'invoices', $params, false);
         return InvoicesResponse::deserialize($response);
     }
     public function getInvoice(Token $token, string $number, array $params = []) : Invoice
     {
         $response = $this->call($token, 'GET', "invoices/$number", $params, true)['Invoice'];
         return Invoice::fromArray($response);
     }
     public function createInvoice(Token $token, Invoice $invoice) : Invoice
    {
        $response = $this->call($token, 'POST', "invoices", array('Invoice' => $invoice->toArray()), true)['Invoice'];
        return Invoice::fromArray($response);
    }
    public function updateInvoice(Token $token, Invoice $invoice) : Invoice
    {
        $response = $this->call($token, 'PUT', "invoices/".$invoice->getDocumentNumber(), array('Invoice' => $invoice->toArray()), true)['Invoice'];
        return Invoice::fromArray($response);
    }
    public function previewInvoice(Token $token, string $number, array $params = [])
    {
        return $this->call($token, "GET", "invoices/$number/preview", $params);
    }
    public function createInvoiceFromOrder(Token $token, string $number, array $params = []) : Order
    {
        $response = $this->call($token, 'PUT',"orders/$number/createinvoice", $params, true)['Order'];
        return Order::fromArray($response);
    }
     #endregion
     #region templates
     public function getPrintTemplates(Token $token, array $params = []) : PrintTemplatesResponse
     {
         $response = $this->call($token, 'GET', 'printtemplates', $params, true);
         return PrintTemplatesResponse::fromArray($response);
     }
     #endregion
    private function refreshToken(Token $token) : Token
    {
        $ch = curl_init();
        $secret = base64_encode($this->parameterBag->get('fortnox_bundle.client_id').':'.$this->parameterBag->get('fortnox_bundle.client_secret'));
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
        curl_close($ch);
        $token = Token::deserialize($res);
        $this->eventDispatcher->dispatch(new TokenRefreshEvent($token), TokenRefreshEvent::NAME);
        return $token;
    }

    private function call(Token $token, string $method, string $path, array $data = [], bool $serialize = false, bool $firstRequest = true)
    {
        $ch = curl_init();
        $headers = array();
	    $headers[] = 'Authorization: Bearer ' . $token->getAccessToken();

        if (in_array($method, array('POST', 'PUT'))) {
			$headers[] = 'Content-Type: application/json';
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		} else {
			$path .= "?" . http_build_query($data);
		}
		
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

        if($firstRequest && $response_code === 401)
        {           
            return $this->call($this->refreshToken($token), $method, $path, $data, $serialize, false);
        }

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
            if($serialize){
                return json_decode($body, true);
            }else{
                return $body;
            }
        } else {
			return array('body' => $body, 'status' => $response_code, 'headers' => $this->get_headers_from_curl_response($header));
		}
    }

    public function get_headers_from_curl_response(string $responseHeaders) {
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