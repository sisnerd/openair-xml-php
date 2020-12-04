<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Approvalprocess extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'name' => null, //The name used for display in popups and lists.
        'externalid' => null, //If the record was imported from an external system you store the unique exte
        'updated' => null, //Time the record was last modified.
        'created' => null, //Time the record was created.
    ];
}
