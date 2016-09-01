<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Estimatemarkup extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'estimateid' => null, //The ID of the associated estimate.
		'percent' => null, //The percentage markup to add to the total expense
		'total' => null, //The amount of expense (in the currency of the estimate)
		'created' => null, //Time the record was created.
		'phaseid' => null, //The ID of the associated estimate phase.
		'updated' => null, //Time the record was last updated or modified.
		'as_percentage' => null, //A 1/0 field indicating which expense markup to
    ];

    function __construct()
    {
        parent::__construct();
    }
}