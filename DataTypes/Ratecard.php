<?php

use OpenAir\Base\BaseCommandClass;

class Ratecard extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'notes' => null, //Notes associated with the rate card.
		'active' => null, //A 1/0 field indicating whether this is an active rate
		'name' => null, //The name of the rate card.
		'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}