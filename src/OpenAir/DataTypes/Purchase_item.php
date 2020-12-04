<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Purchase_item extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'updated' => null, //Time the record was last updated or modified.
        'date' => null, //The date of the purchase_item. The same as the
        'um' => null, //The unit of measure for the product, i.e., EA.
        'purchaserid' => null, //The ID of the purchaser or purchasing agent. This
        'attachmentid' => null, //If non-zero, the attachment record associated
        'approved_cost' => null, //A snap-shot of the approved cost from the
        'manufacturer_part' => null, //The manufacturer's part number, SKU or
        'cost' => null, //The cost per unit of measure at which the product is
        'tax_location_name' => null, //The name of the tax location.
        'non_po' => null, //A 1/0 field indicating that this purchase item was
        'name' => null, //The purchase name.
        'total' => null, //The total value of the purchase (in the currency of the
        'quantity_payable' => null, //The quantity that is payable.
        'cusomerid' => null, //The ID of the associated customer.
        'request_itemid' => null, //The ID of the associated request_item
        'vendor_quote_number' => null, //The vendor's quote number.
        'userid' => null, //The ID of the requester.
        'purchaserequestid' => null, //The ID of the associated purchaserequest.
        'manufacturerid' => null, //The ID of the associated manufacturer.
        'currency' => null, //Currency for the money fields in the record.
        'quantity_fulfilled' => null, //The quantity that has been fulfilled.
        'date_fulfilled' => null, //The date on which all of the quantity was
        'purchaseorderid' => null, //The ID of the associated purchaseorder.
        'allow_vendor_substitution' => null, //A 1/0 field indicating whether the
        'order_reference_number' => null, //Unique reference number within
        'total_with_tax' => null, //The total value of the purchase (in the
        'quantity' => null, //The quantity of product_id for this purchases.
        'projectid' => null, //The ID of the associated project.
        'vendor_sku' => null, //The vendor's sku for this product.
        'vendorid' => null, //The ID of the associated vendor
        'notes' => null, //Notes associated with this purchase order block.
        'productid' => null, //The ID of the associated product.
        'acct_date' => null, //The accounting period date of the purchase item.
    ];

    function __construct()
    {
        parent::__construct();
    }
}
