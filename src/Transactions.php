<?php
declare(strict_types=1);
class Transactions{
 public float $amount;
 public string $description;

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }
    public function addTax(float $rate){
        $this->amount += $this->amount * $rate /100;
    }

    public function addDiscount(float $rate){
        $this->amount -= $this->amount * $rate / 100;
    }
}