<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Proposal extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'number' => null, //The proposal number.
		'userid' => null, //The ID of the associated user.
		'status' => null, //The status of the proposal: D - Draft, M - Submitted, P
		'attachments' => null, //If non-zero, the attachment record associated
		'responded' => null, //The date and time the client accepted or refused.
		'sent' => null, //The date and time the proposal was delivered to the
		'access_log' => null, //The mailing and access history of the proposal.
		'response' => null, //Client response notes.
		'name' => null, //The name of this proposal.
		'submitted' => null, //The date and time the proposal was submitted for
		'approved_by' => null, //The ID of the user who approved this proposal.
		'projectid' => null, //The ID of the associated project.
		'description' => null, //The description of this proposal.
		'total' => null, //The total amount. Dated by the currency_date field.
		'approved' => null, //The date and time the proposal was approved.
		'viewed' => null, //The date and time the client first viewed the proposal.
		'notes' => null, //Notes associated with this proposal.
		'customerid' => null, //The ID of the associated customer.
		'created_by' => null, //The ID of the user who created this proposal.
		'expires' => null, //The date the proposal is valid until.
    ];

    function __construct()
    {
        parent::__construct();
    }
}