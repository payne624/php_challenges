<!DOCTYPE html>
<html>
    <head>
        <title>
            Three sides of the right angle triangle
        </title>
    </head>
    <body>
    <form action="" method="post">
        <h2>Enter three sides of the triangle separated by space</h2>
        <input type="text" name="sides">
        <button>Submit</button>
    </form>
    </body>
<?php
    if(isset($_POST['sides'])){
        $sides=$_POST['sides'];
        $sides_len=strlen($sides);
        if($sides[$sides_len-1]!=";")
            $sides=$sides.";";
        $sides_array=array();
        $single="";
        $i=0;
        while($i<$sides_len){
            if($sides[$i]==" "||$sides[$i]==";"){
                array_push($sides_array,$single);
                $single="";
                $i++;
            }
            else{
                $single=$single.$sides[$i];
                $i++;
            }
        }
        echo "<br />";
        $sides_array_len=count($sides_array);
        $j=0;
        while($j<$sides_array_len){
            $p=$sides_array[$j];
            $q=$j+1;
            while($q<$sides_array_len){
                if($sides_array[$j]<$sides_array[$q]){
                    $temp=$sides_array[$j];
                    $sides_array[$j]=$sides_array[$q];
                    $sides_array[$q]=$temp;
                }
                    $q++;
            }
            $j++;

        }
        $longest_sides=intval($sides_array[0]);
        $sq_two_sides=0;
        $sq_long_sides=0;
        for($i=1;$i<3;$i++)
        {
            $sq_two_sides+=(intval($sides_array[$i])**2);
        }
        $sq_long_sides=$longest_sides**2;
        if($sq_long_sides==$sq_two_sides)
            echo "three sides form the right angle triangle";
        else
            echo "three sides do not form the right angle traingle";

    }

?>
</html>