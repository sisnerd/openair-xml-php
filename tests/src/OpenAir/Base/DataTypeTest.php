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
        'flags' => null,
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

    public function testGetData()
    {
        $datatype = new MockDataType([]);
        $datatype->id = 12;
        $datatype->name = 'woo';
        $datatype->date = 155.892;
        $datatype->customer = ['aa', 'bb', 'cc'];

        $expected = [
            'id' => 12,
            'name' => 'woo',
            'date' => 155.892,
            'customer' => ['aa', 'bb', 'cc'],
            'flags' => null,
        ];
        $actual = $datatype->getData();
        $this->assertSame($expected, $actual);
    }

    public function testToJson()
    {
        $datatype = new MockDataType([]);
        $datatype->id = 12;
        $datatype->name = 'woo';
        $datatype->date = 155.892;
        $datatype->customer = ['aa', 'bb', 'cc'];

        $expected = '{"id":12,"name":"woo","date":155.892,"customer":["aa","bb","cc"],"flags":null}';
        $actual = $datatype->toJson(false);
        $this->assertSame($expected, $actual);
    }

    public function testToJsonPretty()
    {
        $datatype = new MockDataType([]);
        $datatype->id = 12;
        $datatype->name = 'woo';
        $datatype->date = 155.892;
        $datatype->customer = ['aa', 'bb', 'cc'];

        $expected = <<<EOS
{
    "id": 12,
    "name": "woo",
    "date": 155.892,
    "customer": [
        "aa",
        "bb",
        "cc"
    ],
    "flags": null
}
EOS;
        $actual = $datatype->toJson(true);
        $this->assertSame($expected, $actual);
    }

    public function testToJsonNested()
    {
        $flag1 = new \OpenAir\DataTypes\Flag('flag1', true);
        $flag2 = new \OpenAir\DataTypes\Flag('flag2', false);
        $flag3 = new \OpenAir\DataTypes\Flag('flag3', true);
        $flag4 = new \OpenAir\DataTypes\Flag('flag4', 'optiony');
        $datatype = new MockDataType([]);
        $datatype->id = 12;
        $datatype->name = 'woo';
        $datatype->date = new \OpenAir\DataTypes\Date(10, 9, 8, 12, 7, 2020);
        $datatype->customer = ['aa', 'bb', 'cc'];
        $datatype->flags = [$flag1, $flag2, $flag3, $flag4];

        $expected = <<<EOS
{
    "id": 12,
    "name": "woo",
    "date": {
        "year": 2020,
        "month": 12,
        "day": 7,
        "hour": 10,
        "minute": 9,
        "second": 8
    },
    "customer": [
        "aa",
        "bb",
        "cc"
    ],
    "flags": [
        {
            "id": null,
            "name": "flag1",
            "setting": true
        },
        {
            "id": null,
            "name": "flag2",
            "setting": false
        },
        {
            "id": null,
            "name": "flag3",
            "setting": true
        },
        {
            "id": null,
            "name": "flag4",
            "setting": "optiony"
        }
    ]
}
EOS;
        $actual = $datatype->toJson(true);
        $this->assertSame($expected, $actual);
    }
}
