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
    
//$sql = "SELECT * FROM student;";
    $sql = "SELECT * from student where name=\"Nancy\";";

    $retval = mysql_query($sql,$conn);
    if(!$retval){
        die("couldn't enter table" . mysql_error());
    } 
    while($row = mysql_fetch_array($retval,MYSQL_NUM)){
        echo "Roll No: {$row['0']} <br>" .
         "Name: {$row['1']} <br>" .
         "Email: {$row['2']} <br>" .
         "contact No: {$row['3']} <br>" .
         "-------------------------------------<br>";
    }
    mysql_free_result($retval)
    echo "Fetched data successfully <br>";
    mysql_close($conn);
    ?>