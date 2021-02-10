<?php
$var= version_compare("4",PHP_VERSION);
$var1=version_compare("5",PHP_VERSION);
$var2=version_compare("6",PHP_VERSION);
$var3=version_compare("7",PHP_VERSION);
$var4=version_compare("8",PHP_VERSION);
if($var=='-1')
    echo "version is greater than 4 <br />";
else
    echo "version is less than 4 <br />";

if($var1=='-1')
    echo "version is greater than 5 <br />";
    else
    echo "version is less than 5 <br />"; 

if($var2=='-1')
    echo "version is greater than 6 <br />";
else
    echo "version is less than 6 <br />";
    
if($var3=='-1')
    echo "version is greater than 7 <br />";
else
    echo "version is less than 7 <br />";

if($var4=='-1')
    echo "version is greater than 8 <br />";
else
    echo "version is less than 8 <br />";

    //write also the for loop version
?>

