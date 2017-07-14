<?php

namespace OpenAir\Base;

use OpenAir\OpenAir;

class DataType extends OpenAir
{
    function __construct($data = [])
    {
        if(count($data) > 0){
            $nonexistantkey = [];
            foreach($data as $key => $val){
                if(array_key_exists($key, $this->data)){
                    $this->data[$key] = $val;
                }else{
                    $nonexistantkey[$key] = $val;
                }
            }
            foreach($nonexistantkey as $key => $val){
                if(substr($key, -strlen('__c')) === '__c'){
                    $this->data[$key] = $val;
                }
            }
        }
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
                    if($data instanceof DataType){
                        $objTag = $domObj->createElement($tag);
                        $objTag->appendChild($data->_buildRequest($domObj));
                    }else{
                        $objTag = $domObj->createElement($tag, $data);
                    }
                    $xmlDataType->appendChild($objTag);
                }
            }
        }
        return $xmlDataType;
    }
    
}