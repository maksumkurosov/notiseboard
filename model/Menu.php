<?php

class Menu extends App
{

    public static function CategoryList ()
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM category');

        $categoryList = array();
        while ($row = $result->fetch()) {
            $categoryList[$row['id']] = $row;
        }
        return $categoryList;
    }
}