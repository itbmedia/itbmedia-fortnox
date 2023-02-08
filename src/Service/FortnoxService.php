<?php
namespace ITBMedia\FortnoxBundle\Service;
use ITBMedia\FortnoxBundle\Event\TokenRefreshEvent;

use ITBMedia\FortnoxBundle\Exception\FortnoxException;
use ITBMedia\FortnoxBundle\Model\Article;
use ITBMedia\FortnoxBundle\Model\MetaInformation;
use ITBMedia\FortnoxBundle\Model\Response\ArticlesResponse;

use ITBMedia\FortnoxBundle\Model\Response\CustomersResponse;
use ITBMedia\FortnoxBundle\Model\Token;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class FortnoxService{

    private ParameterBagInterface $parameterBag;
    private EventDispatcherInterface $eventDispatcher;
    /**
     */
    public function __construct(ParameterBagInterface $parameterBag, EventDispatcherInterface $eventDispatcher) {
        $this->parameterBag = $parameterBag;
        $this->eventDispatcher = $eventDispatcher;
    }
    #region article
    public function getCustomers(Token $token, array $params = []) : CustomersResponse
    {
        $response = $this->call($token, 'GET', 'customers', $params, false);
        return CustomersResponse::deserialize($response);
    }
    #endregion
    #region article
    public function getArticles(Token $token, array $params = []) : ArticlesResponse
    {
        $response = $this->call($token, 'GET', 'articles', $params, false);
        return ArticlesResponse::deserialize($response);
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