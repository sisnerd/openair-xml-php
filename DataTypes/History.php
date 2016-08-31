<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class History extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'userid' => null, //The ID of the user associated with this history event.
		'notes' => null, //Notes associated with the history event.
		'envelopeid' => null, //The ID of the associated envelope.
		'date' => null, //The date associated with this history event.
		'action' => null, //The approval action: S - Submittal, P - Pending,
    ];

    function __construct()
    {
        parent::__construct();
    }
}