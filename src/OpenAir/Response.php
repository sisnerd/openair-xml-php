<?php

namespace OpenAir;

use OpenAir\DataTypes\Address;
use OpenAir\DataTypes\Flag;
use OpenAir\DataTypes\Url;

class Response extends OpenAir
{
    private $commands = [];
    private $strResponse;

    function __construct($strXMLResponse)
    {
        $this->strResponse = $strXMLResponse;
        $objXML = new \SimpleXMLElement($strXMLResponse);
        foreach($objXML as $strOrigCommand => $aryDataTypes){
            $strCommand = '\\OpenAir\\Commands\\'.$strOrigCommand;
            if(class_exists($strCommand)){
                $objCommand = new $strCommand();
            }else{
                $objCommand = new \stdClass();
            }
            $intResponseCode = (int)$aryDataTypes[0]->attributes()['status'][0];
            //$objCommand->setResponseStatus((int)$aryDataTypes[0]->attributes()['status'][0]);
            $objCommand->responseCode = $intResponseCode;
            if($strOrigCommand == "MakeURL"){
                $objDataType = new Url();
                $objDataType->url = (string)$aryDataTypes[0];
                $objCommand->addDataType($objDataType);
            }else{
                foreach($aryDataTypes as $dataType => $objRespnseDataDataType){
                    $strDataType = '\\OpenAir\\DataTypes\\'.$dataType;
                    if(class_exists($strCommand)){
                        $objDataType = new $strDataType();
                    }else{
                        $objDataType = new \stdClass();
                    }
                    foreach($objRespnseDataDataType as $key => $objXmlVal){
                        if(count($objXmlVal) == 0){
                            $objDataType->$key = (string)$objXmlVal;
                        }elseif(count($objXmlVal) == 1 && isset($objXmlVal->Date)){
                            //mktime(hour, min, sec, month, day, year)
                            $strDate = mktime(
                                (int)$objXmlVal->Date->hour,
                                (int)$objXmlVal->Date->minute,
                                (int)$objXmlVal->Date->second,
                                (int)$objXmlVal->Date->month,
                                (int)$objXmlVal->Date->day,
                                (int)$objXmlVal->Date->year
                            );
                            $objDataType->$key = $strDate;
                        }elseif($key == 'flags'){
                            $aryFlags = [];
                            foreach($objXmlVal->Flag as $intKey => $objFlag){
                                $aryFlags[] = new Flag((string)$objFlag->name,(string)$objFlag->setting);
                            }
                            $objDataType->$key = $aryFlags;
                        }elseif($key == 'addr'){
                            $objAddress = new Address();
                            foreach($objXmlVal->Address as $key2 => $val2){
                                $objAddress->$key2 = (string)$val2;
                            }
                            $objDataType->$key = $objAddress;
                        }else{
                            throw new \Exception('Unsure how to handle datatype '.$key);
                        }
                    }
                    $objCommand->addDataType($objDataType);
                }
            }


            if(in_array($strOrigCommand, ['Auth', 'Whoami', 'MakeURL', 'Submit'])){
                $this->commands[$strOrigCommand] = $objCommand;
            }else{
                if(!array_key_exists($strOrigCommand, $this->commands)){
                    $this->commands[$strOrigCommand] = [];
                }
                $this->commands[$strOrigCommand][] = $objCommand;
            }
        }
    }

    function getCommandResponse($strCommand){
        if(array_key_exists($strCommand, $this->commands)){
            return $this->commands[$strCommand];
        }
    }

    /**
     * @return mixed
     */
    public function getXMLResponse()
    {
        return $this->strResponse;
    }


}
