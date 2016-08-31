<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Error extends BaseDataTypeClass
{

    protected $data = [
		'comment' => null, //Additional comments.
		'text' => null, //Text of the error.
		'code' => null, //Error code returned by the API.
    ];

    function __construct()
    {
        parent::__construct();
    }
}