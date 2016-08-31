<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Envelope extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'totreimburse' => null, //The total amount of reimbursable expenses in the
		'advance' => null, //The amount of any cash advance on the envelope.
		'number' => null, //The envelope tracking number.
		'date' => null, //The date of the envelope.
		'userid' => null, //The ID of the associated user.
		'status' => null, //The status of the envelope (O - open, S - submitted, A
		'currency' => null, //The currency this envelope is in.
		'tottickets' => null, //The total number of tickets in the envelope.
		'trip_reason' => null, //The reason for the trip.
		'approver' => null, //The userid of the envelope approver.
		'date_start' => null, //Starting date of the envelope (only used with
		'updated' => null, //Time the record was last updated or modified.
		'date_end' => null, //The ending date of the envelope (only used with autonaming).
		'name' => null, //The name of the envelope.
		'submitted' => null, //The date the envelope was submitted.
		'total' => null, //The total value of all the tickets in the envelope.
		'tax_locationid' => null, //Default tax location for this envelope.
		'created' => null, //Time the record was created.
		'approved' => null, //The date the envelope was approved.
		'balance' => null, //The outstanding balance on the envelope.
		'notes' => null, //Notes about the envelope.
		'is_overlapping' => null, //Read only flag returns is an envelope overlaps
		'attachmentid' => null, //If non-zero, the attachment record associated
		'externalid' => null, //If the record was imported from an external
		'currency_exchange_intolerance' => null, //A 1/0 field indicating if the
		'thin_client_id' => null, //Used by thin clients to reconcile imported
		'acct_date' => null, //The accounting period date of the envelope.
    ];

    function __construct()
    {
        parent::__construct();
    }
}