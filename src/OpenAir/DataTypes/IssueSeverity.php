<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class IssueSeverity extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'name' => null, //The name of the issue severity.
        'active' => null, //A 1/0 field indicating whether this issue severity is
        'notes' => null, //Notes associated with the issue severity.
        'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}
