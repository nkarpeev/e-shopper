<?php 
include_once(ROOT . '/view/layouts/header_pro.php');
;
//product by category
?>

    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categoryList as $categoryItem):?>
                             
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="/category/<?php echo $categoryItem['id'];?>"
                                         class="<?php if ($idCategory == $categoryItem['id']) echo 'active'; ?>"
                                           >
                                         <?php echo $categoryItem['name'];?>
                                                
                                            </a></h4>
                                    </div>
                                </div>
                                <?php endforeach;?>

                    </div>
                </div>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Последние товары</h2>
                    
                   <?php foreach ($productList as $product):?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        
                                        <div class="productinfo text-center">
                                            <a href="/product/<?php echo $product['id'];?>">
                                                <img src="../template/images/home/product1.jpg" alt="" />
                                            </a>
                                            <h2><?php echo $product['price'];?></h2>
                                            <p>
                                                <a href="/product/<?php echo $product['id'];?>"> <?php echo $product['title']; ?></a>
                                            </p>
                                            <a href="/cart/add/<?php echo $product['id'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        <?php if ($product['is_new']): ?>
                                        <img src="../template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>

                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>
<div id="foot">
                                                                                              
        <?php 
         include_once ROOT . '/view/layouts/footer_pro.php';
        ?>
</div>
