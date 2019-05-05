<?php session_start();
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>
    <script type="text/javascript">
        document.documentElement.className = document.documentElement.className + ' yes-js js_active js';
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/demo.acmethemes.com\/online-shop\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.0.3"}};
        !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    </script>
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
			<div class='breadcrumbs clearfix'><div id='online-shop-breadcrumbs'><div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
						<ul class="trail-items" itemscope itemtype="http://schema.org/BreadcrumbList"><meta name="numberOfItems" content="3"/><meta name="itemListOrder" content="Ascending"/>
							<?php  woocommerce_breadcrumb(); ?>
						</ul></div></div></div><div class='clear'></div>
			<div id="primary" class="content-area"><main id="main" class="site-main">
					<?php while ( have_posts() ) : the_post();?>
					<div class="woocommerce-notices-wrapper"></div>
                    <div id="product-<?php get_the_ID() ?>" class="post-<?php get_the_ID() ?> product type-product status-publish has-post-thumbnail product_cat-music product_cat-singles first instock sale shipping-taxable purchasable product-type-simple">
                        :))<?php var_dump(get_post_meta( get_the_ID(), '_address', true )); ?>???
                        <?php if(get_post_meta( get_the_ID(), '_sale_price', true )>0){ ?>
						<span class="onsale">Sale!</span>
						<?php } ?>
                        <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;"><a href="#" class="woocommerce-product-gallery__trigger"><img draggable="false" class="emoji" alt="🔍" src="https://s.w.org/images/core/emoji/11/svg/1f50d.svg"></a>
                            <div class="flex-viewport" style="overflow: hidden; position: relative; height: 576px;">
                                <figure class="woocommerce-product-gallery__wrapper" style="width: 400%; transition-duration: 0s; transform: translate3d(-576px, 0px, 0px);">
                                    <div data-thumb="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" class="woocommerce-product-gallery__image" data-thumb-alt="" style="width: 576px; margin-right: 0px; float: left; display: block; position: relative; overflow: hidden;">
                                        <a href="http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_angle.jpg"><img width="600" height="600" src="http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_angle.jpg" class="wp-post-image" alt="" title="cd_3_angle" data-caption="" data-src="http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_angle.jpg" data-large_image="http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_angle.jpg" data-large_image_width="1000" data-large_image_height="1000" srcset="http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_angle.jpg 1000w, http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_angle-150x150.jpg 150w, http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_angle-300x300.jpg 300w, http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_angle-768x768.jpg 768w, http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_angle-180x180.jpg 180w, http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_angle-600x600.jpg 600w" sizes="(max-width: 600px) 100vw, 600px" draggable="false"></a>
                                        <img role="presentation" alt="" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" class="zoomImg" style="position: absolute; top: -421.792px; left: -269.049px; opacity: 0; width: 1000px; height: 1000px; border: none; max-width: none; max-height: none;">
                                    </div>
                                    <div data-thumb="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" class="woocommerce-product-gallery__image flex-active-slide" data-thumb-alt="" style="width: 576px; margin-right: 0px; float: left; display: block; position: relative; overflow: hidden;">
                                        <a href="http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_flat.jpg"><img width="600" height="600" src="http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_flat.jpg" class="" alt="" title="cd_3_flat" data-caption="" data-src="http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_flat.jpg" data-large_image="http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_flat.jpg" data-large_image_width="1000" data-large_image_height="1000" srcset="http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_flat.jpg 1000w, http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_flat-150x150.jpg 150w, http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_flat-300x300.jpg 300w, http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_flat-768x768.jpg 768w, http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_flat-180x180.jpg 180w, http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_flat-600x600.jpg 600w" sizes="(max-width: 600px) 100vw, 600px" draggable="false"></a>
                                        <img role="presentation" alt="" src="http://demo.acmethemes.com/online-shop/wp-content/uploads/2013/06/cd_3_flat.jpg" class="zoomImg" style="position: absolute; top: -421.056px; left: -235.188px; opacity: 0; width: 1000px; height: 1000px; border: none; max-width: none; max-height: none;">
                                    </div>
                                </figure>
                            </div>
                            <ol class="flex-control-nav flex-control-thumbs">
                                <li><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" class="" draggable="false"></li>
                                <li><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" draggable="false" class="flex-active"></li></ol>
                        </div>
						<div class="summary entry-summary">
							<h1 class="product_title entry-title"><?php the_title(); ?></h1>
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
							<div class="woocommerce-product-details__short-description">
								<p><?php echo the_content(); ?></p>
							</div>


							<form class="cart" action="<?php echo the_permalink(); ?>" method="post" enctype='multipart/form-data'>
								<div class="quantity">
									<label class="screen-reader-text" for="quantity_5c2092df6bc15">Số lượng</label>
									<input type="number" id="quantity_5c2092df6bc15" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="<?php the_title(); ?> số lượng"/>
								</div>

								<button type="submit" name="add-to-cart" value="<?php get_the_ID() ?>" class="single_add_to_cart_button button alt">Thêm vào giỏ</button>

							</form>



							<div class="yith-wcwl-add-to-wishlist add-to-wishlist-<?php get_the_ID() ?>">
								<div class="yith-wcwl-add-button show" style="display:block">


									<a href="index5f9c.html?add_to_wishlist=<?php get_the_ID() ?>" rel="nofollow" data-product-id="<?php get_the_ID() ?>" data-product-type="simple" class="add_to_wishlist">
										Add to Wishlist</a>
									<img src="../../wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden"/>
								</div>

								<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
									<span class="feedback">Product added!</span>
									<a href="index.html" rel="nofollow">
										Browse Wishlist	        </a>
								</div>

								<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
									<span class="feedback">The product is already in the wishlist!</span>
									<a href="index.html" rel="nofollow">
										Browse Wishlist	        </a>
								</div>
								<div style="clear:both"></div>
								<div class="yith-wcwl-wishlistaddresponse"></div>
							</div>
							<div class="clear"></div><div class="product_meta">
                                <?php global $post;
                                $terms = get_the_terms( $post->ID, 'product_cat' );
                                ?>
								<span class="posted_in">Danh mục:
                                    <?php foreach ($terms as $term) { ?>
                                        <a class="at-cat-item-42" href="<?php echo get_term_link($term); ?>"  rel="category tag"><?php echo $term->name; ?>
									<?php } ?>
                                </span>
							</div>
						</div>


						<div class="woocommerce-tabs wc-tabs-wrapper">
							<ul class="tabs wc-tabs" role="tablist">
								<li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
									<a href="#tab-description">Mô tả</a>
								</li>
                                <?php $authors = array();
                                foreach (get_comments(array('post_id'=> get_the_ID())) as $key => $value){
                                    $authors[] = $value;} ?>
								<li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
									<a href="#tab-reviews">Đánh giá (<?php echo count($authors); ?>)</a>
								</li>
							</ul>
							<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">

								<h2>Mô tả</h2>

								<p><?php the_excerpt(); ?></p>
							</div>
							<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
								<div id="reviews" class="woocommerce-Reviews">
									<div id="comments">
										<h2 class="woocommerce-Reviews-title">Đánh giá</h2>


										<div class="woocommerce-noreviews"><?php if(get_post_meta( get_the_ID(), '_wc_average_rating', true ) == 0){
										    echo 'Hiện chưa có đánh giá nào.';
                                            } else { $width = get_post_meta( get_the_ID(), '_wc_average_rating', true )*20;?>
                                            <div class="star-rating">
                                                <span style="width:<?php echo $width ?>%">Rated <strong class="rating"><?php echo get_post_meta( get_the_ID(), '_wc_average_rating', true );?></strong> out of 5</span>
                                            </div>
                                           <?php  } ?></div>

									</div>


									<div id="review_form_wrapper">
										<div id="review_form">
											<div id="respond" class="comment-respond">
												<span id="reply-title" class="comment-reply-title"><?php if(count($authors) == 0){
												    $tit = "Hãy là người đầu tiên bình luận cho";
                                                        echo $tit." ";the_title();} else {
                                                            echo count($authors).' '.'review cho'.' ';the_title(); ?>
                                                    <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Hủy</a></small></span>
                                                        <ul class="commentlist" style="list-style-type: none">
                                                            <?php foreach ($authors as $author){?>
                                                            <li class="comment even thread-even depth-1" id="li-comment-37">
                                                                <div id="comment-37" class="comment_container">
                                                                    <div style="float: left">
                                                                        <img alt="" src="<?php echo get_avatar_data($author->comment_author_email)['url']; ?>"  class="avatar avatar-60 photo" height="60" width="60">
                                                                    </div>
                                                                    <div class="comment-text" style="margin-left: 85px">
                                                                        <?php
                                                                        if(get_comment_meta( $author->comment_ID, 'rating', true )>0){
                                                                            $width = get_comment_meta( $author->comment_ID, 'rating', true )*20;
                                                                            ?>
                                                                            <div class="star-rating">
                                                                                <span style="width:<?php echo $width ?>%">Rated <strong class="rating"><?php echo get_post_meta( $author->comment_ID, 'rating', true );?></strong> out of 5</span>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        <p class="meta">
                                                                            <strong class="woocommerce-review__author"><?php echo $author->comment_author; ?> </strong>
                                                                            <span class="woocommerce-review__dash">–</span> <time class="woocommerce-review__published-date"><?php echo $author->comment_date; ?></time>
                                                                        </p>

                                                                        <div class="description"><p><?php echo $author->comment_content; ?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li><!-- #comment-## -->
                                                            <?php }?>
                                                        </ul>
                                                    <?php }?>
                                                <form action="<?php echo the_permalink(); ?>" method="post" id="commentform" class="comment-form">
                                                    <div class="comment-form-rating"><label for="rating">Your rating</label><p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a></span></p>
                                                        <select name="rating" id="rating" required="" style="display: none;">
                                                            <option value="">Rate…</option>
                                                            <option value="5">Perfect</option>
                                                            <option value="4">Good</option>
                                                            <option value="3">Average</option>
                                                            <option value="2">Not that bad</option>
                                                            <option value="1">Very poor</option>
                                                        </select></div>
                                                    <p class="comment-form-comment"><label for="comment">Nhận xét của bạn&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required></textarea></p><p class="comment-form-author"><label for="author">Tên&nbsp;<span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" required /></p>
													<p class="comment-form-email"><label for="email">Email&nbsp;<span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" required /></p>
													<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Gửi đi"/> <input type='hidden' name='comment_post_ID' value='<?php get_the_ID() ?>' id='comment_post_ID'/>
														<input type='hidden' name='comment_parent' id='comment_parent' value='0'/>
													</p>			</form>
											</div><!-- #respond -->
										</div>
									</div>


									<div class="clear"></div>
								</div>
							</div>
						</div>
						<?php endwhile; ?>

						<section class="related products">
                            <?php global $post; $category = '';
                            $terms = get_the_terms( $post->ID, 'product_cat' );
                            ?>
                            <?php foreach ($terms as $term) { ?>
                                <?php $category = $term->name; ?>
                            <?php } ?>
							<h2>Sản phẩm tương tự</h2><?php $_SESSION["category"] = $category; ?>
							<ul class="products columns-4">
                                <?php do_action('ttkw_product_categories'); ?>
							</ul>
						</section>
					</div>
				</main><!-- #main --></div><!-- #primary -->

			<div class="modal"></div>         </div><!-- #content -->
	</div><!-- content-wrapper-->
	<div class="clearfix"></div>
    <script type="text/javascript">
        /* <![CDATA[ */
        var yith_wcwl_l10n = {"ajax_url":"\/online-shop\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","multi_wishlist":"","hide_add_button":"1","is_user_logged_in":"","ajax_loader_url":"http:\/\/demo.acmethemes.com\/online-shop\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif","remove_from_wishlist_after_add_to_cart":"yes","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies are enabled on your browser.","added_to_cart_message":"<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","move_to_another_wishlist_action":"move_to_another_wishlsit","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem"}};
        /* ]]> */
    </script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"1","zoom_options":[],"photoswipe_enabled":"1","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":"1"};
        /* ]]> */
    </script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var woocommerce_params = {"ajax_url":"\/online-shop\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/online-shop\/?wc-ajax=%%endpoint%%"};
        /* ]]> */
    </script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var wc_cart_fragments_params = {"ajax_url":"\/online-shop\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/online-shop\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_929ea8286afb62d96f8f714011ac4603","fragment_name":"wc_fragments_929ea8286afb62d96f8f714011ac4603"};
        /* ]]> */
    </script>
<?php get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
