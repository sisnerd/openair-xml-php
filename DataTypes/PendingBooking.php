<?php

use OpenAir\Base\BaseCommandClass;

class PendingBooking extends BaseCommandClass
{

    private $data = [
		'userid' => null, //The ID of the associated user.
		'startdate' => null, //The start date of the booking.
		'repeatid' => null, //The ID of the associated repeating event.
		'booking_typeid' => null, //The ID of the associated booking_type.
		'notify_owner' => null, //A 1/0 field indicating whether to send email to
		'date_approved' => null, //The date the booking request was approved.
		'starttime' => null, //Start time.
		'enddate' => null, //The end date of the booking.
		'updated' => null, //Time the record was last updated or modified.
		'endtime' => null, //End time.
		'id' => null, //Unique ID. Automatically assigned by the system.
		'project_taskid' => null, //The ID of the task within the assoc. project.
		'as_percentage' => null, //A 1/0 field indicating which of the fields
		'date_submitted' => null, //The date the booking_request was submitted.
		'ownerid' => null, //The ID of the associated user creating the booking.
		'hours' => null, //The number of hours booked to this project during this
		'approval_status' => null, //The approval status of the booking request (O
		'percentage' => null, //The percentage of time booked to this project
		'projectid' => null, //The ID of the associated project.
		'job_code_id' => null, //The ID of the associated job code.
		'externalid' => null, //If the record was imported from an external system
		'resource_request_queue_id' => null, //The id of the associated resource
		'created' => null, //Time the record was created.
		'locationid' => null, //The location ID for this booking.
		'notes' => null, //Booking notes.
		'customerid' => null, //The ID of the associated customer.
		'project_assignment_profile_id' => null, //The id of the associated project
    ];

    function __construct()
    {
        parent::__construct();
    }
}