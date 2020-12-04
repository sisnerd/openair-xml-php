<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class ResourceRequest extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'number' => null, //The resource request tracking number.
        'status' => null, //The status of the resource request:
        'percent_fulfilled' => null, //Percent fulfilled for the resource request.
        'date_finalized' => null, //The date the resource request was finialzed
        'date_start' => null, //The starting date of the resource request.
        'ownerid' => null, //The id of the associated user creating the resource
        'date_end' => null, //The ending date of the resource request.
        'booking_type_id' => null, //The booking type of bookings created for this
        'name' => null, //The name of the resource request.
        'projectid' => null, //he id of the associated project.
        'date_start_expected' => null, //The expected starting date of the
        'external_id' => null, //If the record was imported from an external
        'notes' => null, //Notes field
        'customerid' => null, //The id of the associated customer.
    ];

    function __construct()
    {
        parent::__construct();
    }
}
