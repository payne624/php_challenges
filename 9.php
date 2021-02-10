<?php  ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            9th exercise
        </title>
    </head>
    <body>
        <h1>
        Please enter the text
        </h1>
        <form method="get" action="">
        <input type="text" name="name" />
        <button>Submit Text</button>
        </form>
        <?php
        if (isset($_GET['name'])){
            $len= strlen($_GET['name']);
            $i=0;
            while($i<$len){
                if (!$i)
                echo "<span style='color:blue;'>".$_GET['name'][$i]."</span>";
                else
                echo "<span>".$_GET['name'][$i]."</span>";
                $i++;
                 }
                 } ?>
    </body>
</html>