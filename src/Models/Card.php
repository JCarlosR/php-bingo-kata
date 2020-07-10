<?php namespace Models;

class Card
{
    private $grid;
    
    public function __construct($grid)
    {
        $this->grid = $grid;
    }
    
    public function isValid(): bool 
    {
        return $this->hasValidSize() && $this->respectBoundaries();
    }
    
    private function hasValidSize(): bool
    {
        foreach ($this->grid as $column)
        {
            if (sizeof($column) !== 5)
                return false;
        }
        
        return true;
    }

    private function respectBoundaries(): bool
    {
        return
            $this->columnHasElementsBetween($this->grid['B'], 1, 15)
            && $this->columnHasElementsBetween($this->grid['I'], 16, 30)
            && $this->columnHasElementsBetween($this->grid['N'], 31, 45)
            && $this->columnHasElementsBetween($this->grid['G'], 46, 60)
            && $this->columnHasElementsBetween($this->grid['O'], 61, 75);
    }
    
    private function columnHasElementsBetween($column, $min, $max): bool
    {
        foreach ($column as $number) {
            if ($number < $min || $number > $max)
                return false;
        }
        
        return true;
    }
    
}