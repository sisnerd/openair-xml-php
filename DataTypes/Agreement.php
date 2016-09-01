<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Agreement extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'number' => null, //The agreement number.
		'date' => null, //The date of the agreement.
		'name' => null, //The name of the agreement.
		'active' => null, //A 1/0 field indicating whether this is an active
		'externalid' => null, //External ID.
		'total' => null, //The agreement total. Dated by the date field.
		'created' => null, //Time the record was created.
		'currency' => null, //Currency for the money fields in the record.
		'notes' => null, //Notes.
		'customerid' => null, //Customer ID.
		'updated' => null, //Time the record was last modified.
		'code' => null, //Optional accounting system code for integration with
		'acct_date' => null, //The accounting period date of the agreement.
		'picklist_label' => null, //Label as shown on form picklist.
    ];

    function __construct()
    {
        parent::__construct();
    }
}