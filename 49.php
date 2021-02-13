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
    <input type="text" name="values">
    <button>Submit</button>
    </form>
</body>
<?php
    if(isset($_POST['values'])){
        $values=$_POST['values'];
        $values_len=strlen($values);
        if($values[$values_len-1]!=";")
            $values=$values.";";
        $values_array_first=array();
        $values_array_second=array();
        $flip=0;
        $single="";
        $i=0;
        while($i<$values_len){
            if($values[$i]==" "||$values[$i]==";"){
                if($flip==0){
                    array_push($values_array_first,intval($single));
                    $flip=1;
                    $single="";
                    $i++;
                }
                else
                {
                    array_push($values_array_second,intval($single));
                    $flip=0;
                    $single="";
                    $i++;
                }
            }
            else{
                $single=$single.$values[$i];
                $i++;
            }
        }
        print_r($values_array_first);
        print_r($values_array_second);

        $j=0;
        if($values_array_first[$j]>$values_array_second[$j]){
            $k=0;
            $l=$values_array_first[$j];
            while($l!=$values_array_second[$j]){
                $l+=$k;
                $k++;
            }
        }

    }
?>
</html>