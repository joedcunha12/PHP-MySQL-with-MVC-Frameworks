<!-- <?php
$ip = "192.168.1.117"; 
$iparr = preg_split ("/\./", $ip); 
print "$iparr[0] <br />";
print "$iparr[1] <br />" ;
print "$iparr[2] <br />"  ;
print "$iparr[3] <br />"  ;
?> -->

<?php
$ip = "192.168.1.117";
$ipsplit = preg_split("/\./",$ip);
print "$ipsplit[0] <br>";
print "$ipsplit[1] <br>";
print "$ipsplit[2] <br>";
print "$ipsplit[3] <br>";

?>
