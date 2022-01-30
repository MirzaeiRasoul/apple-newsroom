<?php

/**
 * Template part for displaying single card in index.php
 */
?>

<div class="row">
    <div class="card d-flex flex-1">
        <div class="card-content">
            <div class="card-image two-col">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="card-info">
                <?php the_title(); ?>
            </div>
        </div>
    </div>
</div>