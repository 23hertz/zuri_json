<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION['uname'])){
        header('location:index.php');
    }else{
        echo "welcome ". $_SESSION['uname']."</br>";
    }
    ?>

<a href="logout.php">LogOut</a>
</body>
</html>