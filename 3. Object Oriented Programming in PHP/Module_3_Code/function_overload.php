<!-- <?php
class baseclass{
	public function one(){
		echo  "First function";
	}
	public function two($t){
		echo "second function";
	}
}//End of class
class childclass extends baseclass{
	//overriding function2
	function two($text){
		echo "$text ";
	}
}
$text = new childclass(); //create sub-class object
$text->two("Sachin");//
?> -->

<?php
class baseclas{
	public function first(){
		echo "First function";

	}
	public function second($t){
		echo "second function";
	}
}
class childclas extends baseclass{
	function second($text){
		echo $text;
	}
}

$childclass = new childclas();
$childclass->second("Joe")


?>
