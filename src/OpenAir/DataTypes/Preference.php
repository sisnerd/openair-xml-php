<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Preference extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'name' => null, //The name for the preference.
		'updated' => null, //Time the record was last updated or modified.
		'group_name' => null, //Optional group name for the preference.
		'userid' => null, //If the preference is for a user, this is the user ID.
		'setting' => null, //The preference data is stored in this field.
    ];

    function __construct()
    {
        parent::__construct();
    }
}