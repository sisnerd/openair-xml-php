<?php

namespace OpenAir\Commands;

use OpenAir\Base\Command;

class CreateUser extends Command
{
    const ERROR_INVALID_COMPANY = 201; // Create the company first, then create users
    const ERROR_DUPLICATE_USER_NICK = 202; // A user with this nickname already exists, try another one
    const ERROR_TOO_FEW_ARGUMENTS = 203; // You need to specify both a Company object and a User object
    const ERROR_NAMESPACE_ERROR = 204; // Users must be created in the same namespace as the company
    const ERROR_WORKSCHEDULE_ERROR = 205; // Invalid account workschedule specified

    public static $response = [
        self::STATUS_SUCCESS => "Success",
        self::STATUS_NOT_LOGGED_IN => "Not logged in",
        self::STATUS_TOO_MANY_ARGUMENTS => "Too many arguments",
        self::STATUS_TOO_FEW_ARGUMENTS => "Too few arguments",
        self::STATUS_UNKNOWN_COMMAND => "Unknown command",
        self::STATUS_ACCESS_FROM_INVALID_URL => "Access from invalid URL",
        self::STATUS_INVALID_OFFLINE_VERSION => "Invalid offline version",
        self::STATUS_FAILURE_DYNAMIC_MESSAGE => "Failure dynamic message",
        self::STATUS_LOGGED_OUT => "Logged out",
        self::STATUS_INVALID_PARAMETERS => "Invalid parameters",
        self::ERROR_INVALID_COMPANY => "Create the company first, then create users",
        self::ERROR_DUPLICATE_USER_NICK => "User with this nickname already exists",
        self::ERROR_TOO_FEW_ARGUMENTS => "You need to specify both a Company object and a User object",
        self::ERROR_NAMESPACE_ERROR => "Users must be created in the same namespace as the company",
        self::ERROR_WORKSCHEDULE_ERROR => "Invalid account workschedule specified",
    ];

    public function getResponseStatusMessage()
    {
        $code = $this->responseCode;

        if (isset(self::$response[$code])) {
            return self::$response[$code];
        }

        return 'Unknown';
    }
}
