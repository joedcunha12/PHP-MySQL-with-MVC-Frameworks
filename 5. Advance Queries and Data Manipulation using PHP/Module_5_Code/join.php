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
	
	$sql = "SELECT s.roll_no,s.name,s.contactno,sm.total 
		    FROM student s, student_marks sm 
			WHERE s.roll_no = sm.roll_no;";
	
	$retval = mysql_query($sql,$conn);
	if(!$retval){
		die("Could not Enter table " . mysql_error());
	}
	echo "<table border=1 style='border-collapse:collapse;'>";
	echo "<tr>";
	echo "<td> Roll No </td>";
	echo "<td> Name</td>";
	echo "<td> Contact No </td>";
	echo "<td> Total </td>";
	echo "</tr>";
	while($row = mysql_fetch_array($retval,MYSQL_ASSOC)){
		echo "<tr>";
		echo "<td>{$row['roll_no']}</td>";
		echo "<td> {$row['name']}</td>";
		echo "<td> {$row['contactno']} </td>";
		echo "<td> {$row['total']} </td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "Data Fetched successfully <br>";
	mysql_close($conn);
?>