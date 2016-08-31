<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Estimateexpense extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'estimateid' => null, //The ID of the associated estimate.
		'itemid' => null, //The ID of the associated expense item.
		'date' => null, //Date for the expense.
		'markup_type' => null, //A 1/0 field indicating the type of expense
		'quantity' => null, //The quantity for the expense.
		'description' => null, //The short description for the estimate.
		'created' => null, //Time the record was created.
		'phaseid' => null, //The ID of the associated estimate phase.
		'markup' => null, //The amount of markup in percent or money as designated
		'price' => null, //The cost of the expense. Dated by the date field.
		'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}