<?php get_header(); ?>

<main class="main">
    <div class="row">
        <h2>Latest News</h2>
    </div>
    <?php
    $ind = 0;
    while (have_posts()) {
        $ind++;
        the_post();
        if ($ind == 1) { ?>
            <div class="row mg-t-20">
                <a class="card hero d-flex flex-1" href="<?php the_permalink(); ?>">
                    <div class="card-content row">
                        <div class="card-image d-flex flex-2"> <?php the_post_thumbnail(); ?> </div>
                        <div class="card-info d-flex flex-1"> <?php the_title(); ?> </div>
                    </div>
                </a>
            </div>
            <?php
        } elseif ($ind < 6) {
            if ($ind % 2 == 0) { ?>
                <div class="row mg-t-40">
                    <a class="card two-col d-flex flex-1 mg-r-20" href="<?php the_permalink(); ?>">
                        <div class="card-content">
                            <div class="card-image"> <?php the_post_thumbnail(); ?> </div>
                            <div class="card-info"> <?php the_title(); ?> </div>
                        </div>
                    </a>
                <?php
            } else { ?>
                    <a class="card two-col d-flex flex-1 mg-l-20" href="<?php the_permalink(); ?>">
                        <div class="card-content">
                            <div class="card-image"> <?php the_post_thumbnail(); ?> </div>
                            <div class="card-info"> <?php the_title(); ?> </div>
                        </div>
                    </a>
                </div>
    <?php
            }
        }
    } ?>
</main> <!-- .main -->

<?php get_footer(); ?>