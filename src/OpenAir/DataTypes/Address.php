<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Address extends DataType
{

    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'salutation' => null, //Contact's salutation
        'mobile' => null, //Mobile phone number
        'state' => null, //State
        'email' => null, //Email address
        'addr2' => null, //Address line 2
        'city' => null, //City
        'fax' => null, //Fax number
        'contact_id' => null, //The ID of the associated contact.
        'addr1' => null, //Address line 1
        'middle' => null, //Middle name
        'country' => null, //Country
        'first' => null, //First name
        'last' => null, //Last name
        'phone' => null, //Phone number
        'addr4' => null, //Address line 4
        'zip' => null, //Zip code
        'addr3' => null, //Address line 3
    ];

    function __construct(array $data = [])
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
