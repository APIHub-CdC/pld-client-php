<?php

namespace APIHub\Client;

use \GuzzleHttp\Client;
use \GuzzleHttp\HandlerStack;

use \APIHub\Client\ApiException;
use \APIHub\Client\Interceptor\KeyHandler;
use \APIHub\Client\Interceptor\MiddlewareEvents;

class PLDApiTest extends \PHPUnit_Framework_TestCase
{
    protected $apiInstance;
    protected $signer;

    public function setUp()
    {
        $password = getenv('KEY_PASSWORD');
        $this->signer = new \APIHub\Client\Interceptor\KeyHandler(null, null, $password);
        $events = new \APIHub\Client\Interceptor\MiddlewareEvents($this->signer);
        $handler = \GuzzleHttp\HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));
        $handler->push($events->verify_signature_header('x-signature'));

        $client = new \GuzzleHttp\Client([
            'handler' => $handler,
            'verify' => false
        ]);
        $this->apiInstance = new \APIHub\Client\Api\PLDApi($client);
    }

    public function testGetPLD()
    {
        $x_api_key = "your_api_key";
        $username = "your_username";
        $password = "your_password";
        $body = new \APIHub\Client\Model\Peticion();

        $body->setNombres("XXXXXX");
        $body->setApellidoPaterno("XXXXXX");
        $body->setApellidoMaterno("XXXXXX");

        try {
            $result = $this->apiInstance->getPLD($x_api_key, $username, $password, $body);
            $this->signer->close();
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling PLDApi->getPLD: ', $e->getMessage(), PHP_EOL;
        }

    }
}
