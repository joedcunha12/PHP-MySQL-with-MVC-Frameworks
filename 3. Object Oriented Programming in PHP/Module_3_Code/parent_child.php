<?php
class  Pen{
	var $price;
	var $color;   
	var $type;   
	var $writingcolor; 

	function setPrice($cost)  {
		echo "<br>Parent setPrice method";
		$this->price = $cost;
	}

	function getPrice() {
		echo $this->price ."<br/>";
	}

	function setColor($pencolor) {
		$this->title = $pencolor;
	}

	function getColor(){
		echo $this->color ." <br/>";
	}

	function setType($var){
		$this->type = $var;
	}

	function getType(){
		echo $this->type ." <br/>";

	}

	function setWritingcolor($wcolor){
		$this->writingcolor = $wcolor;
	}
	

	function getWritingcolor (){
		echo $this->writingcolor." <br/>";
	} 
}//end of class

class Pencil extends Pen{
	var $manufacturer;
	function setManufacturer($par){
		$this->manufacturer = $par;
	}
	function getManufacturer(){
		echo $this->manufacturer. "<br />";
	}
}//end of sub-class

$natraj = new Pencil();
//Call parent's setPrice method with child object
$natraj->setPrice(100); 
echo "<br>".$natraj->price; 
?>
