<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Budget extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'date' => null, //The date of the budget entry.
		'name' => null, //The name.
		'projectid' => null, //The ID of the associated project.
		'total' => null, //The total value of budget entry. Dated by the date
		'budgetcategory_id' => null, //The ID of the budget category.
		'created' => null, //Time the record was created.
		'currency' => null, //Currency for the money fields in the record.
		'notes' => null, //Budget notes.
		'customerid' => null, //The ID of the associated customer.
		'updated' => null, //Time the record was last modified.
		'categoryid' => null, //The ID of the associated category.
    ];

    function __construct()
    {
        parent::__construct();
    }
}