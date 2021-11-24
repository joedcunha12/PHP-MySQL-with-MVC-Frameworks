<!-- <?php
	$yy = 4;

	function local_variable () {
		$yy = 0;
		print "\$yy inside function is $yy.";
	}

	local_variable();
	print "<br>\$yy outside of function is $yy.";

	?> -->

	<?php 
	$yy = 4;
	function localvariable() {
		$yy=0;
		print "\$yy inside function is $yy";
	}

	localvariable();
	print "<br>\$yy outside of function is $yy.";