<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Approval extends BaseDataTypeClass
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