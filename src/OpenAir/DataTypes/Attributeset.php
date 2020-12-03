<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Attributeset extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'name' => null, //The name of the attributeset.
		'updated' => null, //Time the record was last modified.
		'created' => null, //Time the record was created.
		'notes' => null, //Attributset notes.
    ];

    function __construct()
    {
        parent::__construct();
    }
}