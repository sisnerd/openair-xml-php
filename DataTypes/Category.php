<?php

use OpenAir\Base\BaseCommandClass;

class Category extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'name' => null, //The category name.
		'active' => null, //A 1/0 field indicating whether this is designated as an
		'taxable' => null, //A 1/0 field indicating whether this item is taxable,
		'externalid' => null, //If the record was imported from an external system
		'other_rate_type' => null, //The time the other_rate field applies to.
		'other_rate' => null, //The rate for another time billing metric.
		'currency' => null, //Currency for the money fields in the record.
		'created' => null, //Time the record was created.
		'rate' => null, //The hourly billing rate.
		'cost_centerid' => null, //The ID of the associated cost center.
		'fixed_fee' => null, //The fixed fee value of this service.
		'updated' => null, //Time the record was last updated or modified.
		'code' => null, //Optional accounting system code for integration with
		'notes' => null, //Category notes.
		'picklist_label' => null, //Label as shown on form picklist.
    ];

    function __construct()
    {
        parent::__construct();
    }
}