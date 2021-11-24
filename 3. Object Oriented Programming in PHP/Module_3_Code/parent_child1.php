<?php
class pen{
    var $price;
    var $color;
    var $type;
    var $writingcolor;

    function setPrice($cost){
        echo "<br>Parent Setprice method";
        $this->price = $cost;
    }
    function getPrice(){
        echo $this->price . "<br>";
    }

    function setColor($pencolor){
        echo "<br> parent Setcolor method";
        $this->color = $pencolor;

    }

    function getColor(){
     echo   $this->color . "<br>";
    }

    function setType($var){
     
        $this->type = $var;

    }

    function getType(){
     echo   $this->type . "<br>";
    }

    function setWritingColor($wcolor){
        $this->writingcolor = $wcolor;

    }

    function getWritingColor(){
        $this->writingcolor . "<br>";
    }
 
      
}

class pencil extends pen{
    var $manufacturer;

    function setManufacturer($par){
        $this->manufacturer = $par;
    }

    function getManufacturer(){
        echo $this->manufacturer. "<br>";
    }
}

$natraj = new pencil();
$natraj->setPrice(100);
echo "<br>" . $natraj->price;
?>