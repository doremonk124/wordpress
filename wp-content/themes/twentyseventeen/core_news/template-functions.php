<?php session_start();
/**
 * ttkw template functions.
 *
 * @package ttkw
 */
if ( ! function_exists( 'func_ttkw_category_post_menu' ) ) {

function func_ttkw_category_post_menu() {
    $cateMenu = array( 
    'taxonomy' => 'category',
    'parent'   => 0,
	'hide_empty'   => true,
);
    $des_tax_terms = get_terms($cateMenu);
    ?>
 <?php
    foreach ($des_tax_terms as $tax_term) { ?>

    <li class="nav-category-link ">
            <a class="nav-mobile-category-link" data-link="<?php echo get_term_link($tax_term, $cateMenu); ?>" href="#">
                <?php echo $tax_term->name; ?>
            </a>
        </li>
<?php } 
	 
	 }
}
// hiện tab chuyên mục
if ( ! function_exists( 'func_ttkw_category_tab' ) ) {

function func_ttkw_category_tab() {
    $cateMenu = array(
        'post_type'=>'product',
        'product_cat'=>'albums',
        'posts_per_page'=> 4,
);
    $loop = new WP_Query($cateMenu);
    while ($loop->have_posts()) : $loop->the_post();
    ?>
        <div class="single-list acme-col-4">
            <ul class="post-container products">
                <li class="post-<?php echo get_the_ID(); ?> product type-product status-publish has-post-thumbnail product_cat-albums product_cat-music instock downloadable shipping-taxable purchasable product-type-simple">
                    <a href="<?php echo the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                        <?php
                        if(get_post_meta( get_the_ID(), '_sale_price', true )>0){ ?>
                            <span class="onsale">Sale!</span>
                        <?php } ?>
                        <img width="300" height="300" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" class="attachment-shop_catalog size-shop_catalog" alt=""  sizes="(max-width: 300px) 100vw, 300px" />
                        <h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2>
                        <?php
                        if(get_post_meta( get_the_ID(), '_wc_average_rating', true )>0){
                            $width = get_post_meta( get_the_ID(), '_wc_average_rating', true )*20;
                            ?>
                            <div class="star-rating">
                                <span style="width:<?php echo $width ?>%">Rated <strong class="rating"><?php echo get_post_meta( get_the_ID(), '_wc_average_rating', true );?></strong> out of 5</span>
                            </div>
                            <?php
                        }
                        ?>
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
                    </a><a href="/online-shop/?add-to-cart=<?php echo get_the_ID(); ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="" aria-label="Add &ldquo;Woo Album #4&rdquo; to your cart" rel="nofollow">Add to cart</a></li>
            </ul>
        </div>
<?php endwhile;
        wp_reset_query();
	 }
}
if ( ! function_exists( 'func_ttkw_category_tab_hoodies' ) ) {

    function func_ttkw_category_tab_hoodies() {
        $cateMenu = array(
            'post_type'=>'product',
            'product_cat'=>'hoodies',
            'posts_per_page'=> 4,
        );
        $loop = new WP_Query($cateMenu);
        while ($loop->have_posts()) : $loop->the_post();
            ?>
            <div class="single-list acme-col-4">
                <ul class="post-container products">
                    <li class="post-<?php echo get_the_ID(); ?> product type-product status-publish has-post-thumbnail product_cat-albums product_cat-music instock downloadable shipping-taxable purchasable product-type-simple">
                        <a href="<?php echo the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <?php
                            if(get_post_meta( get_the_ID(), '_sale_price', true )>0){ ?>
                                <span class="onsale">Sale!</span>
                            <?php } ?>
                            <img width="300" height="300" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" class="attachment-shop_catalog size-shop_catalog" alt=""  sizes="(max-width: 300px) 100vw, 300px" /><h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2>
                            <?php
                            if(get_post_meta( get_the_ID(), '_wc_average_rating', true )>0){
                                $width = get_post_meta( get_the_ID(), '_wc_average_rating', true )*20;
                                ?>
                                <div class="star-rating">
                                    <span style="width:<?php echo $width ?>%">Rated <strong class="rating"><?php echo get_post_meta( get_the_ID(), '_wc_average_rating', true );?></strong> out of 5</span>
                                </div>
                                <?php
                            }
                            ?>
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
                        </a><a href="/online-shop/?add-to-cart=<?php echo get_the_ID(); ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="" aria-label="Add &ldquo;Woo Album #4&rdquo; to your cart" rel="nofollow">Add to cart</a></li>
                </ul>
            </div>
        <?php endwhile;
        wp_reset_query();
    }
}
if ( ! function_exists( 'func_ttkw_category_tab_music' ) ) {

    function func_ttkw_category_tab_music() {
        $cateMenu = array(
            'post_type'=>'product',
            'product_cat'=>'music',
            'posts_per_page'=> 4,
        );
        $loop = new WP_Query($cateMenu);
        while ($loop->have_posts()) : $loop->the_post();
            ?>
            <div class="single-list acme-col-4">
                <ul class="post-container products">
                    <li class="post-<?php echo get_the_ID(); ?> product type-product status-publish has-post-thumbnail product_cat-albums product_cat-music instock downloadable shipping-taxable purchasable product-type-simple">
                        <a href="<?php echo the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <?php
                            if(get_post_meta( get_the_ID(), '_sale_price', true )>0){ ?>
                                <span class="onsale">Sale!</span>
                            <?php } ?>
                            <img width="300" height="300" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" class="attachment-shop_catalog size-shop_catalog" alt=""  sizes="(max-width: 300px) 100vw, 300px" /><h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2>
                            <?php
                            if(get_post_meta( get_the_ID(), '_wc_average_rating', true )>0){
                                $width = get_post_meta( get_the_ID(), '_wc_average_rating', true )*20;
                                ?>
                                <div class="star-rating">
                                    <span style="width:<?php echo $width ?>%">Rated <strong class="rating"><?php echo get_post_meta( get_the_ID(), '_wc_average_rating', true );?></strong> out of 5</span>
                                </div>
                                <?php
                            }
                            ?>
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
                        </a><a href="/online-shop/?add-to-cart=<?php echo get_the_ID(); ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="" aria-label="Add &ldquo;Woo Album #4&rdquo; to your cart" rel="nofollow">Add to cart</a></li>
                </ul>
            </div>
        <?php endwhile;
        wp_reset_query();
    }
}
if ( ! function_exists( 'func_ttkw_category_tab_shirt' ) ) {

    function func_ttkw_category_tab_shirt() {
        $cateMenu = array(
            'post_type'=>'product',
            'product_cat'=>'t-shirts',
            'posts_per_page'=> 4,
        );
        $loop = new WP_Query($cateMenu);
        while ($loop->have_posts()) : $loop->the_post();
            ?>
            <div class="single-list acme-col-4">
                <ul class="post-container products">
                    <li class="post-<?php echo get_the_ID(); ?> product type-product status-publish has-post-thumbnail product_cat-albums product_cat-music instock downloadable shipping-taxable purchasable product-type-simple">
                        <a href="<?php echo the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <?php
                            if(get_post_meta( get_the_ID(), '_sale_price', true )>0){ ?>
                                <span class="onsale">Sale!</span>
                            <?php } ?>
                            <img width="300" height="300" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" class="attachment-shop_catalog size-shop_catalog" alt=""  sizes="(max-width: 300px) 100vw, 300px" /><h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2>
                            <?php
                            if(get_post_meta( get_the_ID(), '_wc_average_rating', true )>0){
                                $width = get_post_meta( get_the_ID(), '_wc_average_rating', true )*20;
                                ?>
                                <div class="star-rating">
                                    <span style="width:<?php echo $width ?>%">Rated <strong class="rating"><?php echo get_post_meta( get_the_ID(), '_wc_average_rating', true );?></strong> out of 5</span>
                                </div>
                                <?php
                            }
                            ?>
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
                        </a><a href="/online-shop/?add-to-cart=<?php echo get_the_ID(); ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="" aria-label="Add &ldquo;Woo Album #4&rdquo; to your cart" rel="nofollow">Add to cart</a></li>
                </ul>
            </div>
        <?php endwhile;
        wp_reset_query();
    }
}
// Sản phẩm mới nhất
if ( ! function_exists( 'func_ttkw_product_new' ) ) {

    function func_ttkw_product_new() {
        $cateMenu = array(
            'post_type' => 'product',
            'posts_per_page'=> 8,
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $loop = new WP_Query($cateMenu);
        $id = 0;
        while ($loop->have_posts()) : $loop->the_post();
        $id = $id+1;
            ?>
            <div class="single-list acme-col-4">
                <ul class="post-container products">
                    <li class="post-<?php echo get_the_ID() ?> product type-product status-publish has-post-thumbnail product_cat-shoes instock shipping-taxable purchasable product-type-simple">
                        <a href="<?php echo the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <img style="height: 283px;" width="300" height="300" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" class="attachment-shop_catalog size-shop_catalog" alt=""  sizes="(max-width: 300px) 100vw, 300px" />
                            <h2 class="woocommerce-loop-product__title"><?php echo the_title()?></h2>
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
                        </a><a href="/online-shop/?add-to-cart=<?php echo get_the_ID() ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="435" data-product_sku="" aria-label="Add &ldquo;Light Shoes&rdquo; to your cart" rel="nofollow">Add to cart</a></li>
                </ul><!--.post-container-->
            </div><!--dynamic css-->
        <?php if($id == 4){ ?>
                <div class='clearfix'></div>
        <?php   }
        endwhile;
        wp_reset_query();
    }
}
//thể loại phổ biến
if ( ! function_exists( 'func_ttkw_popular_men' ) ) {

    function func_ttkw_popular_men() {
        $cateMenu = array(
            'hide_empty'   => true,
        );
        $des_tax_terms = get_terms('product_cat', $cateMenu);
        ?>
        <?php
        foreach ($des_tax_terms as $tax_term) { ?>
            <?php if($tax_term->name == 'Men Collection'){ ?>
                <div class='left'>
                <div class="single-list no-media at-extra-height acme-col-1 atsi-1">
                    <div class="no-media-query single-unit" style="background-image:url(<?php echo wp_get_attachment_url( get_woocommerce_term_meta( $tax_term->term_id, 'thumbnail_id', true )); ?>);">
                        <a class="at-overlay" href="<?php echo get_term_link($tax_term, $cateMenu); ?>"></a>
                        <div class="cat-details">
                            <a href="<?php echo get_term_link($tax_term, $cateMenu); ?>">
                                <div class="cat-title">
                                    <h3><?php echo $tax_term->name; ?></h3>
                                    <span><?php echo $tax_term->count; ?> </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
            if($tax_term->name == 'Shoes'){ ?>
                <div class='right'>
                <div class="single-list no-media acme-col-1 atsi-2">
                    <div class="no-media-query single-unit" style="background-image:url(<?php echo wp_get_attachment_url( get_woocommerce_term_meta( $tax_term->term_id, 'thumbnail_id', true )); ?>)">
                        <a class="at-overlay" href="<?php echo get_term_link($tax_term, $cateMenu); ?>"></a>
                        <div class="cat-details">
                            <a href="<?php echo get_term_link($tax_term, $cateMenu); ?>">
                                <div class="cat-title">
                                    <h3><?php echo $tax_term->name; ?></h3>
                                    <span><?php echo $tax_term->count; ?> </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php }
            if($tax_term->name == 'Sunglass'){ ?>
                <div class="single-list no-media acme-col-2 atsi-3">
                    <div class="no-media-query single-unit" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?><?php echo wp_get_attachment_url( get_woocommerce_term_meta( $tax_term->term_id, 'thumbnail_id', true )); ?>);">
                        <a class="at-overlay" href="<?php echo get_term_link($tax_term, $cateMenu); ?>"></a>
                        <div class="cat-details">
                            <a href="<?php echo get_term_link($tax_term, $cateMenu); ?>">
                                <div class="cat-title">
                                    <h3><?php echo $tax_term->name; ?></h3>
                                    <span><?php echo $tax_term->count; ?> </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php }
            if($tax_term->name == 'Women Collection'){ ?>
                <div class="single-list no-media acme-col-2 atsi-4">
                    <div class="no-media-query single-unit" style="background-image:url(<?php echo wp_get_attachment_url( get_woocommerce_term_meta( $tax_term->term_id, 'thumbnail_id', true )); ?>);">
                        <a class="at-overlay" href="<?php echo get_term_link($tax_term, $cateMenu); ?>"></a>
                        <div class="cat-details">
                            <a href="<?php echo get_term_link($tax_term, $cateMenu); ?>">
                                <div class="cat-title">
                                    <h3><?php echo $tax_term->name; ?></h3>
                                    <span><?php echo $tax_term->count; ?> </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            <?php }
            ?>
        <?php }

    }
}
// Sản phẩm đang khuyến mãi
if ( ! function_exists( 'func_ttkw_product_sale' ) ) {

    function func_ttkw_product_sale() {
        $cate = array(
            'post_type' => 'product',
            'meta_key' => '_sale_price',
            'orderby' => 'meta_value_num',
            'posts_per_page' => 4,
        );
        $loop = new WP_Query($cate);
        while ($loop->have_posts()) : $loop->the_post();
            ?>
            <div class="single-list acme-col-4">
                <ul class="post-container products">
                    <li class="post-<?php echo get_the_ID(); ?> product type-product status-publish has-post-thumbnail product_cat-shoes instock sale shipping-taxable purchasable product-type-simple">
                        <a href="<?php echo the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <span class="onsale">Sale!</span>
                            <img style="width: 283px; height: 283px" width="300" height="300" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" class="attachment-shop_catalog size-shop_catalog" alt="" />
                            <h2 class="woocommerce-loop-product__title"><?php echo the_title()?></h2>
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
                        </a><a href="/online-shop/?add-to-cart=356" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="356" data-product_sku="" aria-label="Add &ldquo;Black Shoe&rdquo; to your cart" rel="nofollow">Add to cart</a></li>
                </ul><!--.post-container-->
            </div><!--dynamic css-->
            <?php if($id == 4){ ?>
                <div class='clearfix'></div>
            <?php   }
        endwhile;
        wp_reset_query();
    }
}
// bài viết mới nhất
if ( ! function_exists( 'func_ttkw_post_new' ) ) {

function func_ttkw_post_new() {


$post_new = new WP_Query(array(
        'post_type' =>  'post',
		'order' => 'DESC',
        'posts_per_page'    =>  4,
    ));
            while($post_new->have_posts()):$post_new->the_post();
		?>
                <div class="single-list acme-col-4">
                    <div class="post-container" style="padding-top: 0px;">
                        <div class="post-thumb">
                            <a href="<?php echo the_permalink(); ?>">
                                <img width="285" height="190" style="height: 188px" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" />
                            </a>
                        </div><!-- .post-thumb-->
                        <div class="post-content">
                            <div class="entry-header" style="margin-bottom: 0px">
                                <span class="cat-links"></span>
                                <a class="at-cat-item-42" href="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>"  rel="category tag"><?php echo the_category(); ?></a>
                                <h3 class="entry-title"><a href="<?php echo the_permalink(); ?>" rel="bookmark"><?php echo the_title(); ?></a></h3>
                            </div><!-- .entry-header -->
                            <div class="entry-content clearfix">
                                <div class="details" style="height: 100px; overflow: hidden"><p><?php echo the_content(); ?></p>
                                </div>                                    </div><!-- .entry-content -->
                        </div><!--.post-content-->
                    </div><!--.post-container-->
                </div><!--dynamic css-->
	<?php			
            endwhile;
            wp_reset_query();
	 }
}
//shop
if ( ! function_exists( 'func_ttkw_shop_danh_muc' ) ) {

    function func_ttkw_shop_danh_muc() {


        $cateMenu = array(
            'hide_empty'   => true,
        );
        $des_tax_terms = get_terms('product_cat', $cateMenu);
        $id = 0;
        ?>
        <?php
        foreach ($des_tax_terms as $tax_term) {
            $id = $id +1 ;
            if($id == 14){
                break;
            }
            ?>
            <li id="menu-item-1156"
                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1156">
                <a href="<?php echo get_term_link($tax_term, $cateMenu); ?>"><?php echo $tax_term->name; ?></a>
            </li>
            <?php
        }
    }
}
//blog và category

// bài viết mới nhất
if ( ! function_exists( 'func_ttkw_blog_recent_products' ) ) {

    function func_ttkw_blog_recent_products()
    {
        $cateMenu = array(
            'post_type' => 'product',
            'posts_per_page' => 5,
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $loop = new WP_Query($cateMenu);
        while ($loop->have_posts()) : $loop->the_post();
            ?>
            <li>
                <a href="<?php echo the_permalink(); ?>">
                    <img width="300" height="300"
                         src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"
                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">
                    <span class="product-title"><?php echo the_title() ?></span>
                </a>
                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>
                                                        <?php if (get_post_meta(get_the_ID(), '_sale_price', true) > 0) { ?>
                                                            <?php echo wc_price(get_post_meta(get_the_ID(), '_sale_price', true));
                                                        } else {
                                                            echo wc_price(get_post_meta(get_the_ID(), '_regular_price', true)); ?>
                                                        <?php } ?>
                                                    </span>
            </li>
        <?php endwhile;
        wp_reset_query();
    }
}

if(!function_exists('func_ttkw_product_categories')){
    function func_ttkw_product_categories()
    {
        $cate = array(
            'post_type' => 'product',
            'product_cat' => $_SESSION["category"],
            'posts_per_page' => 4,
        );
        $loop = new WP_Query($cate);
        while ($loop->have_posts()) : $loop->the_post(); ?>
            <li class="post-90 product type-product status-publish has-post-thumbnail product_cat-albums product_cat-music last instock downloadable shipping-taxable purchasable product-type-simple">
                <a href="<?php echo the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="../../wp-content/uploads/2013/06/300x300xcd_3_angle.jpg.pagespeed.ic.Ki1McJe4KL.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""/>
                    <h2 class="woocommerce-loop-product__title"><?php echo the_title(); ?></h2>
                    <?php if(get_post_meta( get_the_ID(), '_wc_average_rating', true )>0){
                    $width = get_post_meta( get_the_ID(), '_wc_average_rating', true )*20;
                    ?>
                    <div class="star-rating">
                        <span style="width:<?php echo $width ?>%">Rated <strong class="rating"><?php echo get_post_meta( get_the_ID(), '_wc_average_rating', true );?></strong> out of 5</span>
                    </div>
                    <?php } ?>
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
                </a><a href="indexd74c.html?add-to-cart=90" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="90" data-product_sku="" aria-label="Thêm &ldquo;Woo Album #3&rdquo; vào giỏ hàng" rel="nofollow">Thêm vào giỏ</a></li>
        <?php
        endwhile;
    }
}

if ( ! function_exists( 'woo_add_custom_general_fields' ) ) {

    function woo_add_custom_general_fields() {

        global $woocommerce, $post;

        echo '<div class="options_group">';

        woocommerce_wp_select(
            array(
                'id'      => '_address',
                'label'   => __( 'My Select Field', 'woocommerce' ),
                'options' => array(
                    'Cầu Giấy'   => __( 'Cầu Giấy', 'Cầu Giấy' ),
                    'Ba Đình'   => __( 'Ba Đình', 'Ba Đình' ),
                    'Hai Bà Trưng' => __( 'Hai Bà Trưng', 'Hai Bà Trưng' )
                )
            )
        );

        echo '</div>';

    }
}
if ( ! function_exists( 'woo_add_custom_general_fields_save' ) ) {

    function woo_add_custom_general_fields_save($post_id) {

        $woocommerce_select = $_POST['_address'];
        if( !empty( $woocommerce_select ) )
            update_post_meta( $post_id, '_address', esc_attr( $woocommerce_select ) );

    }
}

if ( ! function_exists( 'my_show_extra_profile_fields' ) ) {

    function my_show_extra_profile_fields($user)
    {
        $address = get_the_author_meta('address',$user->ID);
        ?>
        <table class="form-table">
            <tr>
                <td>Address</td>
                <td><select name="_address" id="_address" class="select short">
                        <option value="Cầu Giấy" <?php if($address == "Cầu Giấy"){echo "selected";} ?>>Cầu Giấy</option>
                        <option value="Ba Đình" <?php if($address == "Ba Đình"){echo "selected";} ?>>Ba Đình</option>
                        <option value="Hai Bà Trưng" <?php if($address == "Hai Bà Trưng"){echo "selected";} ?>>Hai Bà Trưng</option>
                    </select>
                </td>
<!--                <td><input type="text" name="address" value="--><?php //echo $address; ?><!--"/></td>-->
            </tr>
        </table>
        <?php
    }
}

if ( ! function_exists( 'my_save_extra_profile_fields' ) ) {

    function my_save_extra_profile_fields($user_id)
    {
        if (!current_user_can('edit_user', $user_id))
            return false;
        update_usermeta($user_id, 'address', $_POST['_address']);    //update user profile
    }
}

if ( ! function_exists( 'func_ttkw_blog_review_hinglights' ) ) {

    function func_ttkw_blog_review_hinglights()
    {
        $cate = array(
            'post_type' => 'product',
            'meta_key' => '_wc_average_rating',
            'orderby' => 'meta_value_num',
            'posts_per_page' => 4,
        );
        $loop = new WP_Query($cate);
        while ($loop->have_posts()) : $loop->the_post();
            ?>
            <li>
                <a href="<?php echo the_permalink(); ?>">
                    <img width="300" height="300" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">
                    <span class="product-title"><?php echo the_title()?></span>
                </a>
                <?php
                if(get_post_meta( get_the_ID(), '_wc_average_rating', true )>0){
                    $width = get_post_meta( get_the_ID(), '_wc_average_rating', true )*20;
                    ?>
                    <div class="star-rating">
                        <span style="width:<?php echo $width ?>%">Rated <strong class="rating"><?php echo get_post_meta( get_the_ID(), '_wc_average_rating', true );?></strong> out of 5</span>
                    </div>
                    <?php
                }
                foreach (get_comments(array('post_id'=> get_the_ID()))[0] as $key => $value){
                    if($key == 'comment_author'){
                        $author = $value;
                    }
                }
                ?>
                <span class="reviewer">by <?php echo $author; ?></span>
            </li>
        <?php endwhile;
        wp_reset_query();
    }
}
if ( ! function_exists( 'func_ttkw_blog_recent_posts' ) ) {

    function func_ttkw_blog_recent_posts()
    {
        $post_new = new WP_Query(array(
            'post_type' =>  'post',
            'order' => 'DESC',
            'posts_per_page'    =>  5,
        ));
        while($post_new->have_posts()):$post_new->the_post();
            ?>
            <li>
                <a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
            </li>
        <?php
        endwhile; wp_reset_query();
    }
}
if ( ! function_exists( 'func_ttkw_blog_recent_comments' ) ) {

    function func_ttkw_blog_recent_comments()
    {
        $cate = array(
            'post_type' => 'product',
            'meta_key' => '_wc_average_rating',
            'orderby' => 'meta_value_num',
            'posts_per_page' => 5,
        );
        $loop = new WP_Query($cate);
        while ($loop->have_posts()) : $loop->the_post();
            ?>
            <?php
            foreach (get_comments(array('post_id'=> $post->ID))[0] as $key => $value){
                if($key == 'comment_author'){
                    $author = $value;
                }
            }
            ?>
            <li class="recentcomments"><span class="comment-author-link"><?php echo $author; ?></span> on <a href="<?php echo the_permalink(); ?>"><?php echo the_title()?></a></li>
        <?php endwhile;
        wp_reset_query();
    }
}
if ( ! function_exists( 'func_ttkw_blog_categories' ) ) {

    function func_ttkw_blog_categories()
    {
        $args = array(
            'taxonomy'   => "category"
        );
        $product_categories = get_terms($args);
        foreach( $product_categories as $cat ) {
            if( $cat->name == 'Uncategorized'){
                break;
            }
            ?>
            <li class="cat-item cat-item-42"><a href="<?php echo get_term_link($cat, $cateMenu); ?>"><?php echo $cat->name; ?></a>
            </li>
        <?php  }
    }
}
// hiện tags
if ( ! function_exists( 'func_ttkw_post_tags' ) ) {

function func_ttkw_post_tags() {

	$tags = get_tags(array(
	  'hide_empty' => false
	));
	?>
    <?php foreach ($tags as $tag) {
	$tag_link = get_tag_link( $tag->term_id );?>
	  <a class="nav-search-popular-link" href="<?php echo $tag_link;?>">
            <div class="inner-cover">
                <span class="nav-search-popular-text">
                <?php echo $tag->name;?>
                </span>
                <span class="nav-search-popular-text">
                <?php echo $tag->name;?>
                </span>
            </div>
        </a>
	
	
	<?php }

	 }
}


// bài viết related
if ( ! function_exists( 'func_ttkw_post_related' ) ) {

function func_ttkw_post_related() {


$post_new = new WP_Query(array(
        'post_type' =>  'post',
        'posts_per_page'    =>  '3'
    ));
 
    if($post_new->have_posts()):
            while($post_new->have_posts()):$post_new->the_post();
			
			$categories = get_the_category($post->ID, 'taxonomy' );
		?>		
	<div class="feed-post-unfeatured-col col-xs-12 col-md-4 ">
    <div class="feed-post-unfeatured-public feed-post-unfeatured">
        <a href="<?php echo esc_url(get_category_link( $categories[0]->term_id ));?>" class="desktop-category-link desktop-view">
            <div class="span-wrap">
                <span class="hover-toggle"><?php echo $categories[0]->name; ?></span>
                <span class="hover-toggle"><?php echo $categories[0]->name; ?></span>
            </div>
            <div class="bottom-line"></div>
        </a>
        <a class="feed-post-unfeatured-link post-inline-link-init" href="<?php the_permalink() ;?>" tppabs="<?php the_permalink() ;?>" data-linked-post="<?php the_title() ;?>"></a>
        <div class="desktop-hover-box"></div>
        <section class="feed-post-hero post-hero-col type-article">
            <div class="post-content-no-display post-content-boxxer post-content-photo-feed post-content-div col-xs-12 col-md-offset-0 col-md-12">

<img class="no-display boxxer photo-boxxer photo" sizes="(min-width: 768px) 887px, 159px" alt="" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" />
</div>
        </section>
        <section class="feed-post-info flex-fix">
            <header class="feed-post-header">
                <span class="feed-post-category mobile-view"><?php echo $categories[0]->name; ?></span>
                <span class="feed-post-date">
                    <span class="feed-post-date-inner"><?php the_time('M. j') ?></span>
                    <svg class="timestamp-ribbon desktop-view" data-name="Layer 1" viewBox="0 0 96 28">
  <path d="M0,0H96V21H0V0Z" fill="#006241" fill-rule="evenodd"></path>
  <path d="M86,28V21H96Z" fill="#01422c" fill-rule="evenodd"></path>
</svg>
                </span>
                <span class="feed-post-title"><?php the_title() ;?></span>
                <span class="feed-post-subtitle"></span>
                
            </header>
        </section>
    </div>
</div>

	<?php			
            endwhile;
    endif; wp_reset_query();
	
	
	 
	 }
}
?>
<?php
if ( ! function_exists( 'fuc_shopper_menu_shop_list' ) ) {
	/**
	 * Display Header Cart
	 *
	 * @since  1.0.0
	 * @uses  show cate Shop
	 * @return void
	 */
function fuc_shopper_menu_shop_list() {
    $cateMenu = array( 
    'taxonomy' => 'product_cat',
    'parent'   => 0,
	'hide_empty'   => false,
	'orderby'  => 'id',
          'order'    => 'DESC'
);
    $des_tax_terms = get_terms($cateMenu);
    ?>
 <?php
    foreach ($des_tax_terms as $tax_term) { 
		 $cateMenuSub1 = array( 
                'taxonomy' => 'product_cat',
                'parent'   => $tax_term->term_id,
				'hide_empty'   => false
            );
                $des_tax_terms1 = get_terms($cateMenuSub1);
				$dropdown = ! empty( $des_tax_terms1 ) ? 'dropdown': '';
	?>

        <div class=" mr_30">

            <div class=" text-center">
                <a href="<?php echo get_term_link($tax_term, $cateMenu); ?>"><div class="cate_sp_home"><img class="" src="<?php $thumbnail_id = get_woocommerce_term_meta( $tax_term->term_id, 'thumbnail_id', true ); echo $image = wp_get_attachment_url($thumbnail_id); ?>" alt="#">
                    </div></a>

                <a href="<?php echo get_term_link($tax_term, $cateMenu); ?>"><h4><?php echo $tax_term->name; ?></h4></a>


            </div>

        </div>


   
        
<?php } 
	 }
}

?>

<?php
if ( ! function_exists( 'fuc_shopper_menu_shop_list_mobile' ) ) {
	/**
	 * Display Header Cart
	 *
	 * @since  1.0.0
	 * @uses  show cate Shop
	 * @return void
	 */
function fuc_shopper_menu_shop_list_mobile() {
    $cateMenu = array( 
    'taxonomy' => 'product_cat',
    'parent'   => 0,
	'hide_empty'   => false
);
    $des_tax_terms = get_terms($cateMenu);
    ?>
 <?php
    foreach ($des_tax_terms as $tax_term) { 
		 $cateMenuSub1 = array( 
                'taxonomy' => 'product_cat',
                'parent'   => $tax_term->term_id,
				'hide_empty'   => false
            );
                $des_tax_terms1 = get_terms($cateMenuSub1);
				$dropdown = ! empty( $des_tax_terms1 ) ? 'dropdown': '';
	?>
  <li class="level0 cvt_lv_0 ">
							<a href="<?php echo get_term_link($tax_term, $cateMenu); ?>"><i class="fa fa-angle-right"></i> <?php echo $tax_term->name; ?></a>
                            
                                   <?php
			if ( ! empty( $des_tax_terms1 ) && ! is_wp_error( $des_tax_terms1 ) ) {
    ?>
        
         
							
         <?php } ?>
						</li>
   
        
<?php } 
	 }
}


if ( ! function_exists( 'fuc_shopper_product_sales_home' ) ) {
	/**
	 * Display product sales home
	 *
	 * @since  1.0.0
	 * @uses  show  product sales
	 * @return void
	 */
function fuc_shopper_product_sales_home($data) {
              $args = array(
                  'post_type' => 'product',
//                  'meta_key' => 'total_sales',
//                  'orderby' => 'meta_value_num',
//                  'meta_key' => '_address',
                  'posts_per_page' => 5,
              );
              $loop = new WP_Query($args);
              		while ($loop->have_posts()) : $loop->the_post();
              		if(get_post_meta( get_the_ID(), '_address', true ) == $data) {
               ?>

                        <div class="single-list">
                            <ul class="post-container products">
                                <li class="post-<?php echo get_the_ID() ?> product type-product status-publish has-post-thumbnail product_cat-fashion instock shipping-taxable purchasable product-type-simple">
                                    <a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                        <img width="300" height="300" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" class="attachment-medium size-medium" alt="" style="height: 283px;"/>
                                        <h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2>
                                        <span class="price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol"></span>
                                                <?php if(get_post_meta( get_the_ID(), '_regular_price', true ) > 0){
                                                    if(get_post_meta( get_the_ID(), '_sale_price', true ) > 0){
                                                        echo wc_price(get_post_meta( get_the_ID(), '_sale_price', true ));
                                                    } else {
                                                        echo wc_price(get_post_meta( get_the_ID(), '_regular_price', true ));
                                                    }
                                                }?>
                                            </span>
                                        </span>
                                    </a><a href="/online-shop/?add-to-cart=<?php echo get_the_ID() ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_ID() ?>" data-product_sku="" aria-label="Add &ldquo;Hot Dress&rdquo; to your cart" rel="nofollow">Add to cart</a></li>
                            </ul>
                        </div>
<!--<div class="col-md-6 col-ssmm-6 col-ssm-6 feature-product-wrapp">-->
<!--							                            <p class="product-feature-title"><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></p>-->
<!---->
<!---->
<!---->
<!---->
<!--                               --><?php //if(get_post_meta( get_the_ID(), '_regular_price', true ) > 0){?>
<!--                                        --><?php //if(get_post_meta( get_the_ID(), '_sale_price', true ) > 0){?>
<!--                                          <a class="wrapper-link" href="--><?php //the_permalink(); ?><!--">-->
<!---->
<!--                                <span class="img-thumb-wrapper"><img width="300" height="208" src="--><?php //echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?><!--" alt="--><?php //the_title(); ?><!--"  /></span>-->
<!--                                              <span class="feature-price-sale"><span class="woocommerce-Price-amount amount">--><?php //echo wc_price(get_post_meta( get_the_ID(), '_sale_price', true )); ?><!--</span></span> </a>-->
<!--                            <div class="feature-price-real"><span class="woocommerce-Price-amount amount">--><?php //echo wc_price(get_post_meta( get_the_ID(), '_regular_price', true )); ?><!--</span></div>-->
<!--                                        --><?php //} else {?>
<!--                                          <a class="wrapper-link" href="--><?php //the_permalink(); ?><!--">-->
<!---->
<!--                                <span class="img-thumb-wrapper"><img width="300" height="208" src="--><?php //echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?><!--" alt="--><?php //the_title(); ?><!--"  /></span>-->
<!--                                             <span class="feature-price-sale"><span class="woocommerce-Price-amount amount">--><?php //echo wc_price(get_post_meta( get_the_ID(), '_regular_price', true )); ?><!--</span></span> </a>-->
<!--                                        --><?php //} ?>
<!--                                    --><?php //} else {?>
<!--                                      <a class="wrapper-link" href="--><?php //the_permalink(); ?><!--">-->
<!---->
<!--                                <span class="img-thumb-wrapper"><img width="300" height="208" src="--><?php //echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?><!--" alt="--><?php //the_title(); ?><!--"  /></span>-->
<!--                                    <span class="feature-price-sale"><span class="woocommerce-Price-amount amount">Liên hệ</span></span>-->
<!--                                    </a>-->
<!--                                    <div class="feature-price-real"><span class="woocommerce-Price-amount amount"></span></div>-->
<!--                                    --><?php //}?>
<!---->
<!--                        </div>-->

  									


              <?php } endwhile;
              wp_reset_query(); 

	 }
}
if ( ! function_exists( 'fuc_tkw_shopper_product_new_detail' ) ) {
	/**
	 * Display product sales home
	 *
	 * @since  1.0.0
	 * @uses  show  product sales
	 * @return void
	 */
function fuc_tkw_shopper_product_new_detail() {
              $args = array(
                  'post_type' => 'product',
                  'meta_key' => 'total_sales',
                  'orderby' => 'meta_value_num',
                  'posts_per_page' => 4,
              );
              $loop = new WP_Query($args);
              		while ($loop->have_posts()) : $loop->the_post();
               ?>
                   



  		
        
<div class="new-product-item">
                              <a class="img-feature-wrapper" href="<?php the_permalink(); ?>"><span class="img-thumb-wrapper"><img width="300" height="286" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" class="attachment-medium size-medium wp-post-image" alt="<?php the_title(); ?>" /></span></a>
                              <a class="product-name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      
                               <?php if(get_post_meta( get_the_ID(), '_regular_price', true ) > 0){?>
                                        <?php if(get_post_meta( get_the_ID(), '_sale_price', true ) > 0){?>
                                          <div class="product-price"><span>Giá: </span><span class="num"><span class="woocommerce-Price-amount amount"><?php echo wc_price(get_post_meta( get_the_ID(), '_regular_price', true )); ?></span></span></div>
                              <div class="sale-price"><span>Giá KM: </span><span class="num"><span class="woocommerce-Price-amount amount"><?php echo wc_price(get_post_meta( get_the_ID(), '_sale_price', true )); ?></span></span></div>
                              
                                        <?php } else {?>
                                          <div class="sale-price"><span>Giá KM: </span><span class="num"><span class="woocommerce-Price-amount amount"><?php echo wc_price(get_post_meta( get_the_ID(), '_regular_price', true )); ?></span></span></div>
                                        <?php } ?>
                                    <?php } else {?>
                                    <div class="sale-price"><span>Giá KM: </span><span class="num"><span class="woocommerce-Price-amount amount">Liên hệ</span></span></div>
                                    <?php }?> 
    
                              
                             
                           </div>						


              <?php endwhile;
              wp_reset_query(); 

	 }
}




if ( ! function_exists( 'fuc_ttkw_product_view_home' ) ) {
	/**
	 * Display product sales home
	 *
	 * @since  1.0.0
	 * @uses  show  product sales
	 * @return void
	 */
function fuc_ttkw_product_view_home() {
              $args = array(
                  'post_type' => 'product',
				  'meta_key'       => '_wc_review_count',
                  'orderby' => 'meta_value_num',
                  'posts_per_page' => 6,
              );
              $loop = new WP_Query($args);
              		while ($loop->have_posts()) : $loop->the_post();
               ?>
                   

<div class="col-md-4 col-ssmm-6 col-ssm-6 feature-product-wrapp">
							                            <p class="product-feature-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                            
                            
                          
                               
                               <?php if(get_post_meta( get_the_ID(), '_regular_price', true ) > 0){?>
                                        <?php if(get_post_meta( get_the_ID(), '_sale_price', true ) > 0){?>
                                          <a class="wrapper-link" href="<?php the_permalink(); ?>">

                                <span class="img-thumb-wrapper"><img width="300" height="208" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>"  /></span>
                                              <span class="feature-price-sale"><span class="woocommerce-Price-amount amount"><?php echo wc_price(get_post_meta( get_the_ID(), '_sale_price', true )); ?></span></span> </a>
                            <div class="feature-price-real"><span class="woocommerce-Price-amount amount"><?php echo wc_price(get_post_meta( get_the_ID(), '_regular_price', true )); ?></span></div>
                                        <?php } else {?>
                                          <a class="wrapper-link" href="<?php the_permalink(); ?>">

                                <span class="img-thumb-wrapper"><img width="300" height="208" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>"  /></span>
                                             <span class="feature-price-sale"><span class="woocommerce-Price-amount amount"><?php echo wc_price(get_post_meta( get_the_ID(), '_regular_price', true )); ?></span></span> </a>
                                        <?php } ?>
                                    <?php } else {?>
                                      <a class="wrapper-link" href="<?php the_permalink(); ?>">

                                <span class="img-thumb-wrapper"><img width="300" height="208" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>"  /></span>
                                    <span class="feature-price-sale"><span class="woocommerce-Price-amount amount">Liên hệ</span></span>
                                    </a>
                                    <div class="feature-price-real"><span class="woocommerce-Price-amount amount"></span></div>
                                    <?php }?> 

                        </div>

  									


              <?php endwhile;
              wp_reset_query(); 

	 }
}


if ( ! function_exists( 'fuc_ttkw_shopper_menucate_all_home' ) ) {
	function fuc_ttkw_shopper_menucate_all_home() {

    $cateMenu = array( 
    			'taxonomy' => 'product_cat',
			 'parent'   => 0,
			 'hide_empty'   => false,
			 'number' => 4,
);
    $des_tax_terms = get_terms($cateMenu);
?>
	<?php
      $i = 1;
         foreach ($des_tax_terms as $tax_term) { 
                $cateMenuSub1 = array( 
                     'taxonomy' => 'product_cat',
                     'parent'   => $tax_term->term_id,
                         'hide_empty'   => false,
					'number' => 8,
                 );
                     $des_tax_terms1 = get_terms($cateMenuSub1);
          ?> 


                <div class="featured-category <?php echo $tax_term->name; ?>">
    <div class="container">
        <div class="category-title-pr">
            <div class="row">
                <div class="col-md-3 col-ssmm-12 col-ssm-12">
                    <div class="category-title">
                        <a href="<?php echo get_term_link($tax_term, $cateMenu); ?>"><?php echo $tax_term->name; ?></a>
                    </div>
                    <div class="mobile-best-sell-title hot-product-title">
                        <p><a href="<?php echo get_term_link($tax_term, $cateMenu); ?>"><?php echo $tax_term->name; ?></a></p>
                    </div>
                </div>
                <div class="col-md-9">
                    <ul class="sub-categories float-right">
                    <?php foreach ($des_tax_terms1 as $tax_term1) { ?>
                        <li><a href='<?php echo get_term_link($tax_term1, $cateMenuSub1); ?>'><?php echo $tax_term1->name; ?></a></li>
						
						<?php } ?>
                        
                         </ul>
                </div>
            </div>

        </div>
        <div class="row list-products">
                    <?php 	$args = array(
							'post_type'=>'product',
							'post_status'=>'publish',
							'tax_query' => array(
								  array(
									  'taxonomy' => 'product_cat',
									  'field' => 'id',
									  'terms' => $tax_term->term_id
								  )
							  ),
							'orderby' => 'ID',
							'order' => 'DESC',
							'posts_per_page'=> '8');
					    $loop = new WP_Query($args);
							while ($loop->have_posts()) : $loop->the_post();
						?>         
                            
                            
                            <div class="col-md-3 col-ssmm-6 col-ssm-6">
                    <div class="product-wrapper">
						                        <a class="product-image image_blur" href="<?php the_permalink(); ?>">

                            <span class="img-thumb-wrapper"><img width="300" height="161" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" class="attachment-post-thumb size-post-thumb wp-post-image" alt="<?php the_title(); ?>"/></span>
                        </a>
                    </div>
                    <p class="product-title-info"><a href="<?php the_permalink(); ?>" class="product-link"><?php the_title(); ?></a></p>
                    <div class="product-price">
                        <span class="tit-price">Giá: </span><span class="value-price">
   
                         <?php if(get_post_meta( get_the_ID(), '_regular_price', true ) > 0){?>
                                        <?php if(get_post_meta( get_the_ID(), '_sale_price', true ) > 0){?>
                                          <del><span class="woocommerce-Price-amount amount"><?php echo wc_price(get_post_meta( get_the_ID(), '_regular_price', true )); ?></span></del> 
                        <ins><span class="woocommerce-Price-amount amount"><?php echo wc_price(get_post_meta( get_the_ID(), '_sale_price', true )); ?></span></ins>
                                        <?php } else {?>
                                          <ins><span class="woocommerce-Price-amount amount"><?php echo wc_price(get_post_meta( get_the_ID(), '_regular_price', true )); ?></span></ins>
                                        <?php } ?>
                                    <?php } else {?>
                                     <ins><span class="woocommerce-Price-amount amount">Liên hệ</span></ins>
                                    <?php }?> 
    
                        
                        </span>
                    </div>

                </div>
                 <?php endwhile; wp_reset_query(); ?>
                
                                </div>

    </div>
</div>

            
         
     <?php $i++; } ?>
	<div class="clear"></div>
     <?php
	}
}


if ( ! function_exists( 'fuc_shopper_product_sales_detail' ) ) {
	/**
	 * Display product sales home
	 *
	 * @since  1.0.0
	 * @uses  show  product sales
	 * @return void
	 */
function fuc_shopper_product_sales_detail() {
              $args = array(
                  'post_type' => 'product',
                  'meta_key' => 'total_sales',
                  'orderby' => 'meta_value_num',
                  'posts_per_page' => 4,
              );
              $loop = new WP_Query($args);
              		while ($loop->have_posts()) : $loop->the_post();
               ?>
              <div class="item">
	<div class="item-inner transition">
		
		<div class="image">
			<a class="lt-image" href="<?php the_permalink(); ?>" target="_self" title="<?php the_title(); ?>">
				<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>">
			</a>
		</div> <!-- /.image -->
		<div class="caption">
			<h4>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_self">
				<?php the_title(); ?>								
				</a>
			</h4>
		
			<p class="price">
                <?php if(get_post_meta( get_the_ID(), '_regular_price', true ) > 0){?>
                    <?php if(get_post_meta( get_the_ID(), '_sale_price', true ) > 0){?>
                <span class="price-new"><?php echo wc_price(get_post_meta( get_the_ID(), '_sale_price', true )); ?></span>
                <span class="price-old">
                    <del>
                        <?php echo wc_price(get_post_meta( get_the_ID(), '_regular_price', true )); ?>
                    </del>
                </span>
                <?php } else {?>
                    <span class="price-new"><?php echo wc_price(get_post_meta( get_the_ID(), '_regular_price', true )); ?></span>
                <?php } ?>
                <?php } else {?>
                    <span class="price-new">Liên hệ</span>
                <?php }?>
			</p>

		</div>
	</div> <!-- /.item-inner -->

</div>

              <?php endwhile;
              wp_reset_query(); 

	 }
}
if ( ! function_exists( 'fuc_ttkw_shopper_menu_shop_img' ) ) {
	/**
	 * Display Header Cart
	 *
	 * @since  1.0.0
	 * @uses  show cate Shop
	 * @return void
	 */
	 function fuc_ttkw_shopper_menu_shop_img() {
    $cateMenu = array( 
    'taxonomy' => 'product_cat',
    'parent'   => 0
);
    $des_tax_terms = get_terms($cateMenu);
    ?>
 <?php
    foreach ($des_tax_terms as $tax_term) { 
		 $cateMenuSub1 = array( 
                'taxonomy' => 'product_cat',
                'parent'   => $tax_term->term_id
            );
                $des_tax_terms1 = get_terms($cateMenuSub1);
				$dropdown = ! empty( $des_tax_terms1 ) ? 'dropdown': '';
	?>
    
     <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="<?php echo get_term_link($tax_term, $cateMenu); ?>"><?php echo $tax_term->name; ?></a></li>
<?php } 
	 
	 }
}
?>

