<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Timesheet extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'created' => null, //Time the record was created.
		'updated' => null, //Time the record was last updated or modified.
		'userid' => null, //The ID of the associated user.
		'status' => null, //The status of the timesheet: O - Open, S - Submitted, A
		'default_payrolltypeid' => null, //The default payroll type ID this
		'default_timetypeid' => null, //The default time type ID this timesheet is
		'name' => null, //The name of the timesheet.
		'default_customerid' => null, //The default customer ID this timesheet is
		'submitted' => null, //The date the timesheet was submitted.
		'total' => null, //The total number of hours in the timesheet.
		'default_categoryid' => null, //The default category ID this timesheet is
		'ends' => null, //The ending date of the timesheet.
		'starts' => null, //The starting date of the timesheet.
		'approved' => null, //The date the timesheet was approved.
		'notes' => null, //Notes related to this timesheet.
		'default_projectid' => null, //The default project ID this timesheet is
		'acct_date' => null, //The accounting period date of the task.
		'thin_client_id' => null, //Used by thin clients to reconcile imported
		'history' => null, //History of events that occurred to the TimeSheet.
		'approved_by' => null, //Empty value kept for backwards compatibility.
		'duration' => null, //The duration of the timesheet:
		'default_projecttaskid' => null, //The default task id this timesheet is
		'default_per_row' => null, //Holds a data structure of per row defaults.
		'warnings' => null, //Holds warnings from submission attempts.
		'errors' => null, //Holds errors from submission attempts.
        'sundial_contractor_id__c' => null
    ];
}