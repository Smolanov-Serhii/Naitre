<?php

/**
 * Template Name: Подписка
 *
 */
get_header();
$post_id = get_the_ID();
?>
<section class="create" style="text-align: center; min-height: 35vh;">
    <h2><?php the_content(); ?></h2>
    <a href="<?php echo get_home_url()?>" class="button-bg" style="text-align: center; margin-top: 5vh;">
        <span>На главную</span>
    </a>
</section>


<?php get_footer(); ?>

