<?php

namespace OpenAir\Tests;

use PHPUnit\Framework\TestCase;
use OpenAir\DataTypes\Date;

final class DateTest extends TestCase
{
    public function testConstructNoArgs()
    {
        $item = new Date();
        $this->assertInstanceOf(Date::class, $item);
    }

    public function testConstructDate()
    {
        $item = new Date(14, 25, 13, 12, 2, 2020);

        $datetime = \DateTime::createFromFormat("Y-m-d H:i:s", '2020-12-02 14:25:13');
        $this->assertEquals($datetime, $item->toDateTime());
    }

    public function testToString()
    {
        $item = new Date(14, 25, 13, 12, 2, 2020);

        $expected = "2020-12-02 14:25:13";
        $this->assertSame($expected, (string) $item);
    }
}
