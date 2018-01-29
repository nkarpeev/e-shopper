<?php include ROOT . '/view/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">
                    <?php include ROOT . '/view/catalog/category.php'; ?>
                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <h2 class="title text-center">Корзина</h2>

                        <?php if ($productsInCart): ?>
                            <p>Вы выбрали следующие товары:</p>
                            <table class="table-bordered table-striped table">
                                <tr>
                                    <th>Название</th>
                                    <th>Стомость, руб.</th>
                                    <th>Количество, шт</th>
                                    <th>Удалить 1 шт.</th>
                                    <th>Удалить все</th>
                                </tr>
                                <?php foreach ($products as $product): ?>
                                    <tr>
                                        <td>
                                            <a href="/product/<?php echo $product['id'];?>">
                                                <?php echo $product['title'];?>
                                            </a>
                                        </td>
                                        <td><?php echo $product['price'];?></td>
                                        <td><?php echo $productsInCart[$product['id']];?></td>
                                        <td>
                                            <a class="delete-of-cart" data-id="<?php echo $product['id'];?>" href="/cart/delete/<?php echo $product['id'];?>">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="delete-of-cart" data-id="<?php echo $product['id'];?>" href="/cart/deleteAll/<?php echo $product['id'];?>">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="4">Общая стоимость, руб.:</td>
                                    <td><?php echo $totalPrice;?></td>
                                </tr>

                            </table>

                            <a class="btn btn-default checkout" href="/cart/checkout"><i class="fa fa-shopping-cart"></i> Оформить заказ</a>
                        <?php else: ?>
                            <p>Корзина пуста</p>

                            <a class="btn btn-default checkout" href="/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
                        <?php endif; ?>

                    </div>



                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/view/layouts/footer.php'; ?>