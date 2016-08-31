<?php

namespace OpenAir\Base;

use OpenAir\OpenAir;

class BaseDataTypeClass extends OpenAir
{
    function __construct()
    {
        // nothing here... yet
    }

    function __get($name){
        if(isset($this->data)){
            if (array_key_exists($name, $this->data)) {
                return $this->data[$name];
            }
        }
    }

    function __set($name, $value){
        if(isset($this->data)){
            if (array_key_exists($name, $this->data)) {
                $this->data[$name] = $value;
                return true;
            }else{
                return false;
            }
        }
    }

    public function _buildRequest(\DOMDocument $domObj){
        $ReflectionClass = new \ReflectionClass($this);
        $strRequest = $ReflectionClass->getShortName();
        $xmlDataType = $domObj->createElement($strRequest);
        if(isset($this->data)){
            foreach ($this->data as $tag => $data){
                if(!is_null($data)){
                    $objTag = $domObj->createElement($tag, $data);
                    $xmlDataType->appendChild($objTag);
                }
            }
        }
        return $xmlDataType;
    }
}