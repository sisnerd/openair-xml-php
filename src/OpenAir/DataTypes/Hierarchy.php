<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Hierarchy extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'requireonform' => null, //A 1/0 field indicating whether this hierarchy
        'name' => null, //The hierarchy name.
        'active' => null, //A 1/0 field indicating whether this is designated as an
        'updated' => null, //Time the record was last updated or modified.
        'required' => null, //A 1/0 field indicating whether this hierarchy should
        'notes' => null, //Notes related to the hierarchy.
        'available_as_column' => null, //A 1/0 field indicating whether this
        'externalid' => null, //If the record was imported from an external
        'primary_dropdown_filter' => null, //A 1/0 field indicating whether this
        'primary_user_filterset' => null, //A 1/0 field indicating whether this
        'type' => null, //The type (table name) of the hierarchy: customer,
    ];

    function __construct()
    {
        parent::__construct();
    }
}
