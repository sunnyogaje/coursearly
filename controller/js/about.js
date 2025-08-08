    $(document).ready(function() {

        // PROS LOAD POPULAR CATEGORY HERE
        fetch_top_category_popular('top_ten')

        function fetch_top_category_popular(category_type) {
            $.ajax({
                url: '../api/category/top_category.php',
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
                                    <img src="../assets/images/category/${cat.category_image}" style="width: 270px; height: 231px;" alt="category-img" />
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

        pros_get_topcourses('top_two');

        function pros_get_topcourses(courses) {
            $.ajax({
                url: '../api/courses/top_courses.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    courses: courses // Explicitly define key and value
                },
                success: function(data) {
                    let top_course = '';

                    if (data.success && data.data) {
                        const topCourses = data.data;
                        const defaultImage = '../assets/images/course/course-4/1.png';

                        topCourses.forEach(course => {
                            const courseImage = course.course_image && course.course_image.trim() !== '' ?
                                '../assets/images/course/' + course.course_image :
                                defaultImage;




                            top_course += `
                                <div class="col-lg-6 col-xl-6 col-md-6 col-12">
                                    <div class="ed-course__card ed-course__card--style2 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <div class="ed-course__head position-relative">
                                            <a href="../course-details?id=${course.course_id}" class="ed-course__img">
                                                <img src="${courseImage}" alt="course-img" />
                                            </a>
                                            <a href="course-1.html" class="ed-course__tag">${course.category}</a>
                                           <a href="#" class="ed-course__bookmarked"><i class="fi fi-rr-bookmark"></i></a>
                                        </div>
                                        <div class="ed-course__body">
                                            <div class="ed-course__lesson">
                                                <div class="ed-course__part">
                                                    <i class="fi-rr-book"></i>
                                                    <p>${course.module_count} Lessons</p>
                                                </div>
                                                <div class="ed-course__teacher">
                                                    <i class="fi-rr-user"></i>
                                                    <p>${course.instructor > 15 ? course.instructor.substring(0, 15) + '...' : course.instructor}</p>
                                                </div>
                                            </div>

                                            <a href="../course-details" class="ed-course__title">
                                                <h5>
                                                  ${course.title.length > 25 ? course.title.substring(0, 25) + '...' : course.title}
                                                </h5>
                                            </a>

                                            <div class="ed-course__rattings">
                                                <ul>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><span>( ${course.rating} Reviews)</span></li>
                                                </ul>
                                            </div>

                                            <div class="ed-course__bottom">
                                                <span class="ed-course__price"> ${course.currency_symbol}${course.price.toFixed(2)}</span>
                                                <div class="ed-course__students">
                                                    <i class="fi fi-rr-graduation-cap"></i>
                                                    <p>${course.total_students} Students </p>
                                                </div>
                                            </div>
                                        </div>
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

                    $('.pros_top_courses').html(top_course);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("AJAX Error:", textStatus, errorThrown);
                }
            });
        }
        // PROS LOAD TOP 6 COURSES CATEGORY HERE

    });

    function loadDashboardSummary() {
        $.ajax({
            url: '../api/summary/home_summary.php',
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