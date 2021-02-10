<!DOCTYPE html>
<html>
    <head>
        <title>
        The 4th exercise
        </title>
    </head>
<body>
    <h1>Please enter your name:</h1>
    <form method="get" action="">
    <input type="text" name="name" >
    <button>Submit name</button>
    </form>

<?php
    if(isset($_GET['name']))
?> 
    <h1><?php echo $_GET['name']; ?> </h1>
    
 
</body>

</html>