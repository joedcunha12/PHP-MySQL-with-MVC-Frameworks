 <?php
	function myException($exception){
		echo "<b>Exception:</b> ". $exception->getMessage();
	}//end of function

	set_exception_handler('myException');
	throw new Exception('Uncaught Exception occurred');
?> 

<!-- <?php 
function myexception1($exception){
	echo "<b>Exception:</b>". $exception->getMessage();
}
set_exception_handler("myexeption1");
throw new Exception("Uncaught Exception occurred");
?> -->