<?php 

require('autoloader.php');

use OpenAir\Commands\Auth;
use OpenAir\Commands\Read;
use OpenAir\Commands\Whoami;
use OpenAir\Base\Command;
use OpenAir\DataTypes\Date;
use OpenAir\DataTypes\Login;
use OpenAir\Commands\Time;
use OpenAir\DataTypes\Project;
use OpenAir\DataTypes\User;
use OpenAir\Request;

// let's start a new Open Air request
$objRequest = new Request('<oa privided namespace>', '<OA priovided key>');

// turn debug on to see the communication between the 2 servers
//$objRequest->setDebug(true);

// let's login
$objRequest->addCommand(new Auth(new Login('<company name>', '<user name>', '<password>')));

// call whoami in the request
//$objRequest->addCommand(new Whoami());

// let's build a read request of users equal to 304
// first create a new read command
$objReadCommand = new Read(['type' => "User",'method' => Read::METHOD_EQUAL_TO ,'limit' => 2]);

// Next create a new user datatype
$objUser = new User();
// set the id equal to 304
$objUser->id = 301;
// and add the user to the read command
$objReadCommand->addDataType($objUser);

//add the read command to the read request
$objRequest->addCommand($objReadCommand);

// execute the request, and an \OpenAir\Response will return
$objResponse = $objRequest->execute();
// if the request failed, then the http code from the server will be returned.
// let's be sure that this is an object we got back
if($objResponse instanceof \OpenAir\Response){
	// let's get the auth response from the command
	$objAuthResponse = $objResponse->getCommandResponse('Auth');

	// let's also be sure that the command was successful
	if($objAuthResponse->getResponseStatus() == Command::STATUS_SUCCESS){
	    // our command was successful.  Let's make sure that our read user command was successful 
	    // before we start interacting with the object.
	    $objReadResponse = $objResponse->getCommandResponse('Read');
	    if($objReadResponse->getResponseStatus() == Command::STATUS_SUCCESS){
	    	// our read of student 304 was successful
	    	$aryResponseData = $objReadResponse->getDataTypes();
	    	echo $aryResponseData[0]->name;
	    }else{
	    	// there was an error with the command we sent
	    	echo "Read command error: ".$objReadResponse->getResponseStatus();
	    }
	}else{
		echo "Auth Failure.  OA code: ".$objAuthResponse->getResponseStatus();
	}
}
