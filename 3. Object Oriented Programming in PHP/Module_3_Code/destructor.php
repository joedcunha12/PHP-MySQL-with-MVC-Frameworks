<!-- <?php
class pen{
	public function __destruct(){
	echo "Object is destroying<br/>";
	}
}

$pen1 = new Pen(100); 
// this is valid and it prints �Object is destroying�
// BUT IT DOES NOT DESTROY THE OBJECT
$pen1->__destruct();
echo 'Script execution is in progress<br/>';
 
/* here the code actually destroys  the $pen1 object
and again prints 'Destroying the object and releasing the memory� */
?> -->

<?php 
class car{
	public function __destruct(){
		echo "object is destroying <br>";

	}
}

$car1 = new car(100);

$car1->__destruct();
echo "script execution is in progress<br>";

?>