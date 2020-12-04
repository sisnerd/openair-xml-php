<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Projectgroup extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'assigned_users' => null, //The users assigned to this project group. Can
        'created' => null, //Time the record was created.
        'updated' => null, //Time the record was last updated or modified.
        'notes' => null, //Notes associated with the project group.
        'name' => null, //The name for the project group.
        'active' => null, //A 1/0 field indicating whether this is active.
    ];
}
