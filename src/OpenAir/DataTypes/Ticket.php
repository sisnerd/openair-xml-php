<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Ticket extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'updated' => null, //Time the record was last updated or modified.
        'date' => null, //The date of the ticket.
        'unitm' => null, //The unit of measure.
        'reference_number' => null, //Unique reference number within envelope.
        'currency_total_tax_paid' => null, //The tax paid in the foreign currency
        'tax_rateid' => null, //The ID of the associated tax rate.
        'currency_rate' => null, //The conversion rate if this is a foreign
        'total_no_tax' => null, //The total paid before tax added. Dated by the
        'project_taskid' => null, //The ID of the associated project task.
        'cost' => null, //The cost per unit of measure. Dated by the date field.
        'tax_location_name' => null, //The name of the tax location.
        'non_billable' => null, //If set to 1 this is not billable.
        'description' => null, //The description of the ticket.
        'total' => null, //The total value of the ticket. Dated by the date field.
        'categoryid' => null, //The ID of the associated category.
        'customerid' => null, //The ID of the associated customer.
        'paymethod' => null, //Payment method now comes from payment_type table.
        'userid' => null, //The ID of the associated user.
        'status' => null, //The status of the ticket: R - reimbursable or N - nonreimbursable.
        'currency' => null, //Currency for the money fields in the record.
        'city' => null, //The ticket city or location.
        'cost_centerid' => null, //The ID of the associated cost center.
        'slipid' => null, //The ID of the associated slip.
        'currency_cost' => null, //The cost per unit of measure in the foreign
        'payment_typeid' => null, //The ID into the payment type field for the
        'currency_symbol' => null, //The currency for foreign currency receipts.
        'tax_location_id' => null, //The ID of the associated tax location.
        'itemid' => null, //The ID of the associated item.
        'envelopeid' => null, //The ID of the associated envelope.
        'quantity' => null, //The quantity.
        'projectid' => null, //The ID of the associated project.
        'total_tax_paid' => null, //The tax paid. Dated by the date field.
        'vendorid' => null, //The ID of the associated vendor.
        'missing_receipt' => null, //If set to 1, the paper receipt is missing for
        'acct_date' => null, //The accounting period date of the ticket.
        'notes' => null, //Notes associated with the ticket.
        'attachmentid' => null, //If non-zero, the attachment record associated
        'currency_exchange_intolerance' => null, //A 1/0 field indicating if the
        'externalid' => null, //If the record was imported from an external system
        'projecttask_typeid' => null, //The ID of the associated projecttask_type.
        'thin_client_id' => null, //Used by thin clients to reconcile imported
        'user_locationid' => null, //The location ID for this user.
    ];
}
