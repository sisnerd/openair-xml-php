<?php

use OpenAir\Base\BaseCommandClass;

class BookingByDay extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'date' => null, //The date of the booking.
		'booking_id' => null, //The ID of the associated booking.
		'customer_id' => null, //The ID of the associated customer.
		'project_id' => null, //The ID of the associated project.
		'project_task_id' => null, //The ID of the task within the associated
		'booking_type_id' => null, //The ID of the associated booking_type.
		'job_code_id' => null, //The ID of the associated job code.
		'hours' => null, //The number of booked hours on this date for this
		'userid' => null, //The ID of the associated user.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}