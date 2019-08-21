<?php

use MyPrj\Utils\IntSequence;
use PHPUnit\Framework\TestCase;

class IntSequenceTest extends TestCase
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

    public function testReverseIntSequence()
    {
        $str = '1443883783743';
        $intSequence = new IntSequence($str);
        $this->assertEquals($intSequence->reverse()->getValueAsString(), strrev($str));
        $str = '88232372372372372684592';
        $intSequence = new IntSequence($str);
        $this->assertEquals($intSequence->reverse()->getValueAsString(), strrev($str));
        $str = '8928332847324623';
        $intSequence = new IntSequence($str);
        $this->assertEquals($intSequence->reverse()->getValueAsString(), strrev($str));
        $str = '992384823473263';
        $intSequence = new IntSequence($str);
        $this->assertEquals($intSequence->reverse()->getValueAsString(), strrev($str));
    }

    public function testLength()
    {
        $str = '1234';
        $intSequence = new IntSequence($str);
        $this->assertEquals($intSequence->length(), 4);
        $str = '12345';
        $intSequence = new IntSequence($str);
        $this->assertEquals($intSequence->length(), 5);
        $str = '123456';
        $intSequence = new IntSequence($str);
        $this->assertEquals($intSequence->length(), 6);
        $str = '1234567';
        $intSequence = new IntSequence($str);
        $this->assertEquals($intSequence->length(), 7);
    }

    public function testAdd()
    {
        $intSequence = new IntSequence();
        $this->assertEquals($intSequence->length(), 0);
        $intSequence->add('1');
        $this->assertEquals($intSequence->length(), 1);
        $intSequence->add('0');
        $this->assertEquals($intSequence->length(), 2);
        $intSequence->add('5');
        $this->assertEquals($intSequence->length(), 3);
        $this->assertEquals($intSequence->getValueAsString(), '105');
    }
}
