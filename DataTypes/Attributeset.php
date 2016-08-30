<?php

use OpenAir\Base\BaseCommandClass;

class Attributeset extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'name' => null, //The name of the attributeset.
		'updated' => null, //Time the record was last modified.
		'created' => null, //Time the record was created.
		'notes' => null, //Attributset notes.
    ];

    function __construct()
    {
        parent::__construct();
    }
}