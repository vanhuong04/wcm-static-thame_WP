<?php 
get_header( );
?>
<div class="thame__body">
  <?php get_template_part('/template-parts/banner/banner'); ?>
  <?php get_template_part('/template-parts/product/product','sale'); ?>
  <?php get_template_part('/template-parts/product/product','explore '); ?>
  <?php get_template_part('/template-parts/banner/top','sale'); ?>
  <?php get_template_part('/template-parts/product/product','selling'); ?>
  <?php get_template_part('/template-parts/posts/new-post'); ?>
</div>
<?php
function is_user_logged_ins() {
	$user = wp_get_current_user();

	return $user->exists();
}

echo is_user_logged_ins();
get_footer();