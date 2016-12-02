<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Currencyrate extends DataType
{

    protected $data = [
		'crate' => null, //The account's currency conversion rate.
		'csymbol' => null, //The currency symbol.
		'cname' => null, //The name of the currency rate.
		'date' => null, //The date of the rate.
		'type' => null, //Blank for rates with date filled in, otherwise: PAST for
    ];

    function __construct()
    {
        parent::__construct();
    }
}