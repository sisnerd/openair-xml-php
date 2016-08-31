<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Notes extends BaseDataTypeClass
{

    protected $data = [
		'name' => null, //Name.
		'user_id' => null, //ID of the user.
		'setting' => null, //Setting information.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}