<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Filterset extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'name' => null, //The name of the filterset.
        'notes' => null, //Notes related to the filterset.
        'all_access' => null, //A 1/0 field indicating this filterset does not
        'default_filter_set' => null, //A 1/0 field indicating whether this is the
        'active' => null, //A 1/0 field indicating whether this is designated as an
        'externalid' => null, //If the record was imported from an external system
        'created' => null, //Time the record was created.
        'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}
