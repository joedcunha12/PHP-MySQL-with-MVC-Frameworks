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
	
	$sql = "SELECT * FROM student;";
			
	$retval = mysql_query($sql,$conn);
	if(!$retval){
		die("Could not Enter table " . mysql_error());
	}
	while($row = mysql_fetch_assoc($retval)){
		echo "Roll No: {$row['roll_no']} <br>" .
			 "Name: {$row['name']} <br>" .
			 "Email: {$row['email']} <br>" .
			 "Contact No: {$row['contactno']} <br>" .
			 "--------------------------------------------<br>";
	}
	echo "Fetched data successfully <br>";
	mysql_close($conn);
?>