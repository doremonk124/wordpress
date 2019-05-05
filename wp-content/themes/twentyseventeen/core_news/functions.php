<?php
/**
 * ttkw template functions.
 *
 * @package ttkw
 */
// advanced search functionality
function advanced_search_query($query) {

    if($query->is_search()) {
        // category terms search.
        if (isset($_GET['category']) && !empty($_GET['category'])) {
            $query->set('tax_query', array(array(
                'taxonomy' => '***the_taxonomy_slug_of_your_category***',
                'field' => 'slug',
                'terms' => array($_GET['category']) )
            ));
        }    
    }
    return $query;
}
add_action('pre_get_posts', 'advanced_search_query', 1000);

add_action( 'wp_ajax_nopriv_load-filter', 'prefix_load_cat_posts' );
add_action( 'wp_ajax_load-filter', 'prefix_load_cat_posts' );
if ( ! function_exists( 'prefix_load_cat_posts' ) ) {
function prefix_load_cat_posts () {
    $cat_id = $_POST[ 'cat' ];
	$type = $_POST[ 'type' ];
	if($type == 'cate') {
			$post_new = new WP_Query(array(
				'cat' => $cat_id,
				'posts_per_page' => 10,
				'order' => 'DESC'
    		));
	}
	else {
	
	$post_new = new WP_Query(array(
        'post_type' =>  'post',
		'order' => 'DESC',
        'posts_per_page'    =>  '10'
    ));

	}
    
	$num = $post_new->post_count; 
    $posts = get_posts( $args );

    ob_start ();

	if($post_new->have_posts()):
		while($post_new->have_posts()):$post_new->the_post();
		
		$categories = get_the_category($post->ID, 'taxonomy' );
	?>
    
    <div class="feed-post-unfeatured-col col-xs-12 col-md-3 taste-drinks">
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


  <?php	 endwhile;
    endif; wp_reset_query(); ?>
    
    <div class="hide_page" data="<?php echo $num;?>"></div>
 <?php $response = ob_get_contents();
   ob_end_clean();

   echo $response;
   die(1);
   }
   }
   
  add_action( 'wp_ajax_nopriv_load-filter-more', 'prefix_load_more_cat_posts' );
add_action( 'wp_ajax_load-filter-more', 'prefix_load_more_cat_posts' );
if ( ! function_exists( 'prefix_load_more_cat_posts' ) ) {
function prefix_load_more_cat_posts () {
    $cat_id = $_POST[ 'cat' ];
	$type = $_POST[ 'type' ];
	$page = $_POST[ 'page' ];
	if($type == 'cate') {
			$post_new = new WP_Query(array(
				'cat' => $cat_id,
				'posts_per_page' => 10,
				'order' => 'DESC',
				'offset' => $page*10 - 1,

    		));
	}
	else {
	
	$post_new = new WP_Query(array(
        'post_type' =>  'post',
		'order' => 'DESC',
        'posts_per_page'    =>  '10',
		'offset' => $page*10 - 1,
    ));

	}
    
	$num = $post_new->post_count; 
    $posts = get_posts( $args );

    ob_start ();

	if($post_new->have_posts()):
		while($post_new->have_posts()):$post_new->the_post();
		
		$categories = get_the_category($post->ID, 'taxonomy' );
	?>
    
    <div class="feed-post-unfeatured-col col-xs-12 col-md-3 taste-drinks">
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


  <?php	 endwhile;
    endif; wp_reset_query(); ?>
    
    <div class="hide_page" data="<?php echo $num;?>"></div>
 <?php $response = ob_get_contents();
   ob_end_clean();

   echo $response;
   die(1);
   }
   }
   ?>
   
   