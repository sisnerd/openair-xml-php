<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class TagGroup extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'active' => null, //A 1/0 field indicating whether the record is active.
        'name' => null, //Name of the tag group.
        'entity_type' => null, //The tag group type: U - user, C - customer, or P -
        'searchable' => null, //A 1/0 field indicating whether this tag group is
        'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}
