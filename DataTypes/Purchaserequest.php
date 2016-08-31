<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Purchaserequest extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'number' => null, //The purchase request number that increments by 1.
		'date' => null, //The date of the purchase request.
		'userid' => null, //The ID of the associated user creating the purchase
		'request_items_fulfilled' => null, //The total number of fulfilled request
		'total_request_items' => null, //The total number of request items in the
		'ordered_request_items' => null, //The total number of request items on
		'date_required' => null, //The date the material on this purchase request
		'attachmentid' => null, //If non-zero, the attachment record associated
		'currency' => null, //The currency of the total field.
		'quantity_fulfilled' => null, //The quantity fulfilled on all the request
		'date_approved' => null, //The date the purchaserequest was approved.
		'date_fulfilled' => null, //The date on which all of the total quantity was
		'total_quantity' => null, //The total quantity of all the request items in
		'date_submitted' => null, //The date the purchaserequest was submitted.
		'approval_status' => null, //The approval status of the purchase request:
		'name' => null, //The name of the purchaserequest (Prefix + number).
		'projectid' => null, //The ID of the associated project that the material
		'description' => null, //The description or purpose for the
		'total' => null, //The purchase request total cost. Dated by date field.
		'notes' => null, //Notes associated with the purchase request.
		'customerid' => null, //The ID of the associated customer that the
		'exported' => null, //Date and time the record was marked as exported.
		'prefix' => null, //A static alphanumeric purchase request number prefix.
    ];

    function __construct()
    {
        parent::__construct();
    }
}