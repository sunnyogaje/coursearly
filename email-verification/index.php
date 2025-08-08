<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Basics -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />

    <!-- Title -->
    <title>Sign In Verification | Coursearly</title>
    <meta name="description" content="Login to your Coursearly account to access your courses, progress, and settings." />

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
                    <h3 class="box-title m-t-40 m-b-0">Check your inbox</h3>
                    <h6 class="box-title m-t-20 m-b-0">Enter the 6-digit code we sent to <b id="user-email">...</b> to verify.</h6>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" type="text"  id="otp-input"  required="" placeholder="6-digit-code">
                        </div>
                    </div>
                    
                    <!-- <div class="form-group text-center m-t-40">
                        <div class="col-xs-12 m-b-10">
                            <a href="../user/" class="btn btn-info btn-md btn-lg btn-block waves-effect waves-light" style="background-color: #009f91;border: none;">Sign In</a>
                        </div>
                        <span style="font-size: small;">Didn't receive the code? <b style="color:black;">Resend code in 5:00</b></span><br>
                        <span style="font-size: small; color: #009f91; font-weight: 500; text-decoration: underline;cursor: pointer;">Resend code</span>
                    </div>
                    <div style="text-align: center; padding: 20px; width: 400px;">

                        <div style="background: #f3f3fa; padding: 15px; font-size: 14px; color: #444;">
                            <a href="../sign-in/" style="color: #009f91; font-weight: bold; text-decoration: underline;">Sign in to a different account</a>
                        </div>

                    </div> -->


                    <!-- Sign In & Countdown -->
                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12 m-b-10">
                                <button  id="otp-form_btn" 
                                class="btn btn-info btn-md btn-lg btn-block waves-effect waves-light" 
                                style="background-color: #009f91;border: none;">Verify</button>
                            </div>
                            
                            <!-- Countdown message -->
                            <span style="font-size: small;" id="resend-countdown">
                                Didn't receive the code?
                                <b style="color:black;" id="countdown-text"></b>
                            </span><br>

                            <!-- Resend link -->
                            <span id="resend-btn" style="font-size: small; color: #009f91; font-weight: 500; text-decoration: underline; cursor: pointer; display: none;">
                                Resend code
                                
                            </span>
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


      <script>
    $(document).ready(function () {
        // Redirect if no verifying email
        const userEmail = localStorage.getItem('verifyingEmail');
        const otpExpiresAt = parseInt(localStorage.getItem('otpExpiresAt'), 10);
        const type = localStorage.getItem('otpType');

        if (!userEmail) {
            window.location.href = '../sign-in/';
            return;
        }

        // Show email on page
        $('#user-email').text(userEmail);

        // Countdown Timer Logic
        const countdownText = $('#countdown-text');
        const resendBtn = $('#resend-btn');
        const resendCountdown = $('#resend-countdown');

        function startCountdown() {
            const now = Math.floor(Date.now() / 1000);
            const remaining = otpExpiresAt - now;

            if (remaining <= 0) {
                resendCountdown.hide();
                resendBtn.show();
                return;
            }

            resendBtn.hide();
            resendCountdown.show();

            updateCountdown(remaining);
            window.otpCountdownInterval = setInterval(() => {
                const now = Math.floor(Date.now() / 1000);
                const left = otpExpiresAt - now;

                if (left <= 0) {
                    clearInterval(window.otpCountdownInterval);
                    resendCountdown.hide();
                    resendBtn.show();
                } else {
                    updateCountdown(left);
                }
            }, 1000);
        }

        function updateCountdown(secondsLeft) {
            const minutes = Math.floor(secondsLeft / 60);
            const seconds = secondsLeft % 60;
            countdownText.text(`Resend code in ${minutes}:${seconds.toString().padStart(2, '0')}`);
        }

        // Initialize Countdown
        if (otpExpiresAt) {
            startCountdown();
        }

        // Handle Resend OTP
        resendBtn.on('click', function () {
            resendBtn.html('<i class="fas fa-spinner fa-spin"></i> Sending...').attr('disabled', true);

            $.ajax({
                url: '../api/auth/resend-otp.php',
                type: 'POST',
                data: { email: userEmail,type:type },
                success: function (res) {
                    try {
                        const response = typeof res === 'string' ? JSON.parse(res) : res;
                        if (response.status === 'success') {
                            Swal.fire('Sent!', response.message, 'success');
                            const newExpiry = response.expires_at;
                            localStorage.setItem('otpExpiresAt', newExpiry);
                            clearInterval(window.otpCountdownInterval);
                            startCountdown();
                        } else {
                            Swal.fire('Error', response.message, 'error');
                        }
                    } catch {
                        Swal.fire('Error', 'Unexpected response from server.', 'error');
                    }
                },
                error: function () {
                    Swal.fire('Error', 'Could not resend OTP.', 'error');
                },
                complete: function () {
                    resendBtn.html('Resend code').attr('disabled', false);
                }
            });
        });

        // Handle OTP Verification
        $('#otp-form_btn').on('click', function (e) {
            e.preventDefault();

            const otp = $('#otp-input').val().trim();

            if (!otp) {
                Swal.fire('Error', 'Please enter the OTP.', 'error');
                return;
            }

            $('#otp-form_btn').html('<i class="fas fa-spinner fa-spin"></i> Verifying...').attr('disabled', true);

            $.ajax({
                url: '../api/auth/verify-otp.php',
                type: 'POST',
                data: {
                    email: userEmail,
                    otp: otp,
                    'type':type
                },
                success: function (res) {
                    try {
                        const response = typeof res === 'string' ? JSON.parse(res) : res;
                        if (response.status === 'success') {
                            Swal.fire('Verified!', response.message, 'success');
                            //Clear localStorage on success
                            localStorage.removeItem('verifyingEmail');
                            localStorage.removeItem('otpExpiresAt');
                            localStorage.removeItem('otpType');
                            
                            setTimeout(() => window.location.href = '../user/', 1500);
                        } else {
                            Swal.fire('Failed', response.message, 'error');
                        }
                    } catch {
                        Swal.fire('Error', 'Unexpected server response.', 'error');
                    }
                },
                error: function () {
                    Swal.fire('Error', 'Could not verify OTP.', 'error');
                },
                complete: function () {
                    $('#otp-form_btn').html('Verify').attr('disabled', false);
                }
            });
        });
    });
</script>

</body>

</html>