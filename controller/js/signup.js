 function loginWithGoogle() {
     google.accounts.id.initialize({
         client_id: '37486930374-ehv8gsbnubp9f8bsck6a42bgafvmeuh0.apps.googleusercontent.com',
         callback: handleGoogleSignIn,
         ux_mode: 'popup',
         login_uri: '', // optional if you want redirection
         prompt_parent_id: 'google-login', // optional
         auto_select: false,
         prompt: 'select_account'
     });

     google.accounts.id.prompt((notification) => {
         if (notification.isNotDisplayed()) {
             console.log('Prompt not displayed:', notification.getNotDisplayedReason());
         }
         if (notification.isSkippedMoment()) {
             console.log('Prompt skipped:', notification.getSkippedReason());
         }
     });
 }



 function handleGoogleSignIn(response) {
     const token = response.credential;
     const userInfo = parseJwt(token);
     //  console.log('User:', userInfo);
     //  alert(`Hello, ${userInfo.name}`);

     // Send user data to server via jQuery AJAX
     $.ajax({
         url: '../api/auth/signup_google.php',
         type: 'POST',
         dataType: 'json',
         contentType: 'application/json',
         data: JSON.stringify({
             name: userInfo.name,
             email: userInfo.email,
             token: token,
             social_id: userInfo.sub
         }),
         success: function(res) {
             if (res.status === 'success') {

                 Swal.fire({
                     icon: 'success',
                     title: 'Logged in!',
                     text: res.message,
                     timer: 1500,
                     showConfirmButton: false
                 }).then(() => {
                     window.location.href = '../user/';
                 });

             } else if (res.status === 'exists') {
                 Swal.fire({
                     title: 'User Already Exists',
                     text: 'This email is already registered.',
                     icon: 'info',
                     confirmButtonText: 'Login Instead'
                 });
             } else {
                 Swal.fire({
                     title: 'Error',
                     text: res.message,
                     icon: 'error',
                     confirmButtonText: 'Try Again'
                 });
             }
         },
         error: function(xhr, status, error) {
             console.error('AJAX error:', error);
             //  alert('An error occurred during signup.');
         }
     });
 }



 function parseJwt(token) {
     const base64Url = token.split('.')[1];
     const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
     const jsonPayload = decodeURIComponent(atob(base64).split('').map(c =>
         '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2)
     ).join(''));
     return JSON.parse(jsonPayload);
 }



 $('#signupForm').on('submit', function(e) {
     e.preventDefault();

     const fullName = $('input[name="full_name"]').val().trim();
     const email = $('input[name="email"]').val().trim();

     if (!fullName || !email) {
         Swal.fire('Oops', 'Please fill in all fields', 'warning');
         return;
     }

     $('#pros_sign_upbtn').html('<i class="fas fa-spinner fa-spin"></i> processing...').attr('disabled', true);

     $.ajax({
         url: '../api/auth/signup.php',
         type: 'POST',
         data: {
             full_name: fullName,
             email: email,
             type: 'signup'

         },
         success: function(response) {
             console.log(response);
             if (response.status === 'success') {
                 Swal.fire('Success', response.message, 'success');
                 localStorage.setItem('verifyingEmail', response.email);
                 localStorage.setItem('otpExpiresAt', response.expires_at); // Save expiry
                 localStorage.setItem('otpType', 'signup'); // Save expiry
                 setTimeout(() => window.location.href = '../email-verification/', 2000);
             } else {
                 Swal.fire('Info', response.message, response.status === 'exists' ? 'info' : 'error');
             }

         },
         error: function(xhr, status, error) {

             console.log("XHR:", xhr);
             console.log("Status:", status);
             console.log("Error:", error);
             Swal.fire('Error', 'Something went wrong. Try again later.', 'error');
         },
         complete: function() {
             $('#pros_sign_upbtn').html('<i class="mdi mdi-email"></i> Continue with email').attr('disabled', false);
         }
     });
 });