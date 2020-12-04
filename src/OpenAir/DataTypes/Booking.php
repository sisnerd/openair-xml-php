<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Booking extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'hours' => null, //The number of hours booked to this project during this
        'ownerid' => null, //The ID of the associated user creating the booking.
        'userid' => null, //The ID of the associated user.
        'startdate' => null, //The start date of the booking.
        'percentage' => null, //The percentage of time booked to this project
        'projectid' => null, //The ID of the associated project.
        'externalid' => null, //If the record was imported from an external system
        'booking_typeid' => null, //The ID of the associated booking_type.
        'project_taskid' => null, //The ID of the task within the assoc. project.
        'created' => null, //Time the record was created.
        'repeatid' => null, //The ID of the associated repeating event.
        'enddate' => null, //The end date of the booking.
        'notes' => null, //Booking notes.
        'customerid' => null, //The ID of the associated customer.
        'updated' => null, //Time the record was last updated or modified.
        'as_percentage' => null, //A 1/0 field indicating which of the fields
        'starttime' => null, //Start time.
        'endtime' => null, //End time.
        'job_code_id' => null, //The ID of the associated job code.
        'locationid' => null, //The location ID for this booking.
        'notify_owner' => null, //A 1/0 field indicating whether to send email to
        'date_approved' => null, //The date the booking request was approved.
        'date_submitted' => null, //The date the booking_request was submitted.
        'approval_status' => null, //The approval status of the booking request (O
        'project_assignment_profile_id' => null, //The id of the associated project
        'source_booking_id' => null, //Id of the booking used to create this
    ];
}
