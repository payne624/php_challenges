<!DOCTYPE html>
<html>
    <head>
        <title>
        14th exercise
        </title>
    </head>
    <body>
    <h1>Enter File Name</h1>
    <form action="" method="post">
    <input type="text" name="site">
    <button>Submit</button>
    </form>
    <?php
        if(isset($_POST['site']))
            echo show_source('http://www.'.$_POST['site']);
        else
            echo "no input given";
    ?>
    </body>
</html>