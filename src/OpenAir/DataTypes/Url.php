<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Url extends DataType
{

    protected $data = [
        'url' => null
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
