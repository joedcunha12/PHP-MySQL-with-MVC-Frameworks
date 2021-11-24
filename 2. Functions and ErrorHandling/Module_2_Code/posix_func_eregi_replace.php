 <?php
$publication = "Copyright  1999";
$publication = eregi_replace("([a-z]+)", "&copy;", $publication);
print $publication;
?> 

<!-- <?php

$publication = "Copyright 1999";
$publication = eregi_replace("([a-z]+)","&copy",$publication);
print $publication;
?> -->