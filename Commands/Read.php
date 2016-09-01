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

    const ERROR_ID_CODE_INVALID = 601;
    const ERROR_INVALID_FIELD = 602;
    const ERROR_INVALID_TYPE_OR_METHOD = 603;
    const ERROR_ATTACHMENT_EXCEEDS_AVAIL_SPACE = 604;
    const ERROR_LIMIT_CLAUSE_MUST_BE_SPECIFIED = 605; //OR LESS THAN THE ACCOUNT LIMIT FOR OUTPUT DATA
    const ERROR_PROJECTIONS_RUNNING_TRY_LATER = 606;

    private $attributes = [
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
        'filters' => [],
    ];

    function __construct(array $aryAttributes = null)
    {
        parent::__construct();
        if(!is_null($aryAttributes)){
            foreach($aryAttributes as $key => $val){
                if(array_key_exists($key, $this->attributes)){
                    if($key == 'filters' && !is_array($val)){
                        throw new \Exception('filters attribute must be an array');
                    }
                    $this->attributes[$key] = $val;
                }
            }
        }
    }

    function _buildRequest(\DOMDocument $dom){
        $readCommandObj = parent::_buildRequest($dom); //creates <Read>
        foreach($this->attributes as $key => $val){
            if(!is_null($val)){
                if($key == 'filters'){
                    if(count($this->attributes[$key]) > 0){
                        $filters = [];
                        $fields = [];
                        foreach($this->attributes[$key] as $filter => $field){
                            $filters[] = $filter;
                            $fields[] = $field;
                        }
                        $objAttr = $dom->createAttribute('filter');
                        $objAttr->value = implode(',',$filters);
                        $readCommandObj->appendChild($objAttr);

                        $objAttr = $dom->createAttribute('field');
                        $objAttr->value = implode(',',$fields);;
                        $readCommandObj->appendChild($objAttr);
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
        return $readCommandObj;
    }

}