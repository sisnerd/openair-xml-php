<?php

namespace OpenAir\Commands;


use OpenAir\Base\Command;

class Modify extends Command
{


    protected $attributes = [
        'type' => null,
        'enable_custom' => null
    ];

    function __construct(array $aryAttributes = null)
    {
        parent::__construct($aryAttributes);
    }

    function _buildRequest(\DOMDocument $dom){
        $readCommandObj = $dom->createElement("Modify");
        foreach($this->attributes as $key => $val){
            if(!is_null($val)){
                $objAttr = $dom->createAttribute($key);
                $objAttr->value = $val;
                $readCommandObj->appendChild($objAttr);
            }
        }

        foreach($this->datatypes as $objDataType){
            $test = $objDataType->_buildRequest($dom);
            $readCommandObj->appendChild($test);
        }

        return $readCommandObj;
    }
}