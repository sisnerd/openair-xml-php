<?php

use OpenAir\Base\BaseCommandClass;

class Booking_request extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'number' => null, //The booking_request number that increments by 1.
		'project_task_id' => null, //The id of the task within the associated
		'startdate' => null, //The start date of the booking_request.
		'job_code_id' => null, //The id of the associated job code.
		'notify_owner' => null, //A "1/0" field indicating whether to send email
		'customer_id' => null, //The id of the associated customer.
		'date_approved' => null, //The date the booking_request was approved.
		'enddate' => null, //The end date of the booking_request.
		'updated' => null, //Time the record was last updated or modified.
		'as_percentage' => null, //A "1/0" field indicating which of the
		'project_id' => null, //The id of the associated project.
		'date_submitted' => null, //The date the booking_request was submitted.
		'hours' => null, //The number of hours booked to this project during this
		'attachment_id' => null, //If non-zero, the attachment record associated
		'approval_status' => null, //The approval status of the booking request
		'booking_type_id' => null, //The id of the associated booking_type.
		'name' => null, //The name of the booking_request (Prefix + number).
		'percentage' => null, //The percentage of time booked to this project
		'description' => null, //The description or purpose for the
		'repeat_id' => null, //The id of the associated repeating event.
		'created' => null, //Time the record was created.
		'external_id' => null, //If the record was imported from an external
		'notes' => null, //Booking notes
		'user_id' => null, //The id of the associated user.
		'owner_id' => null, //The id of the associated user creating the booking
		'prefix' => null, //A static alphanumeric booking_request number prefix.
    ];

    function __construct()
    {
        parent::__construct();
    }
}