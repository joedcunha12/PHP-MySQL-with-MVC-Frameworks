<?php
	if(!file_exists("file.txt")){
		die("File not found");
	}else{
		$filename = "file.txt";
		$f = fopen($filename, 'w');
		fputs($f, "Good Morning.\n");
		fputs($f, "Have a nice day .\n");
		fclose($f);
		$f = fopen($filename, 'r');
		$text = fgets($f, 1024);
		$contents = fread($f, filesize($filename));
		print $text;
		print $contents;
		fclose($f);
	}
?>

