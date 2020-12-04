<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class TagGroupAttribute extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'active' => null, //A 1/0 field indicating whether the record is active.
        'updated' => null, //Time the record was last updated or modified.
        'name' => null, //Name of the tag group attribute.
        'tag_groupid' => null, //The ID of the tag group this attribute is in.
    ];

    function __construct()
    {
        parent::__construct();
    }
}
