<div class="tr-topbar">
            <div class="container clearfix">
                <div class="select-language">
                    <div class="tr-dropdown">
                        <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text"><span class="tr-flag"><img src="<?php echo base_url();?>/assets/images/others/flag.png" alt="Image" class="img-fluid"></span>RUS</span> <span class="dropdown-toggle"></span></a>
                        <ul class="tr-dropdown-menu tr-change">
                            <li><a href="#"><span class="tr-flag"><img src="<?php echo base_url();?>/assets/images/others/flag.png" alt="Image" class="img-fluid"></span>USD</a></li>
                            <li><a href="#"><span class="tr-flag"><img src="<?php echo base_url();?>/assets/images/others/flag.png" alt="Image" class="img-fluid"></span>RUS</a></li>
                        </ul>                               
                    </div>                      
                </div>
                <div class="topbar-right">
                    <ul class="tr-list">
                        <li><span><a href="#"><span class="icon icon-support"></span>+0123 45 67 89</a></span></li>  
                        <li><a href="#"><span class="icon icon-send"></span>support@cart.com</a></li>
                        <li><span><a href="#"><span class="icon icon-dialog"></span>Live Chat</a></span></li> 
                    </ul>
                    <div class="currency select-after">
                        <select class="amount">
                            <option value="#">$ USD</option>
                            <option value="#">$ AUD</option>
                            <option value="#">$ EUR</option>
                            <option value="#">$ GBP</option>
                        </select>                           
                    </div>                     
                    <a href="#" class="btn btn-primary">Help Centre</a>
                </div>
            </div><!-- /.container -->
        </div><!-- /.tr-topbar -->

        <div class="topbar-middle">
            <div class="container clearfix">
                <a class="tr-logo logo" href="index.html"><img class="img-fluid" src="<?php echo base_url();?>/assets/images/logo.png" alt="Logo"></a>
                <a class="tr-logo tr-logo-2" href="index.html"><img class="img-responsive" src="<?php echo base_url();?>/assets/images/logo-white.png" alt="Logo"></a>
                <form class="search-form" action="#" id="search" method="get">
                    <input class="form-control" name="search" type="text" placeholder="Search this Site">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form><!-- /.form -->
                <div class="right-content">
                    <div class="tr-user">
                        <div class="user-image">
                            <img src="<?php echo base_url();?>/assets/images/others/user.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="user-option">
                            <div class="tr-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Elizabeth
                                <span class="caret"></span></a>
                                <ul class="tr-dropdown-menu">
                                    <li><a href="#">Settings</a></li>
                                    <li><a href="#">Log Out</a></li>                         
                                </ul>
                            </div><!-- /.dropdown -->
                        </div>
                    </div><!-- /.tr-user -->

                    <ul class="tr-list cart-content">
                        <li><a href="#"><span class="icon icon-pulse"></span></a></li>
                        <li class="tr-dropdown"><a href="#"><span class="icon icon-basket"></span> <span class="cart-number">5</span></a>
                            <div class="tr-dropdown-menu">
                                <ul class="tr-list">
                                    <li class="remove-item">
                                        <span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                        <div class="product">
                                            <a href="details.html">
                                                <span class="product-image">
                                                    <img src="<?php echo base_url();?>/assets/images/product/man1.png" alt="Image" class="img-fluid">
                                                </span>
                                                <span class="product-title">Zigzag Watch</span>
                                                <span class="color">Blue</span>
                                                <span class="price"><del>$560</del>$299</span>
                                            </a>
                                        </div>                                   
                                    </li>
                                    <li class="remove-item">
                                        <span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                        <div class="product">
                                            <a href="details.html">
                                                <span class="product-image">
                                                    <img src="<?php echo base_url();?>/assets/images/product/man2.png" alt="Image" class="img-fluid">
                                                </span>
                                                <span class="product-title">Zigzag Watch</span>
                                                <span class="color">Blue</span>
                                                <span class="price"><del>$560</del>$299</span>
                                            </a>
                                        </div>                                   
                                    </li>
                                </ul>
                                <div class="total-price">
                                    <span><strong>Total Price: </strong>$598:00</span>
                                </div>
                                <div class="buttons">
                                    <a class="btn btn-primary cart-button" href="shopping-cart.html">View Cart</a>
                                    <a class="btn btn-primary" href="#">Checkout</a>
                                </div>                                                                
                            </div>
                        </li>
                    </ul>
                </div>                 
            </div><!-- /.container -->
        </div><!-- /.topbar-middle -->         

        <!-- user-modal -->
        <div class="user-modal">
            <div id="modal-signin" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="user-account text-center">
                                <h1>Create Account</h1>
                                <p>Don’t worry, we won’t spam you or sell your information.</p>
                                <form action="#" class="tr-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>                  
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                    <div class="forgot-password">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                    <ul class="tr-list social">
                                        <li class="pull-left"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="pull-right"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </form>                         
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-signin --> 

            <div id="modal-signup" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="user-account text-center">
                                <h1>Create Account</h1>
                                <p>Don’t worry, we won’t spam you or sell your information.</p>
                                <form action="#" class="tr-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>  
                                    <span>By continuing, you agree to our Terms of Use and Privacy Policy.</span>               
                                    <button type="submit" class="btn btn-primary">Create account</button>
                                    <div class="already-acount">
                                        <a href="#">Already have an acount?</a>
                                    </div>
                                </form>                         
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-signup -->     
        </div><!-- /.user-modal -->   

        <div class="tr-menu">
            <nav class="navbar navbar-toggleable-md">
                <div class="container">
                    <div class="menu-content">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">                           
                                <?php foreach($top_menu_categroy as $v_category) {?>
                                <li class="nav-item">
                                    <a class="nav-link" href="listing.html"><?php echo $v_category->category_name; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>                         
                    </div><!-- /.menu-content -->                   
                </div><!-- /.container -->
            </nav>                                    
        </div><!-- /.tr-menu -->