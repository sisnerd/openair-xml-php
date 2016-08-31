<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Schedulerequest_item extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'hours' => null, //The number of hours for this schedule request item.
		'date' => null, //The date of the schedule request item.
		'userid' => null, //The ID of the associated user.
		'timetypeid' => null, //The ID of the associated time type.
		'name' => null, //The schedule request item name. It is the same as the
		'request_reference_number' => null, //Unique reference number within
		'schedule_requestid' => null, //The ID of the associated schedule request.
		'updated' => null, //Time the record was last updated or modified.
		'customerid' => null, //The ID of the associated customer.
		'project_taskid' => null, //The ID of the associated project task.
		'projectid' => null, //The ID of the associated project.
		'categoryid' => null, //The ID of the associated category.
		'externalid' => null, //If the record was imported from an external system
    ];

    function __construct()
    {
        parent::__construct();
    }
}