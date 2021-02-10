<!DOCTYPE html>
<html>
    <head>
        <title>
            Covert word into digit
        </title>
    </head>
    <body>
        <h2>Input digit in word separated by semicolon</h2>
        <form action="" method="get">
            <input type="text" name="digit">
            <button>Submit</button>
        </form>
    <body>
<?php
$pattern="/one/i";
$pattern2="/two/i";
$pattern3="/three/i";
$pattern4="/four/i";
$pattern5="/five/i";
$pattern6="/six/i";
$pattern7="/seven/i";
$pattern8="/eight/i";
$pattern9="/nine/i";
$pattern0="/zero/i";

 if(isset($_GET['digit'])){
     $digit=$_GET['digit'];
     $num=strlen($digit);
     if($digit[strlen($digit)-1]!=';')
        $digit=$digit.';';
     $i=0;
     $single="";
     while($i<strlen($digit)){
        while($digit[$i]!=";"){
            $single=$single.$digit[$i];
            $i++;
        }
        echo $single;
        echo (!preg_match($pattern2,$single));
        switch($single){
            case (!preg_match($pattern,$single)):
                echo "1";
                break;
            case (preg_match($pattern2,$single)):
                echo "2";
                break;
            case (preg_match($pattern3,$single)):
                echo "3";
                break;
            case (preg_match($pattern4,$single)):
                echo "4";
                break;
            case (preg_match($pattern5,$single)):
                echo "5";
                break;
            case (preg_match($pattern6,$single)):
                echo "6";
                break;
            case (preg_match($pattern7,$single)):
                echo "7";
                break;
            case (preg_match($pattern8,$single)):
                echo "8";
                break;
            case (preg_match($pattern9,$single)):
                echo "9";
                break;
            case (preg_match($pattern0,$single)):
                echo "0";
                break;
        }

        $single="";
        $i++;
    }

//echo preg_match($pattern,$var);

 }
?>
</html>