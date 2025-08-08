 function loadDashboardSummary() {
     $.ajax({
         url: '../api/summary/sit_data.php',
         type: 'GET',
         dataType: 'json',
         success: function(res) {
             if (res.success && res.data) {

                 // alert(res.data.total_students);
                 $('.total_students').text(res.data.total_students);
                 // $('.total_courses').text(res.data.total_courses);
                 // $('.total_instructors').text(res.data.total_instructors);
                 // $('.average_rating').text(res.data.average_rating);

                 // Manually trigger counterUp again
                 $('.counter').each(function() {
                     $(this).prop('Counter', 0); // reset
                     $(this).counterUp({
                         delay: 10,
                         time: 1000
                     });
                 });
             } else {
                 console.warn('No summary data found');
             }
         },
         error: function(xhr, status, error) {
             console.error("Error loading summary:", error);
         }
     });
 }

 // Call the function on page load
 $(document).ready(function() {
     loadDashboardSummary();
 });