<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Costtype extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'name' => null, //The name of the cost category.
        'active' => null, //A 1/0 field indicating if this cost category is active.
        'externalid' => null, //If the record was imported from an external
        'created' => null, //Time the record was created.
        'updated' => null, //Time the record was last updated or modified.
        'notes' => null, //Notes.
        'cost_categoryid' => null, //The ID of the associated cost category.
    ];
}
