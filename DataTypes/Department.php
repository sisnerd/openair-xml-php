<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Department extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'userid' => null, //The user ID of the head of the department.
		'notes' => null, //Notes about the department.
		'name' => null, //The name used for display in lists.
		'updated' => null, //Time the record was last updated or modified.
		'externalid' => null, //If the record was imported from an external
		'picklist_label' => null, //Label as shown on form picklist.
    ];

    function __construct()
    {
        parent::__construct();
    }
}