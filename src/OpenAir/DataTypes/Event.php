<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Event extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'contact_id' => null, //The ID of the associated contact.
        'userid' => null, //The ID of the user who created the event.
        'dealid' => null, //The ID of the associated deal.
        'name' => null, //The name or description of the event.
        'occurred' => null, //The date of the event.
        'created' => null, //Time the record was created.
        'notes' => null, //Notes related to the event.
        'updated' => null, //Time the record was last updated or modified.
        'customerid' => null, //The id of the associated customer.
    ];
}
