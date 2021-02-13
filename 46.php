<!DOCTYPE html>
<html>
    <head>
        <title>
            Highest Three
        </title>
    </head>
    <body>
        <form action="" method="post">
        <h2>Enter 8 building height separated by space</h2>
        <input type="text" name="height">
        <button>Submit</button>
        </form>
    </body>
<?php
    if(isset($_POST['height'])){
        $height=$_POST['height'];
        $height_len=strlen($height);
        if($height[$height_len-1]!=";")
            $height=$height.";";
        $height_array=array();
        $single="";
        $i=0;
        while($i<$height_len){
            if($height[$i]==" "||$height[$i]==";"){
                array_push($height_array,$single);
                $single="";
                $i++;
            }
            else{
                $single=$single.$height[$i];
                $i++;
            }
        }
        print_r($height_array);
        echo "<br />";
        $height_array_len=count($height_array);
        $j=0;
        while($j<$height_array_len){
            $p=$height_array[$j];
            $q=$j+1;
            while($q<$height_array_len){
                if($height_array[$j]<$height_array[$q]){
                    $temp=$height_array[$j];
                    $height_array[$j]=$height_array[$q];
                    $height_array[$q]=$temp;
                }
                    $q++;
            }
            $j++;

        }
        print_r($height_array);
        echo "<br />";
        for($i=0;$i<3;$i++)
            echo $height_array[$i]."<br />";
    }

?>
</html>