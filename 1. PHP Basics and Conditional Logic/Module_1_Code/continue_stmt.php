<!-- <?php
	for($x=1; $x<10; $x++){
		If($x % 2 !=0)
			Continue;
		Print("$x <br>");		
	}//end of for
?> -->

<?php 
for($x=1;$x<10;$x++){
	if($x % 2 !=0){
		continue;
	}
	print("$x<br>");
}
?>