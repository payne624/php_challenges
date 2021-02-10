<?php
    $var=filegroup("error.txt");
    //echo fileowner('24.php');
    $var2=fileowner("error.txt");
    echo posix_getpwuid($var2);
?>