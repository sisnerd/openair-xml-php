<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Projectassign extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'user_id' => null, //The ID of the user assigned to this task.
		'project_groupid' => null, //The ID of the project group if the user was
		'updated' => null, //Time the record was last updated or modified.
		'job_codeid' => null, //The ID of the associated job code.
		'customer_id' => null, //The ID of the associated customer.
		'project_id' => null, //The ID of the project to which this user is
		'allocation' => null, //The percentage of time the associated user is
    ];

    function __construct()
    {
        parent::__construct();
    }
}