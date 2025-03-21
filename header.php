<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php echo bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="<?= bloginfo('description'); ?>">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>

<body class="cnt-home <?= implode(' ',get_body_class()); ?>" >
    <header class="header-style-1">
        <div class="top-bar animate-dropdown">
            <div class="container">
                <div class="header-top-inner">
                    <div class="cnt-account">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
                            <li><a href="#"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                            <li><a href="#"><i class="icon fa fa-check"></i>Checkout</a></li>
                            <li><a href="#"><i class="icon fa fa-lock"></i>Login</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-10 logo-holder">
                        <div class="logo">
                            <a href="<?php echo bloginfo('url') ?>"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo"> </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                        <div class="dropdown dropdown-cart">
                            <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                                <div class="items-cart-inner">
                                    <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                                    <div class="basket-item-count"><span class="count">2</span></div>
                                    <div class="total-price-basket"> <span class="lbl">cart -</span> <span class="total-price"> <span class="sign">$</span><span class="value">600.00</span> </span>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="cart-item product-summary">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="image">
                                                    <a href="detail.html"><img src="assets/images/cart.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <h3 class="name"><a href="index8a95.html?page-detail">Simple Product</a></h3>
                                                <div class="price">$600.00</div>
                                            </div>
                                            <div class="col-xs-1 action"> <a href="#"><i class="fa fa-trash"></i></a> </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="clearfix cart-total">
                                        <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>$600.00</span> </div>
                                        <div class="clearfix"></div>
                                        <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav animate-dropdown">
                <div class="container">
                    <div class="yamm navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <div class="nav-bg-class">
                            <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                                <div class="nav-outer">
                                    <ul class="nav navbar-nav">
                                        <li class="active dropdown yamm-fw"> <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a> </li>
                                        <li class="dropdown mega-menu">
                                            <a href="category.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Electronics <span class="menu-label hot-menu hidden-xs">hot</span> </a>
                                            <ul class="dropdown-menu container">
                                                <li>
                                                    <div class="yamm-content">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                                <h2 class="title">Laptops</h2>
                                                                <ul class="links">
                                                                    <li><a href="#">Gaming</a></li>
                                                                    <li><a href="#">Laptop Skins</a></li>
                                                                    <li><a href="#">Apple</a></li>
                                                                    <li><a href="#">Dell</a></li>
                                                                    <li><a href="#">Lenovo</a></li>
                                                                    <li><a href="#">Microsoft</a></li>
                                                                    <li><a href="#">Asus</a></li>
                                                                    <li><a href="#">Adapters</a></li>
                                                                    <li><a href="#">Batteries</a></li>
                                                                    <li><a href="#">Cooling Pads</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- /.col -->

                                                            <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                                <h2 class="title">Desktops</h2>
                                                                <ul class="links">
                                                                    <li><a href="#">Routers & Modems</a></li>
                                                                    <li><a href="#">CPUs, Processors</a></li>
                                                                    <li><a href="#">PC Gaming Store</a></li>
                                                                    <li><a href="#">Graphics Cards</a></li>
                                                                    <li><a href="#">Components</a></li>
                                                                    <li><a href="#">Webcam</a></li>
                                                                    <li><a href="#">Memory (RAM)</a></li>
                                                                    <li><a href="#">Motherboards</a></li>
                                                                    <li><a href="#">Keyboards</a></li>
                                                                    <li><a href="#">Headphones</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- /.col -->

                                                            <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                                <h2 class="title">Cameras</h2>
                                                                <ul class="links">
                                                                    <li><a href="#">Accessories</a></li>
                                                                    <li><a href="#">Binoculars</a></li>
                                                                    <li><a href="#">Telescopes</a></li>
                                                                    <li><a href="#">Camcorders</a></li>
                                                                    <li><a href="#">Digital</a></li>
                                                                    <li><a href="#">Film Cameras</a></li>
                                                                    <li><a href="#">Flashes</a></li>
                                                                    <li><a href="#">Lenses</a></li>
                                                                    <li><a href="#">Surveillance</a></li>
                                                                    <li><a href="#">Tripods</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- /.col -->
                                                            <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                                <h2 class="title">Mobile Phones</h2>
                                                                <ul class="links">
                                                                    <li><a href="#">Apple</a></li>
                                                                    <li><a href="#">Samsung</a></li>
                                                                    <li><a href="#">Lenovo</a></li>
                                                                    <li><a href="#">Motorola</a></li>
                                                                    <li><a href="#">LeEco</a></li>
                                                                    <li><a href="#">Asus</a></li>
                                                                    <li><a href="#">Acer</a></li>
                                                                    <li><a href="#">Accessories</a></li>
                                                                    <li><a href="#">Headphones</a></li>
                                                                    <li><a href="#">Memory Cards</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-4 col-menu custom-banner">
                                                                <a href="#"><img alt="" src="assets/images/banners/banner-side.png"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </ul>
                                            </li>
                                            <li class="dropdown hidden-sm"> <a href="category.html">Health & Beauty <span class="menu-label new-menu hidden-xs">new</span> </a> </li>
                                            <li class="dropdown hidden-sm"> <a href="category.html">Watches</a> </li>
                                            <li class="dropdown"> <a href="contact.html">Jewellery</a> </li>
                                            <li class="dropdown"> <a href="contact.html">Shoes</a> </li>
                                            <li class="dropdown"> <a href="contact.html">Kids & Girls</a> </li>
                                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages</a>
                                                <ul class="dropdown-menu pages">
                                                    <li>
                                                        <div class="yamm-content">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-menu">
                                                                    <ul class="links">
                                                                        <li><a href="home.html">Home</a></li>
                                                                        <li><a href="category.html">Category</a></li>
                                                                        <li><a href="detail.html">Detail</a></li>
                                                                        <li><a href="shopping-cart.html">Shopping Cart Summary</a></li>
                                                                        <li><a href="checkout.html">Checkout</a></li>
                                                                        <li><a href="blog.html">Blog</a></li>
                                                                        <li><a href="blog-details.html">Blog Detail</a></li>
                                                                        <li><a href="contact.html">Contact</a></li>
                                                                        <li><a href="sign-in.html">Sign In</a></li>
                                                                        <li><a href="my-wishlist.html">Wishlist</a></li>
                                                                        <li><a href="terms-conditions.html">Terms and Condition</a></li>
                                                                        <li><a href="track-orders.html">Track Orders</a></li>
                                                                        <li><a href="product-comparison.html">Product-Comparison</a></li>
                                                                        <li><a href="faq.html">FAQ</a></li>
                                                                        <li><a href="404.html">404</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>