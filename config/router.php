<?php

if (empty($_GET)) {
    require_once 'view/index.php';
}
// elseif ($_GET['page'] == 'login') {
//    require_once 'view/auth/login.php';
//}


if (isset($_GET['page'])&& $_GET['page']=='login') {
    require_once 'view/auth/login.php';
}

if (isset($_GET['page'])&&$_GET['page']=='registration') {
    require_once 'view/auth/registration.php';
}

if (isset($_GET['category'])) {
    $info= $categoryController->showCatProduct($_GET['category']);
    require_once 'view/parts/advertisement.php';
}

if (isset($_GET['item'])) {
    $item = $advertisement->getCurrentAdvertisement($_GET['item']);
    require_once 'view/parts/currentItem.php';
}

if (isset($_GET['exit'])) {
    echo 'qweqweqwe';
}

if (isset($_POST['form_login'])) {
    $user::checkUserData($_POST['email'],$_POST['password']);
    if ($user::checkUserData($_POST['email'],$_POST['password'])) {
        $user::setSessionName($_POST['email']);
    }
}

if (isset($_POST['form_registration'])) {
    $user::checkEmailExists($_POST['email'],$_POST['login'],$_POST['password']);
}
?>