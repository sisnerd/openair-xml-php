<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Currency extends BaseDataTypeClass
{

    protected $data = [
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