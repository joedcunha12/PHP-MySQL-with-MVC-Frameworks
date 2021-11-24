<!-- <?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$db_host = "127.0.0.1";
	$db_user = "root";
	$db_password = "pass1234";
	$conn = mysql_connect($db_host,$db_user,$db_password);

	if(!$conn){
		die("Could not connect: " . mysql_error());
	}
	$db_list = mysql_list_dbs($conn);
	echo "<b>List of Databases<br></b>";
	while ($db = mysql_fetch_object($db_list)){
		echo $db->Database . "<br>";
	}
	mysql_close($conn);
?> -->

<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$db_host = "127.0.0.1";
$db_user = "root";
$db_password = "pass1234";
$conn = mysql_connect($db_host,$db_user,$db_password);

if(!$conn){
	die("Could not connect: " . mysql_error());
}
$db_list = mysql_list_dbs($conn);
echo "<b> List of databases<br></b>";
while ($db = mysql_fetch_object($db_list)){
	echo $db->Database . "<br>";
}
mysql_close($conn);
?>