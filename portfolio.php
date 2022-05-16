<?php
/* Template Name: PortfolioPage */
get_header();
?>

<main>
    <article class="page-banner">
        <div class="container page-banner_title">
            <?php echo get_the_title(); ?>
        </div>
    </article>

    <article class="page-portfolio py-5">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-sm-6 col-12 portfolio-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack1.jpg" class="img-fluid portfolio-image" alt="Website Template">
                    <div class="portfolio-img_overlay d-flex flex-column justify-content-center text-center px-4">
                        <div class="portfolio-img-title mb-4">Comed Template Kit</div>
                        <p class="portfolio-img-description">Reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Nostrud exercitation ullamco.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-12 portfolio-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack2.jpg" class="img-fluid portfolio-image" alt="Website Template">
                    <div class="portfolio-img_overlay d-flex flex-column justify-content-center text-center px-4">
                        <div class="portfolio-img-title mb-4">Comed Template Kit</div>
                        <p class="portfolio-img-description">Reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Nostrud exercitation ullamco.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-12 portfolio-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack3.jpg" class="img-fluid portfolio-image" alt="Website Template">
                    <div class="portfolio-img_overlay d-flex flex-column justify-content-center text-center px-4">
                        <div class="portfolio-img-title mb-4">Comed Template Kit</div>
                        <p class="portfolio-img-description">Reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Nostrud exercitation ullamco.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-12 portfolio-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack4.jpg" class="img-fluid portfolio-image" alt="Website Template">
                    <div class="portfolio-img_overlay d-flex flex-column justify-content-center text-center px-4">
                        <div class="portfolio-img-title mb-4">Comed Template Kit</div>
                        <p class="portfolio-img-description">Reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Nostrud exercitation ullamco.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-12 portfolio-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack5.jpg" class="img-fluid portfolio-image" alt="Website Template">
                    <div class="portfolio-img_overlay d-flex flex-column justify-content-center text-center px-4">
                        <div class="portfolio-img-title mb-4">Comed Template Kit</div>
                        <p class="portfolio-img-description">Reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Nostrud exercitation ullamco.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-12 portfolio-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack6.jpg" class="img-fluid portfolio-image" alt="Website Template">
                    <div class="portfolio-img_overlay d-flex flex-column justify-content-center text-center px-4">
                        <div class="portfolio-img-title mb-4">Comed Template Kit</div>
                        <p class="portfolio-img-description">Reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Nostrud exercitation ullamco.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-12 portfolio-img" style="display:none">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack7.jpg" class="img-fluid portfolio-image" alt="Website Template">
                    <div class="portfolio-img_overlay d-flex flex-column justify-content-center text-center px-4">
                        <div class="portfolio-img-title mb-4">Comed Template Kit</div>
                        <p class="portfolio-img-description">Reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Nostrud exercitation ullamco.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-12 portfolio-img" style="display:none">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack8.jpg" class="img-fluid portfolio-image" alt="Website Template">
                    <div class="portfolio-img_overlay d-flex flex-column justify-content-center text-center px-4">
                        <div class="portfolio-img-title mb-4">Comed Template Kit</div>
                        <p class="portfolio-img-description">Reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Nostrud exercitation ullamco.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <button type="button" class="btn btn-lg text-center px-4 py-2 my-5 portfolio-button">All
                    Portfolio</button>
            </div>
        </div>
    </article>

    <article class="pricing pt-5">
        <div class="container">
            <h3 class="mb-4 pricing-title">Pricing <span class="span-word">Table</span> </h3>
            <p class="pricing-subtitle mb-5">We provide high standard clean website for your business solutions</p>
            <div class="row g-5 g-md-3 g-lg-5 mb-5">
                <div class="col-md-4 col-sm-12">
                    <div class="container pricing-card py-5">
                        <p class="pricing-plan mb-2">Starter</p>
                        <p class="pricing-price mb-2">Free</p>
                        <p class="pricing-details">for up to 2 editors and 3 projects</p>
                        <ul class="fa-ul py-4">
                            <li class="mb-3"><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>3 projects</li>
                            <li class="mb-3"><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>30-day version history</li>
                            <li class="mb-3"><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>Up to 2 editors</li>
                            <li><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>Unlimited cloud storage</li>
                        </ul>
                        <button type="button" class="btn btn-lg text-center py-2 mt-5 pricing-button">Get Now</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="container pricing-card professional py-5">
                        <p class="pricing-plan mb-2">Professional</p>
                        <p class="pricing-price mb-2">$9.99/mo</p>
                        <p class="pricing-details">for up to 2 editors and 3 projects</p>
                        <ul class="fa-ul py-4">
                            <li class="mb-3"><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>3 projects</li>
                            <li class="mb-3"><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>30-day version history</li>
                            <li class="mb-3"><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>Up to 2 editors</li>
                            <li><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>Unlimited cloud storage</li>
                        </ul>
                        <button type="button" class="btn btn-lg text-center py-2 mt-5 pricing-button">Get Now</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="container pricing-card py-5">
                        <p class="pricing-plan mb-2">Business</p>
                        <p class="pricing-price mb-2">$14.99/mo</p>
                        <p class="pricing-details">for up to 2 editors and 3 projects</p>
                        <ul class="fa-ul py-4">
                            <li class="mb-3"><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>3 projects</li>
                            <li class="mb-3"><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>30-day version history</li>
                            <li class="mb-3"><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>Up to 2 editors</li>
                            <li><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>Unlimited cloud storage</li>
                        </ul>
                        <button type="button" class="btn btn-lg text-center py-2 mt-5 pricing-button">Get Now</button>
                    </div>
                </div>
            </div>
        </div>
    </article>


    <article class="testimony">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-6 align-self-center">
                    <div class="testimony-block py-5">
                        <img class="testimony-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-avatar.jpg" alt="">
                        <p class="testimony-text mt-5">veniam quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <h5 class="mt-5 testimony-name">John Doe</h5>
                        <p class="testimony-position mt-2">Company ABC</p>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block position-relative">
                    <img class="img-fluid position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/image.png" alt="Person siluet">
                </div>
            </div>
        </div>
    </article>

    <article class="client py-5">
        <div class="container">
            <div class="owl-carousel owl-two owl-theme owl-loaded">
                <div class="ms-2 me-2 client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dummy-logo-1.png" alt="Logo1">
                </div>
                <div class="ms-2 me-2 client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dummy-logo-2.png" alt="Logo2">
                </div>
                <div class="ms-2 me-2 client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dummy-logo-3.png" alt="Logo3">
                </div>
                <div class="ms-2 me-2 client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dummy-logo-4.png" alt="Logo4">
                </div>
            </div>
        </div>
    </article>
</main>

<?php get_footer(); ?>