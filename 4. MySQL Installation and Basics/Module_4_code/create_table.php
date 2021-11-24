 <?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$db_host = "127.0.0.1";
	$db_user = "root";
	$db_password = "pass1234";
	$conn = mysql_connect($db_host,$db_user,$db_password);

	if(!$conn){
		die("Could not connect: " . mysql_error());
	}
	echo "Connected successfully<br>";
	
	mysql_select_db('student_details');
	$sql = "CREATE TABLE student(".
		   "roll_no INT NOT NULL AUTO_INCREMENT, ".
		   "name VARCHAR(100) NOT NULL, ".
		   "email VARCHAR(40) NOT NULL, ".
		   "contactno INT, ".
			"PRIMARY KEY (roll_no));";
	$retval = mysql_query($sql,$conn);
	if(!$retval){
		die("Could not create table " . mysql_error());
	}
	echo "Table created successfully<br>";
	mysql_close($conn);
?> 