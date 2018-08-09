<?php


class ArticleController
{
    public function actionCategory($categoryId, $page = 1)
    {
        $categories = array();
        $categories = $advertisement->getAdvertisementList();

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);

        $total = Product::getTotalProductsInCategory($categoryId);

        $pagination = new Pagination($total , $page ,Product::SHOW_BY_DEFAULT, 'page-');


        require_once (ROOT . '/views/catalog/category.php');

        return true;
    }
}