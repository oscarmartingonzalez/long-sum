<?php

use MyPrj\Utils\LongSum;
use PHPUnit\Framework\TestCase;

class LongSumTest extends TestCase
{
    public function testSum()
    {
        $this->assertEquals(LongSum::Sum('100', '50'), '150');
        $this->assertEquals(LongSum::Sum('100', '51'), '151');
        $this->assertEquals(LongSum::Sum('101', '51'), '152');
        $this->assertEquals(LongSum::Sum('10000', '51'), '10051');
        $this->assertEquals(LongSum::Sum('199', '99'), '298');
        $this->assertEquals(LongSum::Sum('999', '99'), '1098');
        $this->assertEquals(
            LongSum::Sum(
                '111222000111000222000111000000000445',
                '111333000111000333000111000000000555'
            ),
            '222555000222000555000222000000001000'
        );
    }
}
