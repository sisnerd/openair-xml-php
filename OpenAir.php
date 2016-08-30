<?php

namespace OpenAir;

class OpenAir
{
    function __get($name){
        if(isset($this->data)){
            if (array_key_exists($name, $this->data)) {
                return $this->data[$name];
            }
        }
    }

    function __set($name, $value){
        if(isset($this->data)){
            if (array_key_exists($name, $this->data)) {
                $this->data[$name] = $value;
                return true;
            }else{
                return false;
            }
        }
    }
}