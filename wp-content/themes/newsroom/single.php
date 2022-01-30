<?php get_header(); ?>

<main class="main post">
    <?php
    while (have_posts()) {
        the_post(); ?>
        <h1 class="post-title mg-b-20"> <?php the_title(); ?> </h1>
        <div class="post-image"><?php the_post_thumbnail(); ?></div>
        <div class="post-content mg-t-30"> <?php the_content(); ?> </div>
    <?php } ?>
</main> <!-- .main -->

<?php get_footer(); ?>