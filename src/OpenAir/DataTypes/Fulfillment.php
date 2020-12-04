<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Fulfillment extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'purchaseorder_id' => null, //Associated purchase order ID.
        'purchaserequest_id' => null, //Associated purchase request ID.
        'request_item_id' => null, //Associated request item ID.
        'carrier_id' => null, //Associated carrier ID.
        'slip_id' => null, //The ID of the associated slip if this expense was
        'purchase_item_id' => null, //Associated purchase item ID.
        'waybill_number' => null, //The waybill number.
        'date' => null, //Date of the fulfillment.
        'acct_date' => null, //The accounting period date of the fulfillment.
        'quantity' => null, //The quantity received.
        'notes' => null, //Fulfillment description notes.
        'created' => null, //Time the record was created.
        'updated' => null, //Time the record was last updated or modified.
    ];
}
