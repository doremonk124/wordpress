<?php
/**
 * ttkw hooks
 *
 * @package ttkw
 */
/**
 * General
 */

add_action( 'shopper_product_sales_home', 'fuc_shopper_product_sales_home', 0 );

add_action( 'tkw_shopper_product_new_detail', 'fuc_tkw_shopper_product_new_detail', 0 );


add_action( 'ttkw_product_view_home', 'fuc_ttkw_product_view_home', 0 );
add_action( 'ttkw_shopper_menucate_all_home', 'fuc_ttkw_shopper_menucate_all_home',    56 ); 
add_action( 'ttkw_shopper_menu_shop_img', 'fuc_ttkw_shopper_menu_shop_img',    53 );



add_action( 'ttkw_post_new_top', 'func_ttkw_post_new_top', 0 );
add_action( 'ttkw_category_post_menu', 'func_ttkw_category_post_menu', 0 );

//trang chủ
add_action( 'ttkw_category_tab', 'func_ttkw_category_tab', 0 );
add_action( 'ttkw_category_tab_hoodies', 'func_ttkw_category_tab_hoodies', 0 );
add_action( 'ttkw_category_tab_music', 'func_ttkw_category_tab_music', 0 );
add_action( 'ttkw_category_tab_shirt', 'func_ttkw_category_tab_shirt', 0 );

add_action( 'ttkw_product_new', 'func_ttkw_product_new', 0 );
add_action( 'ttkw_product_sale', 'func_ttkw_product_sale', 0 );

add_action( 'ttkw_post_new', 'func_ttkw_post_new', 0 );

// trang shop
add_action( 'ttkw_shop_danh_muc', 'func_ttkw_shop_danh_muc', 0 );

//trang blog và category
add_action( 'ttkw_blog_recent_products', 'func_ttkw_blog_recent_products', 0 );
add_action( 'ttkw_blog_review_hinglights', 'func_ttkw_blog_review_hinglights', 0 );
add_action( 'ttkw_blog_recent_posts', 'func_ttkw_blog_recent_posts', 0 );
add_action( 'ttkw_blog_recent_comments', 'func_ttkw_blog_recent_comments', 0 );
add_action( 'ttkw_blog_categories', 'func_ttkw_blog_categories', 0 );

add_action( 'ttkw_popular_men', 'func_ttkw_popular_men', 0 );
add_action( 'ttkw_post_highlights', 'func_ttkw_post_highlights', 0 );
add_action( 'ttkw_post_tags', 'func_ttkw_post_tags', 0 );
add_action( 'ttkw_post_related', 'func_ttkw_post_related', 0 );
add_action( 'ttkw_product_categories', 'func_ttkw_product_categories', 0 );

// Display Fields Product
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );
// Save Fields
add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );

// Display Fields User
add_action('show_user_profile', 'my_show_extra_profile_fields');
add_action('edit_user_profile', 'my_show_extra_profile_fields');
add_action('personal_options_update', 'my_save_extra_profile_fields');
add_action('edit_user_profile_update', 'my_save_extra_profile_fields');





