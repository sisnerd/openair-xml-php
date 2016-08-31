<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Category_4 extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'name' => null, //The category name.
		'code' => null, //Optional accounting system code for integration with
		'externalid' => null, //If the record was imported from an external system
		'active' => null, //A 1/0 field indicating whether this is designated as an
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'notes' => null, //Category notes_4.
		'picklist_label' => null, //Label as shown on form picklist.
    ];

    function __construct()
    {
        parent::__construct();
    }
}