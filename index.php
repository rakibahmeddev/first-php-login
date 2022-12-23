
<?php

session_start();

if(isset($_SESSION['success'])){
    header('location: admin.php');
}



if(isset($_POST['login'])){

    define('EMAIL', 'admin@gmail.com');
    define('PASSWORD', '123');

    $email = $_POST['email'];
    $password = $_POST['password'];


    if($email == EMAIL && $password == PASSWORD){

        $_SESSION['success'] = ' ';

        header('location: admin.php');

    }
    else{
        $fail = "password deosn't match";
    }

    // 19minit video dekhechi 
    

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

<h2>Login</h2>
<form action="#" method="POST">
    <input type="text" name="email" placeholder="email" required>
    <input type="text" name="password" placeholder="password" required>
    <input type="submit" name="login" value="Login">
</form>

<p><?php 
    if(isset($fail)){
        echo $fail;
    };

?>
</p>

</body>
</html>