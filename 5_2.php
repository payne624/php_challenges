<!DOCTYPE html>
<html>
    <head>
        <title>
            6th Exercise
        </title>
    </head>
    <body>
        <h1>
        List of Components-Scheme,Host,Path
        </h1>
<?php
    echo "URL ".$_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo "Scheme  ".$_SERVER['SERVER_PROTOCOL'];
    echo "<br>";
    echo "Host  ".$_SERVER['HTTP_HOST'];
    echo "<br>";
    echo "Path  ".$_SERVER['SCRIPT_NAME'];
?>
    </body>
</html>