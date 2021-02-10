<!DOCTYPE html>
<html>
    <head>
        <title>
        Armstrong number or not
        </title>
    </head>
    <body>
     <h2>Please input the number</h2>
    <form action="" method="get">
    <input type="num" name="arms">
    <button>Submit</button>
    </form>
    </body>

<?php

 if(isset($_GET['arms']))
    $num=$_GET['arms'];
    $i=0;
    $temp=0;
    while($i<strlen($num)){
        $temp+=intval($num[$i])**3;
        $i++;
    }
    $num="/".$_GET['arms']."/i";
    if(preg_match($num,$temp))
        echo "Armstrong number";
    else
        echo "Not an armstrong number";

?>
</html>