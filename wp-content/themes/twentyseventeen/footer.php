<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<footer id="colophon" class="site-footer">
    <div class="footer-wrapper">
        <div class="top-bottom wrapper">
            <div id="footer-top">
                <div class="footer-columns clearfix">
                    <div class="footer-sidebar footer-sidebar acme-col-4">
                        <aside id="text-3" class="widget widget_text"><div class="at-title-action-wrapper clearfix"><h3 class="widget-title">Contact Information</h3></div>			<div class="textwidget"><p>Ne vel legere utamur volumus. In quo agam facete, at sed duis verear adipiscing, diam natum id sed. Ad eam indoctum.No malorum persius ius, at nec dicunt expetendis. Vel ne eleifend deterruisset definitiones. Oporteat mediocritatem cu quo.</p>
                            </div>
                        </aside>                                    </div>
                    <div class="footer-sidebar footer-sidebar acme-col-4">
                        <aside id="nav_menu-4" class="widget widget_nav_menu"><div class="at-title-action-wrapper clearfix"><h3 class="widget-title">Premium Themes</h3></div><div class="menu-premium-themes-container">
                                <?php wp_nav_menu( array(

                                    'theme_location' => 'menu footer', // tên location cần hiển thị

                                    'items_wrap' => '%3$s',

                                    'container' => '', // thẻ container của menu

                                    'container_class' => 'menu', //class của container

                                    'container_id' => 'menu-premium-themes', //id của container

                                    'menu_class' => 'menu-item menu-item-type-custom menu-item-object-custom menu-item-410', // class của menu bên trong

                                    'walker' => new CSS_Menu_Maker_Walker_Top()

                                ) ); ?>
<!--                                <ul id="menu-premium-themes" class="menu">-->
<!--                                    <li id="menu-item-410" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-410"><a href="https://www.acmethemes.com/themes/online-shop-pro">Online Shop Pro</a></li>-->
<!--                                    <li id="menu-item-411" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-411"><a href="https://www.acmethemes.com/themes/medical-circle-pro/">Medical Circle Pro</a></li>-->
<!--                                    <li id="menu-item-412" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-412"><a href="https://www.acmethemes.com/themes/education-base-pro/">Education Base Pro</a></li>-->
<!--                                    <li id="menu-item-413" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-413"><a href="https://www.acmethemes.com/themes/acmephotopro/">AcmePhotoPro</a></li>-->
<!--                                    <li id="menu-item-414" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-414"><a href="https://www.acmethemes.com/themes/supernewspro/">SuperNewsPro</a></li>-->
<!--                                    <li id="menu-item-415" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-415"><a href="https://www.acmethemes.com/themes/supermagpro/">SuperMagPro</a></li>-->
<!--                                </ul>-->
                            </div></aside>
                    </div>
                    <div class="footer-sidebar footer-sidebar acme-col-4">
                        <aside id="nav_menu-3" class="widget widget_nav_menu"><div class="at-title-action-wrapper clearfix"><h3 class="widget-title">Quick Links</h3></div><div class="menu-primary-menu-container">
                                <?php wp_nav_menu( array(

                                    'theme_location' => 'menu footer2', // tên location cần hiển thị

                                    'items_wrap' => '%3$s',

                                    'container' => '', // thẻ container của menu

                                    'container_class' => 'menu', //class của container

                                    'container_id' => 'menu-primary-menu-1', //id của container

                                    'menu_class' => 'menu-item menu-item-type-custom menu-item-object-custom menu-item-408', // class của menu bên trong

                                    'walker' => new CSS_Menu_Maker_Walker_Top_2()

                                ) ); ?>
<!--                                <ul id="menu-primary-menu-1" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-132"><a href="http://demo.acmethemes.com/online-shop/">Home</a></li>-->
<!--                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-408"><a href="https://www.acmethemes.com/themes/online-shop">Download Now</a></li>-->
<!--                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-136"><a href="http://demo.acmethemes.com/online-shop/shop/">Shop</a></li>-->
<!--                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-135"><a href="http://demo.acmethemes.com/online-shop/my-account/">My account</a>-->
<!--                                        <ul class="sub-menu">-->
<!--                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a href="http://demo.acmethemes.com/online-shop/cart/">Cart</a></li>-->
<!--                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-134"><a href="http://demo.acmethemes.com/online-shop/checkout/">Checkout</a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-407"><a href="http://demo.acmethemes.com/online-shop/blog/">Blog</a></li>-->
<!--                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-406"><a href="https://www.acmethemes.com/themes/online-shop-pro">View Pro</a></li>-->
<!--                                </ul>-->
                            </div></aside>                                    </div>
                    <div class="footer-sidebar footer-sidebar acme-col-4">
                        <aside id="recent-posts-5" class="widget widget_recent_entries">
                            <div class="at-title-action-wrapper clearfix"><h3 class="widget-title">Recent Posts</h3></div>
                            <?php wp_nav_menu( array(

                                'theme_location' => 'menu footer3', // tên location cần hiển thị

                                'items_wrap' => '%3$s',

                                'container' => '', // thẻ container của menu

                                'container_class' => '', //class của container

                                'container_id' => '', //id của container

                                'menu_class' => 'menu-item menu-item-type-custom menu-item-object-custom menu-item-410', // class của menu bên trong

                                'walker' => new CSS_Menu_Maker_Walker_Top()

                            ) ); ?>
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <a href="http://demo.acmethemes.com/online-shop/blog/2017/12/05/laptop/">Laptop</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="http://demo.acmethemes.com/online-shop/blog/2017/12/05/television/">Television</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="http://demo.acmethemes.com/online-shop/blog/2017/12/03/fun-in-shop/">Fun in Shop</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="http://demo.acmethemes.com/online-shop/blog/2017/12/03/winter-is-coming/">Winter is Coming</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="http://demo.acmethemes.com/online-shop/blog/2017/12/03/christmas-discount/">Christmas Discount</a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="http://demo.acmethemes.com/online-shop/blog/2017/12/03/new-arrival/">New Arrival</a>-->
<!--                                </li>-->
<!--                            </ul>-->
                        </aside>
                    </div>
                </div>
            </div><!-- #foter-top -->
            <div id="footer-bottom">
                <div class="footer-columns clearfix">
                    <div class="footer-sidebar footer-sidebar acme-col-2">
                        <aside id="online_shop_advanced_image_logo-5" class="widget widget_online_shop_advanced_image_logo">
                            <div class="featured-entries-col featured-entries-logo column">
                                <div class="single-list acme-col-4">
                                    <div class="single-item">
                                        <img src=" http://demo.acmethemes.com/online-shop/wp-content/uploads/2017/12/pay-pal.jpg">
                                    </div>
                                </div><!--dynamic css-->
                                <div class="single-list acme-col-4">
                                    <div class="single-item">
                                        <img src=" http://demo.acmethemes.com/online-shop/wp-content/uploads/2017/12/master-card.jpg">
                                    </div>
                                </div><!--dynamic css-->
                                <div class="single-list acme-col-4">
                                    <div class="single-item">
                                        <img src=" http://demo.acmethemes.com/online-shop/wp-content/uploads/2017/12/visa-1.jpg">
                                    </div>
                                </div><!--dynamic css-->
                                <div class="single-list acme-col-4">
                                    <div class="single-item">
                                        <img src=" http://demo.acmethemes.com/online-shop/wp-content/uploads/2017/12/cir-rcus.jpg">
                                    </div>
                                </div><!--dynamic css-->
                            </div>
                        </aside>
                    </div>
                    <div class="footer-sidebar float-right footer-sidebar acme-col-2">
                        <aside id="online_shop_social-3" class="widget widget_online_shop_social">
                            <div class="featured-entries-col featured-social">
                                <?php wp_nav_menu( array(

                                    'theme_location' => 'bottom', // tên location cần hiển thị

                                    'items_wrap' => '%3$s',

                                    'container' => '', // thẻ container của menu

                                    'container_class' => 'icon-box', //class của container

                                    'container_id' => '', //id của container

                                    'menu_class' => '', // class của menu bên trong

                                    'walker' => new CSS_Menu_Maker_Walker_Top_3()

                                ) ); ?>
<!--                                <div class="icon-box">-->
<!--                                    <a href="https://www.facebook.com/acmethemes/" target="">-->
<!--                                        <i class="fa fa-facebook"></i>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="icon-box">-->
<!--                                    <a href="https://twitter.com/acme_themes" target="">-->
<!--                                        <i class="fa fa-twitter"></i>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="icon-box">-->
<!--                                    <a href="https://www.linkedin.com/company/acmethemes/" target="">-->
<!--                                        <i class="fa fa-linkedin"></i></a></div>-->
<!--                                <div class="icon-box">-->
<!--                                    <a href="https://www.instagram.com/acmethemes/" target="">-->
<!--                                        <i class="fa fa-instagram"></i></a></div>-->
<!--                                <div class="icon-box">-->
<!--                                    <a href="https://profiles.wordpress.org/ACMETHEMES" target="">-->
<!--                                        <i class="fa fa-wordpress"></i>-->
<!--                                    </a></div>-->
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div><!-- top-bottom-->
        <div class="footer-copyright">
            <div class="wrapper">
                <div class="site-info-left">
                    <aside id="media_image-3" class="widget widget_media_image"><img width="728" height="90" src="http://demo.acmethemes.com/online-shop/wp-content/uploads/2017/12/online-shop-ads.jpg" class="image wp-image-394  attachment-full size-full" alt="" style="max-width: 100%; height: auto;" /></aside>                            </div>
                <div class="site-info">
                            <span>
		                        			                        Copyright &copy; All Right Reserved		                                                    </span>
                    <span>
	                            Online Shop by <a href="https://www.acmethemes.com/">Acme Themes</a>                            </span>
                </div><!-- .site-info -->
            </div>
            <div class="clearfix"></div>
        </div>
    </div><!-- footer-wrapper-->
</footer><!-- #colophon -->
</div><!-- #page -->
<script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>
<script type='text/javascript' src='http://demo.acmethemes.com/online-shop/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {"ajax_url":"\/online-shop\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/online-shop\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/demo.acmethemes.com\/online-shop\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://demo.acmethemes.com/online-shop/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.5.2'></script>
<script type='text/javascript' src='http://demo.acmethemes.com/online-shop/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url":"\/online-shop\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/online-shop\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://demo.acmethemes.com/online-shop/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.5.2'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/online-shop\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/online-shop\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_929ea8286afb62d96f8f714011ac4603","fragment_name":"wc_fragments_929ea8286afb62d96f8f714011ac4603"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://demo.acmethemes.com/online-shop/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.5.2'></script>
<script type='text/javascript' src='http://demo.acmethemes.com/online-shop/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6'></script>
<script type='text/javascript' src='http://demo.acmethemes.com/online-shop/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0'></script>
<script type="text/javascript" src="http://demo.acmethemes.com/online-shop/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js?ver=2.2.7"></script>
<script type="text/javascript" src="http://demo.acmethemes.com/online-shop/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.5.3"></script>
<script type="text/javascript" src="http://demo.acmethemes.com/online-shop/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min.js?ver=1.7.21"></script>
<script type="text/javascript" src="http://demo.acmethemes.com/online-shop/wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.min.js?ver=2.7.1"></script>
<script type="text/javascript" src="http://demo.acmethemes.com/online-shop/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min.js?ver=4.1.1"></script>
<script type="text/javascript" src="http://demo.acmethemes.com/online-shop/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min.js?ver=4.1.1"></script>
<script type="text/javascript" src="http://demo.acmethemes.com/online-shop/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min.js?ver=3.5.3"></script>
<script type="text/javascript" src="http://demo.acmethemes.com/online-shop/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.5.3"></script>
<script type="text/javascript" src="http://demo.acmethemes.com/online-shop/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.5.3"></script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var yith_wcwl_l10n = {"ajax_url":"\/online-shop\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","multi_wishlist":"","hide_add_button":"1","is_user_logged_in":"","ajax_loader_url":"http:\/\/demo.acmethemes.com\/online-shop\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif","remove_from_wishlist_after_add_to_cart":"yes","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies are enabled on your browser.","added_to_cart_message":"<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","move_to_another_wishlist_action":"move_to_another_wishlsit","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem"}};
    /* ]]> */
</script>
<script src="http://demo.acmethemes.com/online-shop/wp-includes/js/wp-emoji-release.min.js?ver=5.0.3" type="text/javascript" defer=""></script>
<script type="text/javascript" src="http://demo.acmethemes.com/online-shop/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>
<script type="text/javascript" src="http://demo.acmethemes.com/online-shop/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>
<script type='text/javascript' src='http://demo.acmethemes.com/online-shop/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js?ver=2.2.5'></script>
<script type='text/javascript' src='http://demo.acmethemes.com/online-shop/wp-content/plugins/woocommerce/assets/js/select2/select2.full.min.js?ver=4.0.3'></script>
<script type='text/javascript' src='http://demo.acmethemes.com/online-shop/wp-content/themes/online-shop/assets/library/slick/slick.min.js?ver=1.8.1'></script>
<script type='text/javascript' src='http://demo.acmethemes.com/online-shop/wp-content/themes/online-shop/assets/library/SlickNav/jquery.slicknav.min.js?ver=1.0.10'></script>
<script type='text/javascript' src='http://demo.acmethemes.com/online-shop/wp-content/themes/online-shop/assets/library/theia-sticky-sidebar/theia-sticky-sidebar.min.js?ver=1.7.0'></script>
<script type='text/javascript' src='http://demo.acmethemes.com/online-shop/wp-content/themes/online-shop/assets/js/custom.js?ver=1.3.2'></script>
<script type='text/javascript' src='http://demo.acmethemes.com/online-shop/wp-includes/js/wp-embed.min.js?ver=5.0.2'></script>
<script type="text/javascript" src="http://demo.acmethemes.com/online-shop/wp-includes/js/comment-reply.min.js?ver=5.0.3"></script>
<script type="text/javascript" src="http://demo.acmethemes.com/online-shop/wp-includes/js/wp-embed.min.js?ver=5.0.3"></script>
<script type="application/ld+json">{"@context":"https:\/\/schema.org\/","@graph":[{"@type":"Product","@id":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/bag-collection\/","name":"Bag Collection","url":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/bag-collection\/"},{"@type":"Product","@id":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/belt\/","name":"Belt","url":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/belt\/"},{"@type":"Product","@id":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/biscuits\/","name":"Biscuits","url":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/biscuits\/"},{"@type":"Product","@id":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/black-shoe\/","name":"Black Shoe","url":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/black-shoe\/"},{"@type":"Product","@id":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/camera\/","name":"Camera","url":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/camera\/"},{"@type":"Product","@id":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/converse\/","name":"Converse","url":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/converse\/"},{"@type":"Product","@id":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/flying-ninja\/","name":"Flying Ninja","url":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/flying-ninja\/"},{"@type":"Product","@id":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/hair-care\/","name":"Hair Care","url":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/hair-care\/"},{"@type":"Product","@id":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/happy-ninja\/","name":"Happy Ninja","url":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/happy-ninja\/"},{"@type":"Product","@id":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/hat\/","name":"Hat","url":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/hat\/"},{"@type":"Product","@id":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/kids-collection\/","name":"Kids Collection","url":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/kids-collection\/"},{"@type":"Product","@id":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/laptop\/","name":"Laptop","url":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/laptop\/"},{"@type":"Product","@id":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/milk-shake\/","name":"Milk Shake","url":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/milk-shake\/"},{"@type":"Product","@id":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/mobile\/","name":"Mobile","url":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/mobile\/"},{"@type":"Product","@id":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/mountain-glass\/","name":"Mountain Glass","url":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/mountain-glass\/"},{"@type":"Product","@id":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/nail-polish\/","name":"Nail Polish","url":"https:\/\/stgstours.org.sg\/online-shop\/san-pham\/nail-polish\/"}]}</script>	<script type="text/javascript">var c=document.body.className;c=c.replace(/woocommerce-no-js/,'woocommerce-js');document.body.className=c;</script>
<script type='text/javascript'>//<![CDATA[
    var wpcf7={"apiSettings":{"root":"https:\/\/stgstours.org.sg\/online-shop\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
    //]]></script>
<script type='text/javascript' src='<?php echo get_home_url(); ?>/wp-content/plugins/contact-form-7/includes/js/scripts.js%2cqver%3d5.1.1.pagespeed.jm.ZO_KvUnn01.js'></script>
<script type='text/javascript'>//<![CDATA[
    var tocplus={"visibility_show":"show","visibility_hide":"hide","visibility_hide_by_default":"1","width":"400px"};
    //]]></script>
<script src="<?php echo get_home_url(); ?>/wp-content/plugins/table-of-contents-plus%2c_front.min.js%2cqver%3d%3d1509%2bwoocommerce%2c_assets%2c_js%2c_jquery-blockui%2c_jquery.blockUI.min.js%2cqver%3d%3d2.70%2bwoocommerc"></script><script>eval(mod_pagespeed_YjXcu6oRhY);</script>
<script>eval(mod_pagespeed_rUWbrKFL2j);</script>
<script>eval(mod_pagespeed_gwSyILMgVk);</script>
<script type='text/javascript'>//<![CDATA[
    var woocommerce_params={"ajax_url":"\/online-shop\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/online-shop\/?wc-ajax=%%endpoint%%"};
    //]]></script>
<script type='text/javascript'>//<![CDATA[
    jQuery(function(i){i(".woocommerce-ordering").on("change","select.orderby",function(){i(this).closest("form").submit()}),i("input.qty:not(.product-quantity input.qty)").each(function(){var o=parseFloat(i(this).attr("min"));0<=o&&parseFloat(i(this).val())<o&&i(this).val(o)}),i(".woocommerce-store-notice__dismiss-link").click(function(){Cookies.set("store_notice","hidden",{path:"/"}),i(".woocommerce-store-notice").hide()}),"hidden"===Cookies.get("store_notice")?i(".woocommerce-store-notice").hide():i(".woocommerce-store-notice").show(),i(document.body).on("click",function(){i(".woocommerce-input-wrapper span.description:visible").prop("aria-hidden",!0).slideUp(250)}),i(".woocommerce-input-wrapper").on("click",function(o){o.stopPropagation()}),i(".woocommerce-input-wrapper :input").on("keydown",function(o){var e=i(this).parent().find("span.description");if(27===o.which&&e.length&&e.is(":visible"))return e.prop("aria-hidden",!0).slideUp(250),o.preventDefault(),!1}).on("click focus",function(){var o=i(this).parent(),e=o.find("span.description");o.addClass("currentTarget"),i(".woocommerce-input-wrapper:not(.currentTarget) span.description:visible").prop("aria-hidden",!0).slideUp(250),e.length&&e.is(":hidden")&&e.prop("aria-hidden",!1).slideDown(250),o.removeClass("currentTarget")}),i.scroll_to_notices=function(o){o.length&&i("html, body").animate({scrollTop:o.offset().top-100},1e3)}});
    //]]></script>
<script type='text/javascript'>//<![CDATA[
    var wc_cart_fragments_params={"ajax_url":"\/online-shop\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/online-shop\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_7aa350eb09d469cc0533088210560ceb","fragment_name":"wc_fragments_7aa350eb09d469cc0533088210560ceb"};
    //]]></script>
<script src="<?php echo get_home_url(); ?>/wp-content/plugins/woocommerce%2c_assets%2c_js%2c_frontend%2c_cart-fragments.min.js%2cqver%3d%3d3.5.3%2bwoocommerce%2c_assets%2c_js%2c_prettyPhoto%2c_jquery.prettyPhoto.min.js"></script><script>eval(mod_pagespeed_araweX34D5);</script>
<script>eval(mod_pagespeed_hRiwvsE4AU);</script>
<script>eval(mod_pagespeed_NngsH5ADjm);</script>
<script type='text/javascript'>//<![CDATA[
    var yith_wcwl_l10n={"ajax_url":"\/online-shop\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","multi_wishlist":"","hide_add_button":"1","is_user_logged_in":"","ajax_loader_url":"https:\/\/stgstours.org.sg\/online-shop\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif","remove_from_wishlist_after_add_to_cart":"yes","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies are enabled on your browser.","added_to_cart_message":"<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","move_to_another_wishlist_action":"move_to_another_wishlsit","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem"}};
    //]]></script>
<script src="<?php echo get_home_url(); ?>/wp-content/plugins/yith-woocommerce-wishlist%2c_assets%2c_js%2c_jquery.yith-wcwl.js%2cqver%3d%3d2.2.5%2bwoocommerce%2c_assets%2c_js%2c_select2%2c_select2.full.min.js%2cqver%3d%3d4"></script>
<script src="<?php echo get_home_url(); ?>/wp-content/themes/online-shop/assets/library/slick/slick.minc245.js"></script>
<script src="<?php echo get_home_url(); ?>/wp-content/themes/online-shop/assets/library/SlickNav/jquery.slicknav.min1c96.js"></script>
<script type='text/javascript' src="<?php echo get_home_url(); ?>/wp-includes/js/jquery-3.2.1.min.js"></script>
<script type='text/javascript'>
        $(document).ready(function () {
            $('.shop_menu_order_1').on('click', function () {
                $('.shop_menu_order').removeClass('hidden-shop');
                $('.shop_popularity').addClass('hidden-shop');
                $('.shop_rating').addClass('hidden-shop');
                $('.shop_date').addClass('hidden-shop');
                $('.shop_price').addClass('hidden-shop');
                $('.shop_price-desc').addClass('hidden-shop');
            });
            $('.shop_popularity_1').on('click', function () {
                $('.shop_popularity').removeClass('hidden-shop');
                $('.shop_menu_order').addClass('hidden-shop');
                $('.shop_rating').addClass('hidden-shop');
                $('.shop_date').addClass('hidden-shop');
                $('.shop_price').addClass('hidden-shop');
                $('.shop_price-desc').addClass('hidden-shop');
            });
        });


        $('.shop_rating_1').on('click', function () {
            $('.shop_rating').removeClass('hidden-shop');
            $('.shop_menu_order').addClass('hidden-shop');
            $('.shop_popularity').addClass('hidden-shop');
            $('.shop_date').addClass('hidden-shop');
            $('.shop_price').addClass('hidden-shop');
            $('.shop_price-desc').addClass('hidden-shop');
        });
        $('.shop_date_1').on('click', function () {
            $('.shop_date').removeClass('hidden-shop');
            $('.shop_menu_order').addClass('hidden-shop');
            $('.shop_rating').addClass('hidden-shop');
            $('.shop_popularity').addClass('hidden-shop');
            $('.shop_price').addClass('hidden-shop');
            $('.shop_price-desc').addClass('hidden-shop');
        });
        $('.shop_price_1').on('click', function () {
            $('.shop_price').removeClass('hidden-shop');
            $('.shop_menu_order').addClass('hidden-shop');
            $('.shop_rating').addClass('hidden-shop');
            $('.shop_date').addClass('hidden-shop');
            $('.shop_popularity').addClass('hidden-shop');
            $('.shop_price-desc').addClass('hidden-shop');
        });
        $('.shop_price-desc_1').on('click', function () {
            $('.shop_price-desc').removeClass('hidden-shop');
            $('.shop_menu_order').addClass('hidden-shop');
            $('.shop_rating').addClass('hidden-shop');
            $('.shop_date').addClass('hidden-shop');
            $('.shop_price').addClass('hidden-shop');
            $('.shop_popularity').addClass('hidden-shop');
        });

</script>
</body>
</html>
