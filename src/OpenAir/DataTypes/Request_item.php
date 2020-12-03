<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Request_item extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'vendor_quote_number' => null, //The vendor's quote number.
		'userid' => null, //The ID of the requester. This is always the same as the
		'date' => null, //The date of the request_item. The same as the
		'manufacturerid' => null, //The ID of the associated manufacturer.
		'purchaserequestid' => null, //The ID of the associated purchaserequest.
		'um' => null, //The unit of measure for the product, i.e., EA
		'request_reference_number' => null, //Unique reference number within
		'attachmentid' => null, //If non-zero, the attachment record associated
		'currency' => null, //The currency used for this request item.
		'quantity_fulfilled' => null, //The quantity that has been fulfilled.
		'productid' => null, //The ID of the associated product.
		'date_fulfilled' => null, //The date on which all of the quantity was
		'purchase_itemid' => null, //The ID of the associated purchase_item.
		'allow_vendor_substitution' => null, //A 1/0 field indicating whether the
		'manufacturer_part' => null, //The manufacturer's part number, SKU or
		'purchaseorderid' => null, //The ID of the associated purchase order.
		'cost' => null, //The cost per unit of measure at which the product is
		'name' => null, //The request item name.
		'quantity' => null, //The quantity of product_id for this request item.
		'projectid' => null, //The ID of the associated project. This is always the
		'total' => null, //The total value of the request item. Dated by the date
		'vendorid' => null, //The ID of the associated vendor.
		'vendor_sku' => null, //The vendor's sku for this product.
		'notes' => null, //Notes associated with this request item.
		'customerid' => null, //The ID of the associated customer. This is always
		'exported' => null, //Date and time the record was marked as exported.
    ];
}