<?php
 $var="ravi";
$pattern="/PAV/i";
 if(preg_match($pattern,$var))
    echo "match found";
 else
    echo "match not found";
?>
