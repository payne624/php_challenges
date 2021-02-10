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
    <input type="text" name="txt">
    <button>Submit</button>
    </form>
</body>
<?php
    if(isset($_POST['txt'])){
        $txt=$_POST['txt'];
        $txt_len=strlen($_POST['txt']);
        $i=0;
        $txt_char="";
        $char_array=array();
        while($i<$txt_len){
            $txt_char="/".$txt[$i]."/i";
            $j=$i+1;
            while($j<$txt_len){
                if(preg_match($txt_char,$txt[$j])){
                    array_push($char_array,$txt_char);
                    echo $txt_char."<br />";
                    echo $txt[$j]."<br />";
                    $txt_char="match_found";
                    
                    break;
                }
                $j++;
            }
            if($txt_char!="match_found"){
                foreach($char_array as $single_char){
                    if(preg_match($single_char,$txt_char)){
                        echo "inside_not_unique <br />";
                        $txt_char="not_unique";
                        break;
                    }
                }
            }
            if($txt_char!="not_unique"){
                echo $txt_char;
                break;
            }
            $i++;
            $txt_char="";


        }
      print_r($char_array);
    }
?>
</html>