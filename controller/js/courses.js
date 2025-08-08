function getActiveSearchText() {
    let text = $('#searchInput').val();
    text = text ? text.trim() : '';

    if (!text) {
        text = $('#headerSearchInput').val();
        text = text ? text.trim() : '';
    }

    return text;
}

function loadCourses(page = 1, userCountry) {

    // alert(userCountry);
    const search = getActiveSearchText();


    const category = $('.pros_header_category').val();



    $.ajax({
        url: '../api/courses/fetch_courses_paginated.php',
        type: 'POST',
        dataType: 'json',
        data: { page, search, category, userCountry },
        success: function(response) {
            if (response.success) {
                let coursesHTML = '';
                response.data.forEach(course => {
                    const rating = parseFloat(course.rating) || 0;

                    coursesHTML += `
                    <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                        <div class="ed-course__card wow fadeInUp" data-wow-delay=".7s">
                            <a href="../course-details/?id=${course.course_id}" class="ed-course__img">
                                <img src="../assets/images/course/${course.course_image}" alt="course-img" />
                            </a>
                            <a href="course-details/?id=${course.course_id}" class="ed-course__tag">${course.subcategory}</a>
                            <div class="ed-course__body">
                                <div class="ed-course__lesson">
                                    <div class="ed-course__part"><i class="fi-rr-book"></i><p>${course.module_count} Lessons</p></div>
                                    <div class="ed-course__teacher"><i class="fi-rr-user"></i><p>${course.instructor_name}</p></div>
                                </div>
                                <a href="../course-details/?id=${course.course_id}" class="ed-course__title"><h5>${course.course_title}</h5></a>
                                <div class="ed-course__rattings">
                                    <ul>
                                        ${generateStars(rating)}
                                        <li><span>(${rating.toFixed(1)})</span></li>
                                    </ul>
                                </div>
                                <div class="ed-course__bottom">
                                    <span class="ed-course__price"> 
                                    ${course.currency_symbol}${course.course_price.toLocaleString(undefined, { 
                                            minimumFractionDigits: 2, 
                                            maximumFractionDigits: 2 
                                        })}</span>
                                    <div class="ed-course__students"><i class="fi fi-rr-graduation-cap"></i><p>${course.course_tot_students} Students</p></div>
                                </div>
                            </div>
                        </div>
                    </div>`;
                });

                $('.courses_container').html(coursesHTML);

                const from = ((response.current_page - 1) * 6) + 1;
                let to = from + response.data.length - 1;
                $('.ed-course__filter-text').html(`Showing ${from}–${to} of ${response.total_courses} Results`);

                renderPagination(response.total_pages, response.current_page);
                new WOW().init();
            } else {
                $('.courses_container').html('<p>No courses found.</p>');
                $('.ed-course__filter-text').html('');
                $('.pagination_controls').html('');
            }
        },
        error: function(xhr) {
            console.error("Error:", xhr.responseText);
        }
    });
}

function renderPagination(totalPages, currentPage) {
    const search = getActiveSearchText();
    const category = $('.pros_header_category').val();
    let paginationHTML = '<ul class="ed-pagination__list">';

    for (let i = 1; i <= totalPages; i++) {
        paginationHTML += `<li class="${i === currentPage ? 'active' : ''}">
            <a href="#" onclick="loadCourses(${i}); return false;">${String(i).padStart(2, '0')}</a>
        </li>`;
    }

    if (currentPage < totalPages) {
        paginationHTML += `<li><a href="#" onclick="loadCourses(${currentPage + 1}); return false;"><i class="fi-rr-arrow-small-right"></i></a></li>`;
    }

    paginationHTML += '</ul>';
    $('.pagination_controls').html(`<div class="row"><div class="col-12"><div class="ed-pagination">${paginationHTML}</div></div></div>`);
}

function generateStars(rating) {
    rating = parseFloat(rating) || 0;
    let stars = '';
    const fullStars = Math.round(rating);
    for (let i = 0; i < 5; i++) {
        stars += `<li><i class="icofont-star${i < fullStars ? '' : ' empty'}"></i></li>`;
    }
    return stars;
}

// Event listeners for search forms and category dropdown
$('#searchForm, #topSearchForm').on('submit', function(e) {
    e.preventDefault();

    $.get("https://ipapi.co/json/", function(location) {
        const userCountry = location.country; // e.g., 'NG', 'US', 'GH'

        $('.courses_container').html(`<div class="spinner-border m-5" role="status">
        <span class="visually-hidden">Loading...</span>
        </div>`);

        // STEP 2: Call your course loader with country info
        loadCourses(1, userCountry);
    });

});

$('body').on('change', '.pros_header_category', function() {

    // alert('hello');

    localStorage.removeItem('selectedCategoryId');

    // loadCourses(1);
    $.get("https://ipapi.co/json/", function(location) {
        const userCountry = location.country; // e.g., 'NG', 'US', 'GH'

        $('.courses_container').html(`<div class="spinner-border m-5" role="status">
        <span class="visually-hidden">Loading...</span>
        </div>`);

        // STEP 2: Call your course loader with country info
        loadCourses(1, userCountry);
    });
});

// Load courses on page ready
$(document).ready(function() {




    $.get("https://ipapi.co/json/", function(location) {
        const userCountry = location.country; // e.g., 'NG', 'US', 'GH'

        $('.courses_container').html(`<div class="spinner-border m-5" role="status">
        <span class="visually-hidden">Loading...</span>
        </div>`);

        // STEP 2: Call your course loader with country info
        loadCourses(1, userCountry);
    });

});