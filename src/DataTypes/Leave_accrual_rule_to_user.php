<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Leave_accrual_rule_to_user extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'userid' => null, //The id of the associated user.
		'end_date' => null, //The date the accrual rule stops applying to the user.
		'start_date' => null, //The date the accrual rule starts applying to the
		'updated' => null, //Time the record was last updated or modified.
		'transfer_balance_to' => null, //ID of leave_accrual_rule_to_user record
		'leave_accrual_ruleid' => null, //The id of the associated accrual rule.
    ];

    function __construct()
    {
        parent::__construct();
    }
}