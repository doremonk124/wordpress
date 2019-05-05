<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<!--<div class="wrap">-->
<!--	<div id="primary" class="content-area">-->
<!--		<main id="main" class="site-main" role="main">-->
<!---->
<!--			--><?php
//			/* Start the Loop */
//			while ( have_posts() ) : the_post();
//
//				get_template_part( 'template-parts/post/content', get_post_format() );
//
//				// If comments are open or we have at least one comment, load up the comment template.
//				if ( comments_open() || get_comments_number() ) :
//					comments_template();
//				endif;
//				the_post_navigation( array(
//					'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
//					'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
//				) );
//
//			endwhile; // End of the loop.
//			?>
<!---->
<!--		</main>-->
<!--	</div>-->
<!--	--><?php //get_sidebar(); ?>
<!--</div>-->
    <body class="post-template-default single single-post postid-282 single-format-standard custom-background wp-custom-logo woocommerce-no-js columns-4 woocommerce-active at-sticky-sidebar left-logo-right-ads right-sidebar">

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
                                    <span class="icon-text">Working Hours - 10am - 06pm</span>                    </div>
                            </div>
                        </div>                        </div>
                    <div class="header-right">
                        <div class='at-first-level-nav at-display-inline-block'><ul id="menu-top-menu" class="menu"><li id="menu-item-420" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-420"><a href="http://demo.acmethemes.com/online-shop/wishlist/">Wishlist</a></li>
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
                        ?>                      </div><!--site-logo-->
                    <div class='center-wrapper-mx-width'>                        <div class="cart-section">
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
                                </div><!-- .advance-product-search --></aside>                    </div>
                    </div>                </div><!--.wrapper-->
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
                                </ul>
                                <div class="at-menu-right-wrapper">
                                    <a class="cart-icon" href="http://demo.acmethemes.com/online-shop/shop/" target="">
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
                            <ul class="trail-items" itemscope itemtype="http://schema.org/BreadcrumbList"><meta name="numberOfItems" content="6" /><meta name="itemListOrder" content="Ascending" />
                                <?php  woocommerce_breadcrumb(); ?>
                            </ul></div></div></div>
                <div class='clear'></div>
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <?php while ( have_posts() ) : the_post();
                        //        while($post_new->have_posts()):$post_new->the_post();
                        $id_post = get_the_ID();
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
                                        <i class="fa fa-user"></i><?php echo get_the_author() ?></a></span></span><span class="comments-link"><i class="fa fa-comment-o"></i><a href="http://demo.acmethemes.com/online-shop/blog/2017/12/05/laptop/#respond">1 comment</a></span>			</div><!-- .entry-meta -->
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo the_content(); ?></p>
                                </div><!-- .entry-content -->
                            </div>
                        </article><!-- #post-## -->
                        <?php endwhile; ?>
                        <div class='clearfix'></div>
                        <nav class="navigation post-navigation" role="navigation">
                            <h2 class="screen-reader-text">Post navigation</h2>
                            <?php   $cate = array(
                                'post_type' => 'post',
                                'category_name'=>'blog',
                                'posts_per_page' => 2,
                            );
                            $loop = new WP_Query($cate);
                            while ($loop->have_posts()) : $loop->the_post();
                            if($id_post != get_the_ID()){
                                ?>
                                <div class="nav-links"><div class="nav-previous">
                                <a href="<?php echo the_permalink(); ?>" rel="prev"><?php echo the_title(); ?></a></div>
                                </div>
                            <?php } endwhile;
                            wp_reset_query(); ?>
                        </nav>
                        <div class="at-title-action-wrapper">
                            <h2 class="widget-title">Related posts</h2>
                        </div>
                        <div class="featured-entries-col column">
                         <?php   $cate2 = array(
                                'post_type' => 'post',
                                'category_name'=>'blog',
                                'posts_per_page' => 3,
                            );
                            $loop2 = new WP_Query($cate2);
                            while ($loop2->have_posts()) : $loop2->the_post();
                            if($id_post != get_the_ID()){
                                ?>
                                <div class="single-list acme-col-3">
                                    <div class="post-container">
                                        <div class="post-thumb">
                                            <a href="<?php echo the_permalink(); ?>">
                                                <img style="height: 200px" width="640" height="480" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" class="attachment-large size-large wp-post-image" alt=""  />                                </a>
                                        </div><!-- .post-thumb-->
                                        <div class="post-content">
                                            <div class="entry-header">
                                                <span class="cat-links"></span><a class="at-cat-item-42" href="<?php echo the_permalink(); ?>"  rel="category tag"><?php echo the_category(); ?></a><h3 class="entry-title">
                                                    <a href="<?php echo the_permalink(); ?>" rel="bookmark"><?php echo the_title(); ?></a></h3>                                </div><!-- .entry-header -->
                                            <div class="entry-content clearfix">
                                                <div class="details" style="height: 60px; overflow: hidden"><p><?php echo the_content(); ?></p>
                                                </div>                                </div><!-- .entry-content -->
                                        </div><!--.post-content-->
                                    </div><!--.post-container-->
                                </div><!--dynamic css-->
                            <?php }endwhile;
                            wp_reset_query(); ?>

                        </div><!--featured entries-col-->
                        <div id="comments" class="comments-area">
                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title"><span></span> Leave a Comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="/online-shop/blog/2017/12/05/laptop/#respond" style="display:none;">Cancel reply</a></small></h3>			<form action="http://demo.acmethemes.com/online-shop/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                                    <p class="comment-form-comment"><label for="comment"></label> <textarea id="comment" name="comment" placeholder="Comment" cols="45" rows="8" aria-required="true"></textarea></p><p class="comment-form-author"><label for="author"></label><input id="author" name="author" type="text" placeholder="Name" value="" size="30" aria-required="true"/></p>
                                    <p class="comment-form-email"><label for="email"></label> <input id="email" name="email" type="email" value="" placeholder="Email" size="30"aria-required="true"/></p>
                                    <p class="comment-form-url"><label for="url"></label> <input id="url" name="url" placeholder="Website URL" type="url" value="" size="30" /></p>
                                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Add Comment" /> <input type='hidden' name='comment_post_ID' value='282' id='comment_post_ID' />
                                        <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                    </p>			</form>
                            </div><!-- #respond -->
                        </div><!-- #comments -->		</main><!-- #main -->
                </div><!-- #primary -->
                <div id="secondary-right" class="widget-area sidebar secondary-sidebar float-right" role="complementary">
                    <div id="sidebar-section-top" class="widget-area sidebar clearfix">
                        <aside id="woocommerce_products-5" class="widget woocommerce widget_products"><div class="at-title-action-wrapper clearfix"><h3 class="widget-title">Recent Products</h3></div>
                            <ul class="product_list_widget">
                                <?php do_action( 'ttkw_blog_recent_products'); ?>
                            </ul></aside><aside id="woocommerce_recent_reviews-3" class="widget woocommerce widget_recent_reviews">
                            <div class="at-title-action-wrapper clearfix"><h3 class="widget-title">High Reviews Product</h3></div>
                            <ul class="product_list_widget">
                                <?php do_action( 'ttkw_blog_review_hinglights'); ?>
                            </ul></aside>		<aside id="recent-posts-2" class="widget widget_recent_entries">
                            <div class="at-title-action-wrapper clearfix"><h3 class="widget-title">Recent Posts</h3></div>
                            <ul>
                                <?php do_action( 'ttkw_blog_recent_posts'); ?>
                            </ul>
                        </aside><aside id="recent-comments-2" class="widget widget_recent_comments"><div class="at-title-action-wrapper clearfix"><h3 class="widget-title">Recent Comments</h3></div><ul id="recentcomments"><li class="recentcomments"><span class="comment-author-link">Maria</span> on <a href="http://demo.acmethemes.com/online-shop/product/woo-ninja-3/#comment-35">Woo Ninja</a></li><li class="recentcomments"><span class="comment-author-link">Maria</span> on <a href="http://demo.acmethemes.com/online-shop/product/happy-ninja/#comment-10">Happy Ninja</a></li><li class="recentcomments"><span class="comment-author-link">Stuart</span> on <a href="http://demo.acmethemes.com/online-shop/product/ship-your-idea-2/#comment-11">Ship Your Idea</a></li><li class="recentcomments"><span class="comment-author-link">Stuart</span> on <a href="http://demo.acmethemes.com/online-shop/product/ship-your-idea/#comment-7">Ship Your Idea</a></li><li class="recentcomments"><span class="comment-author-link">Coen Jacobs</span> on <a href="http://demo.acmethemes.com/online-shop/product/woo-album-3/#comment-37">Woo Album #3</a></li></ul></aside><aside id="archives-2" class="widget widget_archive"><div class="at-title-action-wrapper clearfix"><h3 class="widget-title">Archives</h3></div>		<ul>
                                <li><a href='http://demo.acmethemes.com/online-shop/blog/2017/12/'>December 2017</a></li>
                            </ul>
                        </aside><aside id="categories-2" class="widget widget_categories"><div class="at-title-action-wrapper clearfix"><h3 class="widget-title">Categories</h3></div>
                            <ul>
                                <?php do_action( 'ttkw_blog_categories'); ?>
                            </ul>
                        </aside>		</div>
                </div>
            </div><!-- #content -->
        </div><!-- content-wrapper-->
        <div class="clearfix"></div>
<?php get_footer();

