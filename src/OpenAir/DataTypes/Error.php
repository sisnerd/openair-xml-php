<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Error extends DataType
{
    protected $data = [
        'comment' => null, //Additional comments.
        'text' => null, //Text of the error.
        'code' => null, //Error code returned by the API.
    ];
}
