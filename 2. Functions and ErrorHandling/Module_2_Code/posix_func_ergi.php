<?php
$password = "Edureka";
if (! eregi ("[[:alnum:]]{8,10}", $password)){
   print "Invalid password! Passwords must be from 8 - 10 chars";
}else{
  print "Valid password";
}
?>
