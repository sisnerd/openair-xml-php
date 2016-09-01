<?php

namespace OpenAir\Base;

use OpenAir\OpenAir;

class Command extends OpenAir
{
    const STATUS_SUCCESS = 0;
    const STATUS_UNKNOWN_ERROR = 1;
    const STATUS_NOT_LOGGED_IN = 2;
    const STATUS_TOO_MANY_ARGUMENTS = 3;
    const STATUS_TOO_FEW_ARGUMENTS = 4;
    const STATUS_UNKNOWN_COMMAND = 5;
    const STATUS_ACCESS_FROM_INVALID_URL = 6;
    const STATUS_INVALID_OFFLINE_VERSION = 7;
    const STATUS_FAILURE_DYNAMIC_MESSAGE = 8;
    const STATUS_LOGGED_OUT = 9;
    const STATUS_INVALID_PARAMETERS = 10;

    protected $datatypes = [];

    protected $responseCode;

    function __construct(){ }
    
    function _buildRequest(\DOMDocument $dom){
        $ReflectionClass = new \ReflectionClass($this);
        $strRequest = $ReflectionClass->getShortName();
        return $dom->createElement($strRequest);
    }

    function setResponseStatus($insResponseCode){
        $this->responseCode = $insResponseCode;
    }

    function getResponseStatus(){
        return $this->responseCode;
    }

    function addDataType(DataType $datatype){
        $this->datatypes[] = $datatype;
    }

    function getDataTypes(){
        return $this->datatypes;
    }
}