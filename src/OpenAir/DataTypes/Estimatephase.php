<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Estimatephase extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'estimateid' => null, //The ID of the associated estimate.
        'name' => null, //The name for the estimate adjustment.
        'updated' => null, //Time the record was last updated or modified.
    ];
}
