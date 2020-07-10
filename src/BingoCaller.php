<?php 

class BingoCaller
{
    private $numbers = [];

    public function __construct()
    {
        // in the future we can customize and use other kind of Bingo here
        // we are using the US model this time
    }
    
    public function callNumber(): int 
    {
        do {
            $number = rand(1, 75);    
        } while(in_array($number, $this->numbers));
        
        $this->numbers[] = $number;
        
        return $number;
    }
    
    public function hasCalledNumber($number): bool
    {
        return in_array($number, $this->numbers);
    }
}