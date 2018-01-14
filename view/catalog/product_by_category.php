<?php
    include_once(ROOT . '/view/layouts/header.php');
    //product by category
?>

<section>
    <div class="container">
        <div class="row">
            <!--Подключаем компонент вывода списка категорий-->
            <?php include_once(ROOT . '/view/components/category.php'); ?>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Последние товары</h2>
                        <?php foreach ($productList as $product): ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <?php include(ROOT . '/view/components/product_item.php'); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                </div><!--features_items-->
                <?php
                    echo $pagination->get();
                ?>
            </div>
        </div>
    </div>
</section>
<div id="foot">

    <?php
        include_once ROOT . '/view/layouts/footer.php';
    ?>
</div>
