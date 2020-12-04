<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class ProjectAssignmentProfile extends DataType
{
    protected $data = [
        'id' => null, //Unique project_assignment_profile id. Automatically
        'created' => null, //Time the record was created
        'user_filter' => null, //A user filter list. The
        'customerid' => null, //The ID of the associated customer
        'name' => null, //The project_assignment_profile name.
        'updated' => null, //Time the record was last updated or modified
        'projectid' => null, //Id of the project to which this
    ];
}
