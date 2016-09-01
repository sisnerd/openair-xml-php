<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Payment extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'date' => null, //The date of the payment.
		'invoiceid' => null, //The associated invoice ID if a payment against a
		'notes' => null, //Notes associated with the payment.
		'updated' => null, //Time the record was last updated or modified.
		'total' => null, //The payment total. Dated by the date field.
		'invoice_number' => null, //The associated invoice number if a payment
		'currency' => null, //Currency for the money fields in the record.
		'customerid' => null, //The ID of the associated customer if this is a
		'bulk_paymentid' => null, //The ID of the bulk_payment transaction if this
		'externalid' => null, //If the record was imported from an external system
    ];

    function __construct()
    {
        parent::__construct();
    }
}