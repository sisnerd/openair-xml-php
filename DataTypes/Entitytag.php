<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\BaseDataTypeClass;

class Entitytag extends BaseDataTypeClass
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'default_for_entity' => null, //A 1/0 field indicating whether this is the
		'userid' => null, //The ID of the associated user.
		'projectid' => null, //The ID of the associated project.
		'created' => null, //Time the record was created.
		'tag_group_attributeid' => null, //The ID of the associated
		'end_date' => null, //End date for this entity_tag.
		'customerid' => null, //The ID of the associated customer.
		'updated' => null, //Time the record was last updated or modified.
		'start_date' => null, //Start date for this entity_tag.
		'tag_group_attribute_name' => null, //The name of the associated tag group
		'tag_group_id' => null, //The ID of the associated tag group attribute.
    ];

    function __construct()
    {
        parent::__construct();
    }
}