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
    <h2>Enter the list of numbers separated by comma</h2>
    <input type="text" name="list">
    <button>Submit</button>
    </form>
</body>
<?php
 if(isset($_POST['list'])){
     $list=$_POST['list'];
     $list_length=strlen($list);
     if($list[$list_length-1]!=",")
        $list=$list.",";
     $list_arr=array();
     $i=0;
     $single="";
     while($i<$list_length){
        if($list[$i]==","){
            array_push($list_arr,$single);
            $single="";
            $i++;
            continue;
        }
        $single=$single.$list[$i];
        $i++;

     }
     /* $list_arr_len=count($list_arr);

     echo $list_arr_len;
     $i=0;
     while($i<$list_arr_len){
         $pattern="/".$list_arr[$i]."/i";
         $j=$i+1;
         while($j<$list_arr_len){
            if(preg_match($pattern,$list_arr[$j])){
                unset($list_arr[$j]);
                $list_arr_len=count($list_arr);
            }
            $j++;
         }
         $i++;
     }
       */
      $list_arr=array_unique($list_arr);
     print_r($list_arr);
 }

?>
</html>

