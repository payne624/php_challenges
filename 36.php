<!DOCTYPE html>
<html>
    <head>
        <title>
            find shorter string in longer one.
        </title>
    </head>
    <body>
        
        <form action="" method="get">
            <h2>Enter the short string</h2>
            <input type="text" name="short">
            <h2>Enter the longer string</h2>
            <input type="text" name="longer">
            <button>Submit</button>
        </form>
        
    </body>
<?php
 if(isset($_GET['short'])&&isset($_GET['longer'])){
     $short="/".$_GET['short']."/i";
     $long=$_GET['longer'];
     if(preg_match($short,$long))
        echo "String Exist";
    else
        echo "String not Exist";
 }
 
?>
</html>