<?php

namespace OpenAir\Commands;


use OpenAir\Base\Command;

class Delete extends Command
{

    const ERROR_CANNOT_DELETE = 701; // FAILED DEPENDENCY CHECK
    const ERROR_INVALID_NOTE = 702;

    function __construct()
    {
        parent::__construct();
    }
}