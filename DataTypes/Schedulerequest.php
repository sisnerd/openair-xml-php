<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Schedulerequest extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'number' => null, //The schedule request number that increments by 1.
		'userid' => null, //The ID of the user creating the schedule request.
		'startdate' => null, //The start date of the schedule request.
		'date' => null, //The date of the schedule request creation.
		'attachmentid' => null, //If non-zero, the attachment record associated
		'enddate' => null, //The end date of the schedule request.
		'approval_status' => null, //The approval status of the schedule request:
		'updated' => null, //Time the record was last updated or modified.
		'date_approved' => null, //The date the schedule request was approved.
		'date_submitted' => null, //The date the schedule request was submitted.
		'customerid' => null, //The ID of the associated customer.
		'timetype' => null, //The time type of this schedule request: R - regular
		'timetypeid' => null, //The ID of the associated time type.
		'project_taskid' => null, //The ID of the associated project task.
		'projectid' => null, //The ID of the associated project.
		'categoryid' => null, //The ID of the associated category.
		'notes' => null, //Notes to print on the schedule request.
		'externalid' => null, //If the record was imported from an external system
		'description' => null, //Description or purpose for the schedule request.
		'prefix' => null, //A static alphanumeric schedule request number prefix.
		'name' => null, //The name of the schedule request (Prefix + number).
    ];

    function __construct()
    {
        parent::__construct();
    }
}