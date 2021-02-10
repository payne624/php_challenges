<!DOCTYPE html>
<html>
    <head>
        <title>
            find shorter string in longer one.
        </title>
    </head>
    <body>
        
        <form action="" method="get">
            <h2>Enter your email address</h2>
            <input type="text" name="email">
            <button>Submit</button>
        </form>
        
    </body>
<?php
 if(isset($_GET['email'])){
     $email=$_GET['email'];
     $i=0;
     $prefix=0;
     $domain=0;
     while($i<strlen($email)){
        while($email[$i]!="@"&&$i<strlen($email)-1){
            $prefix++;
            $i++;
        }
        break;    
    }
    $i++;
    while($i<strlen($email)){
        while($email[$i]!="."&&$i<strlen($email)-1){
            $domain++;
            $i++;
        }
        break;    
    }

     $rate="/@/i";
     $com="/.com/i";
     if(preg_match($rate,$email)&&preg_match($com,$email)&&$prefix>0&&$domain>0)
        echo "Email valid";
    else
        echo "Email not valid";
 }
 
?>
</html>