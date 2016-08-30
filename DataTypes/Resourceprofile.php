<?php

use OpenAir\Base\BaseCommandClass;

class Resourceprofile extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'userid' => null, //The ID of the user for which this resourceprofile
		'resourceprofile_typeid' => null, //The ID of the resourceprofile_type.
		'name' => null, //The resourceprofile name. Stub.
		'updated' => null, //Time the record was last updated or modified.
		'attributeid' => null, //The ID of the optional resourceprofile attribute.
		'comment' => null, //Additional comment describing this resourceprofile.
		'externalid' => null, //If the record was imported from an external system
		'type' => null, //The resourceprofile type. The entity on which this
    ];

    function __construct()
    {
        parent::__construct();
    }
}