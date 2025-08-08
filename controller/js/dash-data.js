$(document).ready(function() {



    // PROS LOAD TOP THREE CATEGORY HERE
    function fetch_top_category(category_type) {
        $('.pros_top_category').html(`<div class="spinner-border m-5" role="status">
        <span class="visually-hidden">Loading...</span>
        </div>`);
        $.ajax({
            url: 'api/category/top_category.php',
            type: 'POST',
            dataType: 'json',
            data: {
                category_type: category_type // Explicitly define key and value
            },
            success: function(data) {
                let top_cate = '';

                if (data.success && data.data) {
                    const categories = data.data;

                    categories.forEach(cat => {
                        top_cate += `
                            <li>
                                <a class="pros_linkcategory_courses" data-id="${cat.category_id}" style="cursor:pointer;">${cat.category}</a>
                            </li>
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

                $('.pros_top_category').html(top_cate);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("AJAX Error:", textStatus, errorThrown);
            }
        });
    }

    fetch_top_category('top_three');
    // PROS LOAD TOP THREE CATEGORY HERE



    // PROS LOAD POPULAR CATEGORY HERE
    fetch_top_category_popular('top_ten')

    function fetch_top_category_popular(category_type) {
        $('.load_popular_category').html(`<div class="spinner-border m-5" role="status">
        <span class="visually-hidden">Loading...</span>
        </div>`);
        $.ajax({
            url: 'api/category/top_category.php',
            type: 'POST',
            dataType: 'json',
            data: {
                category_type: category_type // Explicitly define key and value
            },
            success: function(data) {
                let top_cateswipe = '';

                if (data.success && data.data) {
                    const categoriestop = data.data;

                    categoriestop.forEach(cat => {
                        top_cateswipe += `
                            <div class="swiper-slide">
                            <div class="ed-category__card ed-category__card--style2">
                                <div class="ed-category__img">
                                <img src="./assets/images/category/${cat.category_image}" style="width: 270px; height: 231px;" alt="category-img" />
                                </div>
                                <a href="course-1.html" class="ed-category__content">
                                <div class="ed-category__icon">
                                    <!-- Optional icon image if needed -->
                                    <!-- <img src="assets/images/category/category-1/1.svg" alt="icon" /> -->
                                </div>
                                <div class="ed-category__info">
                                    <h4>${cat.category}</h4>
                                    <p>${cat.total_courses} Courses</p>
                                </div>
                                </a>
                            </div>
                            </div>
                        `;
                    });
                } else {
                    let errorMessage = data.error || 'Unknown error occurred.';
                    if (data.details) {
                        errorMessage += `\nDetails: ${data.details}`;
                    }
                    console.error(errorMessage);
                }

                $('.load_popular_category').html(top_cateswipe);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("AJAX Error:", textStatus, errorThrown);
            }
        });
    }

    // PROS LOAD POPULAR CATEGORY HERE


    // pros_get_topcourses('topcourses');

    // STEP 1: Detect user country via IP
    $.get("https://ipapi.co/json/", function(location) {
        const userCountry = location.country; // e.g., 'NG', 'US', 'GH'

        $('.pros_top_courses').html(`<div class="spinner-border m-5" role="status">
        <span class="visually-hidden">Loading...</span>
        </div>`);

        // STEP 2: Call your course loader with country info
        pros_get_topcourses('topcourses', userCountry);
    });



});


function pros_get_topcourses(courses, userCountry) {



    $.ajax({
        url: 'api/courses/top_courses.php',
        type: 'POST',
        dataType: 'json',
        data: { courses: courses, userCountry: userCountry },
        success: function(data) {
            let top_course = '';
            const defaultImage = './assets/images/course/course-4/1.png';

            if (data.success && data.data) {
                const topCourses = data.data;

                topCourses.forEach(course => {
                    const courseImage = course.course_image && course.course_image.trim() !== '' ?
                        './assets/images/course/' + course.course_image :
                        defaultImage;


                    // alert(convertedPrice);
                    // const displaySymbol = currencyRates['USD'].symbol;
                    // alert(displaySymbol);

                    top_course += `
                        <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                            <div class="ed-course__card ed-course__card--style3 ed-course__card--style4 wow fadeInUp"
                                data-wow-delay=".7s" data-wow-duration="1s">
                                <div class="ed-course__cover">
                                    <a href="./course-details?id=${course.course_id}" class="ed-course__img">
                                        <img src="${courseImage}" alt="course-img" style="width: 100%; height: auto;" />
                                    </a>
                                </div>
                                <div class="ed-course__body">
                                    <div class="ed-course__rattings mg-btm-10">
                                        <ul>
                                            ${'<li><i class="icofont-star"></i></li>'.repeat(Math.floor(course.rating))}
                                            <li><span>(${course.rating} Rating)</span></li>
                                        </ul>
                                    </div>
                                    <a href="./course-details?id=${course.course_id}" class="ed-course__title">
                                        <h5>${course.title}</h5>
                                    </a>
                                    <div class="ed-course__lesson m-0">
                                        <div class="ed-course__part">
                                            <i class="fi-rr-book"></i>
                                            <p>${course.module_count} Lessons</p>
                                        </div>
                                        <div class="ed-course__students">
                                            <i class="fi fi-rr-graduation-cap"></i>
                                            <p>${course.total_students} Students</p>
                                        </div>
                                    </div>
                                    <div class="ed-course__bottom">
                                        <div class="ed-course__teacher">
                                            <img src="assets/images/course/course-3/course-instructor-thumb-6.jpg" alt="course-instructor-thumb" />
                                            <a href="#">${course.instructor}</a>
                                        </div>
                                        <span class="ed-course__price">
                                             ${course.currency_symbol}${course.price.toLocaleString(undefined, { 
                                                    minimumFractionDigits: 2, 
                                                    maximumFractionDigits: 2 
                                                })}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                });

            } else {
                console.error(data.error || 'Unknown error occurred.');
            }

            $('.pros_top_courses').html(top_course);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error("AJAX Error:", textStatus, errorThrown);
        }
    });
}





function loadDashboardSummary() {
    $.ajax({
        url: 'api/summary/home_summary.php',
        type: 'GET',
        dataType: 'json',
        success: function(res) {
            if (res.success && res.data) {

                // alert(res.data.total_students);
                $('.total_students').text(res.data.total_students);
                $('.total_courses').text(res.data.total_courses);
                $('.total_instructors').text(res.data.total_instructors);
                $('.average_rating').text(res.data.average_rating);



                var counters = $('.counter');
                if (counters.length) {
                    counters.each(function() {
                        var num = parseFloat($(this).text());
                        if (!isNaN(num)) {
                            $(this).prop('Counter', 0).counterUp({
                                delay: 10,
                                time: 1000
                            });
                        }
                    });
                }

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



function loadTestimonials() {
    $('.testimonials_container').html(`<div class="spinner-border m-5" role="status">
        <span class="visually-hidden">Loading...</span>
        </div>`);
    // $('.testimonials_container').html(`<img src="./assets/loader/proloader.gif'" alt="loader" />`);
    $.ajax({
        url: 'api/reviews/fetch_reviews.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            // alert('hello');
            if (response.success) {
                let html = '';
                response.data.forEach(review => {
                    html += `
                    <div class="swiper-slide">
                        <div class="ed-testimonial__slider-item bg-color-2">
                            <ul class="ed-testimonial__rattings">
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <p class="ed-testimonial__text">
                                “ ${review.comment} ”
                            </p>
                            <div class="ed-testimonial__author">
                                <div class="ed-testimonial__author-img">
                                    <img src="assets/images/course/${review.course_image || 'assets/images/testimonial/default.png'}" alt="author-img" />
                                </div>
                                <div class="ed-testimonial__author-info">
                                    <h5>${review.user_name}</h5>
                                    <p>${review.course_title}</p>
                                </div>
                            </div>
                        </div>
                    </div>`;
                });

                $('.testimonials_container').html(html);
                // new Swiper('.swiper', { // reinitialize swiper if needed
                //     slidesPerView: 1,
                //     loop: true,
                //     autoplay: {
                //         delay: 4000,
                //         disableOnInteraction: false,
                //     },
                // });
            }
        },
        error: function(xhr) {
            console.error("Failed to load testimonials:", xhr.responseText);
        }
    });
}

$(document).ready(function() {
    loadTestimonials();
});


$(document).on('click', '.pros_linkcategory_courses', function() {
    const categoryId = $(this).data('id'); // get data-id value


    localStorage.setItem('selectedCategoryId', categoryId); // store in localStorage

    window.location.href = './courses/';

});