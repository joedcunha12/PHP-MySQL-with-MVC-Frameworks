<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$db_host = "127.0.0.1";
	$db_user = "root";
	$db_password = "pass1234";
	$conn = mysql_connect($db_host,$db_user,$db_password);

	if(!$conn){
		die("Could not connect: " . mysql_error());
	}
	mysql_select_db('student_details');
	
	$sql = "UPDATE student 
			SET contactno=9999999999 
			where rollno=3;";
	
	$retval = mysql_query($sql,$conn);
	if(!$retval){
		die("Could not Update table " . mysql_error());
	}

	mysql_free_result($retval);
	echo "Data Updated successfully <br>";
	mysql_close($conn);
?>