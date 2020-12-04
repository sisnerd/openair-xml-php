<?php

namespace OpenAir\Tests;

use PHPUnit\Framework\TestCase;
use OpenAir\Commands\Read;

final class ReadTest extends TestCase
{
    public function testConstructNoAttrs()
    {
        $command = new Read([]);
        $this->assertInstanceOf(Read::class, $command);
    }

    public function testBuildRequestAttrs()
    {
        $dom = new \DOMDocument();
        $root = $dom->createElement('root');
        $dom->appendChild($root);

        // The attr 'limit' must appear in the XML, but the attr 'foo' must not.
        $command = new Read(['foo' => 'bar', 'limit' => 2]);

        $xmlCommand = $command->_buildRequest($dom);
        $root->appendChild($xmlCommand);
        $xml = $dom->saveXML();

        $expected = "<?xml version=\"1.0\"?>\n<root><Read limit=\"2\" method=\"all\"/></root>\n";
        $this->assertSame($expected, $xml);
    }

    public function testBuildRequestAllAttrs()
    {
        $dom = new \DOMDocument();
        $root = $dom->createElement('root');
        $dom->appendChild($root);

        // The attr 'limit' must appear in the XML, but the attr 'foo' must not.
        $command = new Read([
            'limit' => 2,
            'type' => 'willy',
            'method' => 'wonka',
            'deleted' => '1',
            'include_flags' => '2',
            'include_nondeleted' => '3',
            'base_currency' => 'usd',
            'generic' => 'yes',
            'enable_custom' => '4',
            'filters' => [
                'filter' => 'sarlac',
                'field' => 'id',
            ],
            'fields' => '5',
        ]);

        $xmlCommand = $command->_buildRequest($dom);
        $root->appendChild($xmlCommand);
        $xml = $dom->saveXML();

        $expected = "<?xml version=\"1.0\"?>\n<root><Read limit=\"2\" type=\"willy\" method=\"wonka\" deleted=\"1\" include_flags=\"2\" include_nondeleted=\"3\" base_currency=\"usd\" generic=\"yes\" enable_custom=\"4\" filter=\"sarlac\" field=\"id\" fields=\"5\"/></root>\n";
        $this->assertSame($expected, $xml);
    }

    public function testBuildRequestWithDataType()
    {
        $dom = new \DOMDocument();
        $root = $dom->createElement('root');
        $dom->appendChild($root);

        $command = new Read(['type' => 'Customer', 'method' => Read::METHOD_EQUAL_TO]);

        // Indicates we want the fetch the customer where id = 8000
        $customer = new \OpenAir\DataTypes\Customer(['id' => 8000]);
        $command->addDataType($customer);

        $xmlCommand = $command->_buildRequest($dom);
        $root->appendChild($xmlCommand);
        $xml = $dom->saveXML();

        $expected = "<?xml version=\"1.0\"?>\n<root><Read type=\"Customer\" method=\"equal to\"><Customer><id>8000</id></Customer></Read></root>\n";
        $this->assertSame($expected, $xml);
    }

    public function testBuildRequestWithReturnValues()
    {
        $dom = new \DOMDocument();
        $root = $dom->createElement('root');
        $dom->appendChild($root);

        $command = new Read(['type' => 'Customer', 'limit' => 2]);

        $customer = new \OpenAir\DataTypes\Customer(['id' => 8000]);
        $command->addDataType($customer);

        $command->setReturnValues(['id', 'nickname']);

        $xmlCommand = $command->_buildRequest($dom);
        $root->appendChild($xmlCommand);
        $xml = $dom->saveXML();

        $expected = "<?xml version=\"1.0\"?>\n<root><Read limit=\"2\" type=\"Customer\" method=\"all\"><Customer><id>8000</id></Customer><_Return><id/><nickname/></_Return></Read></root>\n";
        $this->assertSame($expected, $xml);
    }

    public function testGetAndSetType()
    {
        $command = new Read(['type' => 'Customer', 'limit' => 2]);
        $this->assertSame('Customer', $command->getType());

        $command->setType('User');
        $this->assertSame('User', $command->gettype());
    }

    public function testResponseStatuses()
    {
        $command = new Read(['type' => 'Customer', 'limit' => 2]);

        // Known success code
        $command->responseCode = 0;
        $this->assertSame('Success', $command->getResponseStatusMessage());

        // Known error code
        $command->responseCode = 601;
        $this->assertSame('No results or id code invalid', $command->getResponseStatusMessage());

        // Unknown code
        $command->responseCode = 800;
        $this->assertSame('Unknown', $command->getResponseStatusMessage());
    }
}
