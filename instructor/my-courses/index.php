<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Basics -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />

    <!-- Title -->
    <title>Courses | Coursearly</title>
    <meta name="description"
        content="Login to your Coursearly account to access your courses, progress, and settings." />

    <!-- Prevent Indexing -->
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.svg" type="image/svg+xml" />

    <link href="../../assets/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- toast CSS -->
    <link href="../../assets/assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Popup CSS -->
    <link href="../../assets/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />

    <link rel="stylesheet" href="../../assets/assets/plugins/dropify/dist/css/dropify.min.css">
    <link href="../../assets/assets/plugins/wizard/steps.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="../../assets/assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

    <link href="../../assets/assets/plugins/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

    <link href="../../assets/assets/plugins/notify/wnoty.css" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/assets/plugins/html5-editor/bootstrap-wysihtml5.css" />
    <!-- Custom CSS -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../../assets/css/colors/blue.css" id="theme" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/noumanqamar450/alertbox@main/version/1.0.2/alertbox.min.js"></script>

    <style>
        .instructor-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: transform 0.2s;
        }

        .instructor-card:hover {
            transform: translateY(-4px);
        }

        .instructor-card .card-body {
            padding: 1rem;
        }

        .course-status {
            font-size: 12px;
            padding: 3px 8px;
            border-radius: 12px;
            font-weight: 500;
        }

        .status-draft {
            background-color: #f0f8ff;
            color: #007bff;
        }

        .status-published {
            background-color: #e7fff2;
            color: #28a745;
        }

        .status-review {
            background-color: #fff4db;
            color: #ffc107;
        }

        .action-buttons button {
            font-size: 12px;
            padding: 6px 10px;
            margin-right: 5px;
            border-radius: 6px;
            border: none;
            transition: 0.2s;
        }

        .btn-edit {
            background-color: #e7f3ff;
            color: #007bff;
        }

        .btn-delete {
            background-color: #ffe8e8;
            color: #dc3545;
        }

        .btn-request {
            background-color: #fff6e0;
            color: #ffc107;
        }

        .btn-publish {
            background-color: #e7fff2;
            color: #28a745;
        }

        .btn-edit:hover {
            background-color: #d6eaff;
        }

        .btn-delete:hover {
            background-color: #ffd6d6;
        }

        .btn-request:hover {
            background-color: #fff0c2;
        }

        .btn-publish:hover {
            background-color: #c3ffe0;
        }

        .course-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .course-updated {
            font-size: 13px;
            color: #6b6b6b;
        }

        @media (max-width: 768px) {
            .instructor-card .row>div {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .action-buttons {
                margin-top: 10px;
            }
        }

        .video-wrapper {
            position: relative;
            max-width: 1100px;
            width: 100%;
            border-radius: 20px;
            overflow: hidden;
            background: black;
        }

        iframe {
            width: 100%;
            height: 400px;
            border: none;
        }

        /* Block YouTube clicks */
        #clickBlocker {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            z-index: 2;
        }

        /* Gradient overlay for controls */
        .controls-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            padding: 20px;
            box-sizing: border-box;
            color: white;
            display: flex;
            flex-direction: column;
            z-index: 3;
        }

        /* Video title */
        .video-info h3 {
            margin: 0;
            font-size: 18px;
            color: #ccc;
            font-weight: 500;
        }

        .video-info small {
            color: #ccc;
        }

        /* Buttons */
        .control-buttons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .control-buttons span {
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        /* Progress bar container */
        .progress-container {
            position: relative;
            width: 100%;
            height: 4px;
            background: rgba(255, 255, 255, 0.3);
            cursor: pointer;
            margin-top: 10px;
            border-radius: 4px;
        }

        /* Progress fill */
        .progress {
            height: 100%;
            background: #009f91;
            width: 0%;
            border-radius: 4px;
        }

        /* Timer display */
        .timer {
            display: flex;
            justify-content: flex-end;
            margin-top: 5px;
            font-size: 14px;
            color: #ccc;
        }

        .controls-overlay {
            opacity: 1;
            transition: opacity 0.4s ease;
            /* fade in/out */
            pointer-events: auto;
            /* can still click when visible */
        }

        .controls-overlay.hidden {
            opacity: 0;
            pointer-events: none;
            /* ignore clicks when hidden */
        }

        /* Hide scrollbar */
        .reviews-scroll {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
            /* Firefox */
        }

        .reviews-scroll::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari */
        }

        /* Smooth snap scrolling */
        .reviews-scroll {
            scroll-snap-type: x mandatory;
            gap: 15px;
        }

        .reviews-scroll>.card {
            scroll-snap-align: start;
        }

        /* Avatar initials */
        .avatar-initials {
            width: 40px;
            height: 40px;
            background-color: #009f91;
            color: white;
            font-weight: bold;
            font-size: 14px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Arrow buttons */
        .arrow-btn {
            background: white;
            border-radius: 50%;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            width: 35px;
            height: 35px;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 2;
        }

        .arrow-btn:hover {
            background: #f5f5f5;
        }
    </style>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <!-- menu -->

        <!-- menu -->
        <?php include('../includes/menu.html'); ?>
        <!-- menu -->

        <!-- menu -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Courses</h4>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)" style="color: #009f91;">Home</a></li>
                        <li class="breadcrumb-item active">Courses</li>
                    </ol>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row el-element-overlay">
                    <div class="col-md-12 m-b-20">
                        <div class="row">
                            <div class="col-lg-3 col-md-12 m-b-15">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputuname2"
                                        placeholder="Search your courses"
                                        style="font-size: 0.85rem;border:1px solid #009f91;outline: none; box-shadow: none;">
                                    <div class="input-group-append"
                                        style="background-color: #009f91;border-radius: 0 0.25rem 0.25rem 0;">
                                        <span class="input-group-text" id="basic-addon2"
                                            style="background-color: #009f91;color: #ffffff;border:1px solid #009f91;">
                                            <i class="ti-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-12 m-b-15">
                                <select class="form-select"
                                    style="outline: none; box-shadow: none;font-size: 0.85rem;border:1px solid #009f91;">
                                    <option>Newest</option>
                                    <option>Oldest</option>
                                    <option>A-Z</option>
                                    <option>Z-A</option>
                                    <option>Published</option>
                                    <option>Unpublished</option>
                                    <option>Pending Review</option>
                                </select>

                            </div>
                            <div class="col-lg-7 col-md-12 m-b-15 justify-content-end d-flex">
                                <button type="button" class="btn waves-effect waves-light btn-sm p-10 courseModal"
                                    data-toggle="modal" data-target="#createcourse1" data-id="Create Course"
                                    style="background-color:#009f91;color:#ffffff;font-size:13px;outline: none; box-shadow: none;">Create
                                    Course</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 m-b-15">
                        <div
                            style="border: 1px solid #e5e5e5; border-radius: 12px; overflow: hidden; background: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.05); font-family: Arial, sans-serif;">

                            <!-- Top Image with Category Tag + Wishlist -->
                            <div style="position: relative;">
                                <img src="../../assets/assets/images/users/5.jpg" alt="Course Image"
                                    style="width: 100%; display: block; object-fit: cover; height: 180px;">

                                <!-- Category -->
                                <span
                                    style="position: absolute; top: 12px; left: 12px; background: #009f91; color: white; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: bold;">
                                    Data Science
                                </span>

                                <!-- Review Status -->
                                <span
                                    style="position: absolute; top: 12px; left: 120px; background: #ffc107; color: #000; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: bold;">
                                    <i class="fa fa-hourglass-half"></i> Pending Review
                                </span>

                                <!-- Wishlist Heart -->
                                <button class="wishlistBtn"
                                    style="color:#009f91;background-color:transparent;outline: none;position: absolute; top: 12px; right: 12px; background: white; border-radius: 50%; width: 34px; height: 34px; display: flex; align-items: center; justify-content: center; font-size: 16px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.1); transition: all 0.3s;border:none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                        viewBox="0 0 24 24" stroke="#d32f2f">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                                    </svg>
                                </button>
                            </div>

                            <!-- Course Info -->
                            <div style="padding: 15px;">

                                <!-- Meta Info -->
                                <div
                                    style="display: flex; justify-content: space-between; font-size: 12px; color: #777; margin-bottom: 20px;">
                                    <span><i class="fa fa-book"></i> 23 Lessons</span>
                                    <span data-bs-toggle="modal" data-bs-target="#coursedetail"
                                        style="cursor:pointer;"><i class="fa fa-user"></i> Harrison Stone</span>
                                </div>

                                <!-- Title -->
                                <h5 style="margin: 0 0 20px 0; font-size: 15px; font-weight: bold; color: #222; line-height: 1.4; cursor: pointer;"
                                    onmouseover="this.style.color='#009f91'" onmouseout="this.style.color='#222'"
                                    data-bs-toggle="modal" data-bs-target="#coursedetail">
                                    Data Competitive Strategy Law and Organization Course
                                </h5>

                                <!-- Rating -->
                                <div data-bs-toggle="modal" data-bs-target="#coursedetail"
                                    style="cursor:pointer;display: flex; align-items: center; font-size: 13px; margin-bottom: 20px; color: #f1c40f;">
                                    <span>⭐⭐⭐⭐⭐</span>
                                    <span style="color: #888; margin-left: 6px;">(09 Reviews)</span>
                                </div>

                                <hr style="border: none; border-top: 1px solid #eee; margin: 20px 0;">

                                <!-- Footer -->
                                <div
                                    style="display: flex; justify-content: space-between; align-items: center; font-size: 14px; margin-bottom: 10px;">
                                    <span style="font-weight: bold; color: #009f91; font-size: 16px;">$674.00</span>
                                    <span style="color: #555;"><i class="fa fa-group"></i> 673 Students</span>
                                </div>

                                <!-- Action Buttons -->
                                <div style="display: flex; flex-wrap: wrap; gap: 5px; margin-top: 10px;">
                                    <span
                                        style="padding:5px;border: 1px solid #dc3545; color: #dc3545; background: none; font-size: 12px; border-radius: 4px;cursor:pointer;"
                                        id="sa-warning"><i class="fa fa-trash"></i> Delete</span>
                                    <span
                                        style="padding:5px;border: 1px solid #ffc107; color: #ffc107; background: none; font-size: 12px; border-radius: 4px;cursor:pointer;"
                                        class="courseModal" data-toggle="modal" data-target="#createcourse1"
                                        data-id="Edit Course"><i class="fa fa-edit"></i> Edit</span>
                                    <span
                                        style="padding:5px;border: 1px solid #28a745; color: #28a745; background: none; font-size: 12px; border-radius: 4px;cursor:pointer;"
                                        class="publishCourse"><i class="fa fa-upload"></i> Publish</span>
                                    <span
                                        style="padding:5px;border: 1px solid #009f91; color: #009f91; background: none; font-size: 12px; border-radius: 4px;cursor:pointer;"
                                        class="requestCourseReview"><i class="fa fa-paper-plane"></i> Request
                                        Review</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="createcourse1" tabindex="-1" aria-labelledby="createcourse1Label"
                aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header"
                            style="display: flex; align-items: center; justify-content: space-between; gap: 1rem;">

                            <!-- Logo Left -->
                            <div style="flex: 0 0 auto;">
                                <a class="navbar-brand" href="../../" target="_blank"
                                    style="display: flex; align-items: center;">
                                    <img src="../../assets/images/icon.svg" alt="homepage" width="35"
                                        class="dark-logo" />
                                </a>
                            </div>

                            <!-- Title Center -->
                            <div style="flex: 1; text-align: center;">
                                <h2 class="fw-bold mb-0" style="color: #009f91; font-weight: 500;" id="modalTitle">
                                    Create Course</h2>
                            </div>

                            <!-- Close Button Right -->
                            <div style="flex: 0 0 auto;">
                                <button type="button" class="btn-close" data-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                        </div>

                        <div class="modal-body">

                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="wizard-content">
                                        <form action="#" class="tab-wizard wizard-circle">
                                            <!-- Step 1 -->
                                            <h6></h6>
                                            <section style="margin-bottom:50px;">
                                                <div class="row">
                                                    <div class="col-md-1">

                                                    </div>
                                                    <div class="col-md-5">
                                                        <label for="courseTitle" class="form-label m-t-20"><small>Course
                                                                Title</small></label>
                                                        <input type="text" class="form-control" id="courseTitle"
                                                            placeholder="The main name of your course"
                                                            style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">

                                                        <label for="coursesubTitle"
                                                            class="form-label m-t-20"><small>Subtitle</small></label>
                                                        <input type="text" class="form-control" id="coursesubTitle"
                                                            placeholder="A short pitch or complement to the title"
                                                            style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">

                                                        <label for="courseCategory"
                                                            class="form-label m-t-20"><small>Category</small></label>
                                                        <select class="form-select" id="courseCategory"
                                                            style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">
                                                            <option selected>Select Category</option>
                                                            <option value="1">Web Development</option>
                                                        </select>

                                                        <label for="courseSubcategory"
                                                            class="form-label m-t-20"><small>Subcategory</small></label>
                                                        <select class="form-select" id="courseSubcategory"
                                                            style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">
                                                            <option selected>Select Subcategory</option>
                                                            <option value="1">HTML</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label for="courselevel"
                                                            class="form-label m-t-20"><small>Learning
                                                                Level</small></label>
                                                        <select class="form-select" id="courselevel"
                                                            style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">
                                                            <option selected>Select Level</option>
                                                            <option value="1">Beginner</option>
                                                        </select>

                                                        <label for="courseLanguage"
                                                            class="form-label m-t-20"><small>Language</small></label>
                                                        <select class="form-select" id="courseLanguage"
                                                            style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">
                                                            <option selected>Select Language</option>
                                                            <option value="1">English</option>
                                                        </select>

                                                        <label for="courseTags"
                                                            class="form-label m-t-20"><small>Tags</small></label><br>
                                                        <input type="text" data-role="tagsinput" class="form-control"
                                                            id="courseTags"
                                                            placeholder="Keywords that help with discoverability"
                                                            style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;" />

                                                        <div class="row">
                                                            <!-- Currency Select -->
                                                            <div class="col-md-3 m-t-30">
                                                                <label
                                                                    class="form-label"><small>Currency</small></label>
                                                                <select class="form-select"
                                                                    style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">
                                                                    <option selected disabled>NGN</option>
                                                                </select>
                                                            </div>

                                                            <!-- Price Tier Select -->
                                                            <div class="col-md-9 m-t-30">
                                                                <label class="form-label"><small>Course
                                                                        Price</small></label>
                                                                <input type="text" class="form-control" id="courseTitle"
                                                                    placeholder="Not more than 10,000"
                                                                    style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <!-- Currency Select -->
                                                            <div class="col-md-3 m-t-10">
                                                                <select class="form-select"
                                                                    style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">
                                                                    <option selected disabled>USD</option>
                                                                </select>
                                                            </div>

                                                            <!-- Price Tier Select -->
                                                            <div class="col-md-9 m-t-10">
                                                                <input type="text" class="form-control" id="courseTitle"
                                                                    placeholder="Not more than 10,000"
                                                                    style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                            </section>
                                            <!-- Step 2 -->
                                            <h6></h6>
                                            <section style="margin-bottom:50px;">
                                                <div class="row">
                                                    <div class="col-md-1">

                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="row">
                                                            <div class="col-md-6">

                                                                <div class="form-group">
                                                                    <label for="input-file-max-fs"
                                                                        class="form-label m-t-20"><small>Course
                                                                            Thumbnail (Course cover image (ideal size
                                                                            e.g., 750x422px))</small></label>
                                                                    <input type="file" id="input-file-max-fs"
                                                                        class="dropify" data-max-file-size="2M" />
                                                                </div>

                                                            </div>
                                                            <div class="col-md-6">

                                                                <div class="form-group">
                                                                    <label for="input-file-max-fs-video"
                                                                        class="form-label m-t-20"><small>Promotional
                                                                            Video (Optional but recommended for
                                                                            marketing)</small></label>
                                                                    <input type="file" id="input-file-max-fs-video"
                                                                        class="dropify" data-max-file-size="100M" />
                                                                </div>

                                                            </div>
                                                            <div class="col-md-12">

                                                                <div class="form-group">
                                                                    <label for="description"
                                                                        class="form-label m-t-20"><small>Course
                                                                            Description</small></label>
                                                                    <textarea class="textarea_editor form-control"
                                                                        id="description" rows="5"
                                                                        placeholder="Full explanation of what the course covers, List of learning outcomes, Things students should know or have"
                                                                        style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;"></textarea>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                            </section>
                                            <!-- Step 3 -->
                                            <h6></h6>
                                            <section style="margin-bottom:50px;">
                                                <div class="row">
                                                    <div class="col-md-1">

                                                    </div>
                                                    <div class="col-md-10">
                                                        <ul class="list-unstyled" id="sectionList">
                                                            <li class="media mb-3 section-item">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <h5 class="mt-0 mb-1"
                                                                                style="font-weight:500;">
                                                                                Sections/Modules</h5>

                                                                            <div id="sectionWrapper"
                                                                                class="sortable-wrapper">
                                                                                <div
                                                                                    class="input-group mt-3 mb-3 section-item">
                                                                                    <!-- Move Icon (drag handle) -->
                                                                                    <div class="input-group-append"
                                                                                        style="cursor: move;">
                                                                                        <span
                                                                                            class="input-group-text drag-handle"
                                                                                            style="border-radius: 0.25rem 0 0 0.25rem;background-color: #009f91;color: #ffffff;border:1px solid #009f91;">
                                                                                            <i class="ti-move"></i>
                                                                                        </span>
                                                                                    </div>

                                                                                    <!-- Input -->
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Section/Module Name"
                                                                                        style="font-size: 0.85rem;border:1px solid #009f91;outline: none; box-shadow: none;">

                                                                                    <!-- Trash Icon -->
                                                                                    <div class="input-group-append"
                                                                                        onclick="removeSection(this)"
                                                                                        style="cursor: pointer;">
                                                                                        <span class="input-group-text"
                                                                                            style="background-color: red;color: #ffffff;border:1px solid red;">
                                                                                            <i class="ti-trash"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="input-group mt-3 mb-3 section-item">
                                                                                <!-- Input -->
                                                                                <input type="text" class="form-control"
                                                                                    value="Quiz"
                                                                                    placeholder="Course Quiz"
                                                                                    style="font-size: 0.85rem;border:1px solid #009f91;outline: none; box-shadow: none;">
                                                                            </div>

                                                                            <!-- Add Button -->
                                                                            <div
                                                                                class="align-items-end justify-content-end d-flex mb-3">
                                                                                <button type="button" class="btn btn-sm"
                                                                                    style="background-color:#007ffb;color:#ffffff;font-size:14px;font-weight:600;outline: none; box-shadow: none;"
                                                                                    onclick="addSection()">
                                                                                    <i class="ti-plus"> Add
                                                                                        Section/Module</i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                </div>
                                            </section>
                                            <!-- Step 4 -->
                                            <h6></h6>
                                            <section style="margin-bottom:50px;">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-1 mb-3"></div>
                                                    <!-- Left Sidebar Tabs -->
                                                    <div class="col-10 col-md-4 col-lg-3 mb-3">
                                                        <div class="card shadow-sm p-3 h-100">
                                                            <ul class="nav flex-column" id="tabList">
                                                                <li class="nav-item mb-2 drag-tab-handle">
                                                                    <a class="nav-link active text-white rounded"
                                                                        data-bs-toggle="tab" href="#m1" role="tab"
                                                                        style="font-size: 0.85rem; background-color: #009f91;">
                                                                        <i class="ti-move me-2"></i> Module 1 Name
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item mb-2 drag-tab-handle">
                                                                    <a class="nav-link text-dark bg-light rounded"
                                                                        data-bs-toggle="tab" href="#m3" role="tab"
                                                                        style="font-size: 0.85rem;">
                                                                        <i class="ti-move me-2"></i> Course Quiz
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <!-- Right Content Area -->
                                                    <div class="col-12 col-md-8 col-lg-7">
                                                        <div class="tab-content">
                                                            <!-- Module Tab -->
                                                            <div class="tab-pane fade show active" id="m1"
                                                                role="tabpanel">
                                                                <div class="card shadow-sm p-4">
                                                                    <small
                                                                        class="mb-4 d-block fw-semibold text-dark fs-6">Module
                                                                        1 Name</small>

                                                                    <!-- Module Description -->
                                                                    <div class="mb-4">
                                                                        <label class="fw-medium">Module
                                                                            Description</label>
                                                                        <textarea class="form-control textarea_editor"
                                                                            rows="3"
                                                                            placeholder="Describe what this module covers..."
                                                                            style="font-size: 0.85rem; border:1px solid #009f91;"></textarea>
                                                                    </div>
                                                                    <hr>
                                                                    <!-- Video Upload or Link -->
                                                                    <div class="mb-4">
                                                                        <label class="fw-medium">Upload Video or Provide
                                                                            Link</label>
                                                                        <div class="row g-3">
                                                                            <div class="col-12 col-md-6">
                                                                                <small class="text-muted">Upload Video
                                                                                    File</small>
                                                                                <input type="file" class="form-control"
                                                                                    style="font-size: 0.85rem; border:1px solid #009f91;">
                                                                            </div>
                                                                            <div class="col-12 col-md-6">
                                                                                <small class="text-muted">Or
                                                                                    YouTube/Vimeo Link</small>
                                                                                <input type="url" class="form-control"
                                                                                    placeholder="https://youtube.com/..."
                                                                                    style="font-size: 0.85rem; border:1px solid #009f91;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <!-- Text Resource -->
                                                                    <div class="mb-4">
                                                                        <label class="fw-medium">Text Resource</label>
                                                                        <div class="row g-3">
                                                                            <div class="col-12 col-md-6">
                                                                                <small class="text-muted">Upload PDF or
                                                                                    Document</small>
                                                                                <input type="file" class="form-control"
                                                                                    style="font-size: 0.85rem; border:1px solid #009f91;">
                                                                            </div>
                                                                            <div class="col-12 col-md-6">
                                                                                <small class="text-muted">Or Add
                                                                                    Link</small>
                                                                                <input type="url" class="form-control"
                                                                                    placeholder="https://link.com/resource.pdf"
                                                                                    style="font-size: 0.85rem; border:1px solid #009f91;">
                                                                            </div>
                                                                            <div class="col-12 mt-2">
                                                                                <small class="text-muted">Or Write
                                                                                    Directly</small>
                                                                                <textarea
                                                                                    class="form-control textarea_editor"
                                                                                    rows="2"
                                                                                    placeholder="Type the content here..."
                                                                                    style="font-size: 0.85rem; border:1px solid #009f91;"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <!-- Quiz Section -->
                                                                    <div id="quizSection"></div>

                                                                    <div class="text-end mt-3">
                                                                        <button type="button"
                                                                            class="btn btn-sm text-white"
                                                                            onclick="addQuestion()"
                                                                            style="background-color: #007ffb;">
                                                                            <i class="ti-plus me-1"></i> Add Question
                                                                            for this Module
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Quiz Tab -->
                                                            <div class="tab-pane fade" id="m3" role="tabpanel">
                                                                <div class="card shadow-sm p-4">
                                                                    <small
                                                                        class="mb-4 d-block fw-semibold text-dark fs-6">Module
                                                                        Quiz</small>
                                                                    <div id="quizSection1"></div>
                                                                    <div class="text-end mt-3">
                                                                        <button type="button"
                                                                            class="btn btn-sm text-white"
                                                                            onclick="addQuestion1()"
                                                                            style="background-color: #007ffb;">
                                                                            <i class="ti-plus me-1"></i> Add Quiz
                                                                            Question
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-1 mb-3"></div>
                                                </div>

                                            </section>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="coursedetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="coursedetailLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="coursedetailLabel">Course Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container py-3">
                                <div class="row g-4 align-items-start">

                                    <div class="col-lg-7">
                                        <div class="video-wrapper">
                                            <!-- YouTube Player -->
                                            <div id="player"></div>

                                            <!-- Click Blocker -->
                                            <div id="clickBlocker"></div>

                                            <!-- Custom Controls -->
                                            <div class="controls-overlay">
                                                <div class="video-info">
                                                    <h3>Learn Ethical Hacking From Scratch</h3>
                                                    <small>IT & Software > Network & Security > Ethical Hacking</small>
                                                </div>

                                                <!-- Progress Bar -->
                                                <div class="progress-container" id="progressContainer">
                                                    <div class="progress" id="progressBar"></div>
                                                </div>

                                                <!-- Timer -->
                                                <div class="timer" id="timeDisplay">0:00 / 0:00</div>

                                                <div class="control-buttons">
                                                    <span onclick="rewindVideo()">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                                            viewBox="0 0 48 48" fill="none">
                                                            <path d="M22 28V21L20 22.3125" stroke="white"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M25 27.5627C25.3134 27.8373 25.7029 28 26.125 28C27.1605 28 28 27.0206 28 25.8125C28 24.6044 27.1605 23.625 26.125 23.625C25.7029 23.625 25.3134 23.7877 25 24.0623L25.375 21H28"
                                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M15.8161 15.8041C10.9691 20.1977 10.7039 27.579 15.2238 32.2905C19.7437 37.0021 27.337 37.2599 32.1839 32.8663C37.0309 28.4726 37.2961 21.0914 32.7762 16.3798C30.2053 13.6999 26.64 12.4609 23.1514 12.6992M24.8571 10L21.8008 12.8329L24.8571 15.871"
                                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    <span onclick="togglePlay()" id="playBtn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                                            viewBox="0 0 48 48" fill="none">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M34.99 23.7773C34.9219 22.8388 34.4205 21.9278 33.4859 21.394L19.4878 13.3994C17.4878 12.2571 15 13.7013 15 16.0044V31.9937C15 34.2968 17.4878 35.741 19.4878 34.5988L33.4859 26.6041C34.4205 26.0703 34.9219 25.1593 34.99 24.2208C35.0226 24.0751 35.0226 23.9231 34.99 23.7773Z"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                    <span onclick="forwardVideo()">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                                            viewBox="0 0 48 48" fill="none">
                                                            <path d="M22 28V21L20 22.3125" stroke="white"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M25 27.5627C25.3134 27.8373 25.7029 28 26.125 28C27.1605 28 28 27.0206 28 25.8125C28 24.6044 27.1605 23.625 26.125 23.625C25.7029 23.625 25.3134 23.7877 25 24.0623L25.375 21H28"
                                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M32.1839 15.8041C37.0309 20.1977 37.2961 27.579 32.7762 32.2905C28.2563 37.0021 20.663 37.2599 15.8161 32.8663C10.9691 28.4726 10.7039 21.0914 15.2238 16.3798C17.7947 13.6999 21.36 12.4609 24.8486 12.6992M23.1429 10L26.1992 12.8329L23.1429 15.871"
                                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Course Info Section -->
                                    <div class="col-lg-5 d-flex flex-column justify-content-between">

                                        <div>
                                            <small class="text-muted" style="font-size:12px;">IT & Software > Network &
                                                Security > Ethical Hacking</small>
                                            <h3 class="fw-bold mt-2">Learn Ethical Hacking From Scratch</h3>
                                            <p class="text-secondary small">
                                                Become an ethical hacker that can hack like black hat hackers and secure
                                                systems like cybersecurity experts.
                                            </p>
                                            <p class="mb-2" style="font-size:14px;">
                                                <strong class="text-warning"> ★ 4.6 </strong> (132,725 ratings) ·
                                                654,813 students
                                            </p>
                                            <small class="text-muted" style="font-size:14px;">Created by <span
                                                    id="creatorName" style="cursor: pointer;color:#009f91;">John
                                                    Doe</span></small>
                                        </div>

                                        <div class="mt-3">
                                            <p class="fw-bold fs-5 mb-1">
                                                <span class="text-dark">₦12,900</span>
                                            </p>

                                        </div>

                                        <div class="row mt-3" style="font-size:12px;">
                                            <h5 class="mb-3" style="font-weight:500;color:#000000;">This course
                                                includes:</h5>
                                            <div class="col-md-6">
                                                <p class="mb-2">
                                                    <i class="mdi mdi-play-circle"></i> 15 Hours on-demand video
                                                </p>
                                                <p class="mb-2">
                                                    <i class="mdi mdi-file-document"></i> 2 Articles
                                                </p>
                                            </div>

                                            <!-- Second Column -->
                                            <div class="col-md-6">
                                                <p class="mb-2">
                                                    <i class="mdi mdi-file-import"></i> 21 Downloadable resources
                                                </p>
                                                <p class="mb-2">
                                                    <i class="mdi mdi-certificate"></i> Certificate of completion
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">

                                    <!-- First Column -->
                                    <div class="col-md-12 col-lg-7">

                                        <div class="row align-items-start p-3" style="font-size:14px;">

                                            <h5 class="mb-3 mt-4" style="font-weight:500;color:#000000;">Course Content
                                            </h5>
                                            <div class="col-md-12">
                                                <div id="modulesAccordion">
                                                    <a class="btn btn-secondary btn-sm mb-2" data-bs-toggle="collapse"
                                                        href="#collapseExample1" aria-expanded="false"
                                                        aria-controls="collapseExample1">
                                                        Module 1 Name
                                                    </a>
                                                    <div id="collapseExample1" class="collapse card card-body"
                                                        data-bs-parent="#modulesAccordion" style="font-size:13px;">
                                                        M1 Description
                                                    </div>
                                                    <br>
                                                    <a class="btn btn-secondary btn-sm mb-2" data-bs-toggle="collapse"
                                                        href="#collapseExample2" aria-expanded="false"
                                                        aria-controls="collapseExample2">
                                                        Module 2 Name
                                                    </a>
                                                    <div id="collapseExample2" class="collapse card card-body"
                                                        data-bs-parent="#modulesAccordion" style="font-size:13px;">
                                                        M2 Description
                                                    </div>
                                                </div>

                                            </div>

                                            <h5 class="mb-3 mt-4" style="font-weight:500;color:#000000;">Course
                                                Description</h5>
                                            <div class="col-md-12" id="instructorSection">
                                                <p><small><strong>Last Update:</strong> June 2024</small></p>
                                                <small>Entire Course Description</small>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="container my-4 position-relative">
                                        <h5 class="fw-bold mb-3">Ratings & Reviews</h5>

                                        <!-- Left Arrow -->
                                        <button class="arrow-btn position-absolute top-50 start-0 translate-middle-y"
                                            id="scrollLeft">
                                            &#10094;
                                        </button>

                                        <!-- Scrollable Cards -->
                                        <div class="d-flex flex-row reviews-scroll pb-3" id="reviewsContainer">
                                            <!-- Review Card -->
                                            <div class="card shadow-sm p-3"
                                                style="min-width: 280px; border-radius: 12px;">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="avatar-initials">JD</div>
                                                    <div class="ms-2">
                                                        <h6 class="mb-0 fw-bold">Jane Doe</h6>
                                                        <small class="text-muted">2 days ago</small>
                                                    </div>
                                                </div>
                                                <div class="mb-2" style="color: #f1c40f;">⭐⭐⭐⭐⭐</div>
                                                <p class="mb-0 text-muted" style="font-size: 14px;">
                                                    Absolutely loved the course! The explanations were clear and
                                                    practical examples made it even better.
                                                </p>
                                            </div>

                                            <!-- Review Card -->
                                            <div class="card shadow-sm p-3"
                                                style="min-width: 280px; border-radius: 12px;">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="avatar-initials">MS</div>
                                                    <div class="ms-2">
                                                        <h6 class="mb-0 fw-bold">Michael Smith</h6>
                                                        <small class="text-muted">1 week ago</small>
                                                    </div>
                                                </div>
                                                <div class="mb-2" style="color: #f1c40f;">⭐⭐⭐⭐☆</div>
                                                <p class="mb-0 text-muted" style="font-size: 14px;">
                                                    Great content but could use more real-world examples. Still a solid
                                                    course overall.
                                                </p>
                                            </div>

                                            <!-- Review Card -->
                                            <div class="card shadow-sm p-3"
                                                style="min-width: 280px; border-radius: 12px;">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="avatar-initials">SL</div>
                                                    <div class="ms-2">
                                                        <h6 class="mb-0 fw-bold">Sarah Lee</h6>
                                                        <small class="text-muted">3 weeks ago</small>
                                                    </div>
                                                </div>
                                                <div class="mb-2" style="color: #f1c40f;">⭐⭐⭐⭐⭐</div>
                                                <p class="mb-0 text-muted" style="font-size: 14px;">
                                                    Learned so much from this course! Highly recommend to beginners and
                                                    intermediates alike.
                                                </p>
                                            </div>

                                            <!-- Review Card -->
                                            <div class="card shadow-sm p-3"
                                                style="min-width: 280px; border-radius: 12px;">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="avatar-initials">SL</div>
                                                    <div class="ms-2">
                                                        <h6 class="mb-0 fw-bold">Sarah Lee</h6>
                                                        <small class="text-muted">3 weeks ago</small>
                                                    </div>
                                                </div>
                                                <div class="mb-2" style="color: #f1c40f;">⭐⭐⭐⭐⭐</div>
                                                <p class="mb-0 text-muted" style="font-size: 14px;">
                                                    Learned so much from this course! Highly recommend to beginners and
                                                    intermediates alike.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Right Arrow -->
                                        <button class="arrow-btn position-absolute top-50 end-0 translate-middle-y"
                                            id="scrollRight">
                                            &#10095;
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" style="background-color:#009f91;color:#ffffff;" data-bs-dismiss="modal">Close</button>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © <?php echo date('Y'); ?> Coursearly Ltd. All rights reserved.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="../../assets/assets/plugins/jquery/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../../assets/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../../assets/js/waves.js"></script>

    <script src="../../assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../../assets/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../../assets/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="../../assets/js/custom.min.js"></script>

    <!-- Sweet-Alert  -->
    <script src="../../assets/assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="../../assets/assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>

    <script src="../../assets/assets/plugins/toast-master/js/jquery.toast.js"></script>
    <script src="../../assets/js/toastr.js"></script>

    <script src="../../assets/assets/plugins/moment/min/moment.min.js"></script>
    <script src="../../assets/assets/plugins/wizard/jquery.steps.min.js"></script>
    <script src="../../assets/assets/plugins/wizard/jquery.validate.min.js"></script>
    <!-- Sweet-Alert  -->
    <script src="../../assets/assets/plugins/wizard/steps.js"></script>
    <script src="../../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <script src="../../assets/assets/plugins/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="../../assets/assets/plugins/html5-editor/bootstrap-wysihtml5.js"></script>

    <script src="../../assets/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

    <script src="../../assets/assets/plugins/notify/wnoty.js"></script>

    <script>
        $(document).ready(function () {
            $(document).on('focus', '.textarea_editor', function () {
                if (!$(this).hasClass('wysihtml5-initialized')) {
                    $(this).addClass('wysihtml5-initialized');
                    $(this).wysihtml5();
                }
            });
        });
    </script>
    <!-- jQuery file upload -->
    <script src="../../assets/assets/plugins/dropify/dist/js/dropify.min.js"></script>

    <script>
        $(document).ready(function () {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function (event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function (event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function (e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>

    <script>
        function addSection() {
            const wrapper = document.getElementById("sectionWrapper");
            const first = wrapper.querySelector(".section-item");
            const clone = first.cloneNode(true);

            // Clear the input
            clone.querySelector("input").value = "";

            // Reattach the remove event
            clone.querySelector(".input-group-append").setAttribute("onclick", "removeSection(this)");

            wrapper.appendChild(clone);
        }

        function removeSection(el) {
            const item = el.closest(".section-item");
            const wrapper = document.getElementById("sectionWrapper");

            // Prevent removing the last one
            if (wrapper.querySelectorAll(".section-item").length > 1) {
                item.remove();
            } else {
                alert("You must have at least one section.");
            }
        }
    </script>

    <script>
        new Sortable(document.getElementById('sectionWrapper'), {
            animation: 150,
            handle: '.drag-handle', // 👈 only drag using this
            ghostClass: 'sortable-ghost'
        });

        function addSection() {
            const wrapper = document.getElementById("sectionWrapper");
            const first = wrapper.querySelector(".section-item");
            const clone = first.cloneNode(true);

            clone.querySelector("input").value = "";
            clone.querySelector(".input-group-append[onclick]").setAttribute("onclick", "removeSection(this)");

            wrapper.appendChild(clone);
        }

        function removeSection(el) {
            const item = el.closest(".section-item");
            const wrapper = document.getElementById("sectionWrapper");

            if (wrapper.querySelectorAll(".section-item").length > 1) {
                item.remove();
            } else {
                alert("You must have at least one section.");
            }
        }
    </script>

    <script>
        // Make tabs draggable
        new Sortable(document.getElementById('tabList'), {
            animation: 150,
            handle: '.drag-tab-handle',
            ghostClass: 'sortable-ghost'
        });

        // Handle tab click behavior
        document.querySelectorAll('.tab-item').forEach(tab => {
            tab.addEventListener('click', function () {
                document.querySelectorAll('.tab-item').forEach(t => {
                    t.classList.remove('active');
                    t.style.backgroundColor = '#f7f7f7';
                    t.style.color = '#333';
                });
                this.classList.add('active');
                this.style.backgroundColor = '#009f91';
                this.style.color = '#fff';

                const target = this.getAttribute('href');
                document.querySelectorAll('.tab-pane').forEach(pane => {
                    pane.classList.remove('active');
                });
                document.querySelector(target).classList.add('active');
            });
        });
    </script>

    <script>
        let questionCount = 0;

        function addQuestion() {
            questionCount++;

            const quizItem = document.createElement('div');
            quizItem.className = 'card mb-4 quiz-item';
            quizItem.style.border = '1px solid #009f91';

            let optionsHtml = '';
            ['A', 'B', 'C', 'D'].forEach((opt, idx) => {
                const optionId = `q${questionCount}_opt${idx}`;
                const isChecked = idx === 0 ? 'checked' : '';
                optionsHtml += `
                <div class="col-md-6 mb-2">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="background-color: white; border-color: #009f91;">
                                <input
                                name="correct_${questionCount}"
                                type="radio"
                                class="with-gap"
                                style="accent-color: #009f91; font-size: 0.85rem;"
                                id="${optionId}"
                                ${isChecked}
                                />
                                <label for="${optionId}" class="mb-0"></label>
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Option ${opt}" aria-label="Text input with radio button" style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;"/>
                    </div>
                </div>
                `;
            });


            quizItem.innerHTML = `
                <div class="card-body">
                    <h6 style="font-weight: 600;">Question ${questionCount}</h6>

                    <div class="form-group">
                        <textarea class="form-control textarea_editor" rows="2" placeholder="Enter the question..." style="font-size: 0.85rem; border:1px solid #009f91;"></textarea>
                    </div>

                    <div class="form-group">
                        <label><small>Options (The Checked option will be regarded as the answer)</small></label>
                        <div class="row">
                            ${optionsHtml}
                        </div>
                    </div>

                    <button type="button" class="btn btn-sm btn-danger" onclick="removeQuestion(this)">
                        <i class="ti-trash"></i> Remove Question
                    </button>
                </div>
            `;

            document.getElementById('quizSection').appendChild(quizItem);
        }

        function removeQuestion(btn) {
            btn.closest('.quiz-item').remove();
        }
    </script>

    <script>
        let questionCount1 = 0;

        function addQuestion1() {
            questionCount1++;

            const quizItem = document.createElement('div');
            quizItem.className = 'card mb-4 quiz-item1';
            quizItem.style.border = '1px solid #009f91';

            let optionsHtml = '';
            ['A', 'B', 'C', 'D'].forEach((opt, idx) => {
                const optionId = `q${questionCount1}_opt${idx}`;
                const isChecked = idx === 0 ? 'checked' : '';
                optionsHtml += `
                    <div class="col-md-6 mb-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background-color: white; border-color: #009f91;">
                                    <input
                                        name="correct_${questionCount1}"
                                        type="radio"
                                        class="with-gap"
                                        style="accent-color: #009f91; font-size: 0.85rem;"
                                        id="${optionId}"
                                        ${isChecked}
                                    />
                                    <label for="${optionId}" class="mb-0"></label>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Option ${opt}" style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;"/>
                        </div>
                    </div>
                `;
            });

            quizItem.innerHTML = `
                <div class="card-body">
                    <h6 style="font-weight: 600;">Question ${questionCount1}</h6>
                    <div class="form-group">
                        <textarea class="form-control textarea_editor" rows="2" placeholder="Enter the question..." style="font-size: 0.85rem; border:1px solid #009f91;"></textarea>
                    </div>
                    <div class="form-group">
                        <label><small>Options (The Checked option will be regarded as the answer)</small></label>
                        <div class="row">
                            ${optionsHtml}
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm btn-danger" onclick="removeQuestion1(this)">
                        <i class="ti-trash"></i> Remove Question
                    </button>
                </div>
            `;

            document.getElementById('quizSection1').appendChild(quizItem);
        }

        function removeQuestion1(btn) {
            btn.closest('.quiz-item1').remove();
        }

        // Run after DOM is ready
        $(document).ready(function () {
            if ($('#quizSection1').length) {
                addQuestion1();
            }
        });
    </script>

    <script>
        $('body').on('click', '[href="#previous"]', function () {
            // alert('previous');
            $.wnoty({

                // 'success', 'info', 'error', 'warning'
                type: 'success',
                message: 'prev'

            });
        });
        $('body').on('click', '[href="#next"]', function () {
            // alert('next');
            $.wnoty({

                // 'success', 'info', 'error', 'warning'
                type: 'success',
                message: 'next',
                autohideDelay: 5000

            });
        });
        $('body').on('click', '[href="#finish"]', function () {
            $.wnoty({
                type: 'success',
                message: 'submit'
            });

        });
    </script>

    <script>
        $('body').on('click', '.courseModal', function () {

            var modalTitle = $(this).data('id');

            $('#modalTitle').text(modalTitle);
        });
        $('body').on('click', '.publishCourse', function () {
            $.wnoty({
                type: 'success',
                message: 'Published Successfully'
            });
        });
        $('body').on('click', '.requestCourseReview', function () {
            $.wnoty({
                type: 'success',
                message: 'Review Request Sent Successfully'
            });
        });
    </script>


    <script src="https://www.youtube.com/iframe_api"></script>

    <script>
        let player;
        let isDragging = false;
        let hideControlsTimeout;

        function loadYouTubePlayer() {
            if (window.YT && window.YT.Player) {
                initYouTubePlayer(); // Already loaded
            } else {
                let tag = document.createElement('script');
                tag.src = "https://www.youtube.com/iframe_api";
                document.head.appendChild(tag);
                window.onYouTubeIframeAPIReady = initYouTubePlayer;
            }
        }

        function initYouTubePlayer() {
            player = new YT.Player('player', {
                videoId: 'ED0v9YuVpiE',
                playerVars: {
                    autoplay: 0,
                    controls: 0,
                    modestbranding: 1,
                    rel: 0,
                    disablekb: 1
                },
                events: {
                    onReady: onPlayerReady,
                    onStateChange: onPlayerStateChange
                }
            });
        }

        function onPlayerReady() {
            updateProgress();
        }

        function togglePlay() {
            const state = player.getPlayerState();
            const btn = document.getElementById('playBtn');

            if (state === YT.PlayerState.PLAYING) {
                player.pauseVideo();
                btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M34.99 23.7773C34.9219 22.8388 34.4205 21.9278 33.4859 21.394L19.4878 13.3994C17.4878 12.2571 15 13.7013 15 16.0044V31.9937C15 34.2968 17.4878 35.741 19.4878 34.5988L33.4859 26.6041C34.4205 26.0703 34.9219 25.1593 34.99 24.2208C35.0226 24.0751 35.0226 23.9231 34.99 23.7773Z" fill="white"/>
                </svg>`;
                showControls();
            } else {
                player.playVideo();
                btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path d="M26.2857 15.1111C26.2857 14.4975 26.7974 14 27.4286 14H30.8571C31.4883 14 32 14.4975 32 15.1111V32.8889C32 33.5025 31.4883 34 30.8571 34H27.4286C26.7974 34 26.2857 33.5025 26.2857 32.8889V15.1111Z" fill="white"/>
                    <path d="M16 15.1111C16 14.4975 16.5117 14 17.1429 14H20.5714C21.2026 14 21.7143 14.4975 21.7143 15.1111V32.8889C21.7143 33.5025 21.2026 34 20.5714 34H17.1429C16.5117 34 16 33.5025 16 32.8889V15.1111Z" fill="white"/>
                </svg>`;
                startHideControlsTimer();
            }
        }

        function rewindVideo() {
            player.seekTo(player.getCurrentTime() - 15, true);
            showControls();
        }

        function forwardVideo() {
            player.seekTo(player.getCurrentTime() + 15, true);
            showControls();
        }

        function updateProgress() {
            if (player && player.getDuration) {
                const duration = player.getDuration();
                const currentTime = player.getCurrentTime();
                const percent = (currentTime / duration) * 100;

                document.getElementById('progressBar').style.width = percent + "%";
                document.getElementById('timeDisplay').textContent =
                    formatTime(currentTime) + " / " + formatTime(duration);
            }
            if (!isDragging) requestAnimationFrame(updateProgress);
        }

        function formatTime(seconds) {
            if (isNaN(seconds)) return "0:00";
            const mins = Math.floor(seconds / 60);
            const secs = Math.floor(seconds % 60);
            return mins + ":" + (secs < 10 ? "0" + secs : secs);
        }

        function seekVideo(e) {
            const progressContainer = document.getElementById('progressContainer');
            const rect = progressContainer.getBoundingClientRect();
            const percent = Math.min(Math.max(0, (e.clientX - rect.left) / rect.width), 1);
            const newTime = percent * player.getDuration();
            player.seekTo(newTime, true);
        }

        const progressContainer = document.getElementById('progressContainer');
        progressContainer.addEventListener('mousedown', (e) => {
            isDragging = true;
            seekVideo(e);
        });
        document.addEventListener('mousemove', (e) => {
            if (isDragging) seekVideo(e);
        });
        document.addEventListener('mouseup', () => {
            if (isDragging) {
                isDragging = false;
                updateProgress();
            }
        });

        function onPlayerStateChange(event) {
            updateProgress();
            if (event.data === YT.PlayerState.PLAYING) {
                startHideControlsTimer();
            } else {
                showControls();
            }
        }

        // Fade hide/show logic
        function startHideControlsTimer() {
            clearTimeout(hideControlsTimeout);
            hideControlsTimeout = setTimeout(() => {
                document.querySelector('.controls-overlay').classList.add("hidden");
            }, 5000);
        }

        function showControls() {
            clearTimeout(hideControlsTimeout);
            document.querySelector('.controls-overlay').classList.remove("hidden");
        }

        // Show controls on hover
        document.querySelector('.video-wrapper').addEventListener('mouseenter', showControls);
        document.querySelector('.video-wrapper').addEventListener('mouseleave', () => {
            if (player && player.getPlayerState() === YT.PlayerState.PLAYING) {
                startHideControlsTimer();
            }
        });

        document.querySelector('.video-wrapper').addEventListener('click', function (e) {
            if (!e.target.closest('.control-buttons') && !e.target.closest('#progressContainer')) {
                togglePlay();
            }
        });

        document.addEventListener("DOMContentLoaded", loadYouTubePlayer);
    </script>

</body>

</html>