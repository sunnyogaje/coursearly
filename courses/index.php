 <?php include('../controller/config/config.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="ZXX">

<head>
    <!-- Meta Basics -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />

    <!-- SEO Meta -->
    <title>Explore Online Courses | Coursearly - Learn New Skills Anytime</title>
    <meta name="description" content="Browse online courses on Coursearly. Learn technology, business, design, and more with flexible, affordable, expert-led classes." />
    <meta name="keywords" content="online courses, e-learning, Coursearly courses, learn online, virtual classes, tech courses, business skills, creative learning" />
    <meta name="author" content="Coursearly Team" />
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="googlebot" content="index, follow" />

    <!-- Canonical URL -->
    <link rel="canonical" href="https://coursearly.com/courses" />

    <!-- Open Graph (Facebook, LinkedIn) -->
    <meta property="og:title" content="Explore Online Courses | Coursearly" />
    <meta property="og:description" content="Learn anything, anywhere. Coursearly's online courses cover technology, business, design, and more." />
    <meta property="og:image" content="https://coursearly.com/assets/images/Coursearly-page-thumbnail.png" />
    <meta property="og:url" content="https://coursearly.com/courses" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Coursearly" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Explore Online Courses | Coursearly" />
    <meta name="twitter:description" content="Upgrade your skills with expert-led online courses available anytime, anywhere on Coursearly." />
    <meta name="twitter:image" content="https://coursearly.com/assets/images/Coursearly-page-thumbnail.png" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/svg+xml" />

    <!-- Structured Data (JSON-LD ItemList Schema) -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ItemList",
            "name": "Coursearly Courses",
            "url": "https://coursearly.com/courses",
            "description": "List of online courses offered by Coursearly for flexible and effective learning.",
            "numberOfItems": 10,
            "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "url": "https://coursearly.com/courses/course-name-1"
                }, {
                    "@type": "ListItem",
                    "position": 2,
                    "url": "https://coursearly.com/courses/course-name-2"
                }
                // Add more ListItems dynamically as needed
            ]
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

    <!-- Jquery JS -->
    <script src="../assets/plugins/js/jquery.min.js"></script>
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
                                        <h3 class="ed-breadcrumbs__title">Our Courses</h3>
                                        <ul class="ed-breadcrumbs__menu">
                                            <li class="active"><a href="../">Home</a></li>
                                            <li>/</li>
                                            <li>Our Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Bredcrumbs Area -->
                </div>

                <!-- Start Course Area -->
                <section class="ed-course section-gap position-relative">
                    <div class="container ed-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="ed-course__filter">
                                    <p class="ed-course__filter-text">
                                        <!-- Showing 1-6 Of 15 Results -->
                                    </p>
                                    <div class="ed-course__filter-search">
                                        <form id="searchForm" class="ed-hero__search-form">
                                            <input type="search" name="search" id="searchInput" placeholder="Search your courses..." required />
                                            <button type="submit">Search <i class="fi-rr-search"></i></button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row courses_container">
                            <!-- Single Course Card -->
                            <!-- <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                <div class="ed-course__card wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                    <a href="../course-details/" class="ed-course__img">
                                        <img src="../assets/images/course/course-1/1.png" alt="course-img" />
                                    </a>

                                    <a href="../course-details/" class="ed-course__tag">Data Science</a>

                                    <div class="ed-course__body">
                                        <div class="ed-course__lesson">
                                            <div class="ed-course__part">
                                                <i class="fi-rr-book"></i>
                                                <p>23 Lessons</p>
                                            </div>
                                            <div class="ed-course__teacher">
                                                <i class="fi-rr-user"></i>
                                                <p>Harrison Stone</p>
                                            </div>
                                        </div>

                                        <a href="../course-details/" class="ed-course__title">
                                            <h5>
                                                Data Competitive Strategy law and Organization Course
                                            </h5>
                                        </a>

                                        <div class="ed-course__rattings">
                                            <ul>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><span>(09 Reviews)</span></li>
                                            </ul>
                                        </div>

                                        <div class="ed-course__bottom">
                                            <span class="ed-course__price">$674.00</span>
                                            <div class="ed-course__students">
                                                <i class="fi fi-rr-graduation-cap"></i>
                                                <p>673 Students</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Single Course Card -->
                            <!-- <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                <div class="ed-course__card wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                    <a href="../course-details/" class="ed-course__img">
                                        <img src="../assets/images/course/course-1/2.png" alt="course-img" />
                                    </a>

                                    <a href="../course-details/" class="ed-course__tag">Business</a>

                                    <div class="ed-course__body">
                                        <div class="ed-course__lesson">
                                            <div class="ed-course__part">
                                                <i class="fi-rr-book"></i>
                                                <p>04 Lessons</p>
                                            </div>
                                            <div class="ed-course__teacher">
                                                <i class="fi-rr-user"></i>
                                                <p>Alexander Wells</p>
                                            </div>
                                        </div>

                                        <a href="../course-details/" class="ed-course__title">
                                            <h5>
                                                Grow Personal Financial Security Thinking & Principles
                                            </h5>
                                        </a>

                                        <div class="ed-course__rattings">
                                            <ul>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><span>(46 Reviews)</span></li>
                                            </ul>
                                        </div>

                                        <div class="ed-course__bottom">
                                            <span class="ed-course__price">$633.00</span>
                                            <div class="ed-course__students">
                                                <i class="fi fi-rr-graduation-cap"></i>
                                                <p>964 Students</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Single Course Card -->
                            <!-- <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                <div class="ed-course__card wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                    <a href="../course-details/" class="ed-course__img">
                                        <img src="../assets/images/course/course-1/3.png" alt="course-img" />
                                    </a>

                                    <a href="../course-details/" class="ed-course__tag">Design</a>

                                    <div class="ed-course__body">
                                        <div class="ed-course__lesson">
                                            <div class="ed-course__part">
                                                <i class="fi-rr-book"></i>
                                                <p>87 Lessons</p>
                                            </div>
                                            <div class="ed-course__teacher">
                                                <i class="fi-rr-user"></i>
                                                <p>John Smith</p>
                                            </div>
                                        </div>

                                        <a href="../course-details/" class="ed-course__title">
                                            <h5>
                                                The Complete Guide to Build RESTful API Application
                                            </h5>
                                        </a>

                                        <div class="ed-course__rattings">
                                            <ul>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><span>(65 Reviews)</span></li>
                                            </ul>
                                        </div>

                                        <div class="ed-course__bottom">
                                            <span class="ed-course__price">$383.00</span>
                                            <div class="ed-course__students">
                                                <i class="fi fi-rr-graduation-cap"></i>
                                                <p>316 Students</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Single Course Card -->
                            <!-- <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                <div class="ed-course__card wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                    <a href="../course-details/" class="ed-course__img">
                                        <img src="../assets/images/course/course-1/4.png" alt="course-img" />
                                    </a>

                                    <a href="../course-details/" class="ed-course__tag">Development</a>

                                    <div class="ed-course__body">
                                        <div class="ed-course__lesson">
                                            <div class="ed-course__part">
                                                <i class="fi-rr-book"></i>
                                                <p>04 Lessons</p>
                                            </div>
                                            <div class="ed-course__teacher">
                                                <i class="fi-rr-user"></i>
                                                <p>Gabriel Cross</p>
                                            </div>
                                        </div>

                                        <a href="../course-details/" class="ed-course__title">
                                            <h5>
                                                Exploring Learning Landscapes in Academic Business
                                            </h5>
                                        </a>

                                        <div class="ed-course__rattings">
                                            <ul>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><span>(94 Reviews)</span></li>
                                            </ul>
                                        </div>

                                        <div class="ed-course__bottom">
                                            <span class="ed-course__price">$356.00</span>
                                            <div class="ed-course__students">
                                                <i class="fi fi-rr-graduation-cap"></i>
                                                <p>352 Students</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Single Course Card -->
                            <!-- <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                <div class="ed-course__card wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                    <a href="../course-details/" class="ed-course__img">
                                        <img src="../assets/images/course/course-1/5.png" alt="course-img" />
                                    </a>

                                    <a href="../course-details/" class="ed-course__tag">Marketing</a>

                                    <div class="ed-course__body">
                                        <div class="ed-course__lesson">
                                            <div class="ed-course__part">
                                                <i class="fi-rr-book"></i>
                                                <p>04 Lessons</p>
                                            </div>
                                            <div class="ed-course__teacher">
                                                <i class="fi-rr-user"></i>
                                                <p>Maxwell Ford</p>
                                            </div>
                                        </div>

                                        <a href="../course-details/" class="ed-course__title">
                                            <h5>Voices from the Learning Manage Education Hub</h5>
                                        </a>

                                        <div class="ed-course__rattings">
                                            <ul>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><span>(09 Reviews)</span></li>
                                            </ul>
                                        </div>

                                        <div class="ed-course__bottom">
                                            <span class="ed-course__price">$643.00</span>
                                            <div class="ed-course__students">
                                                <i class="fi fi-rr-graduation-cap"></i>
                                                <p>553 Students</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Single Course Card -->
                            <!-- <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                <div class="ed-course__card wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                    <a href="../course-details/" class="ed-course__img">
                                        <img src="../assets/images/course/course-1/6.png" alt="course-img" />
                                    </a>

                                    <a href="../course-details/" class="ed-course__tag">Cyber Security</a>

                                    <div class="ed-course__body">
                                        <div class="ed-course__lesson">
                                            <div class="ed-course__part">
                                                <i class="fi-rr-book"></i>
                                                <p>04 Lessons</p>
                                            </div>
                                            <div class="ed-course__teacher">
                                                <i class="fi-rr-user"></i>
                                                <p>Dominic Chase</p>
                                            </div>
                                        </div>

                                        <a href="../course-details/" class="ed-course__title">
                                            <h5>
                                                Starting SEO as your Home Based Business Courses
                                            </h5>
                                        </a>

                                        <div class="ed-course__rattings">
                                            <ul>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><span>(09 Reviews)</span></li>
                                            </ul>
                                        </div>

                                        <div class="ed-course__bottom">
                                            <span class="ed-course__price">$275.00</span>
                                            <div class="ed-course__students">
                                                <i class="fi fi-rr-graduation-cap"></i>
                                                <p>254 Students</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Single Course Card -->
                            <!-- <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                <div class="ed-course__card wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                    <a href="../course-details/" class="ed-course__img">
                                        <img src="../assets/images/course/course-1/7.png" alt="course-img" />
                                    </a>

                                    <a href="../course-details/" class="ed-course__tag">Development</a>

                                    <div class="ed-course__body">
                                        <div class="ed-course__lesson">
                                            <div class="ed-course__part">
                                                <i class="fi-rr-book"></i>
                                                <p>04 Lessons</p>
                                            </div>
                                            <div class="ed-course__teacher">
                                                <i class="fi-rr-user"></i>
                                                <p>Gabriel John</p>
                                            </div>
                                        </div>

                                        <a href="../course-details/" class="ed-course__title">
                                            <h5>
                                                App Development By Building 100 Projects in 100 Days
                                            </h5>
                                        </a>

                                        <div class="ed-course__rattings">
                                            <ul>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><span>(84 Reviews)</span></li>
                                            </ul>
                                        </div>

                                        <div class="ed-course__bottom">
                                            <span class="ed-course__price">$730.00</span>
                                            <div class="ed-course__students">
                                                <i class="fi fi-rr-graduation-cap"></i>
                                                <p>865 Students</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Single Course Card -->
                            <!-- <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                <div class="ed-course__card wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                    <a href="../course-details/" class="ed-course__img">
                                        <img src="../assets/images/course/course-1/8.png" alt="course-img" />
                                    </a>

                                    <a href="../course-details/" class="ed-course__tag">English</a>

                                    <div class="ed-course__body">
                                        <div class="ed-course__lesson">
                                            <div class="ed-course__part">
                                                <i class="fi-rr-book"></i>
                                                <p>49 Lessons</p>
                                            </div>
                                            <div class="ed-course__teacher">
                                                <i class="fi-rr-user"></i>
                                                <p>William Ford</p>
                                            </div>
                                        </div>

                                        <a href="../course-details/" class="ed-course__title">
                                            <h5>Learn English Fluently With Our Popular Course</h5>
                                        </a>

                                        <div class="ed-course__rattings">
                                            <ul>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><span>(27 Reviews)</span></li>
                                            </ul>
                                        </div>

                                        <div class="ed-course__bottom">
                                            <span class="ed-course__price">$843.00</span>
                                            <div class="ed-course__students">
                                                <i class="fi fi-rr-graduation-cap"></i>
                                                <p>184 Students</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Single Course Card -->
                            <!-- <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                <div class="ed-course__card wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                    <a href="../course-details/" class="ed-course__img">
                                        <img src="../assets/images/course/course-1/9.png" alt="course-img" />
                                    </a>

                                    <a href="../course-details/" class="ed-course__tag">Photoshop</a>

                                    <div class="ed-course__body">
                                        <div class="ed-course__lesson">
                                            <div class="ed-course__part">
                                                <i class="fi-rr-book"></i>
                                                <p>15 Lessons</p>
                                            </div>
                                            <div class="ed-course__teacher">
                                                <i class="fi-rr-user"></i>
                                                <p>Dominic Smith</p>
                                            </div>
                                        </div>

                                        <a href="../course-details/" class="ed-course__title">
                                            <h5>
                                                Learn Photoshop - UI/UX Design Essential Training
                                            </h5>
                                        </a>

                                        <div class="ed-course__rattings">
                                            <ul>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><span>(08 Reviews)</span></li>
                                            </ul>
                                        </div>

                                        <div class="ed-course__bottom">
                                            <span class="ed-course__price">$273.00</span>
                                            <div class="ed-course__students">
                                                <i class="fi fi-rr-graduation-cap"></i>
                                                <p>832 Students</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <!-- <div class="row">
                            <div class="col-12">
                                <div class="ed-pagination">
                                    <ul class="ed-pagination__list">
                                        <li class="active">
                                            <a href="#">01</a>
                                        </li>
                                        <li>
                                            <a href="#">02</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fi-rr-arrow-small-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <div class="pagination_controls mt-4 text-center"></div>
                        <!-- pros load pagination here -->

                    </div>
                </section>
                <!-- End Course Area -->

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
                                                Affordable Your Online Courses <br /> & Learning Opportunities
                                            </h3>
                                            <p class="ed-section-head__text">
                                                Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit. Excepteur sint occaecat.
                                            </p>
                                        </div>
                                        <div class="ed-call-action__content-btn">
                                            <a href="../courses/" class="ed-btn"> Start Learning Today<i class="fi fi-rr-arrow-small-right"></i> </a>
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
        $(document).ready(function() {
           $('#menu-query').load('../includes/menu-others.php', function() {
                // This runs AFTER the menu is fully loaded into the DOM
                $('.course_menu').addClass('active');
                 $.getScript('../controller/js/cart.js');
            });

            // $('#footer').load('../includes/footer-others.php');
        });
    </script>

    <!-- API JS BY PROS HERE -->
    <script src="../controller/js/courses.js"></script>
</body>

</html>