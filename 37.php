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
    <h2>Input the number</h2>
    <input type="text" name="num">
    <button>Submit</button>
    </form>

</body>
<?php
    if(isset($_POST['num'])){
        $num=intval($_POST['num']);
        $i=1;
        while($i<$num){
            if($num%$i==0&&$i!=1)
                break;
            $i++;
        }
        if($i==$num)
            echo "Number is prime";
    }




?>
</html>
