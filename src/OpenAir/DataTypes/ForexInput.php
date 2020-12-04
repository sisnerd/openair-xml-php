<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class ForexInput extends DataType
{
    protected $data = [
        'symbol' => null, //Currency symbol. Must be for one of the multiple
        'startdate' => null, //Optional start date for currency being set.
        'enddate' => null, //Optional end date for currency being set.
        'rate' => null, //Rate against the base currency for the account.
        'future' => null, //1 - if this is for future overrides. If used, start and
        'past' => null, //1 - if this is for past overrides. If used, start and end
        'base' => null, //The currency symbol used as a base currency for the
        'created' => null, //Date the record was created.
        'updated' => null, //Date the record was last modified.
    ];
}
