<?php

namespace OpenAir\Commands;


use OpenAir\Base\Command;

class Submit extends Command
{

    const ERROR_CODE_INVALID_STATE = 1001;
    const ERROR_CODE_ERROR = 1002;
    const ERROR_CODE_WARNING = 1003;

    protected $attributes = [
        'type' => null,
        'submit_warning' => null
    ];

    function __construct(array $aryAttributes = null)
    {
        parent::__construct($aryAttributes);
    }

    public function getResponseData(){
        if(!is_null($this->responseCode)){
            return $this->datatypes[0];
        }
        return null;
    }
}