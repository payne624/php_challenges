<!DOCTYPE html>
<html>
    <head>
        <title>
        15th Exercise
        </title>
    </head>
    <body>
        <h1>Enter File Name </h1>
        <form method="POST" action="">
            <input type="text" name="filename">
            <button>Submit</button>
        </form>
<?php
    if(isset($_POST['filename'])){
        echo date("F D Y H:i:s",filemtime($_POST['filename']);
    }
    else
        echo "no input given";
?>
</body>
</html>