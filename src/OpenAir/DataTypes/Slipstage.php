<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Slipstage extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'exclude_from_invoicing' => null, //Exclude slips of this stage from
        'notes' => null, //Notes associated with this slip stage.
        'name' => null, //The name of the stage.
        'updated' => null, //Time the record was last updated or modified.
        'position' => null, //The position of the stage.
        'enable_slip_tab' => null, //Display slips of this stage in a separate
    ];

    function __construct()
    {
        parent::__construct();
    }
}
