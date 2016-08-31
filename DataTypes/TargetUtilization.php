<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class TargetUtilization extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'user_id' => null, //The ID of the associated user.
		'start_date' => null, //The start date for the target utilization.
		'end_date' => null, //The end date for the target utilization. This field
		'percentage' => null, //Target utilization for this user as a percentage.
		'dirty' => null, //A 2/1/0 field: 0 - Clean, 1 - Dirty, and 2 - Inprogress.
    ];

    function __construct()
    {
        parent::__construct();
    }
}