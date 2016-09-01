<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class IssueStage extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'name' => null, //The name of the issue stage.
		'default_for_new' => null, //A 1/0 field indicating whether this is the
		'considered_closed' => null, //A 1/0 field indicating whether issues in
		'position' => null, //The position of the stage.
		'notes' => null, //Notes associated with the issue stage.
		'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}