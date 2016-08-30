<?php

use OpenAir\Base\BaseCommandClass;

class Schedulebyday extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'date' => null, //The date.
		'hours' => null, //The number of schedule hours on this date for this user,
		'user_id' => null, //The id of the associated user.
		'base_hours' => null, //The number of base hours on this date for this
		'target_hours' => null, //The number of target hours for this user on this
		'target_base_hours' => null, //The number of target base hours for this
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}