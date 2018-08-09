<?php

class Category extends App
{
    public function getChildCategoryId($parentCatId)
    {
        $sql = 'SELECT * FROM category WHERE parent = :parent_id';

        $result = $this->db->prepare($sql);

        $result->bindParam(':parent_id', $parentCatId, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполняем запрос
        $result->execute();

        $childCategory = array();

        while ($row = $result->fetch()) {
            $childCategory[] = $row;
        }
        // Возвращаем данные
        return $childCategory;
    }

    public function getCurrentCategory($url)
    {
        // Текст запроса к БД
        $sql = 'SELECT * FROM category WHERE url = :url';

        // Используется подготовленный запрос
        $result = $this->db->prepare($sql);
        $result->bindParam(':url', $url, PDO::PARAM_STR);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполняем запрос
        $result->execute();

        // Возвращаем данные
        return $result->fetch();
    }

    public function getProductsByCategories($cat)
    {
        $sql = "SELECT * FROM advertisement WHERE category_id IN ($cat)";

        $result = $this->db->prepare($sql);

        //$result->bindParam(':categories', $cat, PDO::PARAM_STR);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполняем запрос
        $result->execute();
        //$result->debugDumpParams();
        $products = array();

        while ($row = $result->fetch()) {
            $products[] = $row;
        }
        // Возвращаем данные

        return $products;
    }
}