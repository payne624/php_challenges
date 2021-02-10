<?php
    //echo $_SERVER['HTTP_REFERER']."<br>";
    $len=strlen($_SERVER['HTTP_REFERER']);
    $i=0;
    $string="";
    while($i<$len){
        if($_SERVER['HTTP_REFERER'][$i]==":")
            break;
        $string=$string.$_SERVER['HTTP_REFERER'][$i];
        $i++;
    }
    echo  "Your page is called from ".$string;
    
?>