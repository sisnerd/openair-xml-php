<?php

namespace OpenAir;

use OpenAir\Base\BaseCommandClass;

class Response extends OpenAir
{
    private $commands = [];

    function addCommandResponse($command, $resposne, $status){
        $this->commands[$command][] = ['status' => $status, 'response' => $resposne];
    }
}