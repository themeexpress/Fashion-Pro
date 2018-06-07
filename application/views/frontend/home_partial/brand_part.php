<div class="tr-section products womens-fashion">
                    <div class="product-category">
                        <a href="listing.html" class="category-title">
                            <h1>All Brands</h1>
                            <span class="category-icon"> <img src="<?php echo base_url();?>/assets/images/others/category2.png" alt="Icon" class="img-fluid"></span>
                        </a>
                        <ul class="tr-list category-list">
                        <?php foreach($published_brand_info as $v_brand) { ?>
                            <li class="active">
                                <span><?php echo $v_brand->brand_name; ?></span>                                
                            </li>
                        <?php } ?>                            
                        </ul>
                    </div>

                    <div class="random-product">
                        <div class="product-slider">
                            <div class="product">
                                <a href="details.html">
                                    <span class="product-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/womens1.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">Wastiak Bag</span>
                                    <span class="color">Blue</span>
                                    <span class="price"><del>$560</del>$299</span>
                                </a>
                                <div class="product-icon">
                                    <a href="#"><span class="icon icon-basket"></span></a>
                                    <a href="#"><span class="icon icon-pulse"></span></a>
                                </div>
                            </div>
                            <!--
                            <div class="product">
                                <a href="details.html">
                                    <span class="product-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/womens2.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">Jason Wu Shoe</span>
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
                                        <img src="<?php echo base_url();?>/assets/images/product/womens3.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">Silk Scarf</span>
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
                                        <img src="<?php echo base_url();?>/assets/images/product/womens2.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">Jason Wu Shoe</span>
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