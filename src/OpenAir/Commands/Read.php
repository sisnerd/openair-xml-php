<?php

namespace OpenAir\Commands;


use OpenAir\Base\Command;
use OpenAir\Base\DataType;

class Read extends Command
{
    const METHOD_ALL = 'all';
    const METHOD_EQUAL_TO = 'equal to';
    const METHOD_NOT_EQUAL_TO = 'not equal to';
    const METHOD_CUSTOM_EQUAL_TO = 'custom equal to';
    const METHOD_USER = 'user';
    const METHOD_PROJECT = 'project';
    const METHOD_NOT_EXPORTED = 'not exported';

    const ERROR_ID_CODE_INVALID = 601; //no results
    const ERROR_INVALID_FIELD = 602;
    const ERROR_INVALID_TYPE_OR_METHOD = 603;
    const ERROR_ATTACHMENT_EXCEEDS_AVAIL_SPACE = 604;
    const ERROR_LIMIT_CLAUSE_MUST_BE_SPECIFIED = 605; //OR LESS THAN THE ACCOUNT LIMIT FOR OUTPUT DATA
    const ERROR_PROJECTIONS_RUNNING_TRY_LATER = 606;

    protected $attributes = [
        'limit' => null,
        'type' => null,
        'method' => self::METHOD_ALL,
        'deleted' => null,
        'include_flags' => null,
        'include_nondeleted' => null,
        'base_currency' => null,
        'limit' => null,
        'generic' => null,
        'enable_custom' => null,
        'filters' => [
            'filter' => '',
            'field' => ''
        ],
        'fields' => null
    ];

    protected $returnvalues = [];

    function __construct(array $aryAttributes = null)
    {
        parent::__construct($aryAttributes);
    }

    function _buildRequest(\DOMDocument $dom){
        $readCommandObj = $dom->createElement("Read");
        foreach($this->attributes as $key => $val){
            if(!is_null($val)){
                if($key == 'filters'){
                    if(count($this->attributes[$key]) > 0){
                        if(array_key_exists('filter', $this->attributes[$key]) && $this->attributes[$key]['filter'] != ''){
                            $objAttr = $dom->createAttribute('filter');
                            $objAttr->value = $this->attributes[$key]['filter'];
                            $readCommandObj->appendChild($objAttr);
                        }

                        if(array_key_exists('field', $this->attributes[$key]) && $this->attributes[$key]['field'] != '') {
                            $objAttr = $dom->createAttribute('field');
                            $objAttr->value = $this->attributes[$key]['field'];
                            $readCommandObj->appendChild($objAttr);
                        }
                    }
                }else{
                    $objAttr = $dom->createAttribute($key);
                    $objAttr->value = $val;
                    $readCommandObj->appendChild($objAttr);
                }
            }
        }
        foreach($this->datatypes as $objDataType){
            $test = $objDataType->_buildRequest($dom);
            $readCommandObj->appendChild($test);
        }
        if(count($this->returnvalues) > 0){
            $readResponse = $dom->createElement("_Return");
            foreach($this->returnvalues as $val){
                $xmlVal = $dom->createElement($val);
                $readResponse->appendChild($xmlVal);
            }
            $readCommandObj->appendChild($readResponse);
        }
        return $readCommandObj;
    }

    function setReturnValues(array $fields){
        $this->returnvalues = $fields;
    }

    function getType(){
        return $this->attributes['type'];
    }

    function setType($type){
        $this->attributes['type'] = $type;
    }
}