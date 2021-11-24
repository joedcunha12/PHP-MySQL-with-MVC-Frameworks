<!-- <?php 
function checking($number){
	if($number>1){
		throw new Exception("Value must be 1 or below");
	}
	return true;
}//end of function

try{
	checking(3);
	echo 'If you see this, the number is 1 or below'; 
}catch(Exception $s){
	echo 'Message: ' .$s->getMessage(); 
}
?> -->

<?php
function check($number){
	if($number>1){
		throw new Exception("Value must be 1 or below");

	}
	return true;

}
try{
	check(3);
	echo "If you see this, the number is 1 or below";
} catch(Exception $s){
	echo 'Message: ' .$s->getMessage();
}
?>
