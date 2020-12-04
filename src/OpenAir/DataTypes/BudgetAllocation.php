<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class BudgetAllocation extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'budgetid' => null, //The ID of the associated budget.
        'userid' => null, //The ID of the associated user.
        'date' => null, //The date of the budget entry.
        'projectid' => null, //The ID of the associated project.
        'budgetactivity_id' => null, //The ID of the budget activity.
        'total' => null, //The total value of budget entry. Dated by the date
        'budgetcategory_id' => null, //The ID of the budget category.
        'created' => null, //Time the record was created.
        'currency' => null, //Currency for the money fields in the record.
        'customerid' => null, //The ID of the associated customer.
        'updated' => null, //Time the record was last modified.
        'allocation' => null, //The percentage of the budget entry that this user
    ];

    function __construct()
    {
        parent::__construct();
    }
}
