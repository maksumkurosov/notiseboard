
<?php

define('ROOT', dirname(__FILE__));

require_once (ROOT.'\config\Autoload.php');

$menu = new MenuController();

if (isset($_POST['category_id'])) {
    $subcategoryList = $menu->getSubcategoryById($_POST['category_id']);
    $blalba = [];

    $blalba[] = $subcategoryList;
    $ggg =  json_encode($blalba);
    print_r($ggg);
    return $ggg;
    print_r($subcategoryList);
    exit();
}?>

    <div class="row">
        <div class="col-md-4">
            <ul class="list-group select-categories">
                <?php
                foreach ($subcategoryList as $key =>$item):?>
                    <li class="list-group-item" data-id="<?php echo ($item['id'])?>"><?php echo($item['name']) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

