<article class="page-banner">
    <div class="container news-banner_title">
        <?php echo get_the_title(); ?>
    </div>
</article>

<article class="news-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <span class="author"><i class="fa-regular fa-circle-user"></i><?php the_author(); ?></span>
            </div>
            <div class="col-auto">
                <span class="date"><i class="fa-regular fa-calendar"></i><?php the_date(); ?></span>
            </div>
            <div class="col-auto">
                <span class="tag"><i class="fa-solid fa-tag"></i>
                    <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                        foreach ($posttags as $tag) {
                            echo $tag->name . ' ';
                        }
                    }
                    ?>
                </span>
            </div>
        </div>
        <div class="container pt-4 pb-5">
            <img class="img-fluid news-pic" src="<?php the_post_thumbnail_url(); ?>">
        </div>
        <div class="container news-content">
            <?php the_content(); ?>
        </div>

        <?php

        ?>

    </div>
</article>