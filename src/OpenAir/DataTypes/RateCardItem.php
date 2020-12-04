<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class RateCardItem extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'rate_card_id' => null, //The ID of the rate card that it is associated
        'job_code_id' => null, //The ID of the associated job code.
        'currency' => null, //Currency for the money fields in the record.
        'updated' => null, //Time the record was last updated or modified.
        'rate' => null, //The hourly billing rate.
        'start' => null, //Start date of the rate for historical records.
        'end' => null, //End date of the rate for historical records.
        'current' => null, //A 1/0 field indicating if the record is the current
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
