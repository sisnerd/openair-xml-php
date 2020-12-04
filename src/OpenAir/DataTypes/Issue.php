<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Issue extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'number' => null, //The issue number that increments by 1.
        'prefix' => null, //A static alphanumeric issue number prefix.
        'name' => null, //The name of the issue (Prefix + number).
        'owner_id' => null, //The ID of the associated user creating the issue.
        'description' => null, //A short description of the issue, a synopsis.
        'customer_id' => null, //The ID of the associated customer.
        'project_id' => null, //The ID of the associated project.
        'project_task_id' => null, //The ID of the task within the associated
        'issue_category_id' => null, //The ID of the associated issue category.
        'issue_status_id' => null, //The ID of the associated issue status.
        'issue_stage_id' => null, //The ID of the associated issue stage.
        'issue_severity_id' => null, //The ID of the associated issue severity.
        'issue_source_id' => null, //The ID of the associated issue source.
        'issue_notes' => null, //The description of the issue.
        'resolution_notes' => null, //The description of the resolution.
        'date' => null, //The date of the issue.
        'date_resolution_required' => null, //The date the issue must be resolved.
        'date_resolution_expected' => null, //The date the issue is expected to be
        'date_resolved' => null, //The date the issue was resolved.
        'user_id' => null, //The ID of the user assigned to the issue.
        'priority' => null, //The priority of the task (1 - 100).
        'attachment_id' => null, //If non-zero, the attachment record associated
        'updated' => null, //Time the record was updated.
        'submitted' => null, //Date the invoice was submitted.
        'approved' => null, //Date the invoice was approved.
    ];

    public function __toString()
    {
        return sprintf("Issue #%s %s, %s", $this->number, $this->name, $this->description);
    }
}
