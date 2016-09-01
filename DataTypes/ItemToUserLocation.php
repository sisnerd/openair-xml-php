<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class ItemToUserLocation extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'itemid' => null, //The ID of the associated item.
		'tax_locationid' => null, //The ID of the associated tax location.
		'user_locationid' => null, //The location ID for this user.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}