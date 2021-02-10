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
    <h2>Input two number for modulus operation</h2>
    <input type="text" name="num_1">
    <input type="text" name="num_2">
    <button>Submit</button>
    </form>
</body>
<?php
    if(isset($_POST['num_1'])&&isset($_POST['num_2'])){
        $num_1=intval($_POST['num_1']);
        $num_2=intval($_POST['num_2']);
        if($num_1<$num_2)
            echo "Modulo is $num_1";
        else{
            $temp=$num_2;
            while($temp<$num_1)
                $temp+=$num_2;
            $temp-=$num_2;
            $temp=$num_1-$temp;
            echo "Modulo is $temp";
        }
        //echo $num_1.$num_2;
    }
?>
</html>
