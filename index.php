<?php

    if(isset($_POST['login'])){
    $uname = $_POST['username'];
    $pword = $_POST['password'];

    $arr = array(
      'uname' => $uname,
      'pword' => $email
    );


     $myfile = file_get_contents("datas.txt", "a") or die("Unable to open file!");

  
     if(!$myfile){
       echo 'file not found';
       
     }else{


      while(!feof($myfile)){

        $lines = json_decode(fgets($myfile),true);

        if($arr['uname'] == $lines['uname'] && $arr['pword'] == $lines['pword']){
          header('location:hompage.php');
        }else{
          echo 'user not foumnd';
        }

        
      }
     }
     

    fclose($myfile); 

    
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc ument</title>
</head>
<body>
  <div class="error">
 
  </div>
    <form action="" method="post">
    <input type="text" name="username" id="" required></br></br>
    <input type="text" name="password" id="" required></br></br>
    <input type="submit" name="login" value="submit">
    </form>

    <p>dont have an account?</p><a href="register.php">Register</a>
    
</body>
</html> 
