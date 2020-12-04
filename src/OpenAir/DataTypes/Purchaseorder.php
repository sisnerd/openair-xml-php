<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Purchaseorder extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'updated' => null, //Time the record was last updated or modified.
        'receivingid' => null, //The receiving location for this purchase order.
        'carrierid' => null, //The carrier to be used for shipping. Ship Via.
        'date' => null, //The date of the purchase order.
        'date_required' => null, //The date the purchase items on this purchase
        'attachmentid' => null, //If non-zero, the attachment record associated
        'date_shipped' => null, //The date the materials were shipped if known.
        'date_expected' => null, //The date the materials are expected if known.
        'date_submitted' => null, //The date the purchase order was submitted.
        'name' => null, //The name of the purchase order (Prefix + number).
        'total' => null, //The purchase order total cost. Dated by the date field.
        'description' => null, //The description or purpose for the purchase
        'locationid' => null, //The F.O.B. location_id (DEPRECATED).
        'shipping_cost' => null, //The cost of shipping, if known. Dated by the
        'shipping_termsid' => null, //The id of the associated shipping payment
        'accounts_payableid' => null, //The accounts payable location for this
        'number' => null, //The purchase order number that increments by 1.
        'userid' => null, //The id of the user creating the purchase order. The
        'terms' => null, //Payment terms for this purchase order.
        'total_purchase_items' => null, //The total number of purchase items in
        'currency' => null, //The currency this purchase order is in.
        'quantity_fulfilled' => null, //The quantity fulfilled on all the purchase
        'date_approved' => null, //The date the purchase order was approved.
        'date_order_placed' => null, //The date the purchase order was placed with
        'date_fulfilled' => null, //The date on which all of the total quantity was
        'auto_track_payable_with_fulfilled' => null, //A 1/0 field indicating that
        'total_quantity' => null, //The total quantity of all the purchase items
        'purchase_items_fulfilled' => null, //The total number of fulfilled
        'approval_status' => null, //The approval status of the purchase request:
        'vendorid' => null, //The id of the associated vendor that the purchase
        'notes' => null, //Notes to print on the purchase order.
        'ship_complete_only' => null, //A 1/0 field indicating that full order
        'prefix' => null, //A static alphanumeric purchase order number prefix.
    ];
}
