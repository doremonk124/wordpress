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
 * Template Name: trang chủ
 */

get_header(); ?>
<?php if(is_user_logged_in()) { $user_id = get_current_user_id();$current_user = wp_get_current_user();$profile_url = get_author_posts_url($user_id);$edit_profile_url = get_edit_profile_url($user_id); ?>
    <div class="regted">
        <?php echo $current_user->address; ?>
        Bạn đã đăng nhập với tên nick <a href="<?php echo $profile_url ?>"><?php echo $current_user->display_name; ?></a> Bạn có muốn <a style="color: red" href="<?php echo esc_url(wp_logout_url($current_url)); ?>">Thoát</a> không ?
    </div>
<?php }?>
    <body class="home page-template-default page page-id-193 wp-custom-logo woocommerce-no-js woocommerce-wishlist woocommerce woocommerce-page columns-4 woocommerce-active at-sticky-sidebar left-logo-right-ads right-sidebar online-shop-feature-special-menu">
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content" title="link">Skip to content</a>
    <header id="masthead" class="site-header">
        <div class="top-header-wrapper clearfix">
            <div class="wrapper" style="padding: 5px">
                <div class="header-left" style="margin-top: 0">
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
                                <span class="icon-text">Working Hours - 10am - 06pm</span>                    </div>
                        </div>
                    </div>                        </div>
                <div class="header-right">
                    <div class='at-first-level-nav at-display-inline-block'>
                        <?php wp_nav_menu( array(

                            'theme_location' => 'top', // tên location cần hiển thị

                            'container' => '', // thẻ container của menu

                            'container_class' => '', //class của container

                            'container_id' => '', //id của container

                            'menu_class' => '', // class của menu bên trong

                            'walker' => new CSS_Menu_Maker_Walker_Top()

                        ) ); ?>
                    </div>
                    <!--                        <div class='at-first-level-nav at-display-inline-block'>-->
                    <!--                            <ul id="menu-top-menu" class="menu">-->
                    <!--                                <li id="menu-item-420" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-420">-->
                    <!--                                    <a href="http://demo.acmethemes.com/online-shop/wishlist/">Wishlist</a>-->
                    <!--                                </li>-->
                    <!--                                <li id="menu-item-421" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-421">-->
                    <!--                                    <a href="http://demo.acmethemes.com/online-shop/cart/">Cart</a>-->
                    <!--                                </li>-->
                    <!--                            </ul>-->
                    <!--                        </div>-->
                    <!--                        <div class="icon-box">-->
                    <!--                            <a href="https://www.facebook.com/acmethemes/" target="">-->
                    <!--                                <i class="fa fa-facebook"></i></a></div>-->
                    <!--                        <div class="icon-box">-->
                    <!--                            <a href="https://twitter.com/acme_themes" target="">-->
                    <!--                                <i class="fa fa-twitter"></i></a></div>-->
                    <!--                        <div class="icon-box">-->
                    <!--                            <a href="https://www.linkedin.com/company/acmethemes/" target="">-->
                    <!--                                <i class="fa fa-linkedin"></i>-->
                    <!--                            </a>-->
                    <!--                        </div>-->
                    <!--                        <div class="icon-box">-->
                    <!--                            <a href="https://www.instagram.com/acmethemes/" target="">-->
                    <!--                                <i class="fa fa-instagram"></i>-->
                    <!--                            </a>-->
                    <!--                        </div>-->
                    <!--                        <div class="icon-box">-->
                    <!--                            <a href="https://profiles.wordpress.org/ACMETHEMES" target="">-->
                    <!--                                <i class="fa fa-wordpress"></i>-->
                    <!--                            </a>-->
                    <!--                        </div>-->
                    <!--                        <div class="icon-box">-->
                    <!--                            <a class="my-account" href="http://demo.acmethemes.com/online-shop/my-account/">-->
                    <!--                                My Account-->
                    <!--                            </a>-->
                    <!--                        </div>-->
                </div><!--.header-right-->
            </div><!-- .top-header-container -->
        </div><!-- .top-header-wrapper -->
        <div class="header-wrapper clearfix">
            <div class="wrapper">
                <div class="site-logo">
                    <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                    ?>
                    <!--                        <a href="http://demo.acmethemes.com/online-shop/" class="custom-logo-link" rel="home" itemprop="url">-->
                    <!--                            <img width="290" height="95" src="http://demo.acmethemes.com/online-shop/wp-content/uploads/2017/12/cropped-online-shop-logo.png" class="custom-logo" alt="Online Shop" itemprop="logo" />-->
                    <!--                        </a>                        -->
                </div>
                <!--site-logo-->
                <div class='center-wrapper-mx-width'>
                    <div class="cart-section">
                        <div class="yith-wcwl-wrapper">
                            <a class="at-wc-icon wishlist-icon" href="http://demo.acmethemes.com/online-shop/wishlist/">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <span class="wishlist-value">0</span>
                            </a>
                        </div>
                        <div class="wc-cart-wrapper">
                            <div class="wc-cart-icon-wrapper">
                                <a class="at-wc-icon cart-icon" href="http://demo.acmethemes.com/online-shop/cart/">
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
                                <form role="search" method="get" class="woocommerce-product-search" action="http://demo.acmethemes.com/online-shop/">
                                    <select class="select_products" name="product_category">
                                        <option value="">All Categories</option>
                                        <option value="18"  >Clothing</option>
                                        <option value="43"  >Electronics</option>
                                        <option value="51"  >Fashion</option>
                                        <option value="31"  >Featured</option>
                                        <option value="32"  >Featured Beside</option>
                                        <option value="45"  >Food &amp; Beverage</option>
                                        <option value="35"  >Men Collection</option>
                                        <option value="20"  >Music</option>
                                        <option value="21"  >Posters</option>
                                        <option value="37"  >Shoes</option>
                                        <option value="38"  >Sunglass</option>
                                        <option value="36"  >Women Collection</option>
                                    </select>
                                    <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search Products" value="" name="s" />
                                    <button class="fa fa-search searchsubmit" type="submit"></button>
                                    <input type="hidden" name="post_type" value="product" />
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
                            <i class="fa fa-navicon toggle"></i>Categories
                        </a>
                        <ul id="menu-special-menu" class="sub-menu special-sub-menu">
                            <?php do_action('ttkw_shop_danh_muc') ?>
                        </ul>
                    </li>
                </ul>
                <div class="acmethemes-nav">
                    <ul id="menu-primary-menu" class="menu">

                        <?php wp_nav_menu( array(

                            'theme_location' => 'menu chính', // tên location cần hiển thị

                            'items_wrap' => '%3$s',

                            'container' => '', // thẻ container của menu

                            'container_class' => 'menu-item menu-item-type-custom menu-item-object-custom menu-item-408', //class của container

                            'container_id' => 'menu-primary-menu', //id của container

                            'menu_class' => 'menu', // class của menu bên trong

                            'walker' => new CSS_Menu_Maker_Walker_Top()

                        ) ); ?>
                    </ul>
                    <!--                                <ul id="menu-primary-menu" class="menu"><li id="menu-item-132" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-132"><a href="http://demo.acmethemes.com/online-shop/">Home</a></li>-->
                    <!--                                    <li id="menu-item-408" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-408"><a href="https://www.acmethemes.com/themes/online-shop">Download Now</a></li>-->
                    <!--                                    <li id="menu-item-136" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-136"><a href="http://demo.acmethemes.com/online-shop/shop/">Shop</a></li>-->
                    <!--                                    <li id="menu-item-135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-135"><a href="http://demo.acmethemes.com/online-shop/my-account/">My account</a>-->
                    <!--                                        <ul class="sub-menu">-->
                    <!--                                            <li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a href="http://demo.acmethemes.com/online-shop/cart/">Cart</a></li>-->
                    <!--                                            <li id="menu-item-134" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-134"><a href="http://demo.acmethemes.com/online-shop/checkout/">Checkout</a></li>-->
                    <!--                                        </ul>-->
                    <!--                                    </li>-->
                    <!--                                    <li id="menu-item-407" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-407"><a href="http://demo.acmethemes.com/online-shop/blog/">Blog</a></li>-->
                    <!--                                    <li id="menu-item-406" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-406"><a href="https://www.acmethemes.com/themes/online-shop-pro">View Pro</a></li>-->
                    <!--                                </ul>                                    <div class="at-menu-right-wrapper">-->
                    <!--                                    <a class="cart-icon" href="http://demo.acmethemes.com/online-shop/shop/" target="">-->
                    <!--				                                                                            <span class="menu-right-highlight-text">-->
                    <!--                                                    Offer                                                </span>-->
                    <!--                                        <span class="menu-right-text">-->
                    <!--                                                Send Gift                                            </span>-->
                    <!--                                    </a>-->
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
                <div class="clearfix"></div>
                <div class="wrapper">
                    <div class="slider-feature-wrap  clearfix full-screen-bg">
                        <div class="online-shop-before-feature">
                            <aside id="online_shop_about-3" class="widget widget_online_shop_about">            <div class="featured-entries-col featured-entries-about column">
                                    <div class="single-list acme-col-3">
                                        <div class="single-item">
                                            <div class="icon">
                                                <i class="fa fa-truck"></i>
                                            </div>
                                            <div class="content">
                                                <h3 class="title">
                                                    Free Shipping &#038; Return                                        </h3>
                                                <div class="details">
                                                    <p>Free Shipping on all order over $99</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--dynamic css-->
                                    <div class="single-list acme-col-3">
                                        <div class="single-item">
                                            <div class="icon">
                                                <i class="fa fa-money"></i>
                                            </div>
                                            <div class="content">
                                                <h3 class="title">
                                                    Money Back Guarantee                                        </h3>
                                                <div class="details">
                                                    <p>100% Money Back Guarantee</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--dynamic css-->
                                    <div class="single-list acme-col-3">
                                        <div class="single-item">
                                            <div class="icon">
                                                <i class="fa fa-headphones"></i>
                                            </div>
                                            <div class="content">
                                                <h3 class="title">
                                                    Free Customer Support                                        </h3>
                                                <div class="details">
                                                    <p>Support 24/7 online and phone</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--dynamic css-->
                                </div>
                            </aside>                    </div>
                        <div class="slider-section">
                            <span class='at-action-wrapper'>
                                <i class="prev fa fa-angle-left"></i>
                                <i class="next fa fa-angle-right"></i>
                            </span>
                            <div class="featured-slider at-feature-section" data-autoplay="" data-arrows="1" >

                                <?php echo do_shortcode("[huge_it_slider id='1']"); ?>
                            </div>
                        </div>
                        <div class="beside-slider full-screen-bg">
                            <div class="fs-right-slider" data-autoplay="1" data-arrows="">
                                <?php echo do_shortcode("[huge_it_slider id='2']"); ?>
                            </div><!--.fs-right-slider-->
                        </div><!--beside-slider-->
                    </div><!--slider-feature-wrap-->
                </div>
                <div class="clearfix"></div>
                <aside id="online_shop_wc_products-3" class="widget widget_online_shop_wc_products"><div class='at-cat-color-wrap-51'><div class="at-title-action-wrapper clearfix">
                            <h2 class="widget-title">Featured Products<span class='at-action-wrapper'><a href="http://demo.acmethemes.com/online-shop/shop/" class="all-link" >View All</a><i class="prev fa fa-angle-left"></i><i class="next fa fa-angle-right"></i></span></h2></div></div>                <div class="featured-entries-col woocommerce acme-slick-carausel" data-column="4">
                        <?php if(is_user_logged_in()) { $user_id = get_current_user_id();$current_user = wp_get_current_user();$profile_url = get_author_posts_url($user_id);$edit_profile_url = get_edit_profile_url($user_id); ?>
                            <?php $data = $current_user->address; ?>
                            <?php do_action( 'shopper_product_sales_home', $data ); ?>
                        <?php }?>



                    </div><!--featured entries-col-->
                </aside>
                <div class='clearfix'></div>
                <aside id="online_shop_featured_page-3" class="widget widget_online_shop_featured_page">            <div class="featured-entries-col featured-entries-page">
                        <?php echo do_shortcode("[huge_it_slider id='4']"); ?>
                        <?php echo do_shortcode("[huge_it_slider id='5']"); ?>
                    </div>
                </aside>
                    <aside id="online_shop_wc_cats_tabs-3" class="widget widget_online_shop_wc_cats_tabs">
                        <div class="at-title-action-wrapper clearfix">
                            <h2 class="widget-title">Classified Products<i class="fa fa-navicon mobile-only toggle-cats"></i>
                                <span class='at-action-wrapper at-tabs'>
                                    <span class='at-cat-color-wrap-24 active' data-id='24'>Albums</span>
                                    <span class='at-cat-color-wrap-19' data-id='19'>Hoodies</span>
                                    <span class='at-cat-color-wrap-20' data-id='20'>Music</span>
                                    <span class='at-cat-color-wrap-23' data-id='23'>T-shirts</span></span></h2></div>
                        <div class='at-tabs-wrap disable  active' data-id='24'>
                            <div class="featured-entries-col woocommerce column">
                                <?php do_action( 'ttkw_category_tab' ); ?>
                            </div></div>
                            <div class='at-tabs-wrap disable ' data-id='19'>
                                <div class="featured-entries-col woocommerce column">
                                    <?php do_action( 'ttkw_category_tab_hoodies' ); ?>
                        </div><!--featured entries-col-->
                    </div><div class='at-tabs-wrap disable ' data-id='20'>
                            <div class="featured-entries-col woocommerce column">
                                <?php do_action( 'ttkw_category_tab_music' ); ?>
                        </div><!--featured entries-col-->
                    </div><div class='at-tabs-wrap disable ' data-id='23'>
                            <div class="featured-entries-col woocommerce column">
                                <?php do_action( 'ttkw_category_tab_shirt' ); ?>
                        </div><!--featured entries-col-->
                    </div></aside><div class='clearfix'></div>
                <aside id="online_shop_wc_products-7" class="widget widget_online_shop_wc_products">
                    <div class='at-cat-color-wrap-18'>
                        <div class="at-title-action-wrapper clearfix">
                            <h2 class="widget-title">Recents Products<span class='at-action-wrapper'></span></h2></div></div>
                    <div class="featured-entries-col woocommerce column">
                        <?php do_action( 'ttkw_product_new' ); ?>
                    </div><!--featured entries-col-->
                </aside><div class='clearfix'></div><aside id="online_shop_wc_feature_cats-3" class="widget widget_online_shop_wc_feature_cats"><div class="at-title-action-wrapper clearfix"><h2 class="widget-title">Popular categories<span class='at-action-wrapper'></span></h2></div>                <div class="wc-cat-feature at-cat-feature-section column layout-2" data-column="1">
                        <div class='at-unique-slide '>
                            <?php do_action( "ttkw_popular_men" ); ?>
                        </div>                </div><!--wc-cat-feature-->
                </aside>
                <aside id="online_shop_wc_products-9" class="widget widget_online_shop_wc_products"><div class='at-cat-color-wrap-18'><div class="at-title-action-wrapper clearfix"><h2 class="widget-title">Onsale Products<span class='at-action-wrapper'></span></h2></div></div>                <div class="featured-entries-col woocommerce column">
                        <?php do_action( "ttkw_product_sale" ); ?>
                    </div><!--featured entries-col-->
                </aside>
                <div class='clearfix'></div>
                <aside id="online_shop_posts_col-3" class="widget widget_online_shop_posts_col">
                    <div class='at-cat-color-wrap-42'>
                        <div class="at-title-action-wrapper clearfix">
                            <h2 class="widget-title">Latest Blog<span class='at-action-wrapper'></span></h2>
                        </div>
                    </div>
                    <div class="featured-entries-col column">
                        <?php do_action( "ttkw_post_new" ); ?>
                    </div><!--featured entries-col-->
                </aside><div class='clearfix'></div><aside id="online_shop_advanced_image_logo-3" class="widget widget_online_shop_advanced_image_logo"><div class="at-title-action-wrapper clearfix"><h2 class="widget-title">Our Associates<span class='at-action-wrapper'></span></h2></div>            <div class="featured-entries-col featured-entries-logo column">
                        <div class="single-list acme-col-4">
                            <div class="single-item">
                                <img src=" http://demo.acmethemes.com/online-shop/wp-content/uploads/2017/12/wpress.jpg">
                            </div>
                        </div><!--dynamic css-->
                        <div class="single-list acme-col-4">
                            <div class="single-item">
                                <img src=" http://demo.acmethemes.com/online-shop/wp-content/uploads/2017/12/woo.jpg">
                            </div>
                        </div><!--dynamic css-->
                        <div class="single-list acme-col-4">
                            <div class="single-item">
                                <img src=" http://demo.acmethemes.com/online-shop/wp-content/uploads/2017/12/bbpress.jpg">
                            </div>
                        </div><!--dynamic css-->
                        <div class="single-list acme-col-4">
                            <div class="single-item">
                                <img src=" http://demo.acmethemes.com/online-shop/wp-content/uploads/2017/12/jq.jpg">
                            </div>
                        </div><!--dynamic css-->
                    </div>
                </aside>        </div><!-- #content -->
        </div><!-- content-wrapper-->
        <div class="clearfix"></div>
<?php get_footer();
