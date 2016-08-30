<?php

use OpenAir\Base\BaseCommandClass;

class Role extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'name' => null, //The name of this role.
		'notes' => null, //Notes associated with this role.
		'default_role' => null, //A 1/0 field indicating whether this is the
		'admin_role' => null, //A 1/0 field indicating whether this is the chief
		'external_id' => null, //If the record was imported from an external
		'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}