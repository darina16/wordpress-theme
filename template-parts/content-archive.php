<div class="col-md-4 col-sm-6 col-12">
    <div class="py-5 px-4 news-cards">
        <div class="news-card-title mb-2"><?php the_title(); ?></div>
        <p class="news-card-date"><?php the_date(); ?></p>
        <div class="news-intro"><?php the_excerpt(); ?></div>
        <a href="<?php the_permalink(); ?>" class="btn btn-lg text-center px-4 py-2 mt-3 portfolio-button">Read More</a>
    </div>
</div>