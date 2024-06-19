<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $pagetitle ?> | <?= PROJECTNAME ?></title>
    <!-- Stylesheets -->
    <link href="<?= base_url('assets/website/') ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url('assets/website/') ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/website/') ?>css/responsive.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montaga&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="<?= base_url('assets/website/') ?>images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?= base_url('assets/website/') ?>images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>
        <!-- Preloader End -->

        <!-- Main Header / Hedare Style Two -->
        <header class="main-header header-style-two">

            <!-- Header Lower -->
            <div class="header-lower">

                <div class="auto-container">
                    <div class="inner-container d-flex justify-content-between align-items-center">

                        <div class="logo-box d-flex align-items-center">
                            <!-- Logo -->
                            <div class="logo"><a href="index-2.html"><img src="<?= base_url('assets/website/') ?>images/logo.png" alt="" title=""></a></div>
                        </div>
                        <div class="nav-outer clearfix">

                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                            <!-- Main Menu -->
                            <nav class="main-menu show navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="dropdown"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index-2.html">Homepage One</a></li>
                                                <li><a href="index-3.html">Homepage Two</a></li>
                                                <li><a href="index-4.html">Homepage Three</a></li>
                                                <li class="dropdown"><a href="#">Header Styles</a>
                                                    <ul>
                                                        <li><a href="index-2.html">Header Style One</a></li>
                                                        <li><a href="index-3.html">Header Style Two</a></li>
                                                        <li><a href="index-4.html">Header Style Three</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="service-detail.html">Service Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="project.html">Project</a></li>
                                                <li><a href="project-detail.html">Project Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Shop</a>
                                            <ul>
                                                <li><a href="shop.html">Our Products</a></li>
                                                <li><a href="shop-detail.html">Product Single</a></li>
                                                <li><a href="cart.html">Shoping Cart</a></li>
                                                <li><a href="checkout.html">CheckOut</a></li>
                                                <li><a href="register.html">Register</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Our Blog</a></li>
                                                <li><a href="blog-detail.html">Blog Single</a></li>
                                                <li><a href="not-found.html">Not Found</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact us</a></li>
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->

                        </div>

                        <!-- Outer Box -->
                        <div class="outer-box d-flex align-items-center">

                            <!-- Button Box -->
                            <div class="button-box">
                                <a href="contact.html" class="theme-btn btn-style-one clearfix">
                                    <span class="btn-wrap">
                                        <span class="text-one">Get quate now</span>
                                        <span class="text-two">Get quate now</span>
                                    </span>
                                    <span class="icon flaticon-right-arrow"></span>
                                </a>
                            </div>

                        </div>
                        <!-- End Outer Box -->

                    </div>

                </div>
            </div>
            <!-- End Header Lower -->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!-- Logo -->
                    <div class="logo pull-left">
                        <a href="index-2.html" title=""><img src="<?= base_url('assets/website/') ?>images/logo-small.png" alt="" title=""></a>
                    </div>

                    <!--Right Col-->
                    <div class="pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                    </div>
                </div>
            </div>
            <!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index-2.html"><img src="<?= base_url('assets/website/') ?>images/mobile-logo.png" alt="" title=""></a></div>
                    <!-- Search -->
                    <div class="search-box">
                        <form method="post" action="https://html.themexriver.com/prinox/contact.html">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
                                <button type="submit"><span class="icon flaticon-search-1"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                </nav>
            </div>
            <!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->

        <!-- Sidebar Cart Item -->
        <div class="xs-sidebar-group info-group">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget">
                            X
                        </a>
                    </div>
                    <div class="sidebar-textwidget">

                        <!-- Sidebar Info Content -->
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="index-2.html"><img src="<?= base_url('assets/website/') ?>images/logo.png" alt="" title=""></a>
                                </div>
                                <div class="content-box">

                                    <h6>Services</h6>
                                    <ul class="sidebar-services-list">
                                        <li><a href="#">Collectibles</a></li>
                                        <li><a href="#">Domain Names</a></li>
                                        <li><a href="#">Photography</a></li>
                                        <li><a href="#">Sports</a></li>
                                        <li><a href="#">Trading Cards</a></li>
                                        <li><a href="#">Utility</a></li>
                                    </ul>

                                    <h6>Contact info</h6>
                                    <!-- List Style One -->
                                    <ul class="list-style-one">
                                        <li>
                                            <span class="icon flaticon-maps-and-flags"></span>
                                            <strong>Our office</strong>
                                            A-1, Envanto Headquarters, <br> Melbourne, Australia.
                                        </li>
                                        <li>
                                            <span class="icon flaticon-call-1"></span>
                                            <strong>Phone</strong>
                                            <a href="tel:+00-999-999-9999">+(00) 999 999 9999</a><br>
                                            <a href="tel:+000-000-0000">000 000 0000</a>
                                        </li>
                                        <li>
                                            <span class="icon flaticon-mail"></span>
                                            <strong>Email</strong>
                                            <a href="mailto:contact@prinox.com">contact@prinox.com</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->