<?php

use OpenAir\Base\BaseCommandClass;

class Currency extends BaseCommandClass
{

    private $data = [
		'rate' => null, //The account's custom conversion rate.
		'created' => null, //Time the record was created.
		'symbol' => null, //The currency symbol.
		'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}