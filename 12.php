<!DOCTYPE html>
<html>
    <head>
        <title>
            12th exercise
        </title>
    </head>
    <body>
        <h1>Enter your email</h1>
        <form method="get" action="">
        <input type="text" name="email">
        <button>Submit</button>
        </form>
        <?php 
        if(isset($_GET['email']))
            if(filter_var($_GET['email'],FILTER_VALIDATE_EMAIL))
                echo "valid email";
            else
                echo "invalid email";
        ?>
    </body>
</html>