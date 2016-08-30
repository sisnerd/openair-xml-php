<?php

use OpenAir\Base\BaseCommandClass;

class TaxRate extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'pst' => null, //The PST tax. Dated by the date field.
		'date' => null, //The date (used for currency conversions).
		'notes' => null, //Notes associated with this tax rate.
		'updated' => null, //Time the record was last updated or modified.
		'federal' => null, //The federal tax. Dated by the date field.
		'tax_locationid' => null, //The ID of the associated tax location.
		'state' => null, //The state tax. Dated by the date field.
		'currency' => null, //Currency for the money fields in the record.
		'hst' => null, //The hst tax. Dated by the date field.
		'slipid' => null, //The ID of the associated slip.
		'ticketid' => null, //The ID of the associated ticket.
		'gst' => null, //The GST tax. Dated by the date field.
		'purchase_itemid' => null, //The ID of the associated purchase order item.
    ];

    function __construct()
    {
        parent::__construct();
    }
}