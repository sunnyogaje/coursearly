<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Basics -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />

    <!-- Title & Description -->
    <title>Sign In | Coursearly</title>
    <meta name="description" content="Sign in to your Coursearly account to access your courses, track your progress, and manage your settings securely." />

    <!-- Prevent Indexing -->
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/svg+xml" />

    <!-- CSS Files -->
    <link href="../assets/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(../assets/assets/images/background/login-register.png);">
        <div class="login-box card">
            <div class="card-body m-t-20">
                <form class="form-horizontal form-material" style="padding: 10px;" id="loginform">
                    <div class="offcanvas-logo">
                        <a href="../"><img src="../assets/images/logo.svg" width="220" alt="#" /></a>
                    </div>
                    <h3 class="box-title m-t-40 m-b-0">Sign In</h3>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" name="email" required="" placeholder="Email">
                        </div>
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button type="submit" id="pros_sign_upbtn"   class="btn btn-info btn-md btn-lg btn-block waves-effect waves-light" style="background-color: #009f91;border:none;">
                                <i class="mdi mdi-email"></i> Continue with email</button>
                        </div>
                    </div>
                    <div style="text-align: center; padding: 20px; width: 400px;">

                        <div style="display: flex; align-items: center; margin-bottom: 30px; color: #666;">
                            <div style="flex: 1; height: 1px; background: #ccc; margin-right: 10px;"></div>
                                <small>Other sign in options</small>
                            <div style="flex: 1; height: 1px; background: #ccc; margin-left: 10px;"></div>
                        </div>
                        <div style="display: flex; justify-content: space-around; margin-bottom: 30px;">
                            
                           <a  onclick="loginWithGoogle()" style="border: 1px solid #009f91; border-radius: 10px; padding: 5px 10px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google logo" style="width: 25px; height: 25px;">
                            </a>
                            <!-- <a href="#" style="border: 1px solid #009f91; border-radius: 10px; padding: 5px 10px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png" alt="Facebook" style="width: 25px; height: 25px;">
                            </a> -->
                            <!-- <a href="#" style="border: 1px solid #009f91; border-radius: 10px; padding: 5px 10px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple" style="width: 25px; height: auto;">
                            </a> -->
                        </div>

                        <div style="background: #f3f3fa; padding: 15px; font-size: 14px; color: #444;">
                            Don't have an account?
                            <a href="../sign-up/" style="color: #009f91; font-weight: bold; text-decoration: underline;">Sign Up</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="../controller/js/signin.js"></script>

</body>

</html>