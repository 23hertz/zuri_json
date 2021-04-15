<?php
session_start();

if(isset($_POST['submit'])){
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pword= $_POST['password'];

    $filetxt = 'datas.txt';
    
       $input_data = array(
        'uname' => $uname,
        'email' => $email,
        'pword' => $pword,
    );

    $_SESSION['uname'] = $uname;
    $_SESSION['email'] = $email;
    
    $filetxt = 'datas.txt';

    $fp = fopen($filetxt,"a+");

    if(!$fp){
        echo 'file not found';
    }else{
        $jsondata = json_encode($input_data);

        if(!$jsondata){
            echo "not encoded";
        }else{
            fwrite($fp,$jsondata."\r\n");
            header('location:index.php');
          
        }
    }

    fclose($fp);

}
?>

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
    Username:<input type="text" name="username" id="" required></br></br>
    password:<input type="password" name="password" id="" required></br></br>
    Email:<input type="text" name="email" id="" required></br></br>
    
    <input type="submit" name="submit" value="Register">
    </form>

    <p>dont have an account?</p><a href="index.php">login</a>
    
</body>
</html> 

