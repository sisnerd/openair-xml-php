<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Company extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'addr' => null, //The company's address.
        'VAT_registration_number' => null, //VAT registration number.
        'hide_rate' => null, //Hide hourly rate from normal user types in the
        'updated' => null, //Time the record was last updated or modified.
        'company' => null, //The company name, as it should be printed on invoices.
        'nickname' => null, //The company nickname.
        'is_multicurrency' => null, //Multiple currencies.
        'currencies' => null, //The currencies for the money fields in the record.
        'businesstype' => null, //General business category.
        'created' => null, //The time the record was created.
        'base_currency' => null, //Base currency.
        'rate_from' => null, //Billing rate is pulled from: category, user,
        'workscheduleid' => null, //The ID of the associated primary account
        'flags' => null, //Company-specific flags.
    ];

    public function __toString()
    {
        return sprintf("Company %s %s", $this->id, $this->company);
    }
}
