<!-- <?php
for($a=1;$a<=10;$a++)
{
 for ($b=1;$b<=$a;$b++)
 {
 echo "*";
 if($b<$a)
 {
 echo " ";
 }
 }
echo "</br>";
}
?> -->

<?php 
for($a=1;$a<=10;$a++){
    for($b=1;$b<=$a;$b++){
        print "*";
        if($b<$a){
            print " ";
        }
    }
    print "<br>";
}
?>