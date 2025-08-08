
 <?php include('../controller/config/config.php'); ?>
 <input type="hidden" id="gen_url" value="<?php echo BASE_URL; ?>">
<!-- Start Mobile Menu Offcanvas -->
<div class="modal mobile-menu-modal offcanvas-modal fade" id="offcanvas-modal">
    <div class="modal-dialog offcanvas-dialog">
        <div class="modal-content">
            <div class="modal-header offcanvas-header">
                <!-- Mobile Menu Logo -->
                <div class="offcanvas-logo">
                    <a href="../"><img src="../assets/images/logo.svg" alt="#" /></a>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fi fi-ss-cross"></i>
                </button>
            </div>
            <div class="mobile-menu-modal-main-body">
                <!-- Mobile Menu Navigation -->
                <nav class="offcanvas__menu">
                    <ul class="offcanvas__menu_ul">
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item course_menu" href="../courses/">Courses</a>
                        </li>

                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item about_menu" href="../about/">About Us</a>
                        </li>

                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item contact_menu" href="../contact/">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Mobile Menu Offcanvas -->

<!-- Start Topbar Area  -->
<div class="ed-topbar">
    <div class="container ed-container-expand">
        <div class="ed-topbar__inner">
            <!-- Logo  -->
            <div class="ed-topbar__logo">
                <a href="../">
                    <img src="../assets/images/logo.svg" alt="logo" />
                </a>
            </div>

            <!-- Category Dropdown -->
            <div class="ed-topbar__search-widget">
                <div class="ed-topbar__category">
                    <select class="pros_header_category" style="outline: none; box-shadow: none;" onfocus="this.style.borderColor='transparent'">
                        <!-- <option data-display="All Categories">All Categories</option>
                        <option value="1">Business</option>
                        <option value="2">Marketing</option>
                        <option value="3">Design</option>
                        <option value="4">Finance</option>
                        <option value="5">Lifestyle</option>
                        <option value="6">Development</option>
                        <option value="7">Photography</option> -->
                    </select>
                </div>

                <div class="ed-topbar__search">
                    <form id="topSearchForm">
                        <input type="search" id="headerSearchInput" name="search" placeholder="Search your courses..." required />
                        <button type="submit">Search<i class="fi-rr-search"></i></button>
                    </form>
                </div>
            </div>

            <!-- Topbar Info -->
            <div class="ed-topbar__info">
                <!-- Topbar Social -->
                <ul class="ed-topbar__info-social">
                    <li>
                        <a href="<?php echo  $facebook; ?>" target="_blank"><img src="../assets/images/icons/icon-dark-facebook.svg" alt="icon-dark-facebook" /></a>
                    </li>
                    <li>
                        <a href="<?php echo $twitter ; ?>" target="_blank"><img src="../assets/images/icons/icon-dark-twitter.svg" alt="icon-dark-twitter" /></a>
                    </li>
                    <li>
                        <a href="<?php echo  $instagram ; ?>" target="_blank"><img src="../assets/images/icons/icon-dark-instagram.svg" alt="icon-dark-instagram" /></a>
                    </li>
                </ul>
                <!-- Topbar Button -->
                <div class="ed-topbar__info-buttons">
                    <button type="button" class="register-btn" onclick="window.location.href='../sign-up/'">
                        Register
                    </button>
                    <button type="button" class="login-btn" onclick="window.location.href='../sign-in/'">
                        Log In
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <button type="button" class="mobile-menu-offcanvas-toggler" data-bs-toggle="modal" data-bs-target="#offcanvas-modal">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
                <!-- End Mobile Menu Button -->
            </div>
        </div>
    </div>
</div>
<!-- End Topbar Area -->

<!-- Start Header Area -->
<header class="ed-header">
    <div class="container ed-container-expand">
        <div class="ed-header__inner">
            <div class="row align-items-center">
                <div class="col-lg-7 col-12">
                    <!-- Navigation Menu -->
                    <nav class="ed-header__navigation">
                        <ul class="ed-header__menu">
                            <li class="course_menu">
                                <a href="../courses/">Courses</a>
                            </li>
                            <li class="about_menu">
                                <a href="../about/">About Us</a>
                            </li>
                            <li class="contact_menu">
                                <a href="../contact/">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-5 col-12">
                    <!-- Header Right -->
                    <div class="ed-header__right">
                        <ul class="ed-header__contact">
                            <li><a href="tel:<?php echo  $phone1 ; ?>"><?php echo  $phone1 ; ?></a></li>
                            <li>
                                <a href="mailto:<?php echo   $email1 ; ?>"><?php echo   $email1 ; ?></a>
                            </li>
                        </ul>

                        <div class="ed-header__action">
                            <div class="ed-header__cart">
                                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#edSidebarCart" aria-controls="offcanvasRight" class="ed-topbar__action-icon">
                                    <img src="../assets/images/icons/icon-grey-bag.svg" alt="icon-grey-bag" />
                                    <span class="pros_total_item_cart">0</span>
                                </button>
                            </div>
                            <div class="ed-header__menu">
                                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#edSidebar" aria-controls="offcanvasRight">
                                    <img src="../assets/images/icons/icon-grey-menu-3-line.svg" alt="icon-grey-menu-3-line" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Area -->


   <!-- Start Login Modal -->
    <div class="modal fade ed-auth__modal" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="ed-auth__modal-content modal-content">
                <button type="button" class="ed-auth__modal-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fi-rr-cross"></i>
                    </button>

                <!-- Auth Head  -->
                <div class="ed-auth__modal-head">
                    <a href="index.html" class="ed-auth__modal-logo">
                        <img src="../assets/images/logo.svg" alt="logo" />
                    </a>
                    <h3 class="ed-auth__modal-title">Sign In Now</h3>
                    <p class="ed-auth__modal-text">
                        Didn’t Create an account?
                        <button type="button" data-bs-toggle="modal" data-bs-target="#registerModal">
                                Sign Up
                            </button>
                    </p>
                </div>

                <!-- Auth Body  -->
                <div class="ed-auth__modal-body">
                    <form action="#" method="post" class="ed-auth__modal-form">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Enter user name" required />
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" placeholder="Enter password" required />
                        </div>

                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                    Remember me
                                </label>
                        </div>
                        <div class="ed-auth__form-btn">
                            <button type="submit" class="ed-btn">Sign In<i class="fi fi-rr-arrow-small-right"></i></button>
                        </div>
                    </form>
                </div>
                <!-- Auth Footer  -->
                <div class="ed-auth__modal-footer">
                    <div class="ed-auth__modal-third-party">
                        <p>Or Sign In with</p>
                        <ul class="ed-auth__modal-third-party-list">
                            <li>
                                <a class="google-login" href="https://www.google.com/"><img src="../assets/images/icons/icon-color-google.svg" alt="icon-color-google" /></a>
                            </li>

                            <li>
                                <a class="facebook-login" href="https://facebook.com/"><img src="../assets/images/icons/icon-color-facebook.svg" alt="icon-color-facebook" /></a>
                            </li>
                            <li>
                                <a class="linkedin-login" href="https://www.linkedin.com/"><img src="../assets/images/icons/icon-color-linkedin.svg" alt="icon-color-linkedin" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Modal -->

    <!-- Start Register Modal -->
    <div class="modal fade ed-auth__modal" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="ed-auth__modal-content modal-content">
                <button type="button" class="ed-auth__modal-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fi-rr-cross"></i>
                    </button>

                <!-- Auth Head  -->
                <div class="ed-auth__modal-head">
                    <a href="index.html" class="ed-auth__modal-logo">
                        <img src="../assets/images/logo.svg" alt="logo" />
                    </a>
                    <h3 class="ed-auth__modal-title">Sign Up Now</h3>
                    <p class="ed-auth__modal-text">
                        already have an account?
                        <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal">
                                Sign In
                            </button>
                    </p>
                </div>

                <!-- Auth Body  -->
                <div class="ed-auth__modal-body">
                    <form action="#" method="post" class="ed-auth__modal-form">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Enter name" required />
                        </div>

                        <div class="form-group">
                            <input type="text" name="user name" placeholder="Enter user name" required />
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter email" required />
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" placeholder="Enter password" required />
                        </div>

                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" />
                                    I agree with your <strong>Privacy Policy</strong>
                                </label>
                        </div>
                        <div class="ed-auth__form-btn">
                            <button type="submit" class="ed-btn">Register Now<i class="fi fi-rr-arrow-small-right"></i></button>
                        </div>
                    </form>
                </div>
                <!-- Auth Footer  -->
                <div class="ed-auth__modal-footer">
                    <div class="ed-auth__modal-third-party">
                        <p>Or Sign Up with</p>
                        <ul class="ed-auth__modal-third-party-list">
                            <li>
                                <a class="google-login" href="https://www.google.com/"><img src="../assets/images/icons/icon-color-google.svg" alt="icon-color-google" /></a>
                            </li>

                            <li>
                                <a class="facebook-login" href="https://facebook.com/"><img src="../assets/images/icons/icon-color-facebook.svg" alt="icon-color-facebook" /></a>
                            </li>
                            <li>
                                <a class="linkedin-login" href="https://www.linkedin.com/"><img src="../assets/images/icons/icon-color-linkedin.svg" alt="icon-color-linkedin" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Register Modal -->

    <!-- Start Sidebar Cart -->
    <div class="offcanvas offcanvas-end ed-sidebar ed-sidebar-cart" tabindex="-1" id="edSidebarCart" aria-labelledby="offcanvasRightLabel">
        <div class="ed-sidebar-header">
            <h3 class="ed-sidebar-header-title">Add to cart</h3>
            <button type="button" class="text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fi fi-rr-cross"></i>
                </button>
        </div>
        <div class="ed-sidebar-body" id="cart-items-container">
           <div id="empty-cart-message" style="display: none; text-align: center; padding: 40px 20px; color: #6b7280;">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="margin-bottom: 20px; color: #facc15;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m13-9l2 9m-5-9V6a2 2 0 10-4 0v3" />
                </svg>
                <p style="font-size: 18px;">
                    Your cart is empty.<br>
                    <a href="../courses/" 
                       style="color: #dc2626;
                     text-decoration: underline;
                      background: none; border: none; cursor: pointer;">
                      Continue purchasing</a>
                </p>
            </div>

        </div>

        <div class="ed-sidebar-footer">
            <div class="ed-sidebar-cart-subtotal">
               <p>Subtotal:<span id="cart-subtotal"> 0</span></p>
               <a style="cursor:pointer;" class="ed-sidebar-cart-btn pros_checkout_btn">Checkout</a>
            </div>
        </div>
    </div>
    <!-- End Sidebar Cart -->

    <!-- Start Sidebar  -->
    <div class="offcanvas offcanvas-end ed-sidebar" tabindex="-1" id="edSidebar" aria-labelledby="offcanvasRightLabel">
        <div class="ed-sidebar-header">
            <a href="index-1.html" class="ed-sidebar-logo">
                <img src="../assets/images/logo.svg" alt="logo" />
            </a>
            <button type="button" class="text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fi fi-rr-cross"></i>
                </button>
        </div>
        <div class="ed-sidebar-body m-0">
            <!-- Single Widget  -->
            <div class="ed-sidebar-widget">
                <h3 class="ed-sidebar-widget-title">Contacts Us:</h3>
                <!-- Sigle Info  -->
                <div class="ed-contact__info-item">
                    <div class="ed-contact__info-icon">
                        <img src="../assets/images/icons/icon-phone-blue.svg" alt="icon-phone-blue" />
                    </div>
                    <div class="ed-contact__info-content">
                        <span>24/7 Support</span>
                        <a href="tel:<?php echo  $phone1; ?>"><?php echo  $phone1; ?></a>
                    </div>
                </div>
                <!-- Sigle Info  -->
                <div class="ed-contact__info-item">
                    <div class="ed-contact__info-icon">
                        <img src="../assets/images/icons/icon-envelope-blue.svg" alt="icon-envelope-blue" />
                    </div>
                    <div class="ed-contact__info-content">
                        <span>Send Message</span>
                        <a href="mailto:<?php echo  $email1; ?>"><?php echo  $email1; ?></a>
                    </div>
                </div>

                <!-- Sigle Info  -->
                <div class="ed-contact__info-item">
                    <div class="ed-contact__info-icon">
                        <img src="../assets/images/icons/icon-location-blue.svg" alt="icon-location-blue" />
                    </div>
                    <div class="ed-contact__info-content">
                        <span>Our Location</span>
                        <a href="#"><?php echo  $location1; ?></a>
                    </div>
                </div>
            </div>

            <!-- Single Widget  -->
            <div class="ed-sidebar-widget">
                <h3 class="ed-sidebar-widget-title">Follow Us:</h3>
                <ul class="ed-sidebar-social">
                    <li>
                        <a href="<?php echo  $facebook; ?>" target="_blank"><img src="../assets/images/icons/icon-dark-facebook.svg" alt="icon-dark-facebook" /></a>
                    </li>
                    <li>
                        <a href="<?php echo  $twitter; ?>" target="_blank"><img src="../assets/images/icons/icon-dark-twitter.svg" alt="icon-dark-twitter" /></a>
                    </li>
                    <!-- <li>
                        <a href="https://www.dribbble.com/" target="_blank"><img src="../assets/images/icons/icon-dark-dribbble.svg" alt="icon-dark-dribbble" /></a>
                    </li> -->
                    <li>
                        <a href="<?php echo  $instagram; ?>" target="_blank"><img src="../assets/images/icons/icon-dark-instagram.svg" alt="icon-dark-instagram" /></a>
                    </li>
                </ul>
            </div>

            <!-- Single Widget  -->
            <div class="ed-sidebar-widget">
                <h3 class="ed-sidebar-widget-title">Subscribe Now:</h3>
                <form action="#" method="post" class="ed-sidebar-subscribe">
                    <input type="email" name="email-address" placeholder="Enter email" required />
                    <button type="submit" class="ed-btn">Subscribe<i class="fi fi-rr-arrow-small-right"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Sidebar  -->


<script>
    $(document).ready(function() {


        // PROS LOAD TOP THREE CATEGORY HERE
        function fetch_top_category(category_type) {
            $.ajax({
                url: '../api/category/top_category.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    category_type: category_type // Explicitly define key and value
                },
                success: function(data) {
                    let top_cate = '<option data-display="All Categories">All Categories</option>';

                    if (data.success && data.data) {
                        const categories = data.data;

                        categories.forEach(cat => {
                            top_cate += `
                            <option value="${cat.category_id}">${cat.category}</option>
                        `;
                            console.log(`Category: ${cat.category} (${cat.category_id}), Avg Rating: ${cat.avg_rating}`);
                        });
                    } else {
                        let errorMessage = data.error || 'Unknown error occurred.';
                        if (data.details) {
                            errorMessage += `\nDetails: ${data.details}`;
                        }
                        console.error(errorMessage);
                    }

                    $('.pros_header_category').html(top_cate);
                     const selectedCategoryId = localStorage.getItem('selectedCategoryId');

                    if (selectedCategoryId) {
                        $('.pros_header_category').val(selectedCategoryId);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("AJAX Error:", textStatus, errorThrown);
                }
            });
        }

        fetch_top_category('all');
    });
    // PROS LOAD TOP THREE CATEGORY HERE
</script>