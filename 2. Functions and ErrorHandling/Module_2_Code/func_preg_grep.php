<!-- <?php
$foods = array("pizza", "steak", "fish", "crab","chicken");
$p_foods = preg_grep("/p(\w+)/", $foods);
print "Found food is " . $p_foods[0];
?> -->

<?php
$food = array("pizza","steak","fish","crab","chicken");
$p_foods = preg_grep("/p(\w+)/",$food);
print "Found food is " . $p_foods[0];
?>
