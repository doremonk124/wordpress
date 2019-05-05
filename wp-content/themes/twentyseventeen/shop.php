<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 * Template Name: shop
 */

get_header(); ?>
<body class="archive post-type-archive post-type-archive-product wp-custom-logo woocommerce woocommerce-page woocommerce-no-js columns-4 woocommerce-active at-sticky-sidebar left-logo-right-ads no-sidebar">

<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content" title="link">Skip to content</a>
    <header id="masthead" class="site-header">
        <div class="top-header-wrapper clearfix">
            <div class="wrapper">
                <div class="header-left">
                    <div class='icon-box'>            <div class="icon-box col-md-3">
                            <div class="icon">
                                <i class="fa fa-volume-control-phone"></i>
                            </div>
                            <div class="icon-details">
                                <span class="icon-text">+00 123 456 789</span>                    </div>
                        </div>
                        <div class="icon-box col-md-3">
                            <div class="icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="icon-details">
                                <span class="icon-text">example@youremail.com</span>                    </div>
                        </div>
                        <div class="icon-box col-md-3">
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="icon-details">
                                <span class="icon-text">Our Location</span>                    </div>
                        </div>
                        <div class="icon-box col-md-3">
                            <div class="icon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="icon-details">
                                <span class="icon-text">Working Hours</span>                    </div>
                        </div>
                    </div>                        </div>
                <div class="header-right">
                    <div class="icon-box">
                        <a class="my-account" href="#">
                            My Account                                        </a>
                    </div>
                </div><!--.header-right-->
            </div><!-- .top-header-container -->
        </div><!-- .top-header-wrapper -->
        <div class="header-wrapper clearfix">
            <div class="wrapper">
                <div class="site-logo">
                    <a href="../index.html" class="custom-logo-link" rel="home" itemprop="url"><img width="290" height="95" src="../wp-content/uploads/2018/12/xcropped-online-shop-logo.png.pagespeed.ic.ydo19NboxY.png" class="custom-logo" alt="Nội Thất Đông Dương" itemprop="logo"/></a>                        </div><!--site-logo-->
                <div class='center-wrapper-mx-width'>                        <div class="cart-section">
                        <div class="wc-cart-wrapper">
                            <div class="wc-cart-icon-wrapper">
                                <a class="at-wc-icon cart-icon" href="../cart/index.html">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="cart-value cart-customlocation"> 0</span>
                                </a>
                            </div>
                            <div class="wc-cart-widget-wrapper">
                                <div class="widget woocommerce widget_shopping_cart"><div class="widget_shopping_cart_content"></div></div>                                </div>
                        </div>
                    </div> <!-- .cart-section -->
                    <div class="header-ads-adv-search float-right">
                        <aside id="online_shop_advanced_search-3" class="widget widget_online_shop_advanced_search"><div class="advance-product-search">
                                <form role="search" method="get" class="woocommerce-product-search" action="https://stgstours.org.sg/online-shop/">
                                    <select class="select_products" name="product_category">
                                        <option value="">All Categories</option>
                                        <option value="321">Clothing</option>
                                        <option value="322">Electronics</option>
                                        <option value="323">Featured</option>
                                        <option value="324">Featured Beside</option>
                                        <option value="325">Food &amp; Beverage</option>
                                        <option value="327">Men Collection</option>
                                        <option value="328">Music</option>
                                        <option value="329">Posters</option>
                                        <option value="330">Shoes</option>
                                        <option value="332">Sunglass</option>
                                        <option value="334">Women Collection</option>
                                    </select>
                                    <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search Product" value="" name="s"/>
                                    <button class="fa fa-search searchsubmit" type="submit"></button>
                                    <input type="hidden" name="post_type" value="product"/>
                                </form><!-- .woocommerce-product-search -->
                            </div><!-- .advance-product-search --></aside>
                    </div>
                </div>
            </div><!--.wrapper-->
            <div class="clearfix"></div>
            <div class="navigation-wrapper">
                <nav id="site-navigation" class="main-navigation  online-shop-enable-special-menu  clearfix">
                    <div class="header-main-menu wrapper clearfix">
                        <ul class="menu special-menu-wrapper">
                            <li class="menu-item menu-item-has-children">
                                <a href="javascript:void(0)" class="special-menu">
                                    <i class="fa fa-navicon toggle"></i>Categories                                        </a>
                                <ul id="menu-special-menu" class="sub-menu special-sub-menu"><li id="menu-item-1156" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1156"><a href="../danh-muc/women-collection/index.html">Women Collection</a></li>
                                    <li id="menu-item-1153" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1153"><a href="../danh-muc/men-collection/index.html">Men Collection</a></li>
                                    <li id="menu-item-1149" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1149"><a href="../danh-muc/music/index.html">Music</a></li>
                                    <li id="menu-item-1150" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1150"><a href="../danh-muc/posters/index.html">Posters</a></li>
                                    <li id="menu-item-1151" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1151"><a href="../danh-muc/featured-beside/index.html">Featured Beside</a></li>
                                    <li id="menu-item-1152" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1152"><a href="../danh-muc/featured/index.html">Featured</a></li>
                                    <li id="menu-item-1148" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-1148"><a href="../danh-muc/clothing/index.html">Clothing</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-1157" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1157"><a href="../danh-muc/clothing/hoodies/index.html">Hoodies</a></li>
                                            <li id="menu-item-1158" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1158"><a href="../danh-muc/clothing/t-shirts/index.html">T-shirts</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-1154" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1154"><a href="../danh-muc/shoes/index.html">Shoes</a></li>
                                    <li id="menu-item-1155" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1155"><a href="../danh-muc/sunglass/index.html">Sunglass</a></li>
                                    <li id="menu-item-1159" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1159"><a href="../danh-muc/featured/index.html">Featured</a></li>
                                    <li id="menu-item-1160" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1160"><a href="../danh-muc/women-collection/beauty-and-care/index.html">Beauty and Care</a></li>
                                    <li id="menu-item-1161" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1161"><a href="../danh-muc/food-beverage/index.html">Food &#038; Beverage</a></li>
                                </ul>                                        <div class="responsive-special-sub-menu clearfix"></div>
                            </li>
                        </ul>
                        <div class="acmethemes-nav">
                            <ul id="menu-primary-menu" class="menu"><li id="menu-item-1147" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1147"><a href="http://demo.acmethemes.com/online-shop/">Home</a></li>
                                <?php wp_nav_menu( array(

                                    'theme_location' => 'menu chính', // tên location cần hiển thị

                                    'items_wrap' => '%3$s',

                                    'container' => '', // thẻ container của menu

                                    'container_class' => 'menu-item menu-item-type-custom menu-item-object-custom menu-item-408', //class của container

                                    'container_id' => 'menu-primary-menu', //id của container

                                    'menu_class' => 'menu', // class của menu bên trong

                                    'walker' => new CSS_Menu_Maker_Walker_Top()

                                ) ); ?>
<!--                                <li id="menu-item-1163" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1163"><a href="https://www.acmethemes.com/themes/online-shop">Download Now</a></li>-->
<!--                                <li id="menu-item-1185" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item current_page_item menu-item-1185"><a href="index.html">Shop</a></li>-->
<!--                                <li id="menu-item-1184" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1184"><a href="../my-account/index.html">My account</a>-->
<!--                                    <ul class="sub-menu">-->
<!--                                        <li id="menu-item-1182" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1182"><a href="../cart/index.html">Cart</a></li>-->
<!--                                        <li id="menu-item-1183" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1183"><a href="../checkout/index.html">Checkout</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li id="menu-item-1186" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1186"><a href="../blog/index.html">Blog</a></li>-->
<!--                                <li id="menu-item-1162" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1162"><a href="https://www.acmethemes.com/themes/online-shop-pro">View Pro</a></li>-->
                            </ul>
                            <div class="at-menu-right-wrapper">
                                <a class="cart-icon" href="#" target="_blank">
				                                                                            <span class="menu-right-highlight-text">
                                                    Offer                                                </span>
                                    <span class="menu-right-text">
                                                Send Gift                                            </span>
                                </a>
                            </div><!--.at-menu-right-wrapper-->
                        </div>

                    </div>
                    <div class="responsive-slick-menu clearfix"></div>
                </nav>
                <!-- #site-navigation -->
            </div>
            <!-- .header-container -->
        </div>
        <!-- header-wrapper-->
    </header>
    <!-- #masthead -->
    <div class="content-wrapper clearfix">
        <div id="content" class="wrapper site-content">
            <div class='breadcrumbs clearfix'><div id='online-shop-breadcrumbs'><div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb"><ul class="trail-items" itemscope itemtype="http://schema.org/BreadcrumbList"><meta name="numberOfItems" content="2"/><meta name="itemListOrder" content="Ascending"/><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-begin"><a href="../index.html" rel="home" itemprop="item"><span itemprop="name">Home</span></a><meta itemprop="position" content="1"/></li><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end"><span itemprop="item"><span itemprop="name">Sản phẩm</span></span><meta itemprop="position" content="2"/></li></ul></div></div></div><div class='clear'></div><div id="primary" class="content-area"><main id="main" class="site-main"><header class="woocommerce-products-header">
                        <h1 class="woocommerce-products-header__title page-title">Shop</h1>

                    </header>
                    <div class="woocommerce-notices-wrapper"></div><p class="woocommerce-result-count">
                        Hiển thị 1&ndash;16 trong 50 kết quả</p>
                    <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby">
                            <option value="menu_order" class="shop_menu_order_1">Thứ tự mặc định</option>
                            <option value="popularity" class="shop_popularity_1">Phổ biến nhất</option>
                            <option value="rating" class="shop_rating_1">Đánh giá cao nhất</option>
                            <option value="date" class="shop_date_1">Sort by latest</option>
                            <option value="price" class="shop_price_1">Giá thấp đến cao</option>
                            <option value="price-desc" class="shop_price-desc_1">Giá cao xuống thấp</option>
                        </select>
                        <input type="hidden" name="paged" value="1"/>
                    </form>
                    <ul class="products columns-4 shop_menu_order">
                        <?php do_action( 'ttkw_shop_menu_order' ); ?>
                    </ul>
                    <ul class="products columns-4 shop_popularity">
                        <?php do_action( 'ttkw_shop_popularity' ); ?>
                    </ul>
                    <ul class="products columns-4 hidden-shop shop_rating">
                        <?php do_action( 'ttkw_shop_rating' ); ?>
                    </ul>
                    <ul class="products columns-4 hidden-shop shop_date">
                        <?php do_action( 'ttkw_shop_date' ); ?>
                    </ul>
                    <ul class="products columns-4 hidden-shop shop_price">
                        <?php do_action( 'ttkw_shop_price' ); ?>
                    </ul>
                    <ul class="products columns-4 hidden-shop shop_price-desc">
                        <?php do_action( 'ttkw_shop_price-desc' ); ?>
                    </ul>

                    <nav class="woocommerce-pagination">
                        <ul class='page-numbers'>
                            <li><span aria-current='page' class='page-numbers current'>1</span></li>
                            <li><a class='page-numbers' href='page/2/index.html'>2</a></li>
                            <li><a class='page-numbers' href='page/3/index.html'>3</a></li>
                            <li><a class='page-numbers' href='page/4/index.html'>4</a></li>
                            <li><a class="next page-numbers" href="page/2/index.html">&rarr;</a></li>
                        </ul>
                    </nav>
                </main><!-- #main --></div><!-- #primary --> 	<div class="modal"></div>         </div><!-- #content -->
    </div><!-- content-wrapper-->
    <div class="clearfix"></div>

<?php get_footer();?>