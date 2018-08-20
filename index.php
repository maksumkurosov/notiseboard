<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();
ob_start();

define('ROOT', dirname(__FILE__));

require_once (ROOT.'\config\Autoload.php');
//print_r($objects);
$menu = new MenuController();
$modelMenu = new Menu();
$user = new UserController();
$advertisement = new Advertisement();
$category = new Category();
$categoryController = new CategoryController();
//if (isset($_POST['category_id'])) {
//    $subcategoryList = $menu->getSubcategoryById($_POST['category_id']);
//    print_r($subcategoryList);
//    exit();
//}
require_once (ROOT.'\view\index.php');
//require_once (ROOT.'\config\router.php');


//require_once 'view/index.php';


?>

