<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class RevenueStage extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'name' => null, //The name of the revenue stage.
		'revenue_stage_type' => null, //A one-character key indicating the type of
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}