<?php
$ren=$rem='';
?>
<?php

    
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["name"])){
            $ren="name can't be empty";
        }
            else{
                $na =trim($_POST["name"]);
                  echo " name:" .$na."<br>";
                }
        
        if(empty($_POST["email"])){
            $rem="email can't be empty";
        } 
        else{
            $e =$_POST["email"];
             echo " email:" .$e."<br>";
       }

      
    }


?>
<html>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name">*<?php echo $ren;?></td>
        
        </tr>
    <tr>
            <td>Email:</td>
            <td><input type="text" name="email">*<?php echo $rem; ?></td>
        
        </tr>
     <tr>
            <td></td>
            <td><input type="submit" name="s" value="Send"></td>
        
        </tr>
    
    
    
    </table>
</form>
    
    </body>
</html>