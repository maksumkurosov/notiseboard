<?php
require_once '../model/User.php';
$user = new UserController();
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['login'])) {
    if(UserController::checkUserData($email,$password)) {
        //echo 'yes';
        header('Location:../index.php');
    } else {
        echo 'Неправельний логін або пароль';
    }

}

if (isset($_POST['registration'])) {
    if (!UserController::checkEmailExists($email)) {
        if(UserController::register($login,$email,$password)) {
            echo 'Ви успішло зареєстровані'.'<a href="../index.php">На головну</a>';
        }
    } else {
        echo 'Такий Email вже використовується, введіть інший';
    }

}