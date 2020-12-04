<?php

require 'vendor/autoload.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'env.php';

use OpenAir\Commands\Auth;
use OpenAir\Commands\Read;
use OpenAir\DataTypes\Login;
use OpenAir\DataTypes\User;
use OpenAir\Request;

// Let's start a new Open Air request
$request = new Request(OA_NAMESPACE, OA_KEY);

// Turn debug on to see the communication between the 2 servers
//$request->setDebug(true);

// Set the company id in the URL and turn sandbox mode on
$request->setUrl(OA_COMPANY_ID, true);

// Let's login
$request->addAuthCommand(new Auth(new Login(OA_COMPANY_ID, OA_USERNAME, OA_PASSWORD)));

// Create a read command
// - The type is a datatype to read
// - The method tells whether we want all or just a specific one
// - Limit tells maximum how many to fetch
$readCommand = new Read(['type' => "User", 'method' => Read::METHOD_EQUAL_TO, 'limit' => 2]);

// Next create a new user datatype
// We will use this to specify what id to match in our lookup
$user = new User();
// Set the user id to lookup
$user->id = 1014;
// and add the user to the read command
$readCommand->addDataType($user);

// Add the command to the request object
$request->addCommand($readCommand);

// Execute the request, and an \OpenAir\Response will return
$response = $request->execute();

// Extract the response for the auth command to check if the auth was
// successful before we do anything else
$auth = $response->getCommandResponse('Auth');
if (!$auth) {
    echo "Auth failed. Unknown error.\n";
    exit(1);
}

if (!$auth->isSuccess()) {
    echo "Auth failed. Error: " . $auth->getResponseStatus() . ' ' . $auth->getResponseStatusMessage() . "\n";
    exit(1);
}

$readResponse = $response->getCommandResponse('Read')[0];
// Check if success or whether just no results code
if (!$readResponse->isSuccess() && $readResponse->getResponseStatus() != Read::ERROR_ID_CODE_INVALID) {
    echo "Read failed. Error: " . $readResponse->getResponseStatus() . ' ' . $readResponse->getResponseStatusMessage() . "\n";
    exit(1);
}

// Extract out the response for the Read command
$items = $response->getCommandResponse('Read')[0]->getResponseData();

print count($items) . " result(s).\n";
print "--------\n";

// Iterate through any response data and print them
foreach ($items as $i => $item) {
    print ($i + 1) . ". " . $item . "\n";
}
