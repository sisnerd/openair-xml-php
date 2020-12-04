<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Flag extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'name' => null, //The name of the switch.
        'setting' => null, //The value to which the switch is set.
    ];

    public function __construct($name = null, $setting = null)
    {
        parent::__construct();

        if (!is_null($name)) {
            $this->data['name'] = $name;
        }

        if (!is_null($setting)) {
            $this->data['setting'] = $setting;
        }
    }
}
