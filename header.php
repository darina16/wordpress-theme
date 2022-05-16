<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'class-name' ); ?>>
    <header class="py-2">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <?php
                        if (function_exists('the_custom_logo')) {
                        $logo = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src($logo, 'full');
                        $image_url = $image[0]; ?>
                        <img src="<?php echo $image_url ?>">

                        <?php } ?>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'primary',
                            'depth'             => 1,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse justify-content-end',
                            'items_wrap'        => '<div class="%2$s">%3$s</div>',
                            'menu_class'        => 'navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
                </div>
            </nav>
        </div>
    </header>