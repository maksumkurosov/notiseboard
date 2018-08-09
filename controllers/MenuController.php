<?php

class MenuController
{
    public function showMenu()
    {
        $menu = '
            <div class="dropdown">
                <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="#">
                Виберіть категорію <span class="caret"></span>
                </a>
                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">'
                    .$this->getMenu().
                '</ul>
            </div>';

        return $menu;
    }

    public function getMenu()
    {
        $menu_list = Menu::CategoryList();

        $tree = $this->getTree($menu_list);

        $cat_menu = $this->showCat($tree);

        return $cat_menu;

    }

    public function getTree($dataset) {
        $tree = array();

        foreach ($dataset as $id => &$node) {
            if (!$node['parent']) {
                $tree[$id] = &$node;
            } else {
                $dataset[$node['parent']]['childs'][$id] = &$node;
            }
        }
        return $tree;
    }

    public function tplMenu($category){
        $menu = '<li class="dropdown-submenu"><a href="?category='. $category['url'] .'" title="'. $category['name'] .'">'.
            $category['name'].'</a>';

        if(isset($category['childs'])){
            $menu .= '<ul class="dropdown-menu">'. $this->showCat($category['childs']) .'</ul>';
        }
        $menu .= '</li>';

        return $menu;
    }

    public function showCat($data){
        $string = '';
        foreach($data as $item){
            $string .= $this->tplMenu($item);
        }
        return $string;
    }

    public function blabla($url)
    {
       // $cat =
    }
}