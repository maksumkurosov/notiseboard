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
    public static function firstList ()
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM category WHERE parent = 0');

        $categoryList = array();
        while ($row = $result->fetch()) {
            $categoryList[$row['id']] = $row;
        }
        return $categoryList;
    }
    public static function subcategoryList ($id)
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM category WHERE parent ='.$id);

        $categoryList = array();
        while ($row = $result->fetch()) {
            $categoryList[$row['id']] = $row;
        }
        return $categoryList;
    }

    public static function CategoryNameList ()
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT name FROM category');

        $categoryList = array();
        while ($row = $result->fetch()) {
            $categoryList[$row['id']] = $row;
        }
        return $categoryList;
    }

}