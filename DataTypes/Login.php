<?php

use OpenAir\Base\BaseCommandClass;

class Login extends BaseCommandClass
{

    private $data = [
		'company' => null, //The nickname of the company.
		'user' => null, //The nickname of the user.
		'password' => null, //The password for the user.
    ];

    function __construct()
    {
        parent::__construct();
    }
}