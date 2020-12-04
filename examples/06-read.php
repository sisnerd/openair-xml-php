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
// Below are commented out a lot of other things you can fetch too to try out
// the read command
$readCommand = new Read(['type' => "Category", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Company", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Customer", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Department", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Filterset", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Fulfillment", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Issue", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Item", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Jobcode", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Module", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Notes", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Preference", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Product", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Project", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Projecttask", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Ratecard", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "RateCardItem", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Repeat", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Report", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Role", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Term", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "Timetype", 'method' => Read::METHOD_ALL, 'limit' => 10]);
//$readCommand = new Read(['type' => "User", 'method' => Read::METHOD_ALL, 'limit' => 10]);

// Add the command to the request object
$request->addCommand($readCommand);

// Execute the request, and an \OpenAir\Response will return
$response = $request->execute();

// Extract out the response for the Read command
$items = $response->getCommandResponse('Read')[0]->getResponseData();

print count($items) . " result(s).\n";
print "--------\n";

// Iterate through any response data and print them
foreach ($items as $i => $item) {
    print ($i + 1) . ". " . $item . "\n";
}
