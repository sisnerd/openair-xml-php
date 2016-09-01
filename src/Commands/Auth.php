<?php

namespace OpenAir\Commands;

use OpenAir\Base\Command;

class Auth extends Command
{
    private $login_object;

    function __construct(\OpenAir\DataTypes\Login $loginObject = null)
    {
        $this->login_object = $loginObject;
        parent::__construct();
    }

    function _buildRequest(\DOMDocument $dom){
        $authCommandObj = parent::_buildRequest($dom); //creates <Auth>
        $loginNode = $this->login_object->_buildRequest($dom); // creates <Login> and data
        $authCommandObj->appendChild($loginNode); //this appends <Login> to <Auth> resulting in <Auth><Login></Login></Auth>
        return $authCommandObj;
    }
}