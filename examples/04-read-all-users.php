<?php

require 'vendor/autoload.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'env.php';

use OpenAir\Commands\Auth;
use OpenAir\Commands\Read;
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

// Create a read command
// - The type is a datatype to read
// - The method tells whether we want all or just a specific one
// - Limit tells maximum how many to fetch
$readCommand = new Read(['type' => "User", 'method' => Read::METHOD_ALL, 'limit' => 10]);

// Add the command to the request object
$request->addCommand($readCommand);

// Execute the request, and an \OpenAir\Response will return
$response = $request->execute();

// Extract out the response for the Read command
$readResponses = $response->getCommandResponse('Read');

// Iterate through any responses data and print them
// Each $user is a DataTypes/User object
// Note: this leverages the __toString() method on User class
foreach ($readResponses[0]->getResponseData() as $user) {
    echo " * " . $user . "\n";
}
