<?php

//if (empty($_POST['category_id'])) {
//    require_once 'view/index.php';
//}

// elseif ($_GET['page'] == 'login') {
//    require_once 'view/auth/login.php';
//}

if (isset($_GET['page']) && $_GET['page']=='login') {
    require_once 'view/auth/login.php';
}

if (isset($_GET['page']) && $_GET['page']=='registration') {
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


if (isset($_POST['exit'])) {
$user::unsetSessionName();
}


//if (isset($_POST['category_id'])) {
//    $subcategoryList = $menu->getSubcategoryById($_POST['category_id']);
//    $blalba = [];
//
//    $blalba[] = $subcategoryList;
//    $ggg =  json_encode($blalba);
//    print_r($ggg);
//    return $ggg;
//    print_r($subcategoryList);
//    exit();
//}

//if (isset($_POST['category_id'])) {
//    $subcategoryList = $menu->getSubcategoryById($_POST['category_id']);
//    print_r($subcategoryList);
//
//}

if (isset($_GET['page']) && $_GET['page']=='create-advertisement') {
    //$categoryList = $modelMenu::CategoryList();
    $categoryList = $menu->getFirstList();

    if (!empty($_SESSION['email'])) {
        require_once 'view/parts/add_advertisement.php';
    } else {
        echo 'Ви хто такі? Ідіть нахуй звідси!';
    }
}
if (isset($_POST['form_login'])) {
    //$user::checkUserData($_POST['email'],$_POST['password']);
    if ($user::checkUserData($_POST['email'],$_POST['password'])) {
        $user::setSessionName($_POST['email']);
    }
}

if (isset($_POST['form_registration'])) {
    $user::checkEmailExists($_POST['email'],$_POST['login'],$_POST['password']);
}


//require_once 'view/index.php';

?>