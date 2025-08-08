<!-- Start Mobile Menu Offcanvas -->
 <input type="hidden" id="gen_url" value="<?php echo BASE_URL; ?>">
<div class="modal mobile-menu-modal offcanvas-modal fade" id="offcanvas-modal">
    <div class="modal-dialog offcanvas-dialog">
        <div class="modal-content">
            <div class="modal-header offcanvas-header">
                <!-- Mobile Menu Logo -->
                <div class="offcanvas-logo">
                    <a href="#"><img src="./assets/images/logo.svg" alt="#" /></a>
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
                            <a class="offcanvas__menu_item" href="courses/">Courses</a>
                        </li>

                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="about/">About Us</a>
                        </li>

                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="contact/">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Mobile Menu Offcanvas -->

<!-- Start Header Area -->
<header class="ed-header ed-header--style2 ed-header--style3">
    <div class="container ed-container-expand">
        <div class="ed-header__inner">
            <div class="row align-items-center">
                <div class="col-lg-8 col-6">
                    <div class="ed-header__left--style2">
                        <div class="ed-header__left-widget--style2">
                            <!-- Logo  -->
                            <div class="ed-topbar__logo">
                                <a href="#">
                                    <img src="assets/images/white-logo.svg" alt="white-logo" />
                                </a>
                            </div>
                        </div>

                        <!-- Navigation Menu -->
                        <nav class="ed-header__navigation">
                            <ul class="ed-header__menu">
                                <li>
                                    <a href="courses/">Courses</a>
                                </li>
                                <li>
                                    <a href="about/">About Us</a>
                                </li>
                                <li>
                                    <a href="contact/">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <!-- Header Right -->
                    <div class="ed-header__right">
                        <ul class="ed-topbar__info-social">
                            <li>
                                <a href="<?php echo  $facebook; ?>" target="_blank"><img src="assets/images/icons/icon-white-facebook.svg" alt="icon-white-facebook" /></a>
                            </li>
                            <li>
                                <a href="<?php echo $twitter ; ?>" target="_blank"><img src="assets/images/icons/icon-white-twitter.svg" alt="icon-white-twitter" /></a>
                            </li>
                            <li>
                                <a href="<?php echo  $instagram ; ?>" target="_blank"><img src="assets/images/icons/icon-white-instagram.svg" alt="icon-white-instagram" /></a>
                            </li>
                        </ul>

                        <div class="ed-header__action">
                            <div class="ed-header__cart">
                                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#edSidebarCart" aria-controls="offcanvasRight" class="ed-topbar__action-icon">
                                    <img src="assets/images/icons/icon-white-bag.svg" alt="icon-white-bag" />
                                    <span class="pros_total_item_cart"></span>
                                </button>
                            </div>
                            <div class="ed-topbar__info-buttons">
                                <!-- Register Button -->
                                <button type="button" class="register-btn" onclick="window.location.href='./sign-up/'">
                                    Register
                                </button>

                                <!-- Login Button -->
                                <button type="button" class="login-btn" onclick="window.location.href='./sign-in/'">
                                    Log In
                                </button>

                            </div>
                        </div>

                        <!-- Mobile Menu Button -->
                        <!--   -->
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
    </div>
</header>
<!-- End Header Area -->


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
                    <a href="./courses/" 
                       style="color: #dc2626;
                     text-decoration: underline;
                      background: none; border: none; cursor: pointer;">
                      Continue purchasing</a>
                </p>
            </div>

        </div>

        <div class="ed-sidebar-footer">
            <div class="ed-sidebar-cart-subtotal">
               <p>Subtotal:<span id="cart-subtotal"> $0</span></p>
               <a href="checkout.html" class="ed-sidebar-cart-btn">Checkout</a>
            </div>
        </div>
    </div>
    <!-- End Sidebar Cart -->
