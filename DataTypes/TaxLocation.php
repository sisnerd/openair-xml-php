<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class TaxLocation extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'hst_rate' => null, //The HST rate. This is used instead of GST and PST in
		'federal_rate' => null, //The federal tax rate.
		'name' => null, //The name for the estimate adjustment.
		'updated' => null, //Time the record was last updated or modified.
		'acct_code_federal' => null, //GL accounting code for the federal entries.
		'tax_method' => null, //The tax method: G - GST and PST, H - HST, or F -
		'state_rate' => null, //The state tax rate.
		'acct_code_pst' => null, //GL accounting code for the PST entries.
		'acct_code_state' => null, //GL accounting code for the state entries.
		'active' => null, //A 1/0 field specifying if the location is active.
		'acct_code_gst' => null, //GL accounting code for the GST entries.
		'pst_rate' => null, //The PST rate.
		'acct_code_hst' => null, //GL accounting code for the HST entries.
		'notes' => null, //Notes associated with this tax location.
		'gst_rate' => null, //The GST rate.
    ];

    function __construct()
    {
        parent::__construct();
    }
}