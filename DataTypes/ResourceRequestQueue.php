<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class ResourceRequestQueue extends DataType
{

    protected $data = [
		'date_end' => null, //The ending date of the resource request queue.
		'status' => null, //The status of the resource request queue:
		'name' => null, //The name of the resource request queue.
		'projectid' => null, //The id of the associated project.
		'resource_request_id' => null, //The id of the associated resource
		'resourcesearch_id' => null, //The id of the associated base resource
		'external_id' => null, //If the record was imported from an external
		'date_start' => null, //The starting date of the resource request queue.
		'percent_fulfilled' => null, //Percent fulfilled for the resource request
		'notes' => null, //Notes field.
		'customerid' => null, //The id of the associated customer.
		'slots' => null, //The number of slots available in this queue.
    ];

    function __construct()
    {
        parent::__construct();
    }
}