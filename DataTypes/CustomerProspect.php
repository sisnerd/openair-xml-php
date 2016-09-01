<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class CustomerProspect extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'addr' => null, //The prospective customer's address.
		'invoice_layoutid' => null, //The ID of the associated invoice layout.
		'rate' => null, //Hourly billing rate for this prospective customer.
		'bus_typeid' => null, //Type of business this prospective customer is in.
		'code' => null, //Optional user-defined code.
		'tb_approver' => null, //The user_id of the invoice approver if this is a
		'territoryid' => null, //The territory for this prospective customer.
		'name' => null, //The nickname used for display in popups and lists.
		'hierarchy_node_ids' => null, //Comma delimited list - hierarchy nodes
		'hear_aboutid' => null, //How did they hear about us.
		'statements' => null, //A 1/0 field indicating if this prospective
		'company_sizeid' => null, //This prospective customer's company size.
		'web' => null, //Prospective customer's Web address.
		'currency' => null, //Currency for the money fields in the record. Also the
		'cost_centerid' => null, //The ID of the associated cost center.
		'contactaddr' => null, //The contact address for the prospective customer.
		'billingaddr' => null, //The billing address for the prospective customer.
		'billing_contact_id' => null, //The billing contact ID.
		'notes' => null, //Notes about the prospective customer.
		'tb_approvalprocess' => null, //The approvalprocess_id of the invoice
		'primary_contactid' => null, //The billing contact ID.
		'filterset_ids' => null, //Comma delimited list - filter sets this object
		'active' => null, //A 1/0 field indicating whether this is designated as an
		'externalid' => null, //If the record was imported from an external system
		'invoice_prefix' => null, //Text to start every invoice number with.
		'type' => null, //A C/P field indicating whether this is Customer or a
		'userid' => null, //The user ID of the prospective customer or owner.
		'terms' => null, //Standard payment terms for the prospective customer.
		'createtime' => null, //The date the record was created.
		'invoice_text' => null, //Text to display on every invoice.
		'company' => null, //The company name.
		'updatetime' => null, //The last date the record was changed.
		'shipping_contactid' => null, //The shipping contact ID.
		'billing_code' => null, //The customer billing code. Used in bulk
		'created' => null, //Time the record was created.
		'sold_to_contactid' => null, //The sold to contact ID.
		'ta_include' => null, //A 1/0 field indicating whether a Timesheet filter
		'te_include' => null, //A 1/0 field indicating whether an Expense Report
		'updated' => null, //Time the record was last updated or modified.
    ];

    function __construct()
    {
        parent::__construct();
    }
}