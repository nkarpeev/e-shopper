<?php
    include_once(ROOT . '/view/layouts/header.php');
    //catalog
?>

    <section>
        <div class="container">
            <div class="row">
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

                    <!--<ul class="pagination">
                        <?php
/*                            $page = 1;
                            if ($count_page == 1) {
                            } else {
                                while ($count_page + 1 >= 1) {
                                    echo 'count_page: ' . $count_page;
                                    echo '<li><a href="/catalog/' . $page . '">' . $page . '</a></li>';
                                    $count_page -= 1;
                                    $page++;
                                }
                                echo '<li><a href="/catalog/' . $page . '">»</a></li>';
                            }
                        */?>
                    </ul>-->

                </div>
            </div>
        </div>
    </section>
<?php
    include_once ROOT . '/view/layouts/footer.php';
?>