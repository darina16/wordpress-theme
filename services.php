<?php
/* Template Name: ServicesPage */
get_header();
?>

<main>
    <article class="page-banner">
        <div class="container page-banner_title">
            <?php echo get_the_title(); ?>
        </div>
    </article>

    <article class="services page-services py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-sm-12">
                    <div class="py-5 px-4 services-card service">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/UX.png" alt="Mobile Design" style="width: 108.14px; height: 108.14px;">
                        <h5 class="mt-5 services-title home">Mobile Design</h5>
                        <p class="services-paragraph home mt-4">Reprehenderit in voluptate velit esse cillum
                            dolore
                            eu fugiat nulla pariatur. Nostrud exercitation ullamco.
                        </p>
                        <button type="button" class="btn btn-lg text-center px-4 py-2 mt-4 services-button">Learn More</button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="py-5 px-4 services-card service">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-design.png" alt="Web Design" style="width: 108.14px; height: 108.14px;">
                        <h5 class="mt-5 services-title home">Web Design</h5>
                        <p class="services-paragraph home mt-4">Reprehenderit in voluptate velit esse cillum
                            dolore
                            eu fugiat nulla pariatur. Nostrud exercitation ullamco.
                        </p>
                        <button type="button" class="btn btn-lg text-center px-4 py-2 mt-4 services-button">Learn More</button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="py-5 px-4 services-card service">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/font-design.png" alt="Font Design" style="width: 108.14px; height: 108.14px;">
                        <h5 class="mt-5 services-title home">Font Design</h5>
                        <p class="services-paragraph home mt-4">Reprehenderit in voluptate velit esse cillum
                            dolore
                            eu fugiat nulla pariatur. Nostrud exercitation ullamco.
                        </p>
                        <button type="button" class="btn btn-lg text-center px-4 py-2 mt-4 services-button">Learn More</button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="py-5 px-4 services-card service">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/edit.png" alt="Icon Design" style="width: 108.14px; height: 108.14px;">
                        <h5 class="mt-5 services-title home">Icon Design</h5>
                        <p class="services-paragraph home mt-4">Reprehenderit in voluptate velit esse cillum
                            dolore
                            eu fugiat nulla pariatur. Nostrud exercitation ullamco.
                        </p>
                        <button type="button" class="btn btn-lg text-center px-4 py-2 mt-4 services-button">Learn More</button>
                    </div>
                </div>
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