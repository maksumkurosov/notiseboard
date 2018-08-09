<?php

class CategoryController
{
    protected $cat;
    public $categoriesId = [];

    public function __construct()
    {
        //require_once 'model/Category.php';
        $this->cat = new Category();
    }

    public function showCatProduct($url)
    {
        $list = null;
        $category = $this->cat->getCurrentCategory($url);

        if (!$category) {
            return false;
        }

        if ($category['is_main']) {
            $this->getSubCategoryId($category['id']);
        } else {
            $this->categoriesId[] = $category['id'];
        }

        $categories = $this->arrToStr($this->categoriesId);

        $products = $this->cat->getProductsByCategories($categories);
//print_r($products);
        return $products;
    }

    public function getSubCategoryId($id)
    {
        $childCategories = $this->cat->getChildCategoryId($id);

        foreach ($childCategories as $childCategory) {
            $this->categoriesId[] = $childCategory['id'];
            if ($childCategory['is_main']) {
               $this->getChildCat($childCategory['id']);
            }
        }
    }

    public function getChildCat($id)
    {
        $childCategories = $this->cat->getChildCategoryId($id);

        foreach ($childCategories as $childCategory) {
            $this->categoriesId[] = $childCategory['id'];
        }
    }

    public function arrToStr($arr)
    {
        return implode(',', $arr);
    }

}