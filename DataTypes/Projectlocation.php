<?php

use OpenAir\Base\BaseCommandClass;

class Projectlocation extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'notes' => null, //Notes associated with the project location.
		'name' => null, //The name for the project location.
		'active' => null, //A 1/0 field indicating whether this is active.
    ];

    function __construct()
    {
        parent::__construct();
    }
}