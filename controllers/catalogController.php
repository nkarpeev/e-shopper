<?php

    class CatalogController
    {

        public function actionView($page = 1)
        {
            $page = preg_replace('|[^0-9]*|','',$page);
            $page = intval($page);
            //echo 'page: ' . $page;

            $categoryList = [];
            $categoryList = Category::getCategory();

            $productList = [];
            $productList = Product::getProductList($page);

            $total = Product::getTotalProduct();
            $pagination = new Pagination($total, $page, $limit = Product::DEFAULT_LIMIT, $index = 'page-');

            include_once(ROOT . '/view/catalog/view.php');

            die();
        }

        //get products by category
        public function actionCategory($idCategory, $page = 1)
        {
            $page = preg_replace('|[^0-9]*|','',$page);
            $page = intval($page);
            //echo 'page: ' . $page;

            $categoryList = [];
            $categoryList = Category::getCategory();

            $productList = [];
            $productList = Product::getProductListByCategory($idCategory, $page);

            $total = Product::getTotalProductInCategory($idCategory);
            $pagination = new Pagination($total, $page, $limit = Product::DEFAULT_LIMIT, $index = 'page-');

            include_once(ROOT . '/view/catalog/product_by_category.php');

            die();
        }


    }
