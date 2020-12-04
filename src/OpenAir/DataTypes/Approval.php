<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Approval extends DataType
{

    protected $data = [
        'cc' => null, //Email cc field.
        'notes' => null, //Notes.
    ];

    function __construct()
    {
        parent::__construct();
    }
}
