<?php

/**
 * Template part for displaying single card in index.php
 */
?>

<!-- <a class="row" href="<?php the_permalink(); ?>"> -->
<div class="card hero d-flex flex-1">
    <div class="card-content row mg-t-25">
        <div class="card-image d-flex flex-2"> <?php the_post_thumbnail(); ?> </div>
        <div class="card-info d-flex flex-1"> <?php the_title(); ?> </div>
    </div>
</div>
<!-- </a> -->