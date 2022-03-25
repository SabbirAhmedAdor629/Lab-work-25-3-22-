<!DOCTYPE html>

<head>
   
    <title>Document</title>
</head>
<body>
    <?php

    

    $con = mysqli_connect('localhost','root', '');
    if(!$con){
        echo 'Not connected';
    }
    if(!mysqli_select_db($con,'lab_test')){
        echo 'Database is not selected';
    }

    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $sql = "INSERT INTO user(user_name, user_email) VALUES('$name','$email')";
    if(!mysqli_query($con, $sql)){
        echo 'Not inserted';
    }
    else
    { 
        echo 'Inserted';
    }

    header("refresh:3, url= demo.html");
    
    ?>
</body>
</html>