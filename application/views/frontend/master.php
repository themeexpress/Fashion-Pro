
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Theme Region">
        <meta name="description" content="">

        <title>FashionPro | CI Ecommerce.</title>

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css" >
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/fonts.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/slick.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/main.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/responsive.css">

        <!-- font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


        <!-- icons -->
        <link rel="icon" href="<?php echo base_url();?>/assets/images/ico/favicon.ico"> 
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>/assets/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>/assets/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>/assets/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>/assets/images/ico/apple-touch-icon-57-precomposed.png">
        <!-- icons -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Template Developed By ThemeRegion -->
    </head>
    <body>
        <?php echo $top_menu_part; ?>

        <div class="tr-banner">     
            <?php echo $home_slider;?>          
        </div><!-- /.tr-banner -->

        <div class="main-wrapper">
            <div class="container">
                <?php echo $home_promotion; ?>

               <?php echo $category_part;?>

                <?php echo $brand_part;?>

                <div class="tr-cta tr-section">
                    <div class="cta-slider">
                        <div class="cta-slider-item">
                            <div class="cta-info-left">
                                <div class="cta-info">
                                    <h1>New Modern Series</h1>
                                    <p>Comfortable, lightweight, made of composite aluminum. Perfect for both the city and the heavy road.</p>
                                    <a class="btn btn-primary" href="#">Shop Now</a>
                                </div>
                            </div>
                            <div class="cta-info-right">
                                <div class="cta-iamage text-center">
                                    <img src="<?php echo base_url();?>/assets/images/others/cta-img.jpg" alt="Image" class="img-fluid">
                                </div>
                            </div>
                        </div><!-- /.row -->
                        <div class="cta-slider-item">
                            <div class="cta-info-left">
                                <div class="cta-info">
                                    <h1>New Modern Series</h1>
                                    <p>Comfortable, lightweight, made of composite aluminum. Perfect for both the city and the heavy road.</p>
                                    <a class="btn btn-primary" href="#">Shop Now</a>
                                </div>
                            </div>
                            <div class="cta-info-right">
                                <div class="cta-iamage text-center">
                                    <img src="<?php echo base_url();?>/assets/images/others/cta-img.jpg" alt="Image" class="img-fluid">
                                </div>
                            </div>
                        </div><!-- /.row -->
                        <div class="cta-slider-item">
                            <div class="cta-info-left">
                                <div class="cta-info">
                                    <h1>New Modern Series</h1>
                                    <p>Comfortable, lightweight, made of composite aluminum. Perfect for both the city and the heavy road.</p>
                                    <a class="btn btn-primary" href="#">Shop Now</a>
                                </div>
                            </div>
                            <div class="cta-info-right">
                                <div class="cta-iamage text-center">
                                    <img src="<?php echo base_url();?>/assets/images/others/cta-img.jpg" alt="Image" class="img-fluid">
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.cta-slider -->
                </div><!-- /.tr-cta --> 
<!--
                <div class="tr-section products">
                    <div class="product-category">
                        <a href="listing.html" class="category-title">
                            <h1>Gadget & Electronics</h1>
                            <span class="category-icon"> <img src="<?php echo base_url();?>/assets/images/others/category3.png" alt="Icon" class="img-fluid"></span>
                        </a>
                        <ul class="tr-list category-list">
                            <li class="active">
                                <span>Security gadgets</span>
                                <a href="details.html" class="category-info">
                                    <div class="category-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/3.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="overlay">
                                        <h2>Blazer Pria Casual</h2>
                                        <span class="color">White</span>
                                        <span class="price">$1050</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <span>Mini USB </span>
                                <a href="details.html" class="category-info">
                                    <div class="category-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/3.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="overlay">
                                        <h2>Blazer Pria Casual</h2>
                                        <span class="color">White</span>
                                        <span class="price">$1050</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <span>Gadget</span>
                                <a href="details.html" class="category-info">
                                    <div class="category-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/3.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="overlay">
                                        <h2>Blazer Pria Casual</h2>
                                        <span class="color">White</span>
                                        <span class="price">$1050</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <span>Laptop</span>
                                <a href="details.html" class="category-info">
                                    <div class="category-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/3.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="overlay">
                                        <h2>Blazer Pria Casual</h2>
                                        <span class="color">White</span>
                                        <span class="price">$1050</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <span>Camera</span>
                                <a href="details.html" class="category-info">
                                    <div class="category-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/3.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="overlay">
                                        <h2>Blazer Pria Casual</h2>
                                        <span class="color">White</span>
                                        <span class="price">$1050</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <span>Smart Watch</span>
                                <a href="details.html" class="category-info">
                                    <div class="category-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/3.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="overlay">
                                        <h2>Blazer Pria Casual</h2>
                                        <span class="color">White</span>
                                        <span class="price">$1050</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <span>Game Console</span>
                                <a href="details.html" class="category-info">
                                    <div class="category-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/3.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="overlay">
                                        <h2>Blazer Pria Casual</h2>
                                        <span class="color">White</span>
                                        <span class="price">$1050</span>
                                    </div>
                                </a>
                            </li>
                            <li><span><a href="#">+ More Category</a></span></li>
                        </ul>
                    </div>

                    <div class="random-product">
                        <div class="product-slider">
                            <div class="product">
                                <a href="details.html">
                                    <span class="product-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/electronics1.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">Bits Headphone</span>
                                    <span class="color">Blue</span>
                                    <span class="price"><del>$560</del>$299</span>
                                </a>
                                <div class="product-icon">
                                    <a href="#"><span class="icon icon-basket"></span></a>
                                    <a href="#"><span class="icon icon-pulse"></span></a>
                                </div>
                            </div>
                            <div class="product">
                                <a href="details.html">
                                    <span class="product-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/electronics2.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">Ipad Prot</span>
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
                                        <img src="<?php echo base_url();?>/assets/images/product/electronics3.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">Gaming Controller</span>
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
                                        <img src="<?php echo base_url();?>/assets/images/product/electronics2.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">Ipad Pro</span>
                                    <span class="color">Tan</span>
                                    <span class="price"><del>$690</del>$200</span>
                                </a>
                                <div class="product-icon">
                                    <a href="#"><span class="icon icon-basket"></span></a>
                                    <a href="#"><span class="icon icon-pulse"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!- /.products ->
        -->
        <!--
                <div class="tr-section products">
                    <div class="product-category">
                        <a href="listing.html" class="category-title">
                            <h1>Home & Living</h1>
                            <span class="category-icon"> <img src="<?php echo base_url();?>/assets/images/others/category4.png" alt="Icon" class="img-fluid"></span>
                        </a>
                        <ul class="tr-list category-list">
                            <li class="active">
                                <span>Refrigerator</span>
                                <a href="details.html" class="category-info">
                                    <div class="category-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/4.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="overlay">
                                        <h2>Blazer Pria Casual</h2>
                                        <span class="color">White</span>
                                        <span class="price">$1050</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <span>Freezer</span>
                                <a href="details.html" class="category-info">
                                    <div class="category-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/4.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="overlay">
                                        <h2>Blazer Pria Casual</h2>
                                        <span class="color">White</span>
                                        <span class="price">$1050</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <span>Crockeries</span>
                                <a href="details.html" class="category-info">
                                    <div class="category-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/4.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="overlay">
                                        <h2>Blazer Pria Casual</h2>
                                        <span class="color">White</span>
                                        <span class="price">$1050</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <span>Knife, Scissors</span>
                                <a href="details.html" class="category-info">
                                    <div class="category-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/4.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="overlay">
                                        <h2>Blazer Pria Casual</h2>
                                        <span class="color">White</span>
                                        <span class="price">$1050</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <span>Oven</span>
                                <a href="details.html" class="category-info">
                                    <div class="category-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/4.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="overlay">
                                        <h2>Blazer Pria Casual</h2>
                                        <span class="color">White</span>
                                        <span class="price">$1050</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <span>Pressure Cooker</span>
                                <a href="details.html" class="category-info">
                                    <div class="category-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/4.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="overlay">
                                        <h2>Blazer Pria Casual</h2>
                                        <span class="color">White</span>
                                        <span class="price">$1050</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <span>Game Console</span>
                                <a href="details.html" class="category-info">
                                    <div class="category-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/4.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="overlay">
                                        <h2>Blazer Pria Casual</h2>
                                        <span class="color">White</span>
                                        <span class="price">$1050</span>
                                    </div>
                                </a>
                            </li>
                            <li><span><a href="#">+ More Category</a></span></li>
                        </ul>
                    </div>

                    <div class="random-product">
                        <div class="product-slider">
                            <div class="product">
                                <a href="details.html">
                                    <span class="product-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/home1.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">Zigzag Watch</span>
                                    <span class="color">Blue</span>
                                    <span class="price"><del>$560</del>$299</span>
                                </a>
                                <div class="product-icon">
                                    <a href="#"><span class="icon icon-basket"></span></a>
                                    <a href="#"><span class="icon icon-pulse"></span></a>
                                </div>
                            </div>
                            <div class="product">
                                <a href="details.html">
                                    <span class="product-image">
                                        <img src="<?php echo base_url();?>/assets/images/product/home2.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">malm bed frame</span>
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
                                        <img src="<?php echo base_url();?>/assets/images/product/home3.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">Nike Chair</span>
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
                                        <img src="<?php echo base_url();?>/assets/images/product/home2.png" alt="Image" class="img-fluid">
                                    </span>
                                    <span class="product-title">malm bed frame</span>
                                    <span class="color">Tan</span>
                                    <span class="price"><del>$690</del>$200</span>
                                </a>
                                <div class="product-icon">
                                    <a href="#"><span class="icon icon-basket"></span></a>
                                    <a href="#"><span class="icon icon-pulse"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.products ->
        -->

                <div class="daily-needs">
                    <div class="section-title text-center">
                        <h1><span>Daily Needs Week</span></h1>
                    </div>
                    <div class="random-product">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="products">
                                    <div class="product">
                                        <div class="image-slider">
                                            <div class="product-image">
                                                <a href="details.html"><img src="<?php echo base_url();?>/assets/images/product/product1.png" alt="Image" class="img-fluid"></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="details.html"><img src="<?php echo base_url();?>/assets/images/product/product2.png" alt="Image" class="img-fluid"></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="details.html"><img src="<?php echo base_url();?>/assets/images/product/product3.png" alt="Image" class="img-fluid"></a>
                                            </div>
                                        </div>                                     
                                        <a href="details.html">
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">$149</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="#"><span class="icon icon-basket"></span></a>
                                            <a href="#"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="products">
                                    <div class="product">
                                        <div class="image-slider">
                                            <div class="product-image">
                                                <a href="details.html"><img src="<?php echo base_url();?>/assets/images/product/product2.png" alt="Image" class="img-fluid"></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="details.html"><img src="<?php echo base_url();?>/assets/images/product/product4.png" alt="Image" class="img-fluid"></a>
                                            </div>
                                        </div>                                      
                                        <a href="details.html">
                                            <span class="product-title">Charging Stroller</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">$149</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="#"><span class="icon icon-basket"></span></a>
                                            <a href="#"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="products">
                                    <div class="product">
                                        <div class="image-slider">
                                            <div class="product-image">
                                                <a href="details.html"><img src="<?php echo base_url();?>/assets/images/product/product3.png" alt="Image" class="img-fluid"></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="details.html"><img src="<?php echo base_url();?>/assets/images/product/product1.png" alt="Image" class="img-fluid"></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="details.html"><img src="<?php echo base_url();?>/assets/images/product/product3.png" alt="Image" class="img-fluid"></a>
                                            </div>
                                        </div>                                    
                                        <a href="details.html">
                                            <span class="product-title">Zigzag Watch</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">$149</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="#"><span class="icon icon-basket"></span></a>
                                            <a href="#"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-sm-6 col-lg-3">
                                <div class="products">
                                    <div class="product">
                                        <div class="image-slider">
                                            <div class="product-image">
                                                <a href="details.html"><img src="<?php echo base_url();?>/assets/images/product/product4.png" alt="Image" class="img-fluid"></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="details.html"><img src="<?php echo base_url();?>/assets/images/product/product2.png" alt="Image" class="img-fluid"></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="details.html"><img src="<?php echo base_url();?>/assets/images/product/product3.png" alt="Image" class="img-fluid"></a>
                                            </div>
                                        </div>                                     
                                        <a href="details.html">
                                            <span class="product-title">T- Shirts</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">$149</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="#"><span class="icon icon-basket"></span></a>
                                            <a href="#"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.random-product -->
                </div><!-- /.products --> 

                <div class="tr-brands">
                    <div class="brands-slider">
                        <div class="brand">
                            <img src="<?php echo base_url();?>/assets/images/brands/1.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="brand">
                            <img src="<?php echo base_url();?>/assets/images/brands/2.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="brand">
                            <img src="<?php echo base_url();?>/assets/images/brands/3.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="brand">
                            <img src="<?php echo base_url();?>/assets/images/brands/4.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="brand">
                            <img src="<?php echo base_url();?>/assets/images/brands/5.png" alt="Image" class="img-fluid">
                        </div>
                         <div class="brand">
                            <img src="<?php echo base_url();?>/assets/images/brands/6.png" alt="Image" class="img-fluid">
                        </div>
                         <div class="brand">
                            <img src="<?php echo base_url();?>/assets/images/brands/7.png" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div><!-- /.tr-brands -->         
            </div><!-- /.container -->   
        </div><!-- /.main-wrapper -->

        <div class="tr-convenience">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="convenience">
                            <div class="icon">
                                <img src="<?php echo base_url();?>/assets/images/others/icon1.png" alt="Image" class="img-fluid">
                            </div>
                            <span>Free Delivery</span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="convenience">
                            <div class="icon">
                                <img src="<?php echo base_url();?>/assets/images/others/icon2.png" alt="Image" class="img-fluid">
                            </div>
                            <span>Clients Discounts</span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="convenience">
                            <div class="icon">
                                <img src="<?php echo base_url();?>/assets/images/others/icon3.png" alt="Image" class="img-fluid">
                            </div>
                            <span>Return Of Goods</span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="convenience">
                            <div class="icon">
                                <img src="<?php echo base_url();?>/assets/images/others/icon4.png" alt="Image" class="img-fluid">
                            </div>
                            <span>Many Brands</span>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.tr-convenience -->

        <div class="tr-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="left-content">
                                <h3>Sign up for newsletter</h3>
                                <p>Enter your email to receive relevant messaging tips and examples.</p>
                                <form action="#">
                                    <input class="form-control" type="email" required="required" placeholder="Enter Your Email Id">
                                    <input type="submit" class="btn">
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h3>We Accept</h3>
                            <p>Enter your email to receive relevant messaging tips and examples.</p>
                            <div class="payment-card">
                                <ul class="tr-list">
                                    <li><img src="<?php echo base_url();?>/assets/images/others/card1.png" alt="Image" class="img-fluid"></li>
                                    <li><img src="<?php echo base_url();?>/assets/images/others/card2.png" alt="Image" class="img-fluid"></li>
                                    <li><img src="<?php echo base_url();?>/assets/images/others/card3.png" alt="Image" class="img-fluid"></li>
                                    <li><img src="<?php echo base_url();?>/assets/images/others/card4.png" alt="Image" class="img-fluid"></li>
                                    <li><img src="<?php echo base_url();?>/assets/images/others/card5.png" alt="Image" class="img-fluid"></li>
                                    <li><img src="<?php echo base_url();?>/assets/images/others/card6.png" alt="Image" class="img-fluid"></li>
                                </ul>
                            </div><!-- /.payment-card -->
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer-top -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="#"><img src="<?php echo base_url();?>/assets/images/footer-logo.png" alt="Logo" class="img-fluid"></a>
                        </div>
                        <span>Copyright &copy; 2017 <a href="#">Carrito</a></span>
                        <span>Design By<a href="#"> Theme Region</a></span>
                    </div><!-- /.footer-widget -->
                    <div class="footer-widget">
                        <h3>Product</h3>
                        <ul class="tr-list">
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Customers</a></li>
                            <li><a href="#">One-Click Apps</a></li>
                            <li><a href="#">API</a></li>
                        </ul>
                    </div><!-- /.footer-widget -->
                    <div class="footer-widget">
                        <h3>Company</h3>
                        <ul class="tr-list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div><!-- /.footer-widget -->
                    <div class="footer-widget">
                        <h3>Help</h3>
                        <ul class="tr-list">
                            <li><a href="#">Getting Started</a></li>
                            <li><a href="#">Feedback</a></li>
                            <li><a href="#">Referral Program</a></li>
                            <li><a href="#">Network Status</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div><!-- /.footer-widget -->
                    <div class="footer-widget">
                        <h3>Social</h3>
                        <ul class="tr-list">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i>LinkedIn</a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i>Google</a></li>
                        </ul>
                    </div><!-- /.footer-widget -->
                </div><!-- /.container -->
            </div><!-- /.footer-bottom -->
        </div><!-- /.tr-footer -->         


        <!-- JS -->
        <script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/tether.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/slick.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/jquery-ui-min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/jquery.spinner.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/main.js"></script>
    </body>
</html> 