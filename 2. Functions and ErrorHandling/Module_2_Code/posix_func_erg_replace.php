<?php
$publication = "Book Publication Number: 1999";
$publication = ereg_replace("([0-9]+)", "2000", $publication);
print $publication;
?>