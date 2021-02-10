<?php

$var_a=5;
$var_b=6;
echo "value of a: $var_a <br />";
echo "value of b: $var_b <br />";
swap();
echo "value of a: $var_a <br />";
echo "value of b: $var_b <br />";

function swap(){
    echo "running function swap <br />";
    global $var_a,$var_b;
    $temp=$var_a;
    $var_a=$var_b;
    $var_b=$temp;
    
}

?>