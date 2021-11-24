<?php
//Creating class interestCalculator
class calculator
{
public $interest;
public $capital;
public $no_of_years;
public $rate_of_interest;
//Constructor of the class
function calculator()
{
$this->capital = 3000;
$this->no_of_years = 3;
$this->rate_of_interest = 2;
}
public function calculate()
{
return ($this->capital*$this->no_of_years *$this->rate_of_interest)/100;
}
}
//Creating various object of class interestCalculator to calculate interest on various amount
$calculator1 = new calculator();
$interest = $calculator1->calculate();
echo "Your interest on capital $calculator1->capital with rate $calculator1->rate_of_interest for duration $calculator1->no_of_years is $interest <br/> ";
?>