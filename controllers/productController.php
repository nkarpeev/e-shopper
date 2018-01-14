<?php

class ProductController {

    /**
     * Action для страницы просмотра товара
     * @param integer $idProduct <p>id товара</p>
     */

    public function actionView($idProduct) {
        
        $categoryList = [];
        $categoryList = Category::getCategory();
        
        $productItem = [];
        $productItem = Product::getProductById($idProduct);
 
       include_once(ROOT . '/view/product/view.php');
       
        die;
    }
    
    
//    public function actionList() {
//
//       echo 'Просмотр списка товаров';
//
//        $productList = array();
//        $productList = Product::getProductList();
//        echo '<pre>';
////        $_REQUEST['title'] = $productList['title'];
//        print_r($productList);
//        echo '<pre>';
//        echo 'privet';
//
//        return true;
//    }
   
   
}

