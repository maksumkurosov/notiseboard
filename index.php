<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

define('ROOT', dirname(__FILE__));

//echo ROOT.'/config/Autoload.php';
//require_once ('config/Autoload.php');

require_once (ROOT.'\config\Autoload.php');

$userController = new UserController();
//echo $userController->test();
$user = new User();
$category = new Category();
require_once 'view/maine.php';
?>
<html>
<head>
    <title>Noticeboard</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="dropdown.css"  rel="stylesheet">
</head>
<body>

</body>

<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/popper.min.js" type="script"></script>
<script src="bootstrap/js/bootstrap.js" type="script"></script>
<script src="bootstrap/js/bootstrap.bundle.js"></script>