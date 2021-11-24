<?php
class calculator{
    public $interest;
    public $capital;
    public $no_of_years;
    public $rate_of_interest;

    function calculator(){
        $this->capital = 3000;
        $this->no_of_years = 3;
        $this->rate_of_interest = 2;
    }
    public function calculate(){
        return ($this->capital*$this->no_of_years*$this->rate_of_interest)/100;
    }
}
$cal = new calculator();
$interest = $cal->calculate();
echo "Your interest on capital $cal->capital wiht rate $cal->rate_of_interest for duration $cal->no_of_years is $interest <br>";
?>