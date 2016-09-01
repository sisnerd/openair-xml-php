<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Product extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'manufacturerid' => null, //The manufacturer of this product.
		'um' => null, //The unit of measure for the product, i.e., EA.
		'name' => null, //The name for the product. This shows up on all the
		'updated' => null, //Time the record was last updated or modified.
		'currency' => null, //The currency this cost is quoted in.
		'code' => null, //Optional accounting system code for integration with
		'manufacturer_part' => null, //The manufacturer's part number, SKU or
		'active' => null, //A 1/0 field indicating that this is active.
		'taxable' => null, //A 1/0 field indicating whether this item is taxable.
		'externalid' => null, //If the record was imported from an external
		'vendor_sku' => null, //The preferred vendor's sku for this product.
		'vendor_id' => null, //The preferred vendor from whom to purchase this
		'notes' => null, //Notes associated with the product.
		'standard_cost' => null, //The current standard cost per unit of measure
    ];

    function __construct()
    {
        parent::__construct();
    }
}