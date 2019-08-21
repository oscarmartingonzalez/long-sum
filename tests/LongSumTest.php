<?php

use MyPrj\Utils\IntSequence;
use PHPUnit\Framework\TestCase;

class LongSumTest extends TestCase
{
    public function testIntSequence()
    {
        $str = '1443883783743';
        $intSequence = new IntSequence($str);
        $this->assertEquals($intSequence->getValueAsString(), $str);
        $str = '88232372372372372684592';
        $intSequence = new IntSequence($str);
        $this->assertEquals($intSequence->getValueAsString(), $str);
        $str = '8928332847324623';
        $intSequence = new IntSequence($str);
        $this->assertEquals($intSequence->getValueAsString(), $str);
        $str = '992384823473263';
        $intSequence = new IntSequence($str);
        $this->assertEquals($intSequence->getValueAsString(), $str);
    }
}
