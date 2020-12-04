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

    public static $response = [
        self::STATUS_SUCCESS => "Success",
        self::STATUS_NOT_LOGGED_IN => "Not logged in",
        self::STATUS_TOO_MANY_ARGUMENTS => "Too many arguments",
        self::STATUS_TOO_FEW_ARGUMENTS => "Too few arguments",
        self::STATUS_UNKNOWN_COMMAND => "Unknown command",
        self::STATUS_ACCESS_FROM_INVALID_URL => "Access from invalid URL",
        self::STATUS_INVALID_OFFLINE_VERSION => "Invalid offline version",
        self::STATUS_FAILURE_DYNAMIC_MESSAGE => "Failure dynamic message",
        self::STATUS_LOGGED_OUT => "Logged out",
        self::STATUS_INVALID_PARAMETERS => "Invalid parameters",
        self::ERROR_ID_CODE_INVALID => "No results or id code invalid",
        self::ERROR_INVALID_FIELD => "Invalid field",
        self::ERROR_INVALID_TYPE_OR_METHOD => "Invalid type or method",
        self::ERROR_ATTACHMENT_EXCEEDS_AVAIL_SPACE => "Attachment exceeds available space",
        self::ERROR_LIMIT_CLAUSE_MUST_BE_SPECIFIED => "Limit clause must be specified",
        self::ERROR_PROJECTIONS_RUNNING_TRY_LATER => "Projections running; try again later",
    ];

    protected $attributes = [
        'limit' => null,
        'type' => null,
        'method' => self::METHOD_ALL,
        'deleted' => null,
        'include_flags' => null,
        'include_nondeleted' => null,
        'base_currency' => null,
        'generic' => null,
        'enable_custom' => null,
        'filters' => [
            'filter' => '',
            'field' => '',
        ],
        'fields' => null,
    ];

    protected $returnvalues = [];

    public function __construct(array $aryAttributes = null)
    {
        parent::__construct($aryAttributes);
    }

    public function _buildRequest(\DOMDocument $dom)
    {
        $readCommandObj = $dom->createElement("Read");

        foreach ($this->attributes as $key => $val) {
            if (!is_null($val)) {
                if ($key == 'filters') {
                    if (count($this->attributes[$key]) > 0) {
                        if (array_key_exists('filter', $this->attributes[$key])
                            && $this->attributes[$key]['filter'] != ''
                        ) {
                            $objAttr = $dom->createAttribute('filter');
                            $objAttr->value = $this->attributes[$key]['filter'];
                            $readCommandObj->appendChild($objAttr);
                        }

                        if (array_key_exists('field', $this->attributes[$key])
                            && $this->attributes[$key]['field'] != ''
                        ) {
                            $objAttr = $dom->createAttribute('field');
                            $objAttr->value = $this->attributes[$key]['field'];
                            $readCommandObj->appendChild($objAttr);
                        }
                    }
                } else {
                    $objAttr = $dom->createAttribute($key);
                    $objAttr->value = $val;
                    $readCommandObj->appendChild($objAttr);
                }
            }
        }

        foreach ($this->datatypes as $objDataType) {
            $test = $objDataType->_buildRequest($dom);
            $readCommandObj->appendChild($test);
        }

        if (count($this->returnvalues) > 0) {
            $readResponse = $dom->createElement("_Return");
            foreach ($this->returnvalues as $val) {
                $xmlVal = $dom->createElement($val);
                $readResponse->appendChild($xmlVal);
            }
            $readCommandObj->appendChild($readResponse);
        }

        return $readCommandObj;
    }

    public function setReturnValues(array $fields)
    {
        $this->returnvalues = $fields;
    }

    public function getType()
    {
        return $this->attributes['type'];
    }

    public function setType($type)
    {
        $this->attributes['type'] = $type;
    }

    public function getResponseStatusMessage()
    {
        $code = $this->responseCode;

        if (isset(self::$response[$code])) {
            return self::$response[$code];
        }

        return 'Unknown';
    }
}
