<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Costcenter extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'notes' => null, //Cost center notes.
		'name' => null, //The name of the cost center.
		'active' => null, //A 1/0 field indicating whether this is active.
		'updated' => null, //Time the record was last updated or modified.
		'externalid' => null, //If the record was imported from an external system
		'code' => null, //Optional accounting system code for integration with
		'picklist_label' => null, //Label as shown on form picklist.
    ];

    function __construct()
    {
        parent::__construct();
    }
}