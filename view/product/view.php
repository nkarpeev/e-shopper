<?php
//Product/view
    include_once(ROOT . '/view/layouts/header.php');
?>
    <section>
        <div class="container">
            <div class="row">
                <!--            Загружаем категории-->
                <?php include_once(ROOT . '/view/components/category.php'); ?>
                <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="view-product">
                                    <a href="/product/<?php echo $productItem['id']; ?>">
                                        <img src="template/images/home/product1.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="product-information"><!--/product-information-->
                                    <?php if ($productItem['is_new']): ?>
                                        <img src="template/images/product-details/new.jpg" class="newarrival"
                                             alt=""/>
                                    <?php endif; ?>
                                    <h2><?php echo $productItem['title']; ?></h2>
                                    <p>Код товара: <?php echo rand(100000, 999999); ?></p>
                                    <span>
                                            <span><?php echo $productItem['price']; ?></span>
                                            <label>Количество:</label>
                                            <input type="text" value="1"/>
                                            <button type="button" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                            </button>
                                        </span>
                                    <p><b>Наличие:</b>
                                        <?php if ($productItem['status'] == 1): ?>
                                        <?php echo 'На складе'; ?></p>
                                <?php else: echo 'Нет в наличии'; ?>
                                <?php endif; ?>

                                    <p><b>Состояние:</b> Новое</p>
                                    <p><b>Производитель:</b> D&amp;G</p>
                                </div><!--/product-information-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h5>Описание товара</h5>
                                <p><?php echo $productItem['text'] ?></p>

                            </div>
                        </div>
                    </div><!--/product-details-->
                </div>
            </div>
        </div>
    </section>
<?php
    include_once ROOT . '/view/layouts/footer.php';
?>