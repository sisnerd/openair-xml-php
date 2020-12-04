<?php

namespace OpenAir\Commands;

use OpenAir\Base\Command;

class MakeURL extends Command
{
    protected $attributes = [
        'uid' => null,
        'page' => null,
        'app' => null,
        'arg' => null,
    ];

    public function _buildRequest(\DOMDocument $dom)
    {
        $makeUrlCommandObj = $dom->createElement("MakeURL");
        foreach (array_keys($this->attributes) as $key) {
            if (!is_null($this->attributes[$key])) {
                $makeUrlCommandObj->appendChild(
                    $dom->createElement($key, $this->attributes[$key])
                );
            }
        }
        return $makeUrlCommandObj;
    }
}
