<?php

use MyPrj\Utils\MyLong;
use PHPUnit\Framework\TestCase;

class LongSumTest extends TestCase
{
    public function testSum()
    {
        $this->assertEquals(MyLong::Sum('100', '50'), '150');
        $this->assertEquals(MyLong::Sum('100', '51'), '151');
        $this->assertEquals(MyLong::Sum('101', '51'), '152');
        $this->assertEquals(MyLong::Sum('199', '99'), '298');
        $this->assertEquals(MyLong::Sum('999', '99'), '1098');
        $this->assertEquals(
            MyLong::Sum(
                '111222000111000222000111',
                '111333000111000333000111'
            ),
            '222555000222000555000222'
        );
    }
}
