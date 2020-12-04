<?php

require 'vendor/autoload.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'env.php';

use OpenAir\Commands\Auth;
use OpenAir\Commands\MakeURL;
use OpenAir\DataTypes\Login;
use OpenAir\Request;

// Let's start a new Open Air request
$request = new Request(OA_NAMESPACE, OA_KEY);

// Turn debug on to see the communication between the 2 servers
//$request->setDebug(true);

// Set the company id in the URL and turn sandbox mode on
$request->setUrl(OA_COMPANY_ID, true);

// Let's login
$request->addAuthCommand(new Auth(new Login(OA_COMPANY_ID, OA_USERNAME, OA_PASSWORD)));

echo "Generating URL for uid 1 on the pm app\n";

$request->addCommand(new MakeURL([
    'uid' => '1',
    'page' => 'default-url',
    'app' => 'pm',
]));

// Execute the request, and an \OpenAir\Response will return
$response = $request->execute();

$data = $response->getCommandResponse('MakeURL');
$urls = $data->getResponseData();

echo "URL: " . $urls[0]->url . "\n";
