<?php

use App\controller\UserController;
require_once realpath(__DIR__ . '../../vendor/autoload.php');
require_once realpath(__DIR__ . '../../config.php');

session_start();
    if (isset($_SESSION['login']) && $_SESSION['login'] === true){
        header('location: /');
    }
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $data = UserController::login($_POST['email'], $_POST['password']);
        if (isset($data)){
            $_SESSION["login"] = true;
            $_SESSION["email"] = $data['email'];
            $_SESSION["name"] = $data['name'];
            header('location: /');
//            var_dump($data);
        }
    }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>HTML5 Login Form with validation Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="asset/css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="login-form-wrap">
  <h2>Login</h2>
  <form id="login-form" method="post" action="/view/login.php">
    <p>
    <input type="email" id="email" name="email" placeholder="email" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="username" name="password" placeholder="password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" value="Login">
    </p>
  </form>
  <div id="create-account-wrap">
    <p>Not a member? <a href="#">Create Account</a><p>
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
<!-- partial -->
  
</body>
</html>
