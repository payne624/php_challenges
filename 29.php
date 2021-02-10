<?php
$num=1;
 foreach(get_loaded_extensions() as $var){
     echo $var."<br />";
     echo "<br />";
     foreach(get_extension_funcs($var) as $fun)
        echo $fun."<br />";
        echo "<br />";
 }
?>