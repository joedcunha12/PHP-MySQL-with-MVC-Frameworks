 <?php
class Pen{
	var $price;
	var $color;
	function  Pen( $par1, $par2 ){
		$this->price = $par1;
		$this->color = $par2;
	}//end of function
} //end of class

$hero = new Pen("100","green"); //create new object
echo $hero->price;
echo "<br>";
echo $hero->color;
?> 

