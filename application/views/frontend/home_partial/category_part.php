<div class="tr-section products">
                    <div class="product-category">
                        <a href="listing.html" class="category-title">
                            <h1>All Categories hopping</h1>
                            <span class="category-icon"> <img src="<?php echo base_url();?>/assets/images/others/category1.png" alt="Icon" class="img-fluid"></span>
                        </a>
                        <ul class="tr-list category-list">

                        <?php
                            foreach($top_menu_categroy as $v_category) {?>
                            <li class="active">
                                <span><?php echo $v_category-> category_name;?></span>
                         
                            </li> 
                            <?php }?>
                        </ul>
                    </div>
                    
                    <div class="random-product">
                        <div class="product-slider">
                            <div class="product">

                            <?php foreach($limit_categroy_product as $v_product){?>
                                <a href="details.html">
                                    <span class="product-image">
                                        <img src="<?php echo $v_product->product_image;?>" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title"><?php echo $v_product->product_name;?></span>
                                    <span class="color">Blue</span>
                                    <span class="price"><del><?php echo $v_product->product_price;?></del><?php echo $v_product->product_sale_price;?></span>
                                </a>
                                <div class="product-icon">
                                    <a href="#"><span class="icon icon-basket"></span></a>
                                    <a href="#"><span class="icon icon-pulse"></span></a>
                                </div>

                            <?php } ?>
                            </div>
                            <!--
                            <div class="product">
                                <a href="details.html">
                                    <span class="product-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/man2.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">ManCave Wallet</span>
                                    <span class="color">Tan</span>
                                    <span class="price"><del>$690</del>$200</span>
                                </a>
                                <div class="product-icon">
                                    <a href="#"><span class="icon icon-basket"></span></a>
                                    <a href="#"><span class="icon icon-pulse"></span></a>
                                </div>
                            </div>
                            <div class="product">
                                <a href="details.html">
                                    <span class="product-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/man3.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">Nike Shoe</span>
                                    <span class="color">Tan</span>
                                    <span class="price"><del>$490</del>$150</span>
                                </a>
                                <div class="product-icon">
                                    <a href="#"><span class="icon icon-basket"></span></a>
                                    <a href="#"><span class="icon icon-pulse"></span></a>
                                </div>
                            </div>
                            <div class="product">
                                <a href="details.html">
                                    <span class="product-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/man2.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">ManCave Wallet</span>
                                    <span class="color">Tan</span>
                                    <span class="price"><del>$690</del>$200</span>
                                </a>
                                <div class="product-icon">
                                    <a href="#"><span class="icon icon-basket"></span></a>
                                    <a href="#"><span class="icon icon-pulse"></span></a>
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
                </div><!-- /.products --> 