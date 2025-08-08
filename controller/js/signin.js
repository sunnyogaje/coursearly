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
         url: '../api/auth/signin_google.php',
         type: 'POST',
         dataType: 'json',
         data: {
             name: userInfo.name,
             email: userInfo.email,
             token: token,
             social_id: userInfo.sub,
             type: 'login'
         },
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
             } else {
                 Swal.fire({
                     icon: 'error',
                     title: 'Oops!',
                     text: res.message
                 });
             }
         },
         error: function(xhr, status, error) {
             console.error('AJAX error:', error);
             Swal.fire('Error', 'An error occurred during login.', 'error');
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



 $('#loginform').on('submit', function(e) {
     e.preventDefault();

     //  const fullName = $('input[name="full_name"]').val().trim();
     const email = $('input[name="email"]').val().trim();

     if (!email) {
         Swal.fire('Oops', 'Please fill in email field', 'warning');
         return;
     }

     $('#pros_sign_upbtn').html('<i class="fas fa-spinner fa-spin"></i> processing...').attr('disabled', true);

     $.ajax({
         url: '../api/auth/signin.php',
         type: 'POST',
         data: {
             //  full_name: fullName,
             email: email,
             type: 'login'
         },
         success: function(response) {
             console.log(response);
             if (response.status === 'success') {
                 Swal.fire('Success', response.message, 'success');
                 localStorage.setItem('verifyingEmail', response.email);
                 localStorage.setItem('otpExpiresAt', response.expires_at); // Save expiry
                 localStorage.setItem('otpType', 'login'); // Save expiry
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