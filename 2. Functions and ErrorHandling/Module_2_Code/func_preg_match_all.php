<!-- <?php
$userinformation = "Name: <b>John </b> <br> Age: <b>30 years</b>";
preg_match_all ("/<b>(.*)<\/b>/U", $userinformation, $pat_array);
print $pat_array[0][0]." <br> ".$pat_array[0][1]."\n";
?> -->

<?php 
$userInformation = "Name: <b>John </b> <br> Age: <b> 30 Years</b>";
preg_match_all ("/<b>(.*)<\/b>/U", $userInformation,$pat_array);
print $pat_array[0][0]." <br> ".$pat_array[0][1]."\n";
?>