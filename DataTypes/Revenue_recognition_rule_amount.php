<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Revenue_recognition_rule_amount extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'revenue_recognition_rule_id' => null, //The ID of the associated rule.
		'customerpo_id' => null, //The ID of the associated customerpo.
		'recognition_type' => null, //Recognition type: R - revenue, C - cost, or
		'updated' => null, //Time the record was last updated or modified.
		'currency' => null, //Currency for the money fields in the record.
		'category_id' => null, //The ID of the associated category.
		'amount' => null, //The amount.
		'acct_code' => null, //Optional accounting system code for integration
		'agreement_id' => null, //The ID of the associated agreement.
		'cost_center_id' => null, //The ID of the associated category.
		'category_1id' => null, //The ID of the associated category_1. Mutually
		'category_2id' => null, //The ID of the associated category_2. Mutually
		'category_3id' => null, //The ID of the associated category_3. Mutually
		'category_4id' => null, //The ID of the associated category_4. Mutually
		'category_5id' => null, //The ID of the associated category_5. Mutually
    ];

    function __construct()
    {
        parent::__construct();
    }
}