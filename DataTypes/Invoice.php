<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Invoice extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'draw_date' => null, //The date of the draw.
		'number' => null, //The invoice number.
		'status' => null, //The status of the invoice (EZ Invoice, emailed
		'date' => null, //The date of the invoice.
		'terms' => null, //Payment terms for this invoice.
		'invoice_layoutid' => null, //The ID of the associated invoice layout.
		'credit_reason' => null, //The reason for the credit.
		'currency' => null, //The currency this invoice is in.
		'tax_state' => null, //The state tax total for the invoice. Dated by the
		'tax_federal' => null, //The federal tax total for the invoice. Dated by
		'tax_gst' => null, //The GST tax for the invoice. Dated by the date field.
		'emailed' => null, //Date the user emailed the invoice. For invoices
		'tax_pst' => null, //The PST tax for the invoice. Dated by the date field.
		'draw' => null, //The amount of any draw against retainer for this invoice.
		'contactid' => null, //The contact id for this invoice.
		'shipping_contactid' => null, //The shipping contact id for this invoice.
		'approval_status' => null, //The approval status of the invoice, only used
		'access_log' => null, //The mailing and access history of the invoice,
		'credit' => null, //The amount of any credit against the invoice. Dated by
		'tax_hst' => null, //The HST tax for the invoice. Dated by the date field.
		'tax' => null, //The tax total for the invoice. Dated by the date field.
		'total' => null, //The invoice total. Dated by the date field.
		'updated' => null, //Time the record was updated.
		'balance' => null, //The outstanding balance on the invoice. Dated by the
		'notes' => null, //Notes associated with the invoice.
		'paperrequest' => null, //Date the user requested that a paper invoice be
		'customerid' => null, //The id of the associated customer.
		'accounting' => null, //A 1/0 field indicating if an invoice has been sent
		'papersend' => null, //Date the paper invoice was actually mailed.
		'acct_date' => null, //The accounting period date of the invoice.
		'externalid' => null, //If the record was imported from an external
		'credit_rebill_status' => null, //Credit/Rebill status for the original
		'original_invoiceid' => null, //The original invoice ID for credit
		'attachmentid' => null, //The ID of the associated attachment.
    ];

    function __construct()
    {
        parent::__construct();
    }
}