<?php
get_header();
?>

<main>
    <article class="page-banner">
        <div class="container page-banner_title">
            <?php
            $page = get_page_by_title('News');
            echo get_the_title($page->ID)
            ?>
        </div>
    </article>

    <article class="page-news py-5">
        <div class="container">
            <div class="row g-4">

                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        get_template_part('template-parts/content', 'archive');
                    }
                }
                ?>
                <p class="text-center"><?php previous_posts_link() ?></p>
                <p class="text-center"><?php next_posts_link() ?></p>

            </div>
        </div>
    </article>

</main>

<?php
get_footer();
?>