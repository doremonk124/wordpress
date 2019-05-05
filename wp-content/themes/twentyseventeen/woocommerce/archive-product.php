<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );

?>
<!--<header class="woocommerce-products-header">-->
<!--	--><?php //if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
<!--		<h1 class="woocommerce-products-header__title page-title">--><?php //woocommerce_page_title(); ?><!--</h1>-->
<!--	--><?php //endif; ?>
<!---->
<!--	--><?php
	/**
//	 * Hook: woocommerce_archive_description.
//	 *
//	 * @hooked woocommerce_taxonomy_archive_description - 10
//	 * @hooked woocommerce_product_archive_description - 10
//	 */
//	do_action( 'woocommerce_archive_description' );
//	?>
<!--</header>-->
<?php
//if ( woocommerce_product_loop() ) {
//
//	/**
//	 * Hook: woocommerce_before_shop_loop.
//	 *
//	 * @hooked woocommerce_output_all_notices - 10
//	 * @hooked woocommerce_result_count - 20
//	 * @hooked woocommerce_catalog_ordering - 30
//	 */
//	do_action( 'woocommerce_before_shop_loop' );
//
//	woocommerce_product_loop_start();
//
//	if ( wc_get_loop_prop( 'total' ) ) {
//		while ( have_posts() ) {
//			the_post();
//
//			/**
//			 * Hook: woocommerce_shop_loop.
//			 *
//			 * @hooked WC_Structured_Data::generate_product_data() - 10
//			 */
//			do_action( 'woocommerce_shop_loop' );
//
//			wc_get_template_part( 'content', 'product' );
//		}
//	}
//
//	woocommerce_product_loop_end();
//
//	/**
//	 * Hook: woocommerce_after_shop_loop.
//	 *
//	 * @hooked woocommerce_pagination - 10
//	 */
//	do_action( 'woocommerce_after_shop_loop' );
//} else {
//	/**
//	 * Hook: woocommerce_no_products_found.
//	 *
//	 * @hooked wc_no_products_found - 10
//	 */
//	do_action( 'woocommerce_no_products_found' );
//}
//
///**
// * Hook: woocommerce_after_main_content.
// *
// * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
// */
//do_action( 'woocommerce_after_main_content' );
//
///**
// * Hook: woocommerce_sidebar.
// *
// * @hooked woocommerce_get_sidebar - 10
// */
//do_action( 'woocommerce_sidebar' );
?>
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
                                                <?php
                                                if ( function_exists( 'the_custom_logo' ) ) {
                                                    the_custom_logo();
                                                }
                                                ?>
<!--			                <a href="../index.html" class="custom-logo-link" rel="home" itemprop="url"><img width="290" height="95" src="../wp-content/uploads/2018/12/xcropped-online-shop-logo.png.pagespeed.ic.ydo19NboxY.png" class="custom-logo" alt="online-shop" itemprop="logo"/></a>                        -->
                                            </div><!--site-logo-->
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
			                            <ul id="menu-special-menu" class="sub-menu special-sub-menu">
                                            <?php do_action('ttkw_shop_danh_muc') ?>
                                        </ul>
                                    <div class="responsive-special-sub-menu clearfix"></div>
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
</ul>                                    <div class="at-menu-right-wrapper">
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
        <div class='breadcrumbs clearfix'><div id='online-shop-breadcrumbs'>
                <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
                    <?php  woocommerce_breadcrumb(); ?>
                </div></div></div><div class='clear'></div><div id="primary" class="content-area"><main id="main" class="site-main"><header class="woocommerce-products-header">
			<h1 class="woocommerce-products-header__title page-title">Shop</h1>

	</header>
<div class="woocommerce-notices-wrapper"></div><p class="woocommerce-result-count">
	Hiển thị 1&ndash;16 trong 50 kết quả</p>
<?php if (! is_search() ) {	?>
<form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby">
					<option value="menu_order" selected='selected'>Thứ tự mặc định</option>
					<option value="popularity">Phổ biến nhất</option>
					<option value="rating">Đánh giá cao nhất</option>
					<option value="date">Sort by latest</option>
					<option value="price">Giá thấp đến cao</option>
					<option value="price-desc">Giá cao xuống thấp</option>
			</select>
	<input type="hidden" name="paged" value="1"/>
	</form>
<?php }	?>
<ul class="products columns-4">

	<?php while ( have_posts() ) : the_post();
          ?>

    <li  style="clear: none; width: 21.05%" class="post-<?php echo get_the_ID(); ?> product type-product status-publish has-post-thumbnail product_cat-featured product_cat-featured-beside first instock shipping-taxable purchasable product-type-simple">
        <a href="<?php echo the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
            <img style="height: 265px; width: 265px" width="300" height="300" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""/><h2 class="woocommerce-loop-product__title"><?php echo the_title(); ?></h2>
            <?php if(get_post_meta( get_the_ID(), '_regular_price', true ) > 0){
                if(get_post_meta( get_the_ID(), '_sale_price', true ) > 0){ ?>
                    <span class="price">
                                    <del><span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol"></span><?php echo wc_price(get_post_meta( get_the_ID(), '_regular_price', true ));?></span>
                                    </del>
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol"></span>
                                            <?php echo wc_price(get_post_meta( get_the_ID(), '_sale_price', true ));?>
                                        </span>
                                    </ins>
                                </span>
                    <?php
                } else { ?>
                    <span class="price">
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol"></span>
                                            <?php echo wc_price(get_post_meta( get_the_ID(), '_regular_price', true ));?>
                                        </span>
                                    </ins>
                                </span>
                <?php    }
            }?>
        </a><a href="<?php echo the_permalink(); ?>?add-to-cart=<?php echo get_the_ID(); ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="" aria-label="Thêm &ldquo;<?php echo the_title(); ?>&rdquo; vào giỏ hàng" rel="nofollow">Thêm vào giỏ</a>
    </li>

    <?php endwhile;?>
    <!--    <li class="post-127 product type-product status-publish has-post-thumbnail product_cat-featured product_cat-featured-beside first instock shipping-taxable purchasable product-type-simple">-->
<!--	    <a href="../san-pham/bag-collection/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="../wp-content/uploads/2017/12/xpeople-2594683_1280-300x300.jpg.pagespeed.ic.TXUJOEVPg0.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""/><h2 class="woocommerce-loop-product__title">Bag Collection</h2>-->
<!--	    <span class="price"><span class="woocommerce-Price-amount amount">25<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>-->
<!--        </a><a href="index4815.html?add-to-cart=127" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="127" data-product_sku="" aria-label="Thêm &ldquo;Bag Collection&rdquo; vào giỏ hàng" rel="nofollow">Thêm vào giỏ</a>-->
<!--    </li>-->
</ul>
<nav class="woocommerce-pagination">
    <?php pagination_tdc(); ?>
    <!--	<ul class='page-numbers'>-->
<!--	<li><span aria-current='page' class='page-numbers current'>1</span></li>-->
<!--	<li><a class='page-numbers' href='page/2/index.html'>2</a></li>-->
<!--	<li><a class='page-numbers' href='page/3/index.html'>3</a></li>-->
<!--	<li><a class='page-numbers' href='page/4/index.html'>4</a></li>-->
<!--	<li><a class="next page-numbers" href="page/2/index.html">&rarr;</a></li>-->
<!--</ul>-->
</nav>
</main><!-- #main --></div><!-- #primary -->
                <div class="modal"></div>         </div><!-- #content -->
        </div><!-- content-wrapper-->
            <div class="clearfix"></div>
<?php
get_footer( 'shop' );
