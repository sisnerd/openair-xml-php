<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Login extends DataType
{
    protected $data = [
        'company' => null, //The nickname of the company.
        'user' => null, //The nickname of the user.
        'password' => null, //The password for the user.
    ];

    public function __construct($company = null, $user = null, $password = null)
    {
        parent::__construct([
            'company' => $company,
            'user' => $user,
            'password' => $password
        ]);
    }
}
