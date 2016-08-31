<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Report extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'userid' => null, //The ID of the user who created the report. This is 0
		'name' => null, //The name of the report.
		'type' => null, //The type of report: S = saved reports and T = sTandard
		'thin_client_context' => null, //A 1/0 field indicating that this report
		'date_created' => null, //The date and time the report was created. This
		'email_report' => null, //A 1/0 field. 1 = report executes and sends an
		'relatedid' => null, //Related ID for attribute type. Report = ID of saved
    ];

    function __construct()
    {
        parent::__construct();
    }
}