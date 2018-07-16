<?php
require_once 'header.php';

$arr = $category->CategoryList();

$tree = $category->getTree($arr);

$cat_menu = $category->showCat($tree);

echo '<ul>'. $cat_menu .'</ul>';
?>
<div class="dropdown">
    <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="#">
        Виберіть категорію <span class="caret"></span>
    </a>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">

        <li class="dropdown-submenu">
            <a tabindex="-1" href="#">Транспорт</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">Авто</a></li>
                <li class="dropdown-submenu">
                    <a href="#">Мото</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Хонда</a></li>
                        <li><a href="#">Кава</a></li>
                    </ul>
                </li>
                <li><a href="#">Повітряний</a></li>
                <li><a href="#">Вело</a></li>
            </ul>
        </li>
        <li><a href="#">Нерухомість</a></li>
        <li class="dropdown-submenu">
            <a tabindex="-1" href="#">Hover me for more options</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">Second level</a></li>
                <li class="dropdown-submenu">
                    <a href="#">Even More..</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">3rd level</a></li>
                        <li><a href="#">3rd level</a></li>
                    </ul>
                </li>
                <li><a href="#">Second level</a></li>
                <li><a href="#">Second level</a></li>
            </ul>
        </li>
    </ul>
</div>

<div class="container col-sm-4">
    <form method="post" action="#">
        <div class="form-group">
            <label for="formGroupExampleInput">Оголошення "tralivali":</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
         </div>
    </form>
</div>
    <div class="dropdown">
        <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="#">
            Виберіть категорію <span class="caret"></span>
        </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
            <?php echo $cat_menu?>
        </ul>
    </div>
