<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Customer extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'addr' => null, //The customer's address.
        'invoice_layoutid' => null, //The ID of the associated invoice layout.
        'rate' => null, //Hourly billing rate for this customer.
        'bus_typeid' => null, //Type of business this customer is in.
        'code' => null, //Optional user-defined code.
        'name' => null, //The nickname used for display in popups and lists.
        'tb_approver' => null, //The user_id of the invoice approver if this is a
        'territoryid' => null, //The territory for this customer.
        'hierarchy_node_ids' => null, //Comma delimited list - hierarchy nodes
        'hear_aboutid' => null, //How did they hear about us.
        'statements' => null, //A 1/0 field indicating if this customer can view
        'company_sizeid' => null, //This customer's company size.
        'web' => null, //Customer's Web address.
        'currency' => null, //Currency for the money fields in the record. Also the
        'cost_centerid' => null, //The ID of the associated cost center.
        'contactaddr' => null, //The contact address for the customer.
        'billingaddr' => null, //The billing address for the customer.
        'billing_contact_id' => null, //The billing contact ID.
        'notes' => null, //Notes about the customer.
        'tb_approvalprocess' => null, //The approvalprocess_id of the invoice
        'primary_contactid' => null, //The billing contact ID.
        'filterset_ids' => null, //Comma delimited list - filter sets this object
        'active' => null, //A 1/0 field indicating whether this is designated as an
        'externalid' => null, //If the record was imported from an external system
        'invoice_prefix' => null, //Text to start every invoice number with.
        'type' => null, //A C/P field indicating whether this is Customer or a
        'userid' => null, //The user ID of the customer or owner.
        'terms' => null, //Standard payment terms for the customer. Textual
        'created' => null, //Time the record was created.
        'invoice_text' => null, //Text to display on every invoice.
        'company' => null, //The company name.
        'updated' => null, //Time the record was last updated or modified.
        'shipping_contactid' => null, //The shipping contact ID.
        'sold_to_contact_id' => null, //The sold to contact ID.
        'billing_code' => null, //The customer billing code. Used in bulk
        'createtime' => null, //Same as the created field (for legacy systems).
        'ta_include' => null, //A 1/0 field indicating whether a Timesheet filter
        'te_include' => null, //A 1/0 field indicating whether an Expense Report
        'updatetime' => null, //Same as the updated field (for legacy systems).
        'picklist_label' => null, //Label as shown on form picklist.
    ];

    public function __construct($data = [])
    {
        if (count($data) > 0) {
            foreach ($data as $key => $val) {
                if (array_key_exists($key, $this->data)) {
                    $this->data[$key] = $val;
                }
            }
        }
        parent::__construct();
    }
}
