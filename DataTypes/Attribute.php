<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Attribute extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'name' => null, //The name of the attribute.
		'attribute_setid' => null, //The name of the attribute.
		'updated' => null, //Time the record was last modified.
		'created' => null, //Time the record was created.
		'notes' => null, //Attribute notes.
    ];

    function __construct()
    {
        parent::__construct();
    }
}