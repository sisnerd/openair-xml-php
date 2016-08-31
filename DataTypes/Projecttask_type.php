<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Projecttask_type extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'notes' => null, //Notes associated with the project task type.
		'active' => null, //A 1/0 field specifying if the type is active.
		'name' => null, //The name of the project task type.
		'updated' => null, //Time the record was last updated or modified.
		'suppress_notification' => null, //Suppress task notifications for this
		'picklist_label' => null, //Label as shown on form picklist.
    ];

    function __construct()
    {
        parent::__construct();
    }
}