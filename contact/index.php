
 <?php include('../controller/config/config.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="ZXX">
    <head>
        <!-- Meta Basics -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="x-ua-compatible" content="IE=edge" />

        <!-- SEO Meta -->
        <title>Contact Us | Coursearly - Get in Touch with Our Team</title>
        <meta name="description" content="Need help or have questions? Contact Coursearly for support, partnership inquiries, or feedback. We're here to help!" />
        <meta name="keywords" content="contact Coursearly, customer support, Coursearly help, Coursearly contact info, get in touch" />
        <meta name="author" content="Coursearly Team" />
        <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta name="googlebot" content="index, follow" />

        <!-- Canonical URL -->
        <link rel="canonical" href="https://coursearly.com/contact-us" />

        <!-- Open Graph (Facebook, LinkedIn) -->
        <meta property="og:title" content="Contact Us | Coursearly - Get in Touch with Our Team" />
        <meta property="og:description" content="Reach out to the Coursearly team for support, business partnerships, or general inquiries. We’re happy to hear from you." />
        <meta property="og:image" content="https://coursearly.com/assets/images/Coursearly-contact-thumbnail.png" />
        <meta property="og:url" content="https://coursearly.com/contact-us" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Coursearly" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Contact Us | Coursearly - Get in Touch with Our Team" />
        <meta name="twitter:description" content="We're here to help! Contact Coursearly for support, suggestions, and general inquiries." />
        <meta name="twitter:image" content="https://coursearly.com/assets/images/Coursearly-contact-thumbnail.png" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/svg+xml" />

        <!-- Structured Data (JSON-LD Contact Information) -->
        <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "ContactPage",
        "name": "Contact Us | Coursearly",
        "url": "https://coursearly.com/contact-us",
        "description": "Need help or have questions? Contact Coursearly for support, partnership inquiries, or feedback.",
        "publisher": {
            "@type": "Organization",
            "name": "Coursearly",
            "logo": {
            "@type": "ImageObject",
            "url": "https://coursearly.com/assets/images/Coursearly-page-thumbnail.png"
            },
            "sameAs": [
            "https://facebook.com/Coursearly",
            "https://twitter.com/Coursearly",
            "https://linkedin.com/company/Coursearly"
            ],
            "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+234-800-123-4567",
            "contactType": "Customer Service",
            "email": "support@coursearly.com",
            "areaServed": "NG",
            "availableLanguage": "English"
            }
        }
        }
        </script>

        <!-- CSS Files -->
        <link rel="stylesheet" href="../assets/plugins/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/plugins/css/animate.min.css" />
        <link rel="stylesheet" href="../assets/plugins/css/owl.carousel.min.css" />
        <link rel="stylesheet" href="../assets/plugins/css/swiper-bundle.min.css" />
        <link rel="stylesheet" href="../assets/plugins/css/maginific-popup.min.css" />
        <link rel="stylesheet" href="../assets/plugins/css/nice-select.min.css" />
        <link rel="stylesheet" href="../assets/plugins/css/icofont.css" />
        <link rel="stylesheet" href="../assets/plugins/css/uicons.css" />
        <link rel="stylesheet" href="../style.css" />
    </head>



    <body class="element-wrapper">
        <!-- Start Preloader  -->
        <div id="preloader">
            <div id="ed-preloader" class="ed-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Custom Cursor Start -->
        <div id="ed-mouse">
            <div id="cursor-ball"></div>
        </div>
        <!-- Custom Cursor End -->

        <!-- menu -->
        <div id="menu-query">

        </div>
        <!-- menu -->

        <div id="smooth-wrapper">
            <div id="smooth-content">
                <main>
                    <div class="section-bg hero-bg">
                        <!-- Start Bredcrumbs Area -->
                        <section class="ed-breadcrumbs background-image" style="background-image: url('../assets/images/breadcrumbs-bg.png');">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="ed-breadcrumbs__content">
                                            <h3 class="ed-breadcrumbs__title">Contact Us</h3>
                                            <ul class="ed-breadcrumbs__menu">
                                                <li class="active"><a href="index.html">Home</a></li>
                                                <li>/</li>
                                                <li>Contact Us</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End Bredcrumbs Area -->
                    </div>

                    <!-- Start Contact Card Area -->
                    <div class="ed-contact__card section-gap">
                        <div class="container ed-container">
                            <div class="row">
                                <!-- Single Card  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="ed-contact__card-item">
                                        <div class="ed-contact__card-icon">
                                            <img src="../assets/images/icons/icon-white-phone.svg" alt="icon-white-phone" />
                                        </div>
                                        <div class="ed-contact__card-info">
                                            <a href="tel:<?php echo $phone1; ?>"><?php echo $phone1; ?></a>
                                            <a href="tel:<?php echo $phone2; ?>"><?php echo $phone2; ?></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Card  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="ed-contact__card-item">
                                        <div class="ed-contact__card-icon">
                                            <img src="../assets/images/icons/icon-white-message.svg" alt="icon-white-phone" />
                                        </div>
                                        <div class="ed-contact__card-info">
                                            <a href="mailto:<?php echo $email1; ?>"><?php echo strlen($email1) > 20 ? substr($email1, 0, 20) . '...' : $email1; ?></a>
                                            <a href="mailto:<?php echo $email2; ?>"><?php echo strlen($email2) > 20 ? substr($email2, 0, 20) . '...' : $email2; ?></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Card  -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="ed-contact__card-item">
                                        <div class="ed-contact__card-icon">
                                            <img src="../assets/images/icons/icon-white-map.svg" alt="icon-white-phone" />
                                        </div>
                                        <div class="ed-contact__card-info">
                                            <a href="#" target="_blank">
                                                <!-- 1234 East 27th Street,<br />
                                                New York, NY 101010 -->
                                                <?php echo $location1; ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Contact Card Area -->

                    <!-- Start Contact Area -->
                    <section class="ed-contact ed-contact--style2 section-gap pt-0 position-relative">
                        <div class="container ed-container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="ed-contact__inner">
                                        <!-- Contact Image  -->
                                        <div class="ed-contact__img">
                                            <img src="../assets/images/contact/contact-img.jpg" alt="contact-img" />
                                        </div>

                                        <!-- Contact Form  -->
                                        <div class="ed-contact__form">
                                            <div class="ed-contact__form-head">
                                                <span class="ed-contact__form-sm-title">CONTACT US</span>
                                                <h3 class="ed-contact__form-big-title ed-split-text right">
                                                    Have questions? Contact <br />
                                                    with us today
                                                </h3>
                                            </div>
                                            <form action="#" method="post" class="ed-contact__form-main">
                                                <div class="form-group">
                                                    <input type="text" id="name" name="name" placeholder="Full name" required />
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" id="email" name="email" placeholder="Enter your email" required />
                                                </div>

                                                <div class="form-group">
                                                    <textarea id="message" name="message" placeholder="How can we help you? Feel free to get in touch!" required></textarea>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="flexCheckDefault"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />I agree to the Privacy Policy. </label>
                                                </div>
                                                <div class="ed-contact__form-btn">
                                                    <button type="submit" class="ed-btn">Send Message<i class="fi fi-rr-arrow-small-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Contact Area -->

                    <!-- Start Call Action Area -->
                    <section class="ed-call-action position-relative">
                        <div class="container ed-container">
                            <div class="ed-call-action__inner position-relative">
                                <div class="ed-call-action__shapes">
                                    <img class="ed-call-action__shape-1 rotate-ani" src="../assets/images/call-action/call-action-1/shape-1.svg" alt="shape-1" />
                                    <img class="ed-call-action__shape-2" src="../assets/images/call-action/call-action-1/shape-2.svg" alt="shape-2" />
                                    <img class="ed-call-action__shape-3 updown-ani" src="../assets/images/call-action/call-action-1/shape-3.svg" alt="shape-3" />
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="ed-call-action__img">
                                            <img src="../assets/images/call-action/call-action-1/call-action-img.png" alt="call-action-img" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12 order-class">
                                        <div class="ed-call-action__content">
                                            <div class="ed-section-head">
                                                <span class="ed-section-head__sm-title">GET STARTED NOW</span>
                                                <h3 class="ed-section-head__title">
                                                    Affordable Online Courses <br />
                                                    & Learning Opportunities
                                                </h3>
                                                <p class="ed-section-head__text">
                                                    Gain valuable skills through flexible, expert-led courses — all at a price you can afford.
                                                </p>
                                            </div>
                                            <div class="ed-call-action__content-btn">
                                                <a href="../courses" class="ed-btn"> Start Learning Today<i class="fi fi-rr-arrow-small-right"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Call Action Area -->
                </main>

                <!-- Start Footer Area -->
                <footer class="ed-footer section-bg-color-1 position-relative" id="footer">
                    <?php include('../includes/footer-others.php'); ?>
                </footer>
                <!-- End Footer Area  -->
            </div>
        </div>

       

       

        <!-- Start Back To Top  -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- End Back To Top -->

        <!-- Jquery JS -->
        <script src="../assets/plugins/js/jquery.min.js"></script>
        <script src="../assets/plugins/js/jquery-migrate.js"></script>
        <!-- Bootstrap JS -->
        <script src="../assets/plugins/js/bootstrap.min.js"></script>

        <!-- Gsap JS -->
        <script src="../assets/plugins/js/gsap/gsap.js"></script>
        <script src="../assets/plugins/js/gsap/gsap-scroll-to-plugin.js"></script>
        <script src="../assets/plugins/js/gsap/gsap-scroll-smoother.js"></script>
        <script src="../assets/plugins/js/gsap/gsap-scroll-trigger.js"></script>
        <script src="../assets/plugins/js/gsap/gsap-split-text.js"></script>

        <!-- Wow JS -->
        <script src="../assets/plugins/js/wow.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="../assets/plugins/js/owl.carousel.min.js"></script>
        <!-- Swiper Slider JS -->
        <script src="../assets/plugins/js/swiper-bundle.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="../assets/plugins/js/magnific-popup.min.js"></script>
        <!-- CounterUp  JS -->
        <script src="../assets/plugins/js/jquery.counterup.min.js"></script>
        <script src="../assets/plugins/js/waypoints.min.js"></script>
        <!-- Nice Select JS -->
        <script src="../assets/plugins/js/nice-select.min.js"></script>
        <!-- Back To Top JS -->
        <script src="../assets/plugins/js/backToTop.js"></script>

        <!-- Main JS -->
        <script src="../assets/plugins/js/active.js"></script>

        <script>
            $(document).ready(function () {
                $('#menu-query').load('../includes/menu-others.php', function () {
                    // This runs AFTER the menu is fully loaded into the DOM
                    $('.contact_menu').addClass('active');
                     $.getScript('../controller/js/cart.js');
                });

                // $('#footer').load('../includes/footer-others.html');
            });

        </script>
    </body>
</html>