<?php

namespace OpenAir\Commands;

use OpenAir\Base\Command;

class Delete extends Command
{

    const ERROR_CANNOT_DELETE = 701; // FAILED DEPENDENCY CHECK
    const ERROR_INVALID_NOTE = 702;

    protected $attributes = [
        'type' => null
    ];

    function __construct(array $aryAttributes = null)
    {
        parent::__construct($aryAttributes);
    }

    function _buildRequest(\DOMDocument $dom)
    {
        $readCommandObj = $dom->createElement("Delete");
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
