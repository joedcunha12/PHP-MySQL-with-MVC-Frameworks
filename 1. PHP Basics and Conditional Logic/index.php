<?php
function staticVar(){
    static $var =0;
    $var++;
    
    print $var;
    print "<br>";
}

staticVar();
staticVar();
staticVar();
staticVar();
staticVar();
staticVar();
staticVar();
staticVar();
?>