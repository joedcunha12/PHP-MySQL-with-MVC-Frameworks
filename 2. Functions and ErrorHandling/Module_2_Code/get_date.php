<!-- <?php
$date_array1 = getdate();
foreach($date_array1 as $key1 => $val1 )
{
   print "$key1 = $val1<br />";
}
$formated_date  = "Today's date: ";
$formated_date .= $date_array1['mday'] . "/";
$formated_date .= $date_array1['mon'] . "/";
$formated_date .= $date_array1['year'];
print $formated_date;
?> -->

<?php
$date_array1 = getdate();
foreach($date_array1 as $key1 => $val1){
   print "$key1 = $val1<br>";
}

$formated_date = "Today's date: ";
$formated_date .= $date_array1["mday"] . "/";
$formated_date .= $date_array1["mon"] . "/";
$formated_date .= $date_array1["year"];
print $formated_date;
?>