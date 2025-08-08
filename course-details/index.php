
 <?php 
 
    include('../controller/config/config.php');

     $id = $_GET['id'];

    
   // Fetch paginated courses
        $sql_data = "
            SELECT 
                c.course_id,
                c.course_title,
                c.course_subtitle,
                c.course_description,
                c.course_image,
                c.course_price,
                c.course_tags,
                c.promotional_video,
                c.course_rating,
                c.course_tot_students,
                c.category_id,
                cat.category,
                c.subcategory_id,
                sub.subcategory,
                c.course_status,
                c.course_clicks,
                c.course_purchases,
                c.date,
                curr.symbol AS currency_symbol,
                u.full_name AS instructor_name,
                l.language
            FROM courses c
            LEFT JOIN category cat ON c.category_id = cat.id
            LEFT JOIN subcategory sub ON c.subcategory_id = sub.id
            LEFT JOIN currency curr ON c.currency_id = curr.currency_id
            LEFT JOIN users_tbl u ON c.user_id = u.user_id
            LEFT JOIN languages l ON c.language_id = l.id
            WHERE c.course_id = '$id'
        ";

        $result = mysqli_query($conn, $sql_data);
        $row = mysqli_fetch_assoc($result);

        parse_str(parse_url($row['promotional_video'], PHP_URL_QUERY), $query_params);
        $video_id = $query_params['v'] ?? '';

        $embed_url = "https://www.youtube.com/embed/" . $video_id;


        $sql_module = "SELECT modules_id, course_id, module_name, video_link, text_content, file_attached, module_position, date 
        FROM modules 
        WHERE course_id = $id";

        $resultmodule = mysqli_query($conn, $sql_module);

         $countryCode = 'NG'; 


          $countryCode = mysqli_real_escape_string($conn, $countryCode);

        $currencySql = "
        SELECT 
            co.id AS country_id,
            co.name AS country_name,
            co.iso,
            co.iso3,
        
            co.currency_name,
            cu.currency_id,
            cu.code,
            cu.currecy,
            cu.symbol,
            r.rate
            
        FROM countries co
        LEFT JOIN currency cu 
            ON co.currency = cu.code
        LEFT JOIN rates r 
            ON cu.currency_id = r.currency_id
        WHERE co.iso = '$countryCode'
    ";




    $currencyResult = mysqli_query($conn, $currencySql);

    if ($currencyResult && mysqli_num_rows($currencyResult) > 0) {
        $currencyData = mysqli_fetch_assoc($currencyResult);
        $userCurrencySymbol = $currencyData['symbol'] ?? '$';
        $userCurrencyRate   = $currencyData['rate'] ?? 1; // default 1 if not found
    } else {
        // Fallback if no match found
        $userCurrencySymbol = '$';
        $userCurrencyRate   = 1;
    }


    $convertedPrice = round($row['course_price'] * $userCurrencyRate, 2);
        $row['course_price'] = $convertedPrice;
       $row['currency_symbol'] = $userCurrencySymbol;



 
 ?> 




<!DOCTYPE html>
<html class="no-js" lang="ZXX">
    <head>
        <!-- Meta Basics -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />

        <!-- SEO Meta -->
        <title><?php echo $row['course_title'];?> | Coursearly - Learn Online</title>
        <meta name="description" content="<?php echo $row['course_title'];?>" />
        <meta name="keywords" content="<?php echo $row['course_title'];?>, online courses, Coursearly, e-learning, learn {{COURSE_TITLE}}" />
        <meta name="author" content="Coursearly Team" />
        <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta name="googlebot" content="index, follow" />

        <!-- Canonical URL -->
        <link rel="canonical" href="https://coursearly.com/courses/<?php echo $row['course_title'];?>" />

        <!-- Open Graph (Facebook, LinkedIn) -->
        <meta property="og:title" content="<?php echo $row['course_title'];?> | Coursearly" />
        <meta property="og:description" content="<?php echo $row['course_description'];?>" />
        <meta property="og:image" content="https://coursearly.com/assets/images/courses/<?php echo $row['course_image'];?>" />
        <meta property="og:url" content="https://coursearly.com/courses/<?php echo $row['course_title'];?>" />
        <meta property="og:type" content="article" />
        <meta property="og:site_name" content="Coursearly" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $row['course_title'];?> | Coursearly" />
        <meta name="twitter:description" content="<?php echo $row['course_description'];?>" />
        <meta name="twitter:image" content="https://coursearly.com/assets/images/courses/<?php echo $row['course_image'];?>" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/svg+xml" />

        
         <!-- Structured Data (JSON-LD) -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Course",
                "name": "<?= htmlspecialchars($row['course_title']) ?>",
                "description": "<?= htmlspecialchars($row['course_description']) ?>",
                "provider": {
                    "@type": "Organization",
                    "name": "Coursearly",
                    "sameAs": "https://coursearly.com"
                },
                "url": "https://coursearly.com/course/<?= $row['course_title'] ?>",
                "image": "https://coursearly.com/assets/images/courses/<?= $row['course_image'] ?>"
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


        <script>


            // fetch('https://ipapi.co/json/')
            // .then(response => response.json())
            // .then(location => {
            //     const userCountry = location.country; // e.g., 'NG', 'US', 'GH'

               
            // })
            // .catch(error => {
            //     console.error('Error fetching location:', error);
            // });



        </script>



       
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
                                            <h3 class="ed-breadcrumbs__title">Course Details</h3>
                                            <ul class="ed-breadcrumbs__menu">
                                                <li class="active"><a href="../">Home</a></li>
                                                <li>/</li>
                                                <li>Course Details</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End Bredcrumbs Area -->
                    </div>

                    <!-- Start Course Details Area -->
                    <section class="ed-course__details">
                        <div class="container ed-container">
                            <div class="row">
                                <div class="col-lg-8 col-12">
                                    <!-- Course Details Content -->
                                    <div class="ed-course__details-content">
                                        <!-- Course Details Image -->
                                        <div class="ed-course__details-img">
                                            <img src="../assets/images/course/<?php echo $row['course_image'];?>" alt="course-details-img-1" />
                                        </div>
                                        <h3>
                                            <?php echo $row['course_title'];?>
                                        </h3>

                                        <p>
                                           <?php echo $row['course_description'];?>
                                        </p>
                                        <br />

                                        <!-- <p>
                                            Lorem ipsum dolor sit amet consectur adipisicing elit, sed do eiusmod tempor inc idid unt ut labore et dolore magna aliqua enim ad minim veniam, quis nostrud exerec tation ullamco laboris nis
                                            aliquip commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur enim ipsam.
                                        </p> -->

                                        <!-- Course Details Content List -->
                                        <div class="ed-course__details-list">
                                            <h5>What You’ll Learn?</h5>
                                            <ul>

                                                <?php
                                                    if ( $resultmodule && mysqli_num_rows( $resultmodule) > 0) {
                                                        while ($row_module = mysqli_fetch_assoc( $resultmodule)) {
                                                            // $row is each individual module
                                                            echo '<li><img src="../assets/images/icons/icon-check-blue.svg" alt="icon-check-blue" />
                                                              '.$row_module['module_name'].'</li>';
                                                            // echo "Module Name: " . $row['module_name'] . "<br>";
                                                        }
                                                    } 
                                                ?>      
                                                <!-- <li><img src="../assets/images/icons/icon-check-blue.svg" alt="icon-check-blue" />Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis</li>
                                                <li><img src="../assets/images/icons/icon-check-blue.svg" alt="icon-check-blue" />Neque sodales ut etiam sit amet nisl purus non tellus orci ac auctor</li>
                                                <li><img src="../assets/images/icons/icon-check-blue.svg" alt="icon-check-blue" />Tristique nulla aliquet enim tortor at auctor urna. Sit amet aliquam id diam maer</li> -->
                                                <!-- <li><img src="../assets/images/icons/icon-check-blue.svg" alt="icon-check-blue" />Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis</li> -->
                                            </ul>
                                        </div>

                                        <!-- Course Details Image Two -->
                                        <div class="ed-course__details-img image-2">

                                              <iframe width="560" height="315"
                                                src="<?php echo   $embed_url;?>"
                                                title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                            <!-- <img src="../assets/images/course/course-details/details-img-2.png" alt="course-details-img-2" /> -->
                                        </div>

                                        <!-- Course Details Content List -->
                                        <!-- <div class="ed-course__details-list">
                                            <h5>Why choose you this course?</h5>
                                            <ul>
                                                <li><img src="../assets/images/icons/icon-check-blue.svg" alt="icon-check-blue" />Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis</li>
                                                <li><img src="../assets/images/icons/icon-check-blue.svg" alt="icon-check-blue" />Neque sodales ut etiam sit amet nisl purus non tellus orci ac auctor</li>
                                                <li><img src="../assets/images/icons/icon-check-blue.svg" alt="icon-check-blue" />Tristique nulla aliquet enim tortor at auctor urna. Sit amet aliquam id diam maer</li>
                                                <li><img src="../assets/images/icons/icon-check-blue.svg" alt="icon-check-blue" />Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis</li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <!-- Course Details Sidebar -->
                                    <div class="ed-course__sidebar">
                                        <div class="ed-course__sidebar-widget">
                                            <h4 class="ed-course__sidebar-title">
                                                Course Information:
                                            </h4>
                                            <ul>
                                                <li>Price: <span class="price"><?php echo $row['currency_symbol'] . ' ' . number_format($row['course_price']); ?></span></li>
                                                <li>Instructor: <span>  <?php echo $row['instructor_name'];?></span></li>
                                                <!-- <li>Certifications: <span>Yes</span></li> -->
                                                <li>Lessons: <span><?php echo mysqli_num_rows( $resultmodule); ?></span></li>
                                                <!-- <li>Duration: <span>15 weeks</span></li> -->
                                                <li>Language: <span><?php echo $row['language'];?></span></li>
                                                <li>Students: <span><?php echo $row['course_tot_students'];?></span></li>
                                            </ul>
                                            <div style="text-align: center; margin-top: 15px;">
                                                <button type="submit" 
                                                
                                                class="ed-btn add-to-cart-btn"
                                                data-id="<?php echo $row['course_id']; ?>"
                                                data-title="<?php echo htmlspecialchars($row['course_title']); ?>"
                                                data-price="<?php echo $row['course_price']; ?>"
                                                data-image="<?php echo $row['course_image']; ?>"
                                                data-symbol="<?php echo $row['currency_symbol']; ?>"
                                                
                                                >

                                                
                                                Purchase Course<i class="fi fi-rr-shopping-cart"></i></button>
                                            </div>
                                        </div>


                                        <div class="ed-course__sidebar-widget">
                                            <h4 class="ed-course__sidebar-title">Contact Us</h4>
                                            <!-- Sigle Info  -->
                                            <div class="ed-contact__info-item">
                                                <div class="ed-contact__info-icon">
                                                    <img src="../assets/images/icons/icon-phone-blue.svg" alt="icon-phone-blue" />
                                                </div>
                                                <div class="ed-contact__info-content">
                                                    <span>24/7 Support</span>
                                                    <a href="tel:<?php echo $phone1; ?>"><?php echo $phone1; ?></a>
                                                </div>
                                            </div>
                                            <!-- Sigle Info  -->
                                            <div class="ed-contact__info-item">
                                                <div class="ed-contact__info-icon">
                                                    <img src="../assets/images/icons/icon-envelope-blue.svg" alt="icon-envelope-blue" />
                                                </div>
                                                <div class="ed-contact__info-content">
                                                    <span>Send Message</span>
                                                    <a href="mailto:<?php echo $email1; ?>"><?php echo $email1; ?></a>
                                                </div>
                                            </div>

                                            <!-- Sigle Info  -->
                                            <div class="ed-contact__info-item">
                                                <div class="ed-contact__info-icon">
                                                    <img src="../assets/images/icons/icon-location-blue.svg" alt="icon-location-blue" />
                                                </div>
                                                <div class="ed-contact__info-content">
                                                    <span>Our Location</span>
                                                    <a href="#"><?php echo $location1; ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Course Details Area -->

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
                                                    Affordable Your Online Courses <br />
                                                    & Learning Opportunities
                                                </h3>
                                                <p class="ed-section-head__text">
                                                    Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit. Excepteur sint occaecat.
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
            // Load menu dynamically
            $('#menu-query').load('../includes/menu-others.php', function () {
                // Run cart logic after menu is loaded (in case it contains cart trigger/button)
               $.getScript('../controller/js/cart.js');
            });
        });
        </script>




    </body>
</html>