<?php

 $var= $_SERVER['SERVER_SOFTWARE'];
 $i=0;
 $j=0;
 while($i<strlen($var)){
     if($var[$i]==('p'||'P')){
        $str[$j]=$var[$i];
        $j=$i;
        $k=1;
        echo $var[$i];
        while($j<strlen($var)){
            $str[$k]=$var[$j];
            $j++;
            echo $var[$j];
        }
        
     }
    echo $var[$i];
    $i++;
    }
?>