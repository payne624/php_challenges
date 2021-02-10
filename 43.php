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
    <h2>Enter list 1</h2>
     <input type="text" name="list_1">
     <h2>Enter list 2</h2>
     <input type="text" name="list_2">
     <button>Submit</button>
     </form>
</body>
<?php
    if(isset($_POST['list_1'])&&isset($_POST['list_2'])){
        $list_1=$_POST['list_1'];
        $list_1_len=strlen($list_1);
        if($list_1[$list_1_len-1]!=",")
            $list_1=$list_1.",";
        $list_1_array=array();
        $single="";
        $i=0;
        while($i<$list_1_len){
            if($list_1[$i]==","){
                array_push($list_1_array,$single);
                $single="";
                $i++;
            }
            else{
            $single=$single.$list_1[$i];
            $i++;
            }
           
        } $list_2=$_POST['list_2'];
        $list_2_len=strlen($list_2);
        if($list_2[$list_2_len-1]!=",")
            $list_2=$list_2.",";
        $list_2_array=array();
        $single="";
        $i=0;
        while($i<$list_2_len){
            if($list_2[$i]==","){
                array_push($list_2_array,$single);
                $single="";
                $i++;
            }
            else{
            $single=$single.$list_2[$i];
            $i++;
            }
           
        }


       $list_3_array=array();
       $list_3_array_len=count($list_1_array)<count($list_2_array)?count($list_1_array):count($list_2_array);
       $j=0;
       $temp=0;
       while($j<$list_3_array_len){
            $temp=intval($list_1_array[$j])*intval($list_2_array[$j]);
            array_push($list_3_array,$temp);
            $j++;
       }
        print_r($list_1_array);
        echo "<br />";
        print_r($list_2_array);
        echo "<br />";
        print_r($list_3_array);
        echo "<br />";
    }
?>
</html>