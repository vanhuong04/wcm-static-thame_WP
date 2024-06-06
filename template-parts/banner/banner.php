<?php
 ?>
        <div class="banner__main">
        <div class="slider__menu">
         <div class="slider__menu-title">CATEGORY</div>
         <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wcm-static' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'category-menu',
					'menu_id'        => 'category-menu',
				)
			);
			?>
	     </nav><!-- #site-navigation -->

        </div>
        <div class="slider">
            <div class="slider__img">
                <?php $img_url_slider1 = get_theme_mod('my_slider_image','http://wcm-static.test:82/wp-content/uploads/2024/06/untitled-1-6298-1704087563-1.jpeg');
                      $img_url_slider2 = get_theme_mod('my_slider_image2','http://wcm-static.test:82/wp-content/uploads/2024/06/untitled-1-6298-1704087563-1.jpeg');
                ?>
                <div class="slider__img1">
                    <div class="slider__content">
                        <div class="slider__name">iPhone 14 Series</div>
                        <div class="slider__even">Up to 10% off Voucher</div>
                        <a href="" class="slider__button">
                          <div>Shop Now</div>
                          <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <img class="slider__thumnail" src="<?php echo wp_get_attachment_url($img_url_slider1) ?>" alt="">
                </div>

                <div class="slider__img2">
                    <div class="slider__content">
                        <div class="slider__name">Speakers</div>
                        <div class="slider__even">Amazon Wireless Speaker</div>
                        <a href="" class="slider__button">
                        <div>Shop Now</div>
                        <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <img class="slider__thumnail" src="<?php echo wp_get_attachment_url($img_url_slider2) ?>" alt="">
                </div>
            </div>
        </div>
        </div>
 <?php
?>