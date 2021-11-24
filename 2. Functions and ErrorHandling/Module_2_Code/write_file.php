<!-- <?php
$filename = "./tmp/newfile.txt";
$file = fopen( $filename, "w" );
if( $file == false ){
	echo ( "Error in opening new file" );
	exit();
}

fwrite( $file, "This is a simple test\n" );
fclose( $file );

if(file_exists( $filename ) ){
	$filesize = filesize( $filename );
	$msg = "File created with name $filename ";
	$msg .= "containing $filesize bytes";
	Echo($msg);
}else{
	echo ("File $filename does not exit" );
}
?>   -->

<?php
$filename = "./tmp/sfsfs..xlsx";
$file = fopen( $filename, "w" );
if( $file == false )
{
 echo ( "Error in opening file" );
 exit();
}
fwrite($file,"This is a sample test\n");
fclose($file);

if(file_exists($filename)){
	$filesize = filesize($filename);
	$msg = "File created with name $filename";
	$msg .= " containing $filesize bytes";
	Echo($msg);
} else {
	echo ("file $filename does not exit");
}

?>