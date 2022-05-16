<?php
/* Template Name: Homepage */
get_header();
?>

<main>
    <article class="banner pt-4">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="align-self-center banner-block container-fluid">
                    <div class="d-flex mb-4">
                        <span class="me-5"><a href="" class="icon-social fa-brands fa-facebook-f">
                            </a></span>
                        <span class="me-5"><a href="" class="icon-social fa-brands fa-twitter">
                            </a></span>
                        <span class="me-5"><a href="" class="icon-social fa-brands fa-instagram">
                            </a></span>
                        <span><a href="" class="icon-social fa-brands fa-youtube">
                            </a></span>
                    </div>
                    <h1 class="mb-3 banner-title">Web Designer Type Designer based in Sidoarjo</h1>
                    <p class="mb-5 banner-subtitle">Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                        officia deserunt mollit anim id est laborum</p>
                    <button type="button" onclick="window.location.href='./about'" class="btn btn-lg text-center px-4 py-2 banner-button"><i class="fa-solid fa-address-card me-3"></i>More About Me</button>
                </div>
                <div class="d-none d-lg-block">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/image2.png" alt="Person siluet">
                </div>
            </div>
        </div>
    </article>

    <article class="services py-5">
        <div class="container">
            <div class="owl-carousel owl-one owl-theme owl-loaded">
                <div class="py-5 px-4 services-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/UX.png" alt="Mobile Design" style="width: 108.14px; height: 108.14px;">
                    <h5 class="mt-5 services-title home">Mobile Design</h5>
                    <p class="services-paragraph home mt-4">Reprehenderit in voluptate velit esse cillum
                        dolore
                        eu fugiat nulla pariatur. Nostrud exercitation ullamco.
                    </p>
                </div>
                <div class="py-5 px-4 services-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-design.png" alt="Web Design" style="width: 108.14px; height: 108.14px;">
                    <h5 class="mt-5 services-title home">Web Design</h5>
                    <p class="services-paragraph home mt-4">Reprehenderit in voluptate velit esse cillum
                        dolore
                        eu fugiat nulla pariatur. Nostrud exercitation ullamco.
                    </p>
                </div>
                <div class="py-5 px-4 services-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/font-design.png" alt="Font Design" style="width: 108.14px; height: 108.14px;">
                    <h5 class="mt-5 services-title home">Font Design</h5>
                    <p class="services-paragraph home mt-4">Reprehenderit in voluptate velit esse cillum
                        dolore
                        eu fugiat nulla pariatur. Nostrud exercitation ullamco.
                    </p>
                </div>
                <div class="py-5 px-4 services-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/edit.png" alt="Icon Design" style="width: 108.14px; height: 108.14px;">
                    <h5 class="mt-5 services-title home">Icon Design</h5>
                    <p class="services-paragraph home mt-4">Reprehenderit in voluptate velit esse cillum
                        dolore
                        eu fugiat nulla pariatur. Nostrud exercitation ullamco.
                    </p>
                </div>
            </div>
        </div>
    </article>


    <article class="about py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 pb-5">
                    <h3 class="mb-5 about-title">About <span class="span-word">Me</span> </h3>
                    <p class="about-subtitle">Everything you can imagine is real</p>
                    <div class="row mt-5">
                        <div class="col-md-6 col-sm-12">
                            <p class="about_paragraph">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt
                                mollit anim id est laborum Duis aute irure dolor in reprehenderit in voluptate velit
                                esse cillum dolore eu fugiat nulla pariatur
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="about_paragraph">
                                Cepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt
                                mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mt-3 align-items-center">
                        <i class="fa-solid fa-play"></i>
                        <a class="watch ms-3" href="https://www.youtube.com/watch?v=kTdAs3p6Alg">Watch Video</a>
                    </div>
                </div>
                <div class="col-md-4 offset-md-1 col-sm-12">
                    <h3 class="mb-5"><span class="span-word">Culture</span></h3>
                    <p class="about_paragraph">
                        Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit
                        anim id est laborum Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu fugiat nulla pariatur
                    </p>
                    <div class="d-flex mt-5">
                        <span class="social me-3"><a href="" class="fa-brands fa-facebook">
                            </a></span>
                        <span class="social me-3"><a href="" class="fa-brands fa-twitter">
                            </a></span>
                        <span class="social me-3"><a href="" class="fa-brands fa-instagram">
                            </a></span>
                        <span class="social"><a href="" class="fa-brands fa-youtube">
                            </a></span>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <article class="portfolio py-5">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-md-4 col-sm-6 col-12">
                    <h3 class="portfolio-title">My<span class="portfolio-title-word"> Portfolio</span></h3>
                    <p class="portfolio-subtitle">Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                        officia deserunt mollit anim id est laborum Duis aute irure dolor.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-12 portfolio-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack1.jpg" class="img-fluid portfolio-image" alt="Website Template">
                    <div class="portfolio-img_overlay d-flex flex-column justify-content-center text-center px-4">
                        <div class="portfolio-img-title mb-4">Comed Template Kit</div>
                        <p class="portfolio-img-description">Reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Nostrud exercitation ullamco.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 portfolio-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack2.jpg" class="img-fluid portfolio-image" alt="Website Template">
                    <div class="portfolio-img_overlay d-flex flex-column justify-content-center text-center px-4">
                        <div class="portfolio-img-title mb-4">Comed Template Kit</div>
                        <p class="portfolio-img-description">Reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Nostrud exercitation ullamco.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 portfolio-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack3.jpg" class="img-fluid portfolio-image" alt="Website Template">
                    <div class="portfolio-img_overlay d-flex flex-column justify-content-center text-center px-4">
                        <div class="portfolio-img-title mb-4">Comed Template Kit</div>
                        <p class="portfolio-img-description">Reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Nostrud exercitation ullamco.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 portfolio-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack4.jpg" class="img-fluid portfolio-image" alt="Website Template">
                    <div class="portfolio-img_overlay d-flex flex-column justify-content-center text-center px-4">
                        <div class="portfolio-img-title mb-4">Comed Template Kit</div>
                        <p class="portfolio-img-description">Reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Nostrud exercitation ullamco.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 portfolio-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack5.jpg" class="img-fluid portfolio-image" alt="Website Template">
                    <div class="portfolio-img_overlay d-flex flex-column justify-content-center text-center px-4">
                        <div class="portfolio-img-title mb-4">Comed Template Kit</div>
                        <p class="portfolio-img-description">Reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Nostrud exercitation ullamco.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <button type="button" onclick="window.location.href='./portfolio'" class="btn btn-lg text-center px-4 py-2 my-5 portfolio-button">All
                    Portfolio</button>
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

    <article class="contact py-5">
        <div class="container">
            <h3 class="contact-title mb-4">Contact <span class="contact-title-word">Me</span></h3>
            <p class="contact-subtitle">We provide high standard clean website for your business solutions</p>
            <div class="row py-5">
                <div class="col-md-4 col-sm-12 mb-4">
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col-auto"><span class="contact-icon"><a href="tel:+621236700411" class="fa-solid fa-phone">
                                    </a></span></div>
                            <div class="col-lg col-md-auto col-sm col align-self-center">
                                <p class="contact-text">Call us on</p>
                                <p class="contact-data">+62 123 6700 411</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 mb-4">
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col-auto"><span class="contact-icon"><a href="mailto:info@rojo.com" class="fa-solid fa-envelope">
                                    </a></span></div>
                            <div class="col align-self-center">
                                <p class="contact-text">Email Us</p>
                                <p class="contact-data">info@rojo.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col-auto"><span class="contact-icon"><a href="" class="fa-solid fa-location-dot">
                                    </a></span></div>
                            <div class="col align-self-center">
                                <p class="contact-text">Visit Office</p>
                                <p class="contact-data">99 S.t Jomblo Park <br>Pekanbaru 28292. Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <form id="contact-form" method="POST" action="">
                        <div class="mb-3">
                            <label for="form-name" class="form-label">Your Name (required)</label>
                            <input type="text" class="form-control" id="form-name" required>
                        </div>
                        <div class="mb-3">
                            <label for="form-mail" class="form-label">Your Email (required)</label>
                            <input type="email" class="form-control" id="form-mail" required>
                        </div>
                        <div class="mb-3">
                            <label for="form-subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="form-subject">
                        </div>
                        <div>
                            <label for="form-message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="form-message" rows="5"></textarea>
                        </div>
                        <button type="button" class="btn btn-lg text-center px-4 py-2 contact-button mt-4" id="report">Get a free quote</button>
                    </form>
                    <p class="contact-paragraph mt-4">Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur</p>
                </div>
                <div class="offset-md-1 col-md-6 col-sm-12 contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.9834238498697!2d25.290128215501056!3d54.709914779402375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96b1c1c3bc9f%3A0xb4eca31b162c5579!2sVilnius%20Coding%20School!5e0!3m2!1sru!2slt!4v1651431712382!5m2!1sru!2slt" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </article>

    <article class="client py-5">
        <div class="container">
            <div class="owl-carousel owl-two owl-theme owl-loaded">
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dummy-logo-1.png" alt="Logo1">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dummy-logo-2.png" alt="Logo2">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dummy-logo-3.png" alt="Logo3">
                </div>
                <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dummy-logo-4.png" alt="Logo4">
                </div>
            </div>
        </div>
    </article>
</main>

<?php get_footer(); ?>