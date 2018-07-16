<?php

class Category
{

    public function CategoryList ()
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM category');


        $categoryList = array();
        while ($row = $result->fetch()) {
            $categoryList[$row['id']] = $row;
        }
        return $categoryList;
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
        $menu = '<li class="dropdown-submenu"><a href="#" title="'. $category['name'] .'">'.
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

    public function getNoteByCategory ($categoryName)
    {

    }


}