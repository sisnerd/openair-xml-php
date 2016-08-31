<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Login extends BaseDataTypeClass
{

    protected $data = [
		'company' => null, //The nickname of the company.
		'user' => null, //The nickname of the user.
		'password' => null, //The password for the user.
    ];

    function __construct($company = null, $user = null, $password = null)
    {
        if(!is_null($company)){
            $this->data['company'] = $company;
        }
        if(!is_null($user)){
            $this->data['user'] = $user;
        }
        if(!is_null($password)){
            $this->data['password'] = $password;
        }
        parent::__construct();
    }
}