<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Estimateadjustment extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'amount' => null, //The amount of adjustment in money (in the currency of
        'estimateid' => null, //The ID of the associated estimate.
        'name' => null, //The name for the estimate adjustment.
        'updated' => null, //Time the record was last updated or modified.
        'adjustment_type' => null, //A 1/0 field indicating the adjustment is for
        'amount_type' => null, //A 1/0 field indicating the type of the amount
    ];
}
