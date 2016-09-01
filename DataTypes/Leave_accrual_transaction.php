<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Leave_accrual_transaction extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'date' => null, //The date of the transaction.
		'taskid' => null, //The id of the associated task if this is a draw down
		'notes' => null, //Notes associated with the leave accrual transaction.
		'updated' => null, //Time the record was last updated or modified.
		'amount' => null, //The number of hours. A draw down must be a negative
		'type' => null, //Indicates type of draw down: the type of the amount
		'from_run' => null, //Indicates if this was generated from a run the leave
		'userid' => null, //The ID of the associated user.
		'leave_accrual_ruleid' => null, //The ID of the associated accrual rule.
    ];

    function __construct()
    {
        parent::__construct();
    }
}