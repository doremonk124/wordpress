<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div style="width: 100vw;height: 83px">
	<div style="display: block; width: 1200px;margin: 0 auto; height: 100px; overflow: hidden; line-height: 35px">
        <div style="color: black; z-index: 100; font-size: 13px; height: auto;display: block;width: 100%; overflow: hidden">
            <div style="display: block;vertical-align:middle;float: left; width: 70%">
                <div class="col-md-3-offsets" style="float: left;vertical-align:middle;padding-left: 10px">
                    <div style="float: left;">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div style="float: left;margin-left: 5px">
                        <p>+00 123 456 789</p>
                    </div>
                </div>
                <div class="col-md-3-offsets" style="float: left;vertical-align:middle;padding-left: 10px">
                    <div style="float: left;">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div style="float: left;margin-left: 5px">
                        <p>example@youremail.com</p>
                    </div>
                </div>
                <div class="col-md-3-offsets" style="float: left;vertical-align:middle;padding-left: 10px">
                    <div style="float: left;">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div style="float: left;margin-left: 5px">
                        <p>Our Location</p>
                    </div>
                </div>
                <div class="col-md-3-offsets" style="float: left;vertical-align:middle;padding-left: 10px">
                    <div style="float: left;">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div style="float: left;margin-left: 5px">
                        <p>Working Hours - 10am - 06pm</p>
                    </div>
                </div>
            </div>
            <div style="display: block; vertical-align: middle; float: right; width: 25%; ">
                <div style="float: left; margin-left: 10px">
                    <a href="#" style="text-decoration: none">
                        Wishlist
                    </a>
                </div>
                <div style="float: left; margin-left: 10px">
                    <a href="#" style="text-decoration: none">
                        Cart
                    </a>
                </div>
                <div style="float: left; margin-left: 10px">
                    <a href="#" style="text-decoration: none">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
                <div style="float: left; margin-left: 10px">
                    <a href="#" style="text-decoration: none">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
                <div style="float: left; margin-left: 10px">
                    <a href="#" style="text-decoration: none">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <div style="float: left; margin-left: 10px">
                    <a href="#" style="text-decoration: none">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div style="float: left; margin-left: 10px">
                    <a href="#" style="text-decoration: none">
                        <i class="fab fa-wordpress"></i>
                    </a>
                </div>
                <div class="account">
                    <a href="#" style="text-decoration: none">
                        My Account
                    </a>
                </div>
            </div>
        </div>
		<?php the_custom_logo(); ?>

		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php
			$description = get_bloginfo( 'description', 'display' );

			if ( $description || is_customize_preview() ) :
			?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
		</div><!-- .site-branding-text -->

		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
