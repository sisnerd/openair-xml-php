<?php

require 'vendor/autoload.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'env.php';

use OpenAir\Commands\Time;
use OpenAir\Request;

// Let's start a new Open Air request
$request = new Request(OA_NAMESPACE, OA_KEY);

// Turn debug on to see the communication between the 2 servers
$request->setDebug(true);

// Set the company id in the URL and turn sandbox mode on
$request->setUrl(OA_COMPANY_ID, true);

// Add time command to request
$request->addCommand(new Time());

// Execute the request, and an \OpenAir\Response will return
$response = $request->execute();

$data = $response->getCommandResponse('Time');

$time = $data[0]->getResponseData()[0];

echo "Current server time is: " . $time . "\n";
