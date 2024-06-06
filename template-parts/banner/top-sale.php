<div class="topSale">
    <div class="topSale__content">
        <p class="topSale__cate"><?php echo get_theme_mod('set_banner_title', '') ?></p>
        <p class="topSale__name"><?php echo get_theme_mod('set_banner_content', 'Enhance Your Music Experience') ?></p>
        <a href="<?php echo get_theme_mod('set_banner_url', '#') ?>" class="topSale__button">Buy Now!</a>
    </div>
    <div class="topSale__img"><img src="<?php echo wp_get_attachment_url(get_theme_mod('set_img_banner', '#')) ?>" alt=""></div>
</div>