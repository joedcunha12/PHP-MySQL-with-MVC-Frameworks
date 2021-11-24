<!-- <?php
	$glob_var = 85;
	function addit() {
		GLOBAL $glob_var;
		$glob_var ++;
		print "<br>Global variable inside function: $glob_var ";
	}
	
	addit();
	print "<br>Global variable outside function: $glob_var ";
	
?> -->

<?php 
$glob_var = 85;
function hi(){
	global $glob_var;
	$glob_var ++;
	print "<br> GLobal variable inside function : $glob_var";
}

hi();
print "<br>Global variable outside function: $glob_var";

?>