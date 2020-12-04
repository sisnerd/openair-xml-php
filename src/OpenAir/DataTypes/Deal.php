<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Deal extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'closed' => null, //When this deal was closed.
        'stage' => null, //The % of the work complete for this deal.
        'userid' => null, //The ID of the associated user.
        'status' => null, //The status for this deal: O - Open, C - Closed, or
        'name' => null, //The name/description of the deal.
        'territoryid' => null, //The territory for this deal.
        'active' => null, //Is this record active?
        'rating' => null, //The rating for this deal.
        'created' => null, //Time the record was created.
        'opened' => null, //When this deal was first opened.
        'notes' => null, //Notes for this deal.
        'customerid' => null, //The ID of the associated customer.
        'exported' => null, //Date and time the record was marked as exported.
        'updated' => null, //Time the record was last updated or modified.
    ];
}
