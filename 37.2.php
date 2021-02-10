<?php
    $num=1;
    $sum=0;
    $i=1;
        while($num<100){
        while($i<$num){
            if($num%$i==0&&$i!=1)
                break;
            $i++;
        }
        if($i==$num){
            echo $num.", <br />";
            $sum=$sum+$num;
        }
        $i=1;
        $num++;
    }
    echo "$sum";


?>