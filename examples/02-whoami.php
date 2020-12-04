<?php

require 'vendor/autoload.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'env.php';

use OpenAir\Commands\Auth;
use OpenAir\Commands\Whoami;
use OpenAir\DataTypes\Login;
use OpenAir\Request;

// Let's start a new Open Air request
$objRequest = new Request(OA_NAMESPACE, OA_KEY);

// Turn debug on to see the communication between the 2 servers
$objRequest->setDebug(true);

// Set the company id in the URL and turn sandbox mode on
$objRequest->setUrl(OA_COMPANY_ID, true);

// Let's login
$objRequest->addAuthCommand(new Auth(new Login(OA_COMPANY_ID, OA_USERNAME, OA_PASSWORD)));

$objRequest->addCommand(new Whoami());

// Execute the request, and an \OpenAir\Response will return
$objResponse = $objRequest->execute();

$data = $objResponse->getCommandResponse('Whoami');
$users = $data->getResponseData();

echo "User:\n";
echo "      Id: " . $users[0]->id . "\n";
echo "    Name: " . $users[0]->name . "\n";
echo "   Email: " . $users[0]->addr->email . "\n";
echo "  Active: " . $users[0]->active . "\n";
