<?php

namespace OpenAir\Tests;

use PHPUnit\Framework\TestCase;
use OpenAir\Base\DataType;

class MockDataType extends DataType
{
    public $data = [
        'id' => null,
        'name' => null,
        'date' => null,
        'customer' => null,
    ];
}

final class DataTypeTest extends TestCase
{
    public function testConstruct()
    {
        $datatype = new DataType([]);
        $this->assertInstanceOf(DataType::class, $datatype);
    }

    public function testPopulate()
    {
        $datatype = new MockDataType([
            'name' => 'Foo',
            'date' => 1234,
            'id' => 1281,
            'file' => 'style.png',
        ]);

        $this->assertSame('Foo', $datatype->name);
        $this->assertNull($datatype->file);
    }

    public function testPopulateWithExtraField()
    {
        $datatype = new MockDataType([
            'name' => 'Foo',
            'date' => 1234,
            'id' => 1281,
            'next__c' => 78,
        ]);

        $this->assertSame('Foo', $datatype->name);
        $this->assertSame(78, $datatype->next__c);
    }

    public function testGetWithBase()
    {
        // The base class has no data defined
        $datatype = new DataType([]);
        $this->assertNull($datatype->id);
    }

    public function testSetWithBase()
    {
        // The base class has no data defined
        $datatype = new DataType([]);
        $datatype->foo = 'bar';

        $this->assertNull($datatype->foo);
    }

    public function testSetNonexistentKey()
    {
        $datatype = new MockDataType([]);
        $datatype->lastName = 'Smith';

        $this->assertNull($datatype->lastName);
    }

    public function testSetValidKey()
    {
        $datatype = new MockDataType([]);
        $datatype->name = 'Katherine';

        $this->assertSame('Katherine', $datatype->name);
    }

    public function testBuildRequestNoData()
    {
        $dom = new \DOMDocument();
        $root = $dom->createElement('root');
        $dom->appendChild($root);

        $datatype = new DataType([]);
        $xmlObj = $datatype->_buildRequest($dom);
        $root->appendChild($xmlObj);
        $xml = $dom->saveXML();

        $expected = "<?xml version=\"1.0\"?>\n<root><DataType/></root>\n";
        $this->assertSame($expected, $xml);
    }

    public function testBuildRequestWithData()
    {
        $dom = new \DOMDocument();
        $root = $dom->createElement('root');
        $dom->appendChild($root);

        $datatype = new MockDataType([]);
        $datatype->name = 'Katherine';

        $customer = new \OpenAir\DataTypes\Customer(['id' => '8000']);
        $datatype->customer = $customer;

        $xmlObj = $datatype->_buildRequest($dom);
        $root->appendChild($xmlObj);
        $xml = $dom->saveXML();

        $expected = "<?xml version=\"1.0\"?>\n<root><MockDataType><name>Katherine</name><customer><Customer><id>8000</id></Customer></customer></MockDataType></root>\n";
        $this->assertSame($expected, $xml);
    }
}
