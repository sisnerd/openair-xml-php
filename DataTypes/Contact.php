<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Contact extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'addr' => null, //The contact's address.
		'customer_company' => null, //Import-only field to specify customer by
		'/customerid' => null, //company name. Can be used in place of .
		'job_title' => null, //The contact's job title.
		'updated' => null, //Time the record was updated or modified.
		'can_bill_to' => null, //A 1/0 field indicating if the contact can be a
		'code' => null, //Optional accounting system code for integration with
		'name' => null, //The name of the contact. This will be automatically
		'active' => null, //A 1/0 field indicating an active contact.
		'externalid' => null, //If the record was imported from an external system
		'can_sold_to' => null, //A 1/0 field indicating if the contact can be a
		'created' => null, //Time the record was created.
		'notes' => null, //Notes field.
		'customerid' => null, //The ID of the associated customer.
		'customer_externalid' => null, //The external ID for the associated
		'can_ship_to' => null, //A 1/0 field indicating if the contact can be a
		'exported' => null, //Date and time the record was marked as "exported".
		'picklist_label' => null, //Label as shown on form picklist.
    ];

    function __construct()
    {
        parent::__construct();
    }
}