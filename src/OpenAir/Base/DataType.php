<?php

namespace OpenAir\Base;

use OpenAir\OpenAir;

class DataType extends OpenAir
{
    public function __construct($data = [])
    {
        if (count($data) == 0) {
            return;
        }

        $nonexistentkey = [];
        foreach ($data as $key => $val) {
            if (array_key_exists($key, $this->data)) {
                $this->data[$key] = $val;
            } else {
                $nonexistentkey[$key] = $val;
            }
        }

        foreach ($nonexistentkey as $key => $val) {
            if (substr($key, -strlen('__c')) === '__c') {
                $this->data[$key] = $val;
            }
        }
    }

    public function __get($name)
    {
        if (!isset($this->data)) {
            return null;
        }

        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }

    public function __set($name, $value)
    {
        if (!isset($this->data)) {
            return;
        }

        if (!array_key_exists($name, $this->data)) {
            return;
        }

        $this->data[$name] = $value;
    }

    public function _buildRequest(\DOMDocument $domObj)
    {
        $ReflectionClass = new \ReflectionClass($this);
        $strRequest = $ReflectionClass->getShortName();
        $xmlDataType = $domObj->createElement($strRequest);

        if (!isset($this->data)) {
            return $xmlDataType;
        }

        foreach ($this->data as $tag => $data) {
            if (is_null($data)) {
                continue;
            }

            if ($data instanceof DataType) {
                $objTag = $domObj->createElement($tag);
                $objTag->appendChild($data->_buildRequest($domObj));
            } else {
                $objTag = $domObj->createElement($tag, htmlentities($data));
            }

            $xmlDataType->appendChild($objTag);
        }

        return $xmlDataType;
    }
}
