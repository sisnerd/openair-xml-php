<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Dealschedule extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'amount' => null, //The amount this portion of the deal is worth (in the
		'dealid' => null, //ID of the deal associated with this deal portion.
		'date' => null, //The potential closing date for a deal portion.
		'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}