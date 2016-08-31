<?php

namespace OpenAir;

use OpenAir\Base\BaseCommandClass;

class Request extends OpenAir
{
    private $commands = [];
    private $xml;
    private $namespace;
    private $key;
    private $api_ver;
    private $client;
    private $client_ver;
    private $url = 'https://www.openair.com/api.pl';

    function __construct($namespace, $key, $api_ver = '1.0', $client = 'test app', $client_ver = '1.1'){
        $this->namespace = $namespace;
        $this->key = $key;
        $this->api_ver = $api_ver;
        $this->client = $client;
        $this->client_ver = $client_ver;
    }

    public function addCommand(BaseCommandClass $command){
        $this->commands[] = $command;
    }

    public function execute(){
        $xml = $this->_buildRequest();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$xml);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if($httpcode === 200){
            return $this->_processResponse($result);
        }else{
            return $httpcode;
        }
    }

    private function _processResponse($strXMLResponse){
        $dom = new \DOMDocument();
        if($dom->loadXML($strXMLResponse)){
            $objResponse = new Response();
            foreach ($dom->documentElement->childNodes AS $item) {
                if($item->childNodes->length > 0){
                    foreach ($item->childNodes as $grandchild) {
                        $strDataType = '\\OpenAir\\DataTypes\\'.$grandchild->tagName;
                        if(class_exists($strDataType)){
                            $objDataType = new $strDataType();
                        }else{
                            $objDataType = new \stdClass();
                        }
                        foreach($grandchild->childNodes as $nodeData){
                            $objDataType->{$nodeData->tagName} = $nodeData->nodeValue;
                        }
                    }
                    $objResponse->addCommandResponse($item->tagName, $objDataType, $item->getAttribute('status'));
                }else{
                    $objResponse->addCommandResponse($item->tagName, null, $item->getAttribute('status'));
                }
            }
            return $objResponse;
        }
        return false;
    }

    private function _buildRequest(){
        $dom = new \DOMDocument();
        $request = $dom->createElement('request');

        // api version
        $apiVer = $dom->createAttribute('API_ver');
        $apiVer->value = $this->api_ver;
        $request->appendChild($apiVer);

        // client
        $client = $dom->createAttribute('client');
        $client->value = $this->client;
        $request->appendChild($client);

        // client_ver
        $client_ver = $dom->createAttribute('client_ver');
        $client_ver->value = $this->client_ver;
        $request->appendChild($client_ver);

        // namespace
        $namespace = $dom->createAttribute('namespace');
        $namespace->value = $this->namespace;
        $request->appendChild($namespace);

        // key
        $key = $dom->createAttribute('key');
        $key->value = $this->key;
        $request->appendChild($key);

        foreach($this->commands as $objCommand){
            $xmlCommand = $objCommand->_buildRequest($dom);
            $request->appendChild($xmlCommand);
        }

        $dom->appendChild($request);
        $this->xml = $dom->saveXML();
        return $this->xml;
    }
}