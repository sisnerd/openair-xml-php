<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Dealcontact extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'contactid' => null, //The related contact.
        'dealid' => null, //The deal ID.
        'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}
