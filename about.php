<?php
/* Template Name: AboutPage */
get_header();
?>

<main>
    <article class="page-banner">
        <div class="container page-banner_title">
            <?php echo get_the_title(); ?> 
        </div>
    </article>

    <article class="about about-page py-5">
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

    <article class="services about-page py-5">
        <div class="container">
            <div class="owl-carousel owl-about owl-theme owl-loaded pb-5">
                <div class="py-5 px-4 services-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/UX.png" alt="Mobile Design" style="width: 108.14px; height: 108.14px;">
                    <h5 class="mt-5 services-title">Mobile Design</h5>
                    <p class="services-paragraph mt-4">Reprehenderit in voluptate velit esse cillum
                        dolore
                        eu fugiat nulla pariatur. Nostrud exercitation ullamco.
                    </p>
                    <button type="button" class="btn btn-lg text-center px-4 py-2 mt-4 services-button">Learn More</button>
                </div>
                <div class="py-5 px-4 services-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-design.png" alt="Web Design" style="width: 108.14px; height: 108.14px;">
                    <h5 class="mt-5 services-title">Web Design</h5>
                    <p class="services-paragraph mt-4">Reprehenderit in voluptate velit esse cillum
                        dolore
                        eu fugiat nulla pariatur. Nostrud exercitation ullamco.
                    </p>
                    <button type="button" class="btn btn-lg text-center px-4 py-2 mt-4 services-button">Learn More</button>
                </div>
                <div class="py-5 px-4 services-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/font-design.png" alt="Font Design" style="width: 108.14px; height: 108.14px;">
                    <h5 class="mt-5 services-title">Font Design</h5>
                    <p class="services-paragraph mt-4">Reprehenderit in voluptate velit esse cillum
                        dolore
                        eu fugiat nulla pariatur. Nostrud exercitation ullamco.
                    </p>
                    <button type="button" class="btn btn-lg text-center px-4 py-2 mt-4 services-button">Learn More</button>
                </div>
                <div class="py-5 px-4 services-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/edit.png" alt="Icon Design" style="width: 108.14px; height: 108.14px;">
                    <h5 class="mt-5 services-title">Icon Design</h5>
                    <p class="services-paragraph mt-4">Reprehenderit in voluptate velit esse cillum
                        dolore
                        eu fugiat nulla pariatur. Nostrud exercitation ullamco.
                    </p>
                    <button type="button" class="btn btn-lg text-center px-4 py-2 mt-4 services-button">Learn More</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h3 class="mb-5"><span class="span-word">Education</span></h3>
                    <ol class="services-list mx-3 py-4">
                        <li class="mb-5">
                            <p class="services-education">University of Engineering</p>
                            <p class="education-degree">State of Art Company</p>
                        </li>
                        <li class="mb-5">
                            <p class="services-education">UI/UX Buka Kreasi</p>
                            <p class="education-degree">Buka Kreasi Indonesia</p>
                        </li>
                        <li>
                            <p class="services-education">Front End Designer</p>
                            <p class="education-degree">Sampean Design</p>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h3 class="mb-5"><span class="span-word">Experience</span></h3>
                    <ol class="services-list mx-3 py-4">
                        <li class="mb-5">
                            <p class="services-education">Lead Web Developer</p>
                            <p class="education-degree">Bachelor of Science</p>
                        </li>
                        <li class="mb-5">
                            <p class="services-education">University of Engineering</p>
                            <p class="education-degree">Bachelor of Science</p>
                        </li>
                        <li>
                            <p class="services-education">University of Engineering</p>
                            <p class="education-degree">Bachelor of Science</p>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4 col-md-12">
                    <h3 class="mb-5"><span class="span-word">Skill</span></h3>
                    <ul class="pb-4">
                        <li class="mb-5">
                            <div class="d-flex justify-content-between">
                                <div class="skill">Comunication skill</div>
                                <div class="skill value">89%</div>
                            </div>
                            <div class="progress mt-2" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 89%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="mb-5">
                            <div class="d-flex justify-content-between">
                                <div class="skill">Teamwork skill</div>
                                <div class="skill value">75%</div>
                            </div>
                            <div class="progress mt-2" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="mb-5">
                            <div class="d-flex justify-content-between">
                                <div class="skill">Adobe design skill</div>
                                <div class="skill value">85%</div>
                            </div>
                            <div class="progress mt-2" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex justify-content-between">
                                <div class="skill">Creative thinking</div>
                                <div class="skill value">90%</div>
                            </div>
                            <div class="progress mt-2" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </article>

    <article class="cta">
        <div class="container position-relative">
            <div class="row cta-block px-5 py-4 position-absolute">
                <div class="col-md-9 col-sm-12">
                    <h3 class="cta title">I'm Available for Freelance</h3>
                    <p class="cta text">We provide high standard clean website for your business solutions</p>
                </div>
                <div class="col-md-3 col-sm-12 align-self-center text-end">
                    <button type="button" onclick="window.location.href='./contact'" class="btn btn-lg text-center px-5 py-3 cta-button">Get a Quote</button>
                </div>
            </div>
        </div>
    </article>

    <article class="testimony about">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-6 align-self-center">
                    <div class="testimony-block py-5">
                        <img class="testimony-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-avatar.jpg" alt="">
                        <p class="testimony-text about mt-5">veniam quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <h5 class="mt-5 testimony-name about">John Doe</h5>
                        <p class="testimony-position about mt-2">Company ABC</p>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block position-relative">
                    <img class="img-fluid position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/image2.png" alt="Person siluet">
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