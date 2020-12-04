<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Role extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'name' => null, //The name of this role.
        'notes' => null, //Notes associated with this role.
        'default_role' => null, //A 1/0 field indicating whether this is the
        'admin_role' => null, //A 1/0 field indicating whether this is the chief
        'external_id' => null, //If the record was imported from an external
        'updated' => null, //Time the record was last updated or modified.
    ];

    public function __toString()
    {
        return sprintf("Role %s %s", $this->id, $this->name);
    }
}
