<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class LoadedCost extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'userid' => null, //ID of the user.
        'projectid' => null, //The id if this loaded cost is associated with a
        'externalid' => null, //If the record was imported from an external system
        'end' => null, //End date for the loaded cost for historical records.
        'updated' => null, //Time the record was last updated or modified.
        'currency' => null, //The currency of the cost field.
        'customerid' => null, //The ID of the associated customer.
        'current' => null, //A 1/0 field indicating if this is the current loaded
        'project_taskid' => null, //The id if this loaded cost is associated with a
        'cost' => null, //The fully loaded hourly cost of the user.
        'start' => null, //Start date for the loaded cost for historical records.
        'Ic_level' => null, //If multiple loaded costs are used, this holds the
    ];
}
