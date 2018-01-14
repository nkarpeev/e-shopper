
<div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">Рекомендуемые товары</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                
                                <?php 
//                                разбиваем массив на 2 части по 3 товара, что бы показывать в слайдере
                                $productRec = array_chunk($productRec, 3);
                                
                                foreach ($productRec[0] as $product):?>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="/e-shopper/product/<?php echo $product['id'];?>"> 
                                                <img src="template/images/home/recommend1.jpg" alt="" />
                                                </a>
                                                <h2><?php echo $product['price'];?></h2>
                                                <p><a href="/e-shopper/product/<?php echo $product['id'];?>"><?php echo $product['title'];?></a></p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                            </div>

                                        </div>
                                        
                                    </div>
                                </div>
                                <?php endforeach;?>
                                
                              
                            </div>
                            <div class="item">	
                                 <?php foreach ($productRec[1] as $product):?>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="/e-shopper/product/<?php echo $product['id'];?>"> 
                                                <img src="template/images/home/recommend1.jpg" alt="" />
                                                </a>
                                                <h2><?php echo $product['price'];?></h2>
                                                <p><a href="/e-shopper/product/<?php echo $product['id'];?>"><?php echo $product['title'];?></a></p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                            </div>

                                        </div>
                                        
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>			
                    </div>
                </div><!--/recommended_items-->

