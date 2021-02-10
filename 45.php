<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="digit">
    <button>submit</button>
    </form>
    
</body>
<?php
    if(isset($_POST['digit'])){
        $digit=$_POST['digit'];
        $digit_len=strlen($digit);
        $i=0;
        $digit_array=array();
        while($i<$digit_len){
            array_push($digit_array,$digit[$i]);
            $i++;
        }
        print_r($digit_array);
        echo "<br />";
        $sum=0;
        foreach($digit_array as $single_digit)
            $sum+=intval($single_digit);

        echo $sum;
    }

?>
</html>
