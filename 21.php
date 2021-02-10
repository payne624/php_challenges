<?php
    function bigger(int $var){
        $x=($var<10)?0:(($var<20)?10:(($var<30)?20:30));
        return $x;
    }
    $val=bigger(36);
    switch($val){
        case 0:
            echo "number is less than 10";
            break;
        case 10:
            echo "number is greater than 10 and less than 20";
            break;
        case 20:        
            echo "number is greater than 20 and less than 30";
            break;
        case 30:
            echo "number is greater than 30";
            break;
    }

?>