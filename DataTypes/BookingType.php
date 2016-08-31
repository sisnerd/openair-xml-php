<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class BookingType extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'priority' => null, //The priority of the booking type (1 - 9).
		'created' => null, //Time the record was created.
		'notes' => null, //Booking notes.
		'name' => null, //The name of the booking type.
		'active' => null, //A 1/0 field specifying if the type is active.
		'updated' => null, //Time the record was last modified.
		'picklist_label' => null, //Label as shown on form picklist.
    ];

    function __construct()
    {
        parent::__construct();
    }
}