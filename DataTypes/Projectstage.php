<?php

use OpenAir\Base\BaseCommandClass;

class Projectstage extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'notes' => null, //Notes associated with the project stage.
		'name' => null, //The name of the project stage.
		'position' => null, //The position of the stage.
		'enable_team' => null, //A 1/0 field indicating if this should be the
		'enable_utilization' => null, //Is the utilization enabled at this stage.
		'enable_project_assignments' => null, //Are project level assignments
		'enable_phase_and_task' => null, //Are phases and tasks enabled at this
		'enable_analysis' => null, //Is financial analysis enabled at this stage.
		'enable_billing' => null, //Is the project billing tab enabled at this
		'enable_recognition' => null, //Is the recognition tab enabled at this
		'enable_pricing' => null, //Is project pricing enabled at this stage. Off
		'picklist_label' => null, //Label as shown on form picklist.
    ];

    function __construct()
    {
        parent::__construct();
    }
}