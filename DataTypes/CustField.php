<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class CustField extends DataType
{

    protected $data = [
		'id' => null, //Unique ID. Automatically assigned by the system.
		'userid' => null, //The ID of user who created or owns this custom field.
		'rows' => null, //The number of display rows for text area fields
		'size' => null, //The display size of the field on forms.
		'valuelist' => null, //A list of values for radio groups and popup menu
		'required' => null, //A 1/0 field indicating if this field is required.
		'decpos' => null, //The decimal size of the field.
		'picker' => null, //The type of field for on screen representation:
		'association' => null, //The table or datatype this field is associated
		'updated' => null, //Time the record was last updated or modified.
		'seq' => null, //The sequence number of the field.
		'divider_text' => null, //Optional divider text.
		'maxlength' => null, //The maximum length of data in the field.
		'mover' => null, //A 1/0 field indicating if the selector should have mover
		'name' => null, //The name of the custom field.
		'active' => null, //A 1/0 field indicating if this alert is active.
		'next_seq' => null, //Next sequence number to use.
		'description' => null, //The description of the custom field.
		'force_unique' => null, //A 1/0 field indicating if this field is unique.
		'defnow' => null, //A 1/0 field indicating if date fields default to today.
		'created' => null, //Time the record was created.
		'hint' => null, //The hint used on forms.
		'title' => null, //The title used on forms with this custom field.
		'divider' => null, //A 1/0 field indicating whether to paint a divider.
		'never_copy' => null, //A 1/0 field indicating if the field can be cloned.
		'hidden_data_entry' => null, //A 1/0 field indicating whether the custom
    ];

    function __construct()
    {
        parent::__construct();
    }
}