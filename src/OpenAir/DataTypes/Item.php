<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Item extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'cost' => null, //The default cost per unit of measure for the item. 3
        'active' => null, //A 1/0 field indicating whether this is designated as an
        'taxable' => null, //A 1/0 field indicating whether this item is taxable,
        'externalid' => null, //If the record was imported from an external system
        'unitm' => null, //The unit of measure for the item, i.e., EA.
        'currency' => null, //Currency for the money fields in the record.
        'cost_centerid' => null, //The id of the associated cost center.
        'name' => null, //The item name.
        'type' => null, //The type of item. Add new types when type-specific
        'code' => null, //Optional accounting system code for integration with
        'updated' => null, //Time the record was last updated or modified.
        'tp_cost' => null, //The policy threshold amount.
        'tp_comp' => null, //Ticket policy comparison:
        'tp_notes_required' => null, //Notes are required if the ticket triggers
        'tax_location_id' => null, //The ID of the associated tax location.
        'tp_unit_or_total' => null, //The ticket policy is applied against:
        'cost_is_fixed' => null, //A 1/0 field indicating whether the user is
        'picklist_label' => null, //Label as shown on form picklist.
    ];

    function __construct()
    {
        parent::__construct();
    }
}
