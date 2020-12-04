<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Project extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'user_filter' => null, //Also allow these users to edit the project if the
        'message' => null, //Dashboard message.
        'auto_bill' => null, //A 1/0 field, 1 if the project can be auto-billed.
        'az_approver' => null, //The user_id of the project expense authorization
        'po_approver' => null, //The user_id of the project purchase order
        'auto_bill_cap' => null, //A 1/0 field, 1 if the project should have a cap
        'invoice_layoutid' => null, //The ID of the associated invoice layout.
        'category_filter' => null, //A category (service) filter. This will hold a
        'rate' => null, //The hourly billing rate.
        'notify_assignees' => null, //A 1/0 field indicating whether to send email
        'sync_workpace' => null, //A 1/0 field indicating whether to keep project
        'notify_owner' => null, //A 1/0 field indicating whether to send email to
        'br_approvalprocess' => null, //The approvalprocess_id of the project
        'te_approver' => null, //The user_id of the project expense report
        'ta_approvalprocess' => null, //The approvalprocess_id of the project
        'te_approvalprocess' => null, //The approvalprocess_id of the project
        'auto_bill_cap_value' => null, //The auto-billings cap amount (in the
        'updated' => null, //Time the record was last updated or modified.
        'code' => null, //Optional system code for integration with external
        'tb_approver' => null, //The user_id of the project invoice approver if
        'timetype_filter' => null, //A timetype filter. This will hold a list of
        'tax_location_name' => null, //Name of the tax location.
        'active' => null, //A 1/0 field indicating an active project.
        'name' => null, //The project name. This shows upon all the project pop-up
        'hierarchy_node_ids' => null, //The ID of the hierarchy node for this
        'externalid' => null, //If the record was imported from an external
        'po_approvalprocess' => null, //The approvalprocess_id of the project
        'project_stageid' => null, //The ID of the project stage.
        'tax_locationid' => null, //The ID of the associated tax location.
        'ta_approver' => null, //The user_id of the project timesheet approver if
        'pr_approver' => null, //The user_id of the project purchase request
        'locationid' => null, //The location ID for this project (DEPRECATED).
        'finish_date' => null, //The calculated finish date of the project.
        'msp_link_type' => null, //If imported from Microsoft project, this field
        'customerid' => null, //The ID of the associated customer.
        'customer_name' => null, //The customer's name.
        'only_owner_can_edit' => null, //A 1/0 field indicating whether only the
        'br_approver' => null, //The user_id of the project booking request
        'userid' => null, //The user ID of the project owner.
        'az_approvalprocess' => null, //The approvalprocess_id of the project
        'project_locationid' => null, //The location ID for this project.
        'budget' => null, //The budgeted revenue for the project.
        'currency' => null, //Currency for the money fields in the record.
        'cost_centerid' => null, //The ID of the associated cost center.
        'sga_labor' => null, //The allocated cost (SG and A) overhead percentage
        'invoice_text' => null, //Text to display on every invoice.
        'budget_time' => null, //The budgeted amount of time for the project, in
        'start_date' => null, //The scheduled starting date of the project.
        'pr_approvalprocess' => null, //The approvalprocess_id of the project
        'billing_contactid' => null, //The billing contact ID if different than
        'billing_code' => null, //The project billing code. Used in bulk
        'created' => null, //Time the record was created.
        'no_dirty' => null, //A 1/0 field, 1 if we want this project to be marked
        'notes' => null, //Notes associated with this project.
        'create_workspace' => null, //A 1/0 field, 1 if an associated workspace is
        'tb_approvalprocess' => null, //The approvalprocess_id of the project
        'auto_bill_override' => null, //A 1/0 field, 1 if the project overrides
        'template_project_id' => null, //ID of the project from which tasks and
        'copy_revenue_recognition_rules' => null, //Duplicates revenue recognition
        'copy_revenue_recognition_auto_settings' => null, //Duplicates revenue
        'copy_project_billing_rules' => null, //Duplicates project billing rules.
        'copy_project_billing_auto_settings' => null, //Duplicates project autobill
        'copy_project_pricing' => null, //Duplicates project pricing information.
        'copy_custom_fields' => null, //Duplicates custom fields.
        'copy_loaded_cost' => null, //Duplicates project pricing information.
        'copy_approvers' => null, //Duplicates project approvers.
        'copy_issues' => null, //Duplicates issues.
        'copy_notification_settings' => null, //Duplicates notification settings.
        'copy_dashboard_settings' => null, //Duplicates dashboard settings.
        'copy_invoice_layout_settings' => null, //Duplicates invoice layout
        'pm_approver_1' => null, //The user_id of the project approver 1 that is
        'pm_approver_2' => null, //The user_id of the project approver 2 that is
        'pm_approver_3' => null, //The user_id of the project approver 3 that is
        'payroll_type_filter' => null, //A payroll type filter. This holds a list
        'shipping_contact_id' => null, //The shipping contact ID if different than
        'sold_to_contact_id' => null, //The sold to contact ID if different than
        'filterset_ids' => null, //A comma separated list of filter set IDs this
        'attachmentid' => null, //If non-zero, the attachment record associated
        'rv_approver' => null, //The user_id of the project revenue_container
        'rv_approvalprocess' => null, //The approvalprocess_id of the project
        'portfolio_projectid' => null, //The ID of the associated portfolio
        'is_portfolio_project' => null, //A 1/0 field - 1 if the project is a
        'copy_revenuerecognition_auto_settings' => null, //Duplicate of
        'filtersetids' => null, //A comma separated list of filter set IDs this
        'notify_issue_assigned_to' => null, //A 1/0 field indicating whether to
        'notify_issue_closed_assigned_to' => null, //A 1/0 field indicating
        'notify_issue_closed_customer_owner' => null, //A 1/0 field indicating
        'notify_issue_closed_project_owner' => null, //A 1/0 field indicating
        'notify_issue_created_customer_owner' => null, //A 1/0 field indicating
        'notify_issue_created_project_owner' => null, //A 1/0 field indicating
        'notify_sr_submitted_project_owner' => null, //A 1/0 field indicating
        'ta_include' => null, //A 1/0 field indicating whether a Timesheet
        'te_include' => null, //A 1/0 field indicating whether an Expense Report
        'rm_approver' => null, //The user_id of the project booking approver if
        'rm_approvalprocess' => null, //The approvalprocess_id of the project
        'rate_cardid' => null, //The ID of the associated rate card if using rate
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
