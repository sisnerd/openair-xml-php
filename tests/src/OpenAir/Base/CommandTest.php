<?php

namespace OpenAir\Tests;

use PHPUnit\Framework\TestCase;
use OpenAir\Base\Command;

class MockCommand extends Command
{
    public $attributes = [
        'id' => null,
    ];
}

final class CommandTest extends TestCase
{
    public function testConstructNoAttrs()
    {
        $command = new Command([]);
        $this->assertInstanceOf(Command::class, $command);
    }

    public function testConstructWithAttrs()
    {
        $command = new MockCommand(['id' => 1111, 'not_here' => true]);
        $this->assertInstanceOf(Command::class, $command);
        $this->assertSame(1111, $command->attributes['id']);
        $this->assertTrue(!isset($command->attributes['not_here']));
    }

    public function testBuildRequestWithAttributes()
    {
        $dom = new \DOMDocument();
        $root = $dom->createElement('root');
        $dom->appendChild($root);

        $command = new MockCommand(['id' => 1111]);

        $xmlCommand = $command->_buildRequest($dom);
        $root->appendChild($xmlCommand);
        $xml = $dom->saveXML();

        $expected = "<?xml version=\"1.0\"?>\n<root><MockCommand id=\"1111\"/></root>\n";
        $this->assertSame($expected, $xml);
    }

    public function testBuildRequestWithDatatypes()
    {
        $dom = new \DOMDocument();
        $root = $dom->createElement('root');
        $dom->appendChild($root);

        $command = new MockCommand(['id' => 1111]);

        $customer = new \OpenAir\DataTypes\Customer(['id' => '8000']);
        $command->addDataType($customer);

        $xmlCommand = $command->_buildRequest($dom);
        $root->appendChild($xmlCommand);
        $xml = $dom->saveXML();

        $expected = "<?xml version=\"1.0\"?>\n<root><MockCommand id=\"1111\"><Customer><id>8000</id></Customer></MockCommand></root>\n";
        $this->assertSame($expected, $xml);
    }

    public function testGetResponseStatus()
    {
        $command = new MockCommand(['id' => 98]);
        $command->responseCode = 2;

        $this->assertSame(2, $command->getResponseStatus());
    }

    public function testGetResponseStatusMessage()
    {
        $command = new MockCommand(['id' => 98]);
        $command->responseCode = 2;

        $this->assertSame('', $command->getResponseStatusMessage());
    }

    public function testIsSuccess()
    {
        $command = new MockCommand(['id' => 98]);
        $command->responseCode = 0;

        $this->assertTrue($command->isSuccess());
    }

    public function testIsNotSuccess()
    {
        $command = new MockCommand(['id' => 98]);
        $command->responseCode = 1;

        $this->assertFalse($command->isSuccess());
    }

    public function testGetResponseDataNoResponseCode()
    {
        $command = new MockCommand(['id' => 10]);

        $this->assertNull($command->getResponseData());
    }

    public function testGetResponseDataWithDataType()
    {
        $dom = new \DOMDocument();
        $root = $dom->createElement('root');
        $dom->appendChild($root);

        $command = new MockCommand(['id' => 1111]);

        $customer = new \OpenAir\DataTypes\Customer(['id' => '8000']);
        $command->addDataType($customer);
        $command->responseCode = 0;

        $datatypes = $command->getResponseData();
        $this->assertSame(1, count($datatypes));
        $this->assertInstanceOf(\OpenAir\DataTypes\Customer::class, $datatypes[0]);
    }

    /**
     * Not sure what the returnValues are used for
     *
     * @return void
     */
    public function testReturnValues()
    {
        $command = new MockCommand(['id' => 1111]);
        $command->setReturnValues(['lmnop']);
        $this->assertSame(['lmnop'], $command->getReturnValues());
    }
}
