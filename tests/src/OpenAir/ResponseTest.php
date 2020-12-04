<?php

namespace OpenAir\Tests;

use PHPUnit\Framework\TestCase;
use OpenAir\Response;

final class ResponseTest extends TestCase
{
    public function testConstructMissingValidXml()
    {
        $this->expectException(\Exception::class);

        $response = new Response('');
    }

    public function testConstruct()
    {
        $xml = "<root></root>";
        $response = new Response($xml);
        $this->assertInstanceOf(Response::class, $response);
    }

    public function testParseAuth()
    {
        $xml = $this->readXml('auth-00.xml');
        $response = new Response($xml);

        $commandResponse = $response->getCommandResponse('Auth');
        $this->assertInstanceOf(\OpenAir\Commands\Auth::class, $commandResponse);
    }

    public function testParseAuthBlank()
    {
        $xml = "<root><Auth></Auth></root>";
        $response = new Response($xml);

        $auth = $response->getCommandResponse('Auth');
        $this->assertInstanceOf(\OpenAir\Commands\Auth::class, $auth);
    }

    public function testParseTime()
    {
        $xml = $this->readXml('time-00.xml');
        $response = new Response($xml);

        $time = $response->getCommandResponse('Time')[0];
        $date = $time->getResponseData()[0];
        $this->assertInstanceOf(\OpenAir\Commands\Time::class, $time);
        $this->assertInstanceOf(\OpenAir\DataTypes\Date::class, $date);

        $this->assertSame('22', $date->hour);
    }

    public function testParseWhoami()
    {
        $xml = $this->readXml('whoami-00.xml');
        $response = new Response($xml);

        $whoami = $response->getCommandResponse('Whoami');
        $this->assertInstanceOf(\OpenAir\Commands\Whoami::class, $whoami);

        $users = $whoami->getResponseData();
        $this->assertSame('1014', $users[0]->id);
        $this->assertSame('Sarah', $users[0]->addr->first);
        $this->assertSame(1607038242, $users[0]->updated);

        $flag = $users[0]->flags[0];
        $this->assertInstanceOf(\OpenAir\DataTypes\Flag::class, $flag);
        $this->assertSame('account_transfer_off', $flag->name);
        $this->assertSame('', $flag->setting);
    }

    public function testParseMakeurl()
    {
        $xml = $this->readXml('makeurl-00.xml');
        $response = new Response($xml);

        $r = $response->getCommandResponse('MakeURL');
        $this->assertInstanceOf(\OpenAir\Commands\MakeURL::class, $r);

        $url = $r->getResponseData()[0];
        $this->assertInstanceOf(\OpenAir\DataTypes\Url::class, $url);
        $this->assertContains('companyid.app.sandbox.openair.com', $url->url);
        $this->assertContains('uid=1014', $url->url);
    }

    public function testParseXmlUnknownCommand()
    {
        $xml = "<root><Foo></Foo></root>";
        $response = new Response($xml);

        $r = $response->getCommandResponse('Foo')[0];
        $this->assertInstanceOf(\StdClass::class, $r);
    }

    public function testParseXmlUnknownCommandAndDatatype()
    {
        $xml = "<root><Foo><Bar><id>1</id></Bar></Foo></root>";
        $response = new Response($xml);

        $r = $response->getCommandResponse('Foo')[0];
        $this->assertInstanceOf(\StdClass::class, $r->Bar);
    }

    public function testParseXmlUnknownDatatype()
    {
        $xml = "<root><Version><Bar><id>1</id></Bar></Version></root>";
        $response = new Response($xml);

        $r = $response->getCommandResponse('Version')[0];
        $this->assertInstanceOf(\StdClass::class, $r->Bar);
    }

    public function testParseXmlUnknownDatatypeKey()
    {
        $xml = "<root><Version><Bar><things>1</things><things>2</things></Bar></Version></root>";
        $response = new Response($xml);

        $r = $response->getCommandResponse('Version')[0];
        $this->assertInstanceOf(\StdClass::class, $r->Bar);
    }

    public function testParseXmlUnknownNestedDatatype()
    {
        $this->expectException(\Exception::class);
        $xml = "<root><Version><Bar><things><thing><id>1</id></thing></things></Bar></Version></root>";
        $response = new Response($xml);
    }

    public function testGetCommandResponseUnknownCommand()
    {
        $xml = "<root><Version><Bar><id>1</id></Bar></Version></root>";
        $response = new Response($xml);

        $r = $response->getCommandResponse('Elephant');
        $this->assertNull($r);
    }

    public function testGetXmlResponse()
    {
        $xml = "<root><Version><Bar><id>1</id></Bar></Version></root>";
        $response = new Response($xml);

        $r = $response->getXMLResponse();
        $this->assertSame($xml, $r);
    }

    protected function readXml($filename)
    {
        $path = dirname(dirname(__DIR__));
        $path .= DIRECTORY_SEPARATOR
            . 'data' . DIRECTORY_SEPARATOR . $filename;

        return file_get_contents($path);
    }
}
