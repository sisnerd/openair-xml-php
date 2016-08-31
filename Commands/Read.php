<?php

namespace OpenAir\Commands;


use OpenAir\Base\BaseCommandClass;
use OpenAir\Base\BaseDataTypeClass;

class Read extends BaseCommandClass
{
    const METHOD_ALL = 'all';
    const METHOD_EQUAL_TO = 'equal to';
    const METHOD_NOT_EQUAL_TO = 'not equal to';
    const METHOD_CUSTOM_EQUAL_TO = 'custom equal to';
    const METHOD_USER = 'user';
    const METHOD_PROJECT = 'project';
    const METHOD_NOT_EXPORTED = 'not exported';

    /**
     * @var int
     *
     * Restricts the number of records returned.
     *
     * Single number value: "1", "500", "1000" - simply
     * restricts the number of records returned.
     * Double number value: "0, 1000" - the first integer
     * specifies the offset of the first record to return and
     * the second integer limits the number of records to return.
     *
     * To request data in consecutive batches, only
     * the first part of the limit attribute should be
     * incremented - "0,1000", "1000,1000", "2000,1000", etc.
     *
     * Sequence requests should be submitted until the
     * result comes back empty or has less items than 1000
     */
    private $intLimit = 1000;

    /**
     * @var string
     */
    private $method = self::METHOD_ALL;

    /**
     * @var int
     * Returns deleted records. It can be used together with newer-than filter.
     * 0 or 1
     */
    private $deleted = 0;

    /**
     * @var int
     * Returns account or user switches, by default those are not populated.
     */
    private $include_flags = 0;

    /**
     * @var int
     * Returns all records, deleted and nondeleted.
     * Note: This attribute only works in conjunction with the "deleted" attribute.
     */
    private $include_nondeleted = 0;

    /**
     * @var string
     * Letter currency code. Works with type: Currencyrate.
     * Converts values on the fly to currency specified.
     */
    private $base_currency = 'USD';

    /**
     * @var int
     * Returns generic resources (users) only, where by default the API returns regular users only
     */
    private $generic = 1;

    /**
     * @var int
     * Custom fields to be included inline with other native fields
     */
    private $enable_custom = 0;

    /**
     * @var array
     * open-envelopes Returns only records associated with an open envelope.
     * approved-envelopes Returns only records associated with an approved envelope.
     * rejected-envelopes Returns only records associated with a rejected
     * submitted-envelopes Returns only records associated with a submitted envelope.
     * nonreimbursed-envelopes Returns envelopes that have a non-zero balance
     * reimbursable-envelope Returns only records associated with a open-slips Returns only records associated with an open slip.
     * approved-slips Returns only records associated with an approved slip.
     * open-timesheets Returns only records associated with an open
     * approved-timesheets Returns only records associated with an approved timesheet.
     * rejected-timesheets Returns only records associated with a rejected
     * submitted-timesheets Returns only records associated with a submitted
     * not-exported Returns only records that have not been marked as exported.
     * approved-revenue-recognition-transactions Returns only revenue recognition transactions belonging to approved revenue_container records.
     *   date filters:
     * newer-than
     * older-than
     * date-equal-to
     * date-not-equal-to
     * Returns only records that have a value in the
     * 'updated' field that is newer-than, older-than,
     * date-equal-to, or date-not-equal-to the date
     * specified in the Date datatype in the objects
     * collection.
     *
     * To compare date fields other than ‘updated', add
     * the following additional attribute information:
     * name=”field” value=”[some date field]”
     * 
     * should be structured as filter => field
     */
    private $filters = [];

    function __construct($type, $method=null, $filters=null, $limit=null)
    {
        parent::__construct();
        if(!is_null($method)){
            $this->method = $method;
        }
        if(!is_null($filters)){
            $this->filters = $filters;
        }
        if(!is_null($this->intLimit)){
            $this->intLimit = $limit;
        }
    }

    function _buildRequest(\DOMDocument $dom){
        echo "hit";exit;
        $readCommandObj = parent::_buildRequest($dom); //creates <Read>
        //$loginNode = $this->login_object->_buildRequest($dom); // creates <Login> and data
        //$authCommandObj->appendChild($loginNode); //this appends <Login> to <Auth> resulting in <Auth><Login></Login></Auth>
        //return $authCommandObj;
    }

    function addReadRequest(BaseDataTypeClass $dataType){

    }

}