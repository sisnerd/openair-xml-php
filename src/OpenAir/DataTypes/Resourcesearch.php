<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Resourcesearch extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'include_inactive_resources' => null, //A "1/0" field. Include inactive
        'startdate' => null, //The start date for availability
        'include_regular_resources' => null, //A "1/0" field. Include regular
        'required' => null, //See Resource Search Virtual Fields.
        'enddate' => null, //The end date for availability.
        'updated' => null, //Time the record was last updated or modified.
        'as_percentage' => null, //A "1/0" field indicating which of the fields...
        'hours' => null, //The number of hours of availability required over this
        'excluding' => null, //See Resource Search Virtual Fields.
        'consecutive_availability' => null, //A "1/0" field indicating no
        'availability_search' => null, //A "1/0" field indicating whether to
        'name' => null, //The resourcesearch name.
        'preferred' => null, //See Resource Search Virtual Fields.
        'percentage' => null, //The percentage of time booked to this project
        'resource_request_queue_id' => null, //The id of the associated resource
        'include_generic_resources' => null, //A "1/0" field. Include generic
        'external_id' => null, //If the record was imported from an external
    ];
}
