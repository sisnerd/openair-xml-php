<?php

namespace OpenAir\Commands;


use OpenAir\Base\Command;

class Report extends Command
{
    protected $attributes = [
        'type' => null
    ];

    function __construct(array $aryAttributes = null)
    {
        parent::__construct($aryAttributes);
    }
}