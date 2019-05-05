<?php
/**
 * @var int $slider_id Slider ID.
 * @var int $show_loading_icon 1 for show, otherwise 0.
 * @var string $loading_icon_type
 * @var Hugeit_Slider_Slide[] $slides
 * @var Hugeit_Slider_Slider $slider
 */
?>
<?php if ($slider_id == 1) { ?>
<?php
        foreach ( $slides as $key => $slide ) {?>
            <div class="no-media-query at-slide-unit acme-col-1" style="background-image:url(<?php echo wp_get_attachment_url($slides[$key]->get_attachment_id()); ?>);background-repeat:no-repeat;background-size:cover;background-position:center;">
                <a class="at-overlay" href="<?php echo $slides[$key]->get_url(); ?>"></a>
                <div class="slider-desc">
                    <div class="slider-details">
                        <div class="slide-title">
                            <a href="<?php echo $slides[$key]->get_url(); ?>">
                                <?php echo $slides[$key]->get_title(); ?>
                            </a>
                        </div>
                    </div>
                    <div class="slider-buttons">
                        <a href="<?php echo $slides[$key]->get_url(); ?>" class="slider-button primary">
                            Shop Now                                                    </a>
                    </div>
                </div>
            </div>
      <?php } ?>
<?php } ?>
<?php if ($slider_id == 2) { ?>
    <?php
    foreach ( $slides as $key => $slide ) {?>
        <div class="no-media-query at-beside-slider-unit" style="background-image:url(<?php echo wp_get_attachment_url($slides[$key]->get_attachment_id()); ?>);background-repeat:no-repeat;background-size:cover;background-position:center;">
            <a class="at-overlay" href="<?php echo $slides[$key]->get_url(); ?>"></a>
            <div class="beside-slider-desc">
                <div class="beside-slider-content-wrapper">
                    <div class="slider-details">
                        <div class="slide-title">
                            <a href=""<?php echo $slides[$key]->get_url(); ?>">
                            <?php echo $slides[$key]->get_title(); ?>
                            </a>
                        </div>
                    </div>
                    <div class="slider-buttons">
                        <a href="<?php echo $slides[$key]->get_url(); ?>" class="slider-button primary">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>
<?php if ($slider_id == 3) { ?>
<?php $i =1;
        foreach ( $slides as $key => $slide ) {
		if($i == 1) {
		?>
            <div class="single-list">
                <ul class="post-container products">
                    <li class="post-439 product type-product status-publish has-post-thumbnail product_cat-fashion instock shipping-taxable purchasable product-type-simple">
                        <a href="http://demo.acmethemes.com/online-shop/product/hot-dress/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300" src="<?php echo wp_get_attachment_url($slides[$key]->get_attachment_id()); ?>" class="attachment-medium size-medium" alt="" srcset="<?php echo wp_get_attachment_url($slides[$key]->get_attachment_id()); ?> 300w, <?php echo wp_get_attachment_url($slides[$key]->get_attachment_id()); ?> 150w, <?php echo wp_get_attachment_url($slides[$key]->get_attachment_id()); ?> 180w, <?php echo wp_get_attachment_url($slides[$key]->get_attachment_id()); ?> 600w" sizes="(max-width: 300px) 100vw, 300px" /><h2 class="woocommerce-loop-product__title">Hot Dress</h2>
                            <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>300.00</span></span>
                        </a><a href="<?php echo $slides[$key]->get_description(); ?>" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="439" data-product_sku="" aria-label="Add &ldquo;Hot Dress&rdquo; to your cart" rel="nofollow">Add to cart</a></li>
                </ul><!--.post-container-->
            </div><!--dynamic css-->
      
<?php } $i++; } ?>
<div class="col-md-6">
            <div class="row">
<?php $j =1;
        foreach ( $slides as $key => $slide ) {
		if($j > 1) {
		?>
      <div class="col-md-6 col-ssmm-6 col-ssm-6">
                  <div class="videos-sub-product">
                     <a class="img-wrapper" href="<?php echo $slides[$key]->get_url(); ?>">
                     	<span class="img-thumb-wrapper">
                     		<img src="<?php echo wp_get_attachment_url($slides[$key]->get_attachment_id()); ?>">
                     	</span>
                     </a>
                     <div class="video-product-title"><a href="<?php echo $slides[$key]->get_url(); ?>"><?php echo $slides[$key]->get_title(); ?></a></div>
                     <div class="video-product-price">
                        <span class="woocommerce-Price-amount amount"><?php echo $slides[$key]->get_description(); ?></span>                                                                            
                     </div>
                  </div>
               </div>
      
<?php } $j++; } ?>
            </div>
         </div>


<?php } ?>
<?php if ($slider_id == 4) { ?>
<?php
        foreach ( $slides as $key => $slide ) {?>
            <div class="feature-promo  acme-col-2 index-1">
                <div class="no-media-query single-unit" style="background-image:url(<?php echo wp_get_attachment_url($slides[$key]->get_attachment_id()); ?>);background-repeat:no-repeat;background-size:cover;background-position:center;">
                    <div class="page-details">
                        <h3 class="title">
                            <?php echo $slides[$key]->get_description(); ?>                                    </h3>
                        <div class="details">
                            <p><?php echo $slides[$key]->get_title(); ?></p>
                        </div>
                        <div class="slider-buttons"><a href="<?php echo $slides[$key]->get_url(); ?>" class="slider-button primary"  >Shop Now</a></div>                                </div>
                </div>
            </div><!--dynamic css-->
<?php } ?>
<?php } ?>
<?php if ($slider_id == 5) { ?>
<?php
        foreach ( $slides as $key => $slide ) {?>
            <div class="feature-promo  acme-col-2 index-1 index-2">
                <div class="no-media-query single-unit" style="background-image:url(<?php echo wp_get_attachment_url($slides[$key]->get_attachment_id()); ?>);background-repeat:no-repeat;background-size:cover;background-position:center;">
                    <div class="page-details">
                        <h3 class="title">
                            <?php echo $slides[$key]->get_description(); ?>                                    </h3>
                        <div class="details">
                            <p><?php echo $slides[$key]->get_title(); ?></p>
                        </div>
                        <div class="slider-buttons"><a href="<?php echo $slides[$key]->get_url(); ?>" class="slider-button primary"  >Shop Now</a></div>                                </div>
                </div>
            </div><!--dynamic css-->
<?php } ?>
<?php } ?>

<?php if ($slider_id == 6) { ?>
<?php
        foreach ( $slides as $key => $slide ) {?>
        <div class="footer-ge-title about-Zsofa">
							<?php echo $slides[$key]->get_title(); ?>
						</div>
						<p class="about-Zsofa-desc">
						<?php echo $slides[$key]->get_description(); ?>
						</p>
<?php } ?>
<?php } ?>

<?php if ($slider_id == 7) { ?>
<?php
        foreach ( $slides as $key => $slide ) {?>
       <div class="item">
                <img src="<?php echo wp_get_attachment_url($slides[$key]->get_attachment_id()); ?>" alt="<?php echo $slides[$key]->get_title(); ?>" title="<?php echo $slides[$key]->get_title(); ?>" class="rev-slidebg"/>
                		<p class="Zsofa-desc-khachhang">
						<?php echo $slides[$key]->get_title(); ?>
						</p>
                                       
                                      </div>
<?php } ?>
<?php } ?>

        
        
<?php if ($slider_id == 8) { ?>
<?php
        foreach ( $slides as $key => $slide ) {?>
		<li class="light">
			<img src="<?php echo wp_get_attachment_url($slides[$key]->get_attachment_id()); ?>" alt="">
			<span><?php echo $slides[$key]->get_title(); ?></span>
			<strong><?php echo $slides[$key]->get_description(); ?></strong>
		</li>
<?php } ?>
<?php } ?>

<?php if ($slider_id == 9) { ?>
<?php
        foreach ( $slides as $key => $slide ) {?>
		<?php echo $slides[$key]->get_description(); ?>
<?php } ?>
<?php } ?>

<?php if ($slider_id == 10) { ?>
<?php
        foreach ( $slides as $key => $slide ) {?>
		<?php echo $slides[$key]->get_description(); ?>
<?php } ?>
<?php } ?>