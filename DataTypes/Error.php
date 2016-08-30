<?php

use OpenAir\Base\BaseCommandClass;

class Error extends BaseCommandClass
{

    private $data = [
		'comment' => null, //Additional comments.
		'text' => null, //Text of the error.
		'code' => null, //Error code returned by the API.
    ];

    function __construct()
    {
        parent::__construct();
    }
}