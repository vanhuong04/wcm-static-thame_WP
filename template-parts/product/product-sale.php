<div class="sale__header">
    <div class="sale__heading">Flash Sales</div>
    <div class="sale__time">
        <div class="sale__hours">
          <div class="sale__title">Hours</div>
          <div class="sale__hours-number sale__number"><?php echo get_theme_mod('set_time_sale', 0) ?></div>
        </div>
        <div class="sale__dot">:</div>
        <div class="sale__minutes">
          <div class="sale__title ">Minutes</div>
          <div class="sale__minutes-number sale__number">1</div>
        </div>
        <div class="sale__dot">:</div>
        <div class="sale__secons">
          <div class="sale__title">Seconds</div>     
          <div class="sale__secons-number sale__number">1</div>
        </div>
    </div>
</div> 
    <?php echo do_shortcode('[products on_sale=”true” limit=4] ') ?>

