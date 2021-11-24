<!-- <html>
<head>
<title> PHP Function with three Parameters</title>
</head>
<body>
<?php
function addition($value1,$value2,$value3)
{
  $result = $value1+ $value2+$value3;
  return $result;
}
$sum = addition (10,20,30);
echo "Returned value from the function is: $sum ";
?>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Function with three Parameters</title>
</head>
<body>
<?php
function add($value1,$value2,$value3){
  $result = $value1 + $value2 + $value3;
  return $result;
}
$sum = add(10,20,30);
echo "this is sum of values: $sum";
?>

  
</body>
</html>