<?php

namespace OpenAir\Commands;

use OpenAir\Base\Command;

class Add extends Command
{
    protected $attributes = [
        'type' => null,
        'enable_custom' => null
    ];

    function _buildRequest(\DOMDocument $dom)
    {
        $readCommandObj = $dom->createElement("Add");
        foreach ($this->attributes as $key => $val) {
            if (!is_null($val)) {
                $objAttr = $dom->createAttribute($key);
                $objAttr->value = $val;
                $readCommandObj->appendChild($objAttr);
            }
        }

        foreach ($this->datatypes as $objDataType) {
            $test = $objDataType->_buildRequest($dom);
            $readCommandObj->appendChild($test);
        }

        return $readCommandObj;
    }
}
