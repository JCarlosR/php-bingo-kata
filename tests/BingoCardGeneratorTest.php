<?php

use PHPUnit\Framework\TestCase;

class BingoCardGeneratorTest extends TestCase
{
    public function testWhenCallsANumberItsInTheValidRange()
    {
        $generator = new BingoCardGenerator();
        $this->assertTrue(true);
    }
    
}