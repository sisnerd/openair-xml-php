<?php

use PHPUnit\Framework\TestCase;
use OpenAir\Request;
use OpenAir\Commands\Auth;
use OpenAir\Commands\Whoami;

final class RequestTest extends TestCase
{
    public function testConstruct()
    {
        $request = new Request('default', 'abcd');
        $this->assertInstanceOf(Request::class, $request);
    }

    public function testSetUrl()
    {
        $request = new Request('default', 'abcd');
        $request->setUrl('companyid');

        $this->assertSame('https://companyid.app.openair.com/api.pl', $request->getUrl());
    }

    public function testSetUrlWithSandbox()
    {
        $request = new Request('default', 'abcd');
        $request->setUrl('companyid', true);

        $this->assertSame('https://companyid.app.sandbox.openair.com/api.pl', $request->getUrl());
    }

    public function testAddCommandMustBeCorrectType()
    {
        $this->expectException(\TypeError::class);

        $request = new Request('default', 'abcd');
        $request->addCommand('auth');
    }

    public function testAddCommandAuth()
    {
        $request = new Request('default', 'abcd');
        $request->addCommand(new Auth());

        $xml = $request->getXMLRequest();
        $this->assertContains('abcd', $xml);
        $this->assertContains('<Auth><Login/>', $xml);
    }

    public function testAddCommandNonAuth()
    {
        $request = new Request('default', 'abcd');
        $request->addCommand(new Whoami());

        $xml = $request->getXMLRequest();
        $this->assertContains('abcd', $xml);
        $this->assertContains('<Whoami/>', $xml);
    }

    public function testSetCommands()
    {
        $request = new Request('default', 'abcd');

        $request->setCommands([
            new Auth(),
            new Whoami(),
        ]);

        $xml = $request->getXMLRequest();
        $this->assertContains('abcd', $xml);
        $this->assertContains('<Auth><Login/>', $xml);
        $this->assertContains('<Whoami/>', $xml);
    }

    /**
     * Clear commands test
     *
     * Should clear any commands added, but not the auth
     *
     * @return void
     */
    public function testClearCommands()
    {
        $request = new Request('default', 'abcd');

        $request->setCommands([
            new Auth(),
            new Whoami(),
        ]);
        $request->clearCommands();

        $xml = $request->getXMLRequest();
        $this->assertContains('abcd', $xml);
        $this->assertContains('<Auth><Login/>', $xml);
        $this->assertNotContains('<Whoami/>', $xml);
    }
}
