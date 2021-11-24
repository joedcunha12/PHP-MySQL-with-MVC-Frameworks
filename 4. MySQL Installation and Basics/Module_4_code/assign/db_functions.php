<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$dbhost = '127.0.0.1';
	$dbuser = 'root';
	$dbpass = 'pass1234';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn {
		die('Could not connect: ' . mysql_error());
	}
	echo 'Connected successfully<br/>';
	$sql = 'Create database store';
	$retval = mysql_query( $sql, $conn );
	if(! $retval ){
		die('Could not create database: ' . mysql_error());
	}
	echo "Database store created successfully<br>";
	mysql_select_db( 'store' );
	$sql1 = "CREATE TABLE product( ".
	 "product_id INT NOT NULL AUTO_INCREMENT, ".
	"product_name VARCHAR(100) NOT NULL, ".
	 "product_description VARCHAR(40) NOT NULL, ".
	 "price INT(10), ".
	 "PRIMARY KEY(product_id)); ";
	$retval1 = mysql_query( $sql1, $conn );
	if(! $retval1 ){
		die('Could not create table: ' . mysql_error());
	}
	echo "Table created successfully<br>";
	$sql2= "DROP TABLE product";
	$retval = mysql_query( $sql2, $conn );
	if(! $retval ){
		die('Could not delete table: ' . mysql_error());
	}
	echo "Table deleted successfully<br>";
	$sql3 = "DROP DATABASE store";
	$retval = mysql_query( $sql3, $conn );
	if(! $retval ){
		die('Could not delete database: ' . mysql_error());
	}
	echo "Database deleted successfully<br>";
	mysql_close($conn);
?>
