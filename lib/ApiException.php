<?php

namespace PLD\Client;

use \Exception;

class ApiException extends Exception
{

    protected $responseBody;

    protected $responseHeaders;

    protected $responseObject;

    public function __construct($mensaje = "", $codigo = 0, $responseHeaders = [], $responseBody = null)
    {
        parent::__construct($mensaje, $codigo);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    public function getResponseBody()
    {
        return $this->responseBody;
    }

    public function setResponseObject($obj)
    {
        $this->responseObject = $obj;
    }

    public function getResponseObject()
    {
        return $this->responseObject;
    }
}
