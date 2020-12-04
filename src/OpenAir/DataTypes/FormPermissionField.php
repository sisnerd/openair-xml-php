<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class FormPermissionField extends DataType
{

    protected $data = [
        'form_name' => null, //Internal GUI form name.
        'field_name' => null, //Internal GUI field name.
        'readonly' => null, //A 1/0 field indicating whether this is to be readonly
        'required' => null, //A 1/0 field indicating whether this is to be required
        'default_value' => null, //Value to be prefilled when a new form is
        'hidden' => null, //A 1/0 field indicating whether this is to be hidden in
        'save_and_create' => null, //List of field names prefilled with previous
    ];

    function __construct()
    {
        parent::__construct();
    }
}
