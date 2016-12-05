<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

class Date extends DataType
{

    protected $data = [
		'year' => null, //Year.
		'month' => null, //Month.
		'day' => null, //Day.
		'hour' => null, //Hour.
		'minute' => null, //Minute.
		'second' => null, //Second.
    ];

    function __construct($hour=null, $minute=null, $second=null, $month=null, $day=null,$year=null)
    {
        parent::__construct();
        $ary = ['hour' => 'H', 'minute' => 'i', 'second' => 's', 'month' => 'n', 'day' => 'j', 'year' => 'Y'];
        foreach($ary as $var => $dateStr){
            if(!is_null($$var) && $$var > 0){
                $this->data[$var] = $$var;
            }
        }
    }
}