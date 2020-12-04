<?php

namespace OpenAir\Commands;

use OpenAir\Base\Command;
use OpenAir\DataTypes\Login;

class Auth extends Command
{
    private $login_object;
    public static $response = [
        "401" => "Auth failed : No such company/user/pass",
        "402" => "Old TB login Internal TB error",
        "403" => "No Company name supplied",
        "404" => "No User name supplied",
        "405" => "No User Password supplied",
        "406" => "Invalid Company name",
        "408" => "Bad Password",
        "409" => "Account Canceled ",
        "410" => "Inactive user ",
        "411" => "Account conflict, contact customer service",
        "412" => "Wrong namespace for account ",
        "413" => "Account not privileged to access API",
        "414" => "Temporarily unavailable",
        "415" => "Account archived",
        "416" => "User locked",
        "417" => "Restricted IP address",
        "418" => "Invalid uid session ",
        "419" => "Authentication failed, please retry ",
        "420" => "Authentication failed ",
        "421" => "Account misconfiguration or invalid assertion",
        "422" => "LDAP server unavailable ",
        "423" => "No permissions to read ServerStatus data"
    ];

    function __construct(\OpenAir\DataTypes\Login $loginObject = null)
    {
        $this->login_object = $loginObject;
        parent::__construct();
    }

    function _buildRequest(\DOMDocument $dom){
        //creates <Auth>
        $authCommandObj = parent::_buildRequest($dom);

        if (!$this->login_object) {
            $this->login_object = new Login();
        }

        // creates <Login> and data
        $loginNode = $this->login_object->_buildRequest($dom);
        //this appends <Login> to <Auth> resulting in <Auth><Login></Login></Auth>
        $authCommandObj->appendChild($loginNode);

        return $authCommandObj;
    }
}
