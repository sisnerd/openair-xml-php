<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Proposalblock extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'updated' => null, //Time the record was last updated or modified.
        'hour' => null, //The number of hours for a T block.
        'templateid' => null, //The ID of the associated template.
        'content' => null, //The content of the template.
        'um' => null, //The unit of measure for an E block or the rate description
        'rate' => null, //The hourly rate for a T block. Dated by the currency_date
        'proposalid' => null, //The ID of the associated proposal.
        'slipid' => null, //The ID of the associated slip if this block was billed
        'seq' => null, //The sequence number of the block.
        'cost' => null, //The cost per unit of measure (in the currency of the
        'itemid' => null, //The ID of the associated item.
        'name' => null, //The name of the this proposal block.
        'quantity' => null, //The quantity for an E block or an O block.
        'total' => null, //The total value of the block. Dated by the currency_date
        'description' => null, //The description of this proposal.
        'categoryid' => null, //The ID of the associated category.
        'minute' => null, //The number of minutes for a T block.
        'type' => null, //The type of the block: X - text only block, T - hourly
    ];

    function __construct()
    {
        parent::__construct();
    }
}
