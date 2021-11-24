<!-- <?php
class counting{ 
	private static $increment = 0;
	function __construct(){ 
		self::$increment++;
	}
	public static function displayCount(){ 
		return self::$increment; 
	} 
}//end of class counting

$firstobj = new counting(); 
echo counting::displayCount() . '<br />';
$secondobj = new counting(); 
echo counting::displayCount().'<br />';
?> -->

<?php
class counting1 {
	private static $increment = 0;
	function __construct(){
		self::$increment++;
	}
	public static function displaycounts(){
		return self::$increment;
	}
}
$firstobj1 = new counting1();
echo counting1::displaycounts(). "<br>";
$secondobj2 = new counting1();
echo counting1::displaycounts(). "<br>";
$third = new counting1();
echo counting1::displaycounts(). "<br>";
$four = new counting1();
echo counting1::displaycounts(). "<br>";
$fuce = new counting1();
echo counting1::displaycounts(). "<br>";
?>