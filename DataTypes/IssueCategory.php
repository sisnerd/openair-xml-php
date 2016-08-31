<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class IssueCategory extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'name' => null, //The name of the issue category.
		'active' => null, //A 1/0 field indicating whether this issue category is
		'notes' => null, //Notes associated with the issue category.
		'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}