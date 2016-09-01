<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Todo extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'priority' => null, //Todo priority (1 - 9).
		'contactid' => null, //The ID of the associated contact.
		'name' => null, //The name or description of the to do item.
		'updated' => null, //Time the record was last updated or modified.
		'due' => null, //Date and time the task is due.
		'userid' => null, //The ID of the associated user.
		'dealid' => null, //The ID of the associated deal.
		'status' => null, //Todo status: N - Not Started, C - Completed, W -
		'notes' => null, //Notes associated with the to do item.
		'customerid' => null, //The ID of the associated customer.
		'createdbyid' => null, //The ID of the user who created the to do item.
		'finished' => null, //Date and time the task was finished.
		'start' => null, //Date and time the task is to be started.
    ];

    function __construct()
    {
        parent::__construct();
    }
}