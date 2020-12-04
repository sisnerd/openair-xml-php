<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Paymentterms extends DataType
{
    protected $data = [
        'id' => null, //Unique ID. Automatically assigned by the system.
        'created' => null, //Time the record was created.
        'default_terms' => null, //A 1/0 field indicating whether this is the
        'name' => null, //The payment terms name.
        'notes' => null, //Notes associated with the payment terms.
        'updated' => null, //Time the record was last updated or modified.
        'active' => null, //A 1/0 field indicating where this is designated as an
        'default_status' => null, //Default receipt status, e.g. R =>
        'default_payment_type' => null, //A "1/0" field indicating whether this is
    ];
}
