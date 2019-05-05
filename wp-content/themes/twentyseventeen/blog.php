<?php
/**
 * The main template file
 * @link https://codex.wordpress.org/
 *
 * @package _s
 * Template Name: blog
 */
get_header(); ?>
    <body class="blog custom-background wp-custom-logo woocommerce-js columns-4 woocommerce-active at-sticky-sidebar left-logo-right-ads right-sidebar" style="transform: none;">

<div id="page" class="hfeed site" style="transform: none;">
    <a class="skip-link screen-reader-text" href="#content" title="link">Skip to content</a>
    <header id="masthead" class="site-header">
        <div class="top-header-wrapper clearfix">
            <div class="wrapper">
                <div class="header-left">
                    <div class="icon-box">            <div class="icon-box col-md-3">
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
                    <div class="at-first-level-nav at-display-inline-block"><ul id="menu-top-menu" class="menu"><li id="menu-item-420" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-420"><a href="http://demo.acmethemes.com/online-shop/wishlist/">Wishlist</a></li>
                            <li id="menu-item-421" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-421"><a href="http://demo.acmethemes.com/online-shop/cart/">Cart</a></li>
                        </ul></div><div class="icon-box"><a href="https://www.facebook.com/acmethemes/" target=""><i class="fa fa-facebook"></i></a></div><div class="icon-box"><a href="https://twitter.com/acme_themes" target=""><i class="fa fa-twitter"></i></a></div><div class="icon-box"><a href="https://www.linkedin.com/company/acmethemes/" target=""><i class="fa fa-linkedin"></i></a></div><div class="icon-box"><a href="https://www.instagram.com/acmethemes/" target=""><i class="fa fa-instagram"></i></a></div><div class="icon-box"><a href="https://profiles.wordpress.org/ACMETHEMES" target=""><i class="fa fa-wordpress"></i></a></div>                                    <div class="icon-box">
                        <a class="my-account" href="http://demo.acmethemes.com/online-shop/my-account/">
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
                    ?>                    </div><!--site-logo-->
                <div class="center-wrapper-mx-width">                        <div class="cart-section">
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
                                <div class="widget woocommerce widget_shopping_cart"><div class="widget_shopping_cart_content">

                                        <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>


                                    </div></div>                                </div>
                        </div>
                    </div> <!-- .cart-section -->
                    <div class="header-ads-adv-search float-right">
                        <aside id="online_shop_advanced_search-3" class="widget widget_online_shop_advanced_search"><div class="advance-product-search">
                                <form role="search" method="get" class="woocommerce-product-search" action="http://demo.acmethemes.com/online-shop/">
                                    <select class="select_products" name="product_category">
                                        <option value="">All Categories</option>
                                        <option value="18">Clothing</option>
                                        <option value="43">Electronics</option>
                                        <option value="51">Fashion</option>
                                        <option value="31">Featured</option>
                                        <option value="32">Featured Beside</option>
                                        <option value="45">Food &amp; Beverage</option>
                                        <option value="35">Men Collection</option>
                                        <option value="20">Music</option>
                                        <option value="21">Posters</option>
                                        <option value="37">Shoes</option>
                                        <option value="38">Sunglass</option>
                                        <option value="36">Women Collection</option>
                                    </select>
                                    <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search Products" value="" name="s">
                                    <button class="fa fa-search searchsubmit" type="submit"></button>
                                    <input type="hidden" name="post_type" value="product">
                                </form><!-- .woocommerce-product-search -->
                            </div><!-- .advance-product-search --></aside>                    </div>
                </div>                </div><!--.wrapper-->
            <div class="clearfix"></div>
            <div class="navigation-wrapper">
                <nav id="site-navigation" class="main-navigation  online-shop-enable-special-menu  clearfix">
                    <div class="header-main-menu wrapper clearfix">
                        <ul class="menu special-menu-wrapper">
                            <li class="menu-item menu-item-has-children">
                                <!--                                    <i class="fa fa-angle-down angle-down"></i>-->
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
                </nav>
                <!-- #site-navigation -->
            </div>
            <!-- .header-container -->
        </div>
        <!-- header-wrapper-->
    </header>
    <!-- #masthead -->
    <div class="content-wrapper clearfix" style="transform: none;">
        <div id="content" class="wrapper site-content" style="transform: none;">
            <div class="breadcrumbs clearfix"><div id="online-shop-breadcrumbs">
                    <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
                        <?php  woocommerce_breadcrumb(); ?>
                    </div></div></div><div class="clear"></div>	<div id="primary" class="content-area" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <!-- #main -->
                <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;"><main id="main" class="site-main">
                        <header class="page-header">
                            <h1 class="page-title">Blog</h1>
                        </header>
                        <!--                            --><?php //do_action('ttkw_blog_post') ?>
                        <?php
                        $post_new = new WP_Query(array(
                                    'post_type' =>  'post',
                                    'order' => 'DESC',
                                    'posts_per_page'    =>  4,
                                ));
//                        while ( have_posts() ) : the_post();
        while($post_new->have_posts()):$post_new->the_post();
                            ?>
                            <article id="post-282" class="post-282 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-blog">
                                <!--post thumbnal options-->
                                <div class="post-thumb">
                                    <a href="<?php echo the_permalink(); ?>">
                                        <img width="640" height="426" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" class="attachment-full size-full wp-post-image" alt="" sizes="(max-width: 640px) 100vw, 640px">			</a>
                                </div><!-- .post-thumb-->
                                <div class="post-content">
                                    <header class="entry-header">
                                        <span class="cat-links"></span>
                                        <a class="at-cat-item-42" href="<?php echo the_permalink(); ?>" rel="category tag"><?php the_category(); ?></a>
                                        <h2 class="entry-title">
                                            <a href="<?php echo the_permalink(); ?>" rel="bookmark"><?php echo the_title(); ?></a></h2>
                                        <div class="entry-meta">
                            <span class="posted-on"><a href="<?php echo the_permalink(); ?>" rel="bookmark">
                                    <i class="fa fa-calendar"></i>
                                    <time class="entry-date published" datetime="<?php echo get_the_time('', $post_new->ID); ?>"><?php echo the_modified_date ('F j, Y'); ?></time>
                                    <time class="updated" datetime="<?php echo get_the_time('', $post_new->ID); ?>"><?php echo the_modified_date (); ?></time></a></span>
                                            <span class="byline"> <span class="author vcard"><a class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
                                        <i class="fa fa-user"></i><?php echo get_the_author() ?></a></span></span>
                                            <span class="comments-link"><i class="fa fa-comment-o"></i>
                                                <?php $sl = count(get_comments(array('post_id'=> get_the_ID())))?>
                                                <a href="<?php echo the_permalink(); ?>"><?php echo $sl ?> comment</a></span>			</div><!-- .entry-meta -->
                                    </header><!-- .entry-header -->
                                    <div class="entry-content">
                                        <p><?php echo the_content(); ?></p>
                                        <a class="read-more" href="<?php echo the_permalink(); ?>">
                                            Read More                </a>
                                    </div><!-- .entry-content -->
                                </div>
                            </article><!-- #post-## -->
                        <?php
                        endwhile; ?>
                        <nav class="woocommerce-pagination">
                            <?php pagination_tdc(); ?>
                        </nav>
                    </main></div></div><!-- #primary -->
            <div id="secondary-right" class="widget-area sidebar secondary-sidebar float-right" role="complementary" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;"><div id="sidebar-section-top" class="widget-area sidebar clearfix">
                        <aside id="woocommerce_products-5" class="widget woocommerce widget_products"><div class="at-title-action-wrapper clearfix"><h3 class="widget-title">Recent Products</h3></div>
                            <ul class="product_list_widget">
                                <?php do_action( 'ttkw_blog_recent_products'); ?>
                            </ul></aside><aside id="woocommerce_recent_reviews-3" class="widget woocommerce widget_recent_reviews"><div class="at-title-action-wrapper clearfix"><h3 class="widget-title">High Reviews Product</h3></div>
                            <ul class="product_list_widget">
                                <?php do_action( 'ttkw_blog_review_hinglights'); ?>
                            </ul></aside>		<aside id="recent-posts-2" class="widget widget_recent_entries">		<div class="at-title-action-wrapper clearfix"><h3 class="widget-title">Recent Posts</h3></div>		<ul>
                                <?php do_action( 'ttkw_blog_recent_posts'); ?>
                            </ul>
                        </aside><aside id="recent-comments-2" class="widget widget_recent_comments"><div class="at-title-action-wrapper clearfix"><h3 class="widget-title">Recent Comments</h3></div><ul id="recentcomments"><li class="recentcomments"><span class="comment-author-link">Maria</span> on <a href="http://demo.acmethemes.com/online-shop/product/woo-ninja-3/#comment-35">Woo Ninja</a></li><li class="recentcomments"><span class="comment-author-link">Maria</span> on <a href="http://demo.acmethemes.com/online-shop/product/happy-ninja/#comment-10">Happy Ninja</a></li><li class="recentcomments"><span class="comment-author-link">Stuart</span> on <a href="http://demo.acmethemes.com/online-shop/product/ship-your-idea-2/#comment-11">Ship Your Idea</a></li><li class="recentcomments"><span class="comment-author-link">Stuart</span> on <a href="http://demo.acmethemes.com/online-shop/product/ship-your-idea/#comment-7">Ship Your Idea</a></li><li class="recentcomments"><span class="comment-author-link">Coen Jacobs</span> on <a href="http://demo.acmethemes.com/online-shop/product/woo-album-3/#comment-37">Woo Album #3</a></li></ul></aside><aside id="archives-2" class="widget widget_archive"><div class="at-title-action-wrapper clearfix"><h3 class="widget-title">Archives</h3></div>		<ul>
                                <li><a href="http://demo.acmethemes.com/online-shop/blog/2017/12/">December 2017</a></li>
                            </ul>
                        </aside><aside id="categories-2" class="widget widget_categories"><div class="at-title-action-wrapper clearfix"><h3 class="widget-title">Categories</h3></div>
                            <ul>
                                <?php do_action( 'ttkw_blog_categories'); ?>
                            </ul>
                        </aside>
                    </div></div></div>
        </div><!-- #content -->
    </div><!-- content-wrapper-->
    <div class="clearfix"></div>
</div><!-- #page -->
<script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>
<?php get_footer(); ?>