<html>
<head>
<title>Query to add new record in MySQL Database</title>
</head>
<body>
<?php
if(isset($_POST['add'])){
	error_reporting(E_ALL ^ E_DEPRECATED);
	$db_host = "127.0.0.1";
	$db_user = "root";
	$db_password = "pass1234";
	$conn = mysql_connect($db_host,$db_user,$db_password);

	if(!$conn){
		die("Could not connect: " . mysql_error());
	}
	mysql_select_db('student_details');
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contactno = $_POST['contactno'];
	
	$sql = "INSERT INTO student ".
		   "(roll_no,name,email,contactno) " .
			"values ('','$name','$email','$contactno');";
			
	$retval = mysql_query($sql,$conn);
	if(!$retval){
		die("Could not Enter table " . mysql_error());
	}
	echo "Data saved successfully<br>";
	mysql_close($conn);
}//end of isset post
else{
	?>
	<form method="post" action="<?php $_PHP_SELF ?>">
	<table width="600" border="1" cellspacing="1" cellpadding="2" style="border-collapse:collapse;">
	<tr><td width="250" colspan="2" align="center" > <b> Student Details</b></td></tr>
	<tr>
	<td width="250">Name</td>
	<td><input name="name" type="text" id="name"></td>
	</tr>
	<tr>
	<td width="250">Email</td>
	<td><input name="email" type="text" id="email"></td>
	</tr>	
	<tr>
	<td width="250">Contact No.</td>
	<td><input name="contactno" type="text" id="contactno"></td>
	</tr>
	<tr>
	<td width="250" colspan="2" align="center">	
		<input name="add" type="submit" id="add" value="Add Student">
	</td>
	</tr>
	</table>
	</form>
<?php
	}
?>
</body>
</html>