<?php
/* Template Name: ContactPage */
get_header();
?>

<main>
    <article class="page-banner">
        <div class="container page-banner_title">
            <?php echo get_the_title(); ?>
        </div>
    </article>

    <article class="contact py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-5 col-sm-12">
                    <p class="contact-subtitle">We provide high standard clean website for your business solutions</p>
                    <div class="row py-5">
                        <div class="col-12 mb-5">
                            <div class="row align-items-start">
                                <div class="col-auto"><span class="contact-icon"><a href="tel:+621236700411" class="fa-solid fa-phone">
                                        </a></span></div>
                                <div class="col align-self-center">
                                    <p class="contact-text">Call us on</p>
                                    <p class="contact-data">+62 123 6700 411</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-5">
                            <div class="row align-items-start">
                                <div class="col-auto"><span class="contact-icon"><a href="mailto:info@rojo.com" class="fa-solid fa-envelope">
                                        </a></span></div>
                                <div class="col align-self-center">
                                    <p class="contact-text">Email Us</p>
                                    <p class="contact-data">info@rojo.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
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
                <div class="col-md-7 col-sm-12">
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
            </div>
        </div>
    </article>

    <article class="maps">
        <div class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.98342384987!2d25.29012821550105!3d54.70991477940237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96b1c1c3bc9f%3A0xb4eca31b162c5579!2sVilnius%20Coding%20School!5e0!3m2!1sru!2slt!4v1651432053521!5m2!1sru!2slt" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </article>

</main>

<?php get_footer(); ?>