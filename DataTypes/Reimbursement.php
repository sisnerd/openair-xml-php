<?php

use OpenAir\Base\BaseCommandClass;

class Reimbursement extends BaseCommandClass
{

    private $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'envelopeid' => null, //The associated envelope the reimbursement is
		'date' => null, //The date of the reimbursement.
		'total' => null, //The reimbursement total. Dated by the date field.
		'updated' => null, //Time the record was last updated or modified.
		'currency' => null, //Currency for the money fields in the record.
		'envelope_number' => null, //The number of the associated envelope the
		'externalid' => null, //If the record was imported from an external
		'notes' => null, //Notes associated with the reimbursement.
		'userid' => null, //The user associated with the envelope the
		'audit' => null, //Audit trail changes.
    ];

    function __construct()
    {
        parent::__construct();
    }
}