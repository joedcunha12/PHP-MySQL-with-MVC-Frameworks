<!-- <?php
abstract class mathmanipulation{
	abstract protected function addTwonumbers ($num1);
}//end of mathmanipulation

class mathadd extends mathmanipulation{
	public function addTwonumbers($a){
		return $a+2;
	}
}
$mathaddobj = new mathadd;
echo $mathaddobj->addTwonumbers(8);
?> -->


<?php 
abstract class math{
	abstract protected function addtwonumber ($num);
}
class mathaddition extends math {
	public function addtwonumber($a){
		return $a + 2;
	}
}

$mathaddobject = new mathaddition;
echo $mathaddobject->addtwonumber(5);

?>