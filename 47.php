<!DOCTYPE html>
<html>
    <head>
        <title>
            Document
        </title>
    </head>
    <body>
    <h2>Enter two numbers separated by space</h2>
    <form action="" method="post">
    <input type="text" name="num">
    <button>Submit</button>
    </form>
    </body>
<?php
    if(isset($_POST['num'])){
        $num=$_POST['num'];
        $num_length=strlen($num);
        if($num[$num_length-1]!=";")
            $num=$num.";";
        
        $i=0;
        $num_array=array();
        $single="";
        $sum=0;
        while($i<$num_length){
         if($num[$i]==" "||$num[$i]==";"){
             array_push($num_array,$single);
             $single="";
             $i++;
         }
         else{
             $single=$single.$num[$i];
             $sum=$sum+intval($num[$i]);
             $i++;
         }
            
        }
        
        echo "<br />";
        print_r($num_array);
        echo "<br />";
        echo "$sum";
    }


?>
</html>