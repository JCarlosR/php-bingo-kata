<?php

use PHPUnit\Framework\TestCase;

class BingoCardGeneratorTest extends TestCase
{
    public function testCardContainsValidNumbersAccordingToColumn()
    {
        $generator = new BingoCardGenerator();
        $card = $generator->generate();
        
        $this->assertTrue($card->isValid());
    }
    
}