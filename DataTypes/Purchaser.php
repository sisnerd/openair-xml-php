<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Purchaser extends BaseDataTypeClass
{

    protected $data = [
		'Purchaser' => null, //
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'receivingid' => null, //The default receiving location for this
		'userid' => null, //The ID of the associated user.
		'name' => null, //The name of the purchaser.
		'updated' => null, //Time the record was last updated or modified.
		'carrierid' => null, //The default carrier to be used for shipping. Ship
		'notes' => null, //Notes associated with the purchaser.
		'exported' => null, //Date and time the record was marked as exported.
		'accounts_payableid' => null, //The default accounts payable location for
		'ship_complete_only' => null, //The default for the 1/0 field indicating
		'active' => null, //A 1/0 field indicating where this is designated as an
    ];

    function __construct()
    {
        parent::__construct();
    }
}