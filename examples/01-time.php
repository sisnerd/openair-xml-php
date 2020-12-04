<?php

require 'vendor/autoload.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'env.php';

use OpenAir\Commands\Time;
use OpenAir\Request;

// Let's start a new Open Air request
$objRequest = new Request(OA_NAMESPACE, OA_KEY);

// Turn debug on to see the communication between the 2 servers
$objRequest->setDebug(true);

// Set the company id in the URL and turn sandbox mode on
$objRequest->setUrl(OA_COMPANY_ID, true);

// Add time command to request
$objRequest->addCommand(new Time());

// Execute the request, and an \OpenAir\Response will return
$objResponse = $objRequest->execute();
