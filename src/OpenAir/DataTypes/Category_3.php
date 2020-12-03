<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Category_3 extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'name' => null, //The category name.
		'code' => null, //Optional accounting system code for integration with
		'externalid' => null, //If the record was imported from an external system
		'active' => null, //A 1/0 field indicating whether this is designated as an
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'notes' => null, //Category notes_3.
		'picklist_label' => null, //Label as shown on form picklist.
    ];

    function __construct()
    {
        parent::__construct();
    }
}