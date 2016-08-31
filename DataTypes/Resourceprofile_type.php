<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Resourceprofile_type extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'active' => null, //A 1/0 field indicating whether this is active.
		'related_table' => null, //The name of the table related with this table.
		'name' => null, //The resourceprofile_type name. This shows up on all the
		'updated' => null, //Time the record was last updated or modified.
		'relatedid' => null, //The ID of the related item in the related table.
		'externalid' => null, //If the record was imported from an external system
		'type' => null, //The resourceprofile type. The entity on which this
		'attribute_set_id' => null, //The ID of the associated attribute set.
    ];

    function __construct()
    {
        parent::__construct();
    }
}