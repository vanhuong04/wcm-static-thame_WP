<div class="newPost">
    <div class="newPost__header">New Post</div>
    <div class="newPost__main">
    <?php
// Lấy 4 bài gần nhất
$args = array(
  'post_type' => 'post', // Loại bài viết
  'posts_per_page' => 4, // Số lượng bài viết
  'order' => 'DESC', // Sắp xếp theo ngày đăng mới nhất
  'orderby' => 'date'
);

$query = new WP_Query( $args );
// print_r($query->have_posts());

if ( $query->have_posts() ) :
  $i = 1; // Biến đếm

  while ( $query->have_posts() ) : $query->the_post();

    $title = get_the_title(); 
    // $thumnail = ;
    // Lấy tiêu đề bài viết
    // echo $thumnail;
    ?>
    <div class="newPost__<?php echo $i; ?>">
            <a href="<?php the_permalink(); ?>" class="newPost__img<?php echo $i; ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
            <div class="newPost__content<?php echo $i; ?>">
            <p class="newPost__name"><?php echo $title; ?></p>
            <div class="newPost__desc"><?php the_excerpt(); ?></div>
            <a href="<?php the_permalink(); ?>" class="newPost__link">continue reading</a>
            </div>           
        </div>
    <?php
    // Tăng biến đếm
    $i++;

  endwhile;
endif;

wp_reset_postdata();
?>


        <!-- <div class="newPost__one">
            <div class="newPost__img1"><img src="https://th.bing.com/th/id/OIP.ozm6fv1aUdsmBKIglm_v1wHaNK?w=115&h=198&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt=""></div>
            <div class="newPost__content1">
            <p class="newPost__name">PlayStation 5</p>
            <p class="newPost__desc">Black and White version of the PS5 coming out on sale</p>
            <a class="newPost__link">continue reading</a>
            </div>           
        </div> -->
        <!-- <div class="newPost__two">
            <div class="newPost__img2"><img src="https://th.bing.com/th/id/OIP.ozm6fv1aUdsmBKIglm_v1wHaNK?w=115&h=198&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt=""></div>
            <div class="newPost__content2">
            <p class="newPost__name">PlayStation 5</p>
            <p class="newPost__desc">Black and White version of the PS5 coming out on sale</p>
            <a class="newPost__link">continue reading</a>
            </div>
        </div>
        <div class="newPost__three">
            <div class="newPost__img3"><img src="https://th.bing.com/th/id/OIP.ozm6fv1aUdsmBKIglm_v1wHaNK?w=115&h=198&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt=""></div>
            <div class="newPost__content3">
            <p class="newPost__name">PlayStation 5</p>
            <p class="newPost__desc">Black and White version of the PS5 coming out on sale</p>
            <a class="newPost__link">continue reading</a>
            </div>
        </div>
        <div class="newPost__four">
            <div class="newPost__img4"><img src="https://th.bing.com/th/id/OIP.ozm6fv1aUdsmBKIglm_v1wHaNK?w=115&h=198&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt=""></div>
            <div class="newPost__content4">
            <p class="newPost__name">PlayStation 5</p>
            <p class="newPost__desc">Black and White version of the PS5 coming out on sale</p>
            <a class="newPost__link">continue reading</a>
            </div>
        </div> -->
    <!-- </div> -->
<!-- </div> -->