<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class User extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'updated' => null, //Time the record was last updated or modified.
        'project_access_nodes' => null, //Comma delimited list of hierarchy node
        'addr' => null, //The user's address.
        'po_approver' => null, //The user_id of the purchase order approver if
        'rate' => null, //The hourly billing rate
        'br_approvalprocess' => null, //The approvalprocess_id of the
        'password' => null, //The user's password.
        'te_approver' => null, //The user_ID of the expense report approver if
        'sr_approver' => null, //The user ID of the schedule request approver if
        'departmentid' => null, //The ID of the associated department.
        'tb_filter_set' => null, //The ID of the optional filter set for the
        'name' => null, //The name used for display in lists. This is
        'hierarchy_node_ids' => null, //The IDs of the associated hierarchy nodes.
        'po_approvalprocess' => null, //The approvalprocess_id of the purchase
        'rm_filter_set' => null, //The ID of the optional filter set for the
        'hint' => null, //Password hint.
        'dr_approver' => null, //The user ID of the deal booking request approver
        'br_approver' => null, //The user ID of the booking request approver if
        'az_approvalprocess' => null, //The approvalprocess_id of the expense
        'pm_filter_set' => null, //The ID of the optional filter set for the
        'currency' => null, //The currency for money fields.
        'cost_centerid' => null, //The ID of the associated cost center.
        'locked' => null, //A 1/0 field indicating if this user is locked.
        'filterset_stamp' => null, //A unique string which changes when the
        'job_codeid' => null, //The ID of the current job code this user belongs
        'payroll_code' => null, //The payroll code for this user.
        'report_filter_set' => null, //The ID of the optional filter set for
        'km_filter_set' => null, //The ID of the optional filter set for the
        'az_approver' => null, //The user ID of the expense authorization approver
        'role_id' => null, //The ID of the associated role.
        'dr_approvalprocess' => null, //The approvalprocess_id of the
        'te_approvalprocess' => null, //The approvalprocess_id of the expense
        'ta_approvalprocess' => null, //The approvalprocess_id of the timesheet
        'filterset_ids' => null, //A comma separated list of filter set IDs this
        'active' => null, //A 1/0 field indicating where this is designated as an
        'externalid' => null, //If the record was imported from an external
        'ta_approver' => null, //The user ID of the timesheet approver if this is a
        'generic' => null, //A 1/0 field indicating whether this is a generic
        'pr_approver' => null, //The user ID of the purchase request approver if
        'pb_approvalprocess' => null, //The approvalprocess_id of the proposals
        'type' => null, //Legacy field.
        'workscheduleid' => null, //The ID of the associated user workschedule.
        'po_filter_set' => null, //The ID of the optional filter set for the
        'primary_filter_set' => null, //The ID of the primary filter set for this
        'user_locationid' => null, //The location ID for this user.
        'account_workscheduleid' => null, //The ID of the associated user account
        'om_filter_set' => null, //The ID of the optional filter set for the
        'ssn' => null, //The users's social security number.
        'acct_code' => null, //Optional accounting system code for integration
        'ma_filter_set' => null, //The ID of the optional filter set for the My
        'te_filter_set' => null, //The ID of the optional filter set for the
        'sr_approvalprocess' => null, //The approvalprocess_id of the
        'nickname' => null, //The users nickname. This must be unique.
        'pb_approver' => null, //The user ID of the booking request approver if
        'logintime' => null, //The date and time of the user's last login.
        'pr_approvalprocess' => null, //The approvalprocess_id of the purchase
        'line_managerid' => null, //The ID of this user's line manager (will
        'week_starts' => null, //The day the week starts for this user: 0 - Monday
        'ta_filter_set' => null, //The ID of the optional filter set for the
        'flags' => null, //A collection of Switch values.
        'update_workschedule' => null, //A 1/0 field indicating an update to the
        'is_user_schedule' => null, //A 1/0 field indicating whether the user
        'workschedule_workdays' => null, //A CSV list of workdays, with each value
        'workschedule_workhours' => null, //A CSV list of values for the user's
        'update_tag' => null, //Set this field to 1 to enable automatic updating of
        'tag_start_date' => null, //Start date for the new tag. If left blank, the
        'tag_end_date' => null, //End date for the new tag. If left blank, the end
        'tag_group_id' => null, //The ID of the tag group for the new tag.
        'tag_group_attribute_id' => null, //The ID of the tag group attribute that
        'update_cost' => null, //Set this field to 1 to enable automatic updating
        'cost_start_date' => null, //Start date for the new loaded cost. If blank,
        'cost_end_date' => null, //End date for the new loaded cost. If left blank,
        'cost' => null, //New cost value.
        'cost_currency' => null, //Currency of the cost.
        'cost_lc_level' => null, //If multiple loaded cost levels are enabled, use
        'timezone' => null, //The user's timezone.
        'book_assign_stamp' => null, //Internal hash key.
        'code' => null, //The acct_code.
        'external_id' => null, //The unique external record ID if the record was
        'password_forced_change' => null, //A 1/0 field indicating whether the
        'ta_approver_externalid' => null, //Import-only field.
        'user_location_externalid' => null, //Import-only field.
        'job_code_externalid' => null, //Import-only field.
        'role_externalid' => null, //Import-only field.
        'pm_filter_set_externalid' => null, //Import-only field.
        'tb_filter_set_externalid' => null, //Import-only field.
        'pr_approver_externalid' => null, //Import-only field.
        'po_approver_externalid' => null, //Import-only field.
        'cost_center_externalid' => null, //Import-only field.
        'rm_filter_set_externalid' => null, //Import-only field.
        'sr_approver_externalid' => null, //Import-only field.
        'te_approver_externalid' => null, //Import-only field.
        'om_filter_set_externalid' => null, //Import-only field.
        'pb_approver_externalid' => null, //Import-only field.
        'ma_filter_set_externalid' => null, //Import-only field.
        'km_filter_set_externalid' => null, //Import-only field.
        'line_manager_externalid' => null, //Import-only field.
        'report_filter_set_externalid' => null, //Import-only field.
        'dr_approver_externalid' => null, //Import-only field.
        'ta_filter_set_externalid' => null, //Import-only field.
        'account_workschedule_externalid' => null, //Import-only field.
        'po_filter_set_externalid' => null, //Import-only field.
        'te_filter_set_externalid' => null, //Import-only field.
        'br_approver_externalid' => null, //Import-only field.
        'primary_filter_set_externalid' => null, //Import-only field.
        'az_approver_externalid' => null, //Import-only field.
        'department_externalid' => null, //Import-only field.
        'rm_approver' => null, //The user_id of the booking approver if this is a
        'rm_approvalprocess' => null, //The approvalprocess_id of the booking
        'picklist_label' => null, //Label as shown on form picklist.
    ];

    function __construct($data = [])
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
