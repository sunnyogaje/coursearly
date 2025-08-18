<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Basics -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />

    <!-- Title -->
    <title>Courses | Explore Courses</title>
    <meta name="description" content="Login to your Coursearly account to access your courses, progress, and settings." />

    <!-- Prevent Indexing -->
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.svg" type="image/svg+xml" />

    <link href="../../assets/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link href="../../assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../../assets/css/colors/blue.css" id="theme" rel="stylesheet">

    <style>
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
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            z-index: 2;
        }

        /* Gradient overlay for controls */
        .controls-overlay {
            position: absolute;
            bottom: 0; left: 0;
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
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
            font-weight:500;
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
            background: rgba(255,255,255,0.3);
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
            transition: opacity 0.4s ease; /* fade in/out */
            pointer-events: auto; /* can still click when visible */
        }

        .controls-overlay.hidden {
            opacity: 0;
            pointer-events: none; /* ignore clicks when hidden */
        }

        /* Hide scrollbar */
        .reviews-scroll {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none; /* Firefox */
        }
        .reviews-scroll::-webkit-scrollbar {
            display: none; /* Chrome, Safari */
        }

        /* Smooth snap scrolling */
        .reviews-scroll {
            scroll-snap-type: x mandatory;
            gap: 15px;
        }
        .reviews-scroll > .card {
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
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
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
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
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
                                    <input type="text" class="form-control" id="exampleInputuname2" placeholder="Search your courses" style="font-size: 0.85rem;border:1px solid #009f91;outline: none; box-shadow: none;">
                                    <div class="input-group-append" style="background-color: #009f91;border-radius: 0 0.25rem 0.25rem 0;">
                                        <span class="input-group-text" id="basic-addon2" style="background-color: #009f91;color: #ffffff;border:1px solid #009f91;">
                                            <i class="ti-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-12 m-b-15">
                                <select class="form-select" style="outline: none; box-shadow: none;font-size: 0.85rem;border:1px solid #009f91;">
                                    <option>Newest</option>
                                    <option>Oldest</option>
                                    <option>A-Z</option>
                                    <option>Z-A</option>
                                    <option>Published</option>
                                    <option>Unpublished</option>
                                </select>

                            </div>
                            <div class="col-lg-3 col-md-12 m-b-15">
                                <select class="form-select" style="outline: none; box-shadow: none;font-size: 0.85rem;border:1px solid #009f91;">
                                    <option>Select Category</option>
                                    <option>Website</option>
                                    <option>Affiliate Marketing</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4">

                    <div class="col-md-6 col-lg-4 m-b-15">
                        <div style="border: 1px solid #e5e5e5; border-radius: 12px; overflow: hidden; background: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.05); font-family: Arial, sans-serif;">

                            <!-- Top Image with Category Tag + Wishlist -->
                            <div style="position: relative;">
                                <img src="../../assets/assets/images/users/5.jpg" alt="Course Image" style="width: 100%; display: block; object-fit: cover; height: 180px;">
                                
                                <!-- Category -->
                                <span style="position: absolute; top: 12px; left: 12px; background: #009f91; color: white; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: bold;">
                                    Data Science
                                </span>

                                <!-- Wishlist Heart -->
                                <button class="wishlistBtn" style="color:#009f91;background-color:transparent;outline: none;position: absolute; top: 12px; right: 12px; background: white; border-radius: 50%; width: 34px; height: 34px; display: flex; align-items: center; justify-content: center; font-size: 16px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.1); transition: all 0.3s;border:none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="#d32f2f">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                                    </svg>
                                </button>

                            </div>

                            <!-- Course Info -->
                            <div style="padding: 15px;">
                                
                                <!-- Meta Info -->
                                <div style="display: flex; justify-content: space-between; font-size: 12px; color: #777; margin-bottom: 20px;">
                                    <span><i class="fa fa-book"></i> 23 Lessons</span>
                                    <span data-bs-toggle="modal" data-bs-target="#coursedetail" style="cursor:pointer;"><i class="fa fa-user"></i> Harrison Stone</span>
                                </div>

                                <!-- Title -->
                                <h5 style="margin: 0 0 20px 0; font-size: 15px; font-weight: bold; color: #222; line-height: 1.4; cursor: pointer;" onmouseover="this.style.color='#009f91'" onmouseout="this.style.color='#222'" data-bs-toggle="modal" data-bs-target="#coursedetail">
                                    Data Competitive Strategy Law and Organization Course
                                </h5>

                                <!-- Rating -->
                                <div data-bs-toggle="modal" data-bs-target="#coursedetail" style="cursor:pointer;display: flex; align-items: center; font-size: 13px; margin-bottom: 20px; color: #f1c40f;">
                                    <span>⭐⭐⭐⭐⭐</span>
                                    <span style="color: #888; margin-left: 6px;">(09 Reviews)</span>
                                </div>

                                <hr style="border: none; border-top: 1px solid #eee; margin: 20px 0;">

                                <!-- Footer -->
                                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 14px;">
                                    <span style="font-weight: bold; color: #009f91; font-size: 16px;">$674.00</span>
                                    <span style="color: #555;"><i class="fas fa-user-graduate"></i> 673 Students</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="coursedetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="coursedetailLabel" aria-hidden="true">
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                                                <path d="M22 28V21L20 22.3125" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M25 27.5627C25.3134 27.8373 25.7029 28 26.125 28C27.1605 28 28 27.0206 28 25.8125C28 24.6044 27.1605 23.625 26.125 23.625C25.7029 23.625 25.3134 23.7877 25 24.0623L25.375 21H28" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M15.8161 15.8041C10.9691 20.1977 10.7039 27.579 15.2238 32.2905C19.7437 37.0021 27.337 37.2599 32.1839 32.8663C37.0309 28.4726 37.2961 21.0914 32.7762 16.3798C30.2053 13.6999 26.64 12.4609 23.1514 12.6992M24.8571 10L21.8008 12.8329L24.8571 15.871" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </span>
                                                        <span onclick="togglePlay()" id="playBtn">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M34.99 23.7773C34.9219 22.8388 34.4205 21.9278 33.4859 21.394L19.4878 13.3994C17.4878 12.2571 15 13.7013 15 16.0044V31.9937C15 34.2968 17.4878 35.741 19.4878 34.5988L33.4859 26.6041C34.4205 26.0703 34.9219 25.1593 34.99 24.2208C35.0226 24.0751 35.0226 23.9231 34.99 23.7773Z" fill="white"/>
                                                            </svg>
                                                        </span>
                                                        <span onclick="forwardVideo()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                                                <path d="M22 28V21L20 22.3125" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M25 27.5627C25.3134 27.8373 25.7029 28 26.125 28C27.1605 28 28 27.0206 28 25.8125C28 24.6044 27.1605 23.625 26.125 23.625C25.7029 23.625 25.3134 23.7877 25 24.0623L25.375 21H28" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M32.1839 15.8041C37.0309 20.1977 37.2961 27.579 32.7762 32.2905C28.2563 37.0021 20.663 37.2599 15.8161 32.8663C10.9691 28.4726 10.7039 21.0914 15.2238 16.3798C17.7947 13.6999 21.36 12.4609 24.8486 12.6992M23.1429 10L26.1992 12.8329L23.1429 15.871" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Course Info Section -->
                                        <div class="col-lg-5 d-flex flex-column justify-content-between">
                                        
                                            <div>
                                                <small class="text-muted" style="font-size:12px;">IT & Software > Network & Security > Ethical Hacking</small>
                                                <h3 class="fw-bold mt-2">Learn Ethical Hacking From Scratch</h3>
                                                <p class="text-secondary small">
                                                    Become an ethical hacker that can hack like black hat hackers and secure systems like cybersecurity experts.
                                                </p>
                                                <p class="mb-2" style="font-size:14px;">
                                                    <strong class="text-warning"> ★ 4.6 </strong> (132,725 ratings) · 654,813 students
                                                </p>
                                                <small class="text-muted" style="font-size:14px;">Created by <span id="creatorName" style="cursor: pointer;color:#009f91;">John Doe</span></small>
                                            </div>

                                            <div class="mt-3">
                                                <p class="fw-bold fs-5 mb-1">
                                                    <span class="text-dark">₦12,900</span>
                                                </p>
                                                <div class="d-flex gap-2 mb-2">
                                                    <!-- Add to Cart -->
                                                    <button id="addcartBtn" class="btn flex-fill fw-bold" style="background-color:#009f91;color:white;border-color:#009f91;outline: none; box-shadow: none;">
                                                        Add to cart
                                                    </button>

                                                    <!-- Wishlist -->
                                                    <button class="btn px-3 wishlistBtn" style="color:#009f91;border:1px solid #009f91;background-color:transparent;outline: none; box-shadow: none;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="#d32f2f">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                                                        </svg>
                                                    </button>
                                                </div>

                                                <!-- Buy Now -->
                                                <button id="buynowBtn" class="btn w-100 fw-bold" style="color:#009f91;border:1px solid #009f91;background-color:transparent;outline: none; box-shadow: none;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    Buy now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        
                                        <!-- First Column -->
                                        <div class="col-md-12 col-lg-7">
                                            
                                            <div class="row align-items-start p-3" style="font-size:14px;">
                                                <h5 class="mb-3" style="font-weight:500;color:#000000;">This course includes:</h5>
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

                                                <h5 class="mb-3 mt-4" style="font-weight:500;color:#000000;">Course Content</h5>
                                                <div class="col-md-12">
                                                    <div id="modulesAccordion">
                                                        <a class="btn btn-secondary btn-sm mb-2" data-bs-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                                                            Module 1 Name
                                                        </a>
                                                        <div id="collapseExample1" class="collapse card card-body" data-bs-parent="#modulesAccordion" style="font-size:13px;">
                                                            M1 Description
                                                        </div>
                                                        <br>
                                                        <a class="btn btn-secondary btn-sm mb-2" data-bs-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                                                            Module 2 Name
                                                        </a>
                                                        <div id="collapseExample2" class="collapse card card-body" data-bs-parent="#modulesAccordion" style="font-size:13px;">
                                                            M2 Description
                                                        </div>
                                                    </div>

                                                </div>

                                                <h5 class="mb-3 mt-4" style="font-weight:500;color:#000000;">Course Description</h5>
                                                <div class="col-md-12" id="instructorSection">
                                                    <p><small><strong>Last Update:</strong> June 2024</small></p>
                                                    <small>Entire Course Description</small>
                                                </div>

                                                <h5 class="mb-3 mt-4" style="font-weight:500;color:#000000;">About the Instructor</h5>
                                                <div class="col-md-12" id="instructorSection">
                                                    <div class="row">
                                                        <div class="col-md-4 col-lg-3 text-center">
                                                            <a href="app-contact-detail.html"><img src="../../assets/assets/images/users/1.jpg" alt="user" class="img-circle img-responsive"></a>
                                                        </div>
                                                        <div class="col-md-8 col-lg-9">
                                                            <h4 class="box-title m-b-0">Johnathan Doe</h4> 
                                                            <div class="mt-1" style="font-size:13px;">Web Designer</div>
                                                            
                                                            <div class="mt-1" style="font-size:13px;"><i class="fa fa-star" style="color:orange;"></i> 4.6 Rating/208,882 Reviews</div>
                                                            
                                                            <div class="mt-1" style="font-size:13px;"><i class="fa fa-users"></i> 906,251 Students</div>
                                                            
                                                            <div class="mt-1" style="font-size:13px;"><i class="fa fa-book"></i> 13 Courses</div>
                                                            
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 mt-2">
                                                            Instructor bio info
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-5">
                                            <div class="row">
                                                <h5 class="mb-3" style="font-weight:500;color:#000000;">More causes by <span id="creatorName" style="cursor: pointer;color:#009f91;">John Doe</span></small></h5>
                                                
                                                <div class="col-md-12 col-lg-12 mb-3">
                                                    <div style="border: 1px solid #e5e5e5; border-radius: 12px; overflow: hidden; background: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.05); font-family: Arial, sans-serif; display: flex;">

                                                        <!-- Left Image Section -->
                                                        <div style="position: relative; flex: 0 0 100px;">
                                                            <img src="../../assets/assets/images/users/5.jpg" alt="Course Image" style="width: 100%; height: 100%; object-fit: cover; display: block;">

                                                        </div>

                                                        <!-- Right Info Section -->
                                                        <div style="padding: 7px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                                            
                                                            <div style="display: flex; justify-content: space-between; font-size: 10px; color: #777;">
                                                                <span><i class="fa fa-book"></i> 23 Lessons</span>
                                                                <span data-bs-toggle="modal" data-bs-target="#coursedetail" style="cursor:pointer;"><i class="fa fa-user"></i> Harrison Stone</span>
                                                            </div>

                                                            <span class="modalcourses" style="font-size: 13px; font-weight: bold; color: #222; cursor: pointer;" onmouseover="this.style.color='#009f91'" onmouseout="this.style.color='#222'">
                                                                Data Competitive Strategy Law and Organization Course
                                                            </span>

                                                            <div data-bs-toggle="modal" data-bs-target="#coursedetail" style="cursor:pointer; display: flex; align-items: center; font-size: 10px;color: #f1c40f;">
                                                                <span>⭐⭐⭐⭐⭐</span>
                                                                <span style="color: #888; margin-left: 6px;">(09 Reviews)</span>
                                                            </div>

                                                            <hr style="border: none; border-top: 1px solid #eee;">

                                                            <div style="display: flex; justify-content: space-between; align-items: center; font-size: 12px;">
                                                                <span style="font-weight: bold; color: #009f91;">$674.00</span>
                                                                <span style="color: #555;"><i class="fas fa-user-graduate"></i> 673 Students</span>
                                                                <button class="wishlistBtn" style="color:#d32f2f;background-color:transparent;outline: none; box-shadow: none;border:none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="#d32f2f">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12 mb-3">
                                                    <div style="border: 1px solid #e5e5e5; border-radius: 12px; overflow: hidden; background: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.05); font-family: Arial, sans-serif; display: flex;">

                                                        <!-- Left Image Section -->
                                                        <div style="position: relative; flex: 0 0 100px;">
                                                            <img src="../../assets/assets/images/users/5.jpg" alt="Course Image" style="width: 100%; height: 100%; object-fit: cover; display: block;">

                                                        </div>

                                                        <!-- Right Info Section -->
                                                        <div style="padding: 7px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                                            
                                                            <div style="display: flex; justify-content: space-between; font-size: 10px; color: #777;">
                                                                <span><i class="fa fa-book"></i> 23 Lessons</span>
                                                                <span data-bs-toggle="modal" data-bs-target="#coursedetail" style="cursor:pointer;"><i class="fa fa-user"></i> Harrison Stone</span>
                                                            </div>

                                                            <span class="modalcourses" style="font-size: 13px; font-weight: bold; color: #222; cursor: pointer;" onmouseover="this.style.color='#009f91'" onmouseout="this.style.color='#222'">
                                                                Data Competitive Strategy Law and Organization Course
                                                            </span>

                                                            <div data-bs-toggle="modal" data-bs-target="#coursedetail" style="cursor:pointer; display: flex; align-items: center; font-size: 10px;color: #f1c40f;">
                                                                <span>⭐⭐⭐⭐⭐</span>
                                                                <span style="color: #888; margin-left: 6px;">(09 Reviews)</span>
                                                            </div>

                                                            <hr style="border: none; border-top: 1px solid #eee;">

                                                            <div style="display: flex; justify-content: space-between; align-items: center; font-size: 12px;">
                                                                <span style="font-weight: bold; color: #009f91;">$674.00</span>
                                                                <span style="color: #555;"><i class="fas fa-user-graduate"></i> 673 Students</span>
                                                                <button class="wishlistBtn" style="color:#d32f2f;background-color:transparent;outline: none; box-shadow: none;border:none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="#d32f2f">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12 mb-3">
                                                    <div style="border: 1px solid #e5e5e5; border-radius: 12px; overflow: hidden; background: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.05); font-family: Arial, sans-serif; display: flex;">

                                                        <!-- Left Image Section -->
                                                        <div style="position: relative; flex: 0 0 100px;">
                                                            <img src="../../assets/assets/images/users/5.jpg" alt="Course Image" style="width: 100%; height: 100%; object-fit: cover; display: block;">

                                                        </div>

                                                        <!-- Right Info Section -->
                                                        <div style="padding: 7px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                                            
                                                            <div style="display: flex; justify-content: space-between; font-size: 10px; color: #777;">
                                                                <span><i class="fa fa-book"></i> 23 Lessons</span>
                                                                <span data-bs-toggle="modal" data-bs-target="#coursedetail" style="cursor:pointer;"><i class="fa fa-user"></i> Harrison Stone</span>
                                                            </div>

                                                            <span class="modalcourses" style="font-size: 13px; font-weight: bold; color: #222; cursor: pointer;" onmouseover="this.style.color='#009f91'" onmouseout="this.style.color='#222'">
                                                                Data Competitive Strategy Law and Organization Course
                                                            </span>

                                                            <div data-bs-toggle="modal" data-bs-target="#coursedetail" style="cursor:pointer; display: flex; align-items: center; font-size: 10px;color: #f1c40f;">
                                                                <span>⭐⭐⭐⭐⭐</span>
                                                                <span style="color: #888; margin-left: 6px;">(09 Reviews)</span>
                                                            </div>

                                                            <hr style="border: none; border-top: 1px solid #eee;">

                                                            <div style="display: flex; justify-content: space-between; align-items: center; font-size: 12px;">
                                                                <span style="font-weight: bold; color: #009f91;">$674.00</span>
                                                                <span style="color: #555;"><i class="fas fa-user-graduate"></i> 673 Students</span>
                                                                <button class="wishlistBtn" style="color:#d32f2f;background-color:transparent;outline: none; box-shadow: none;border:none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="#d32f2f">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12 mb-3">
                                                    <div style="border: 1px solid #e5e5e5; border-radius: 12px; overflow: hidden; background: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.05); font-family: Arial, sans-serif; display: flex;">

                                                        <!-- Left Image Section -->
                                                        <div style="position: relative; flex: 0 0 100px;">
                                                            <img src="../../assets/assets/images/users/5.jpg" alt="Course Image" style="width: 100%; height: 100%; object-fit: cover; display: block;">

                                                        </div>

                                                        <!-- Right Info Section -->
                                                        <div style="padding: 7px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                                            
                                                            <div style="display: flex; justify-content: space-between; font-size: 10px; color: #777;">
                                                                <span><i class="fa fa-book"></i> 23 Lessons</span>
                                                                <span data-bs-toggle="modal" data-bs-target="#coursedetail" style="cursor:pointer;"><i class="fa fa-user"></i> Harrison Stone</span>
                                                            </div>

                                                            <span class="modalcourses" style="font-size: 13px; font-weight: bold; color: #222; cursor: pointer;" onmouseover="this.style.color='#009f91'" onmouseout="this.style.color='#222'">
                                                                Data Competitive Strategy Law and Organization Course
                                                            </span>

                                                            <div data-bs-toggle="modal" data-bs-target="#coursedetail" style="cursor:pointer; display: flex; align-items: center; font-size: 10px;color: #f1c40f;">
                                                                <span>⭐⭐⭐⭐⭐</span>
                                                                <span style="color: #888; margin-left: 6px;">(09 Reviews)</span>
                                                            </div>

                                                            <hr style="border: none; border-top: 1px solid #eee;">

                                                            <div style="display: flex; justify-content: space-between; align-items: center; font-size: 12px;">
                                                                <span style="font-weight: bold; color: #009f91;">$674.00</span>
                                                                <span style="color: #555;"><i class="fas fa-user-graduate"></i> 673 Students</span>
                                                                <button class="wishlistBtn" style="color:#d32f2f;background-color:transparent;outline: none; box-shadow: none;border:none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="#d32f2f">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12 mb-3 d-flex justify-content-end">
                                                    <a href="./" type="button"class="btn btn-sm" style="border: 1px solid #009f91; color: #009f91; border-radius: 20px; font-weight: 500;outline: none; box-shadow: none;">
                                                        View More Courses
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container my-4 position-relative">
                                            <h5 class="fw-bold mb-3">Ratings & Reviews</h5>

                                            <!-- Left Arrow -->
                                            <button class="arrow-btn position-absolute top-50 start-0 translate-middle-y" id="scrollLeft">
                                                &#10094;
                                            </button>

                                            <!-- Scrollable Cards -->
                                            <div class="d-flex flex-row reviews-scroll pb-3" id="reviewsContainer">
                                                <!-- Review Card -->
                                                <div class="card shadow-sm p-3" style="min-width: 280px; border-radius: 12px;">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="avatar-initials">JD</div>
                                                        <div class="ms-2">
                                                        <h6 class="mb-0 fw-bold">Jane Doe</h6>
                                                        <small class="text-muted">2 days ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="mb-2" style="color: #f1c40f;">⭐⭐⭐⭐⭐</div>
                                                    <p class="mb-0 text-muted" style="font-size: 14px;">
                                                        Absolutely loved the course! The explanations were clear and practical examples made it even better.
                                                    </p>
                                                </div>

                                                <!-- Review Card -->
                                                <div class="card shadow-sm p-3" style="min-width: 280px; border-radius: 12px;">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="avatar-initials">MS</div>
                                                        <div class="ms-2">
                                                        <h6 class="mb-0 fw-bold">Michael Smith</h6>
                                                        <small class="text-muted">1 week ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="mb-2" style="color: #f1c40f;">⭐⭐⭐⭐☆</div>
                                                    <p class="mb-0 text-muted" style="font-size: 14px;">
                                                        Great content but could use more real-world examples. Still a solid course overall.
                                                    </p>
                                                </div>

                                                <!-- Review Card -->
                                                <div class="card shadow-sm p-3" style="min-width: 280px; border-radius: 12px;">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="avatar-initials">SL</div>
                                                        <div class="ms-2">
                                                        <h6 class="mb-0 fw-bold">Sarah Lee</h6>
                                                        <small class="text-muted">3 weeks ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="mb-2" style="color: #f1c40f;">⭐⭐⭐⭐⭐</div>
                                                    <p class="mb-0 text-muted" style="font-size: 14px;">
                                                        Learned so much from this course! Highly recommend to beginners and intermediates alike.
                                                    </p>
                                                </div>

                                                <!-- Review Card -->
                                                <div class="card shadow-sm p-3" style="min-width: 280px; border-radius: 12px;">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="avatar-initials">SL</div>
                                                        <div class="ms-2">
                                                        <h6 class="mb-0 fw-bold">Sarah Lee</h6>
                                                        <small class="text-muted">3 weeks ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="mb-2" style="color: #f1c40f;">⭐⭐⭐⭐⭐</div>
                                                    <p class="mb-0 text-muted" style="font-size: 14px;">
                                                        Learned so much from this course! Highly recommend to beginners and intermediates alike.
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Right Arrow -->
                                            <button class="arrow-btn position-absolute top-50 end-0 translate-middle-y" id="scrollRight">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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

    <script src="../../assets/assets/plugins/toast-master/js/jquery.toast.js"></script>
    <script src="../../assets/js/toastr.js"></script>

    <script src="../../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <script src="../../assets/assets/plugins/notify/wnoty.js"></script>
    
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

        document.querySelector('.video-wrapper').addEventListener('click', function(e) {
            if (!e.target.closest('.control-buttons') && !e.target.closest('#progressContainer')) {
                togglePlay();
            }
        });

        document.addEventListener("DOMContentLoaded", loadYouTubePlayer);
    </script>

    <script>
        document.getElementById('creatorName').addEventListener('click', function () {
            // Scroll smoothly to the instructor section
            document.getElementById('instructorSection').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    </script>

    <script>
        $('body').on('click', '.wishlistBtn', function (e) {
            e.preventDefault(); // prevent navigation if it's a link

            let $svgPath = $(this).find("svg path");

            if ($svgPath.attr("stroke") === "red") {
                // Back to theme color
                $svgPath.attr("stroke", "#009f91").attr("fill", "none");

                $.wnoty({
                    type: 'error',
                    message: 'Removed from wishlist'
                });
            } else {
                // Change to red when active
                $svgPath.attr("stroke", "red").attr("fill", "red");

                $.wnoty({
                    type: 'success',
                    message: 'Added to wishlist'
                });
            }
        });

        $('body').on('click', '#addcartBtn', function(){

            $.wnoty({
                type: 'success',
                message: 'Added to Cart'
            });
        });

        $('body').on('click', '#buynowBtn', function(){
            // Open your course details modal
            $('#coursedetail').modal('hide');

            // Close your course details modal
            // $('#coursedetail').modal('show');
        });

        const container = document.getElementById('reviewsContainer');
        document.getElementById('scrollLeft').addEventListener('click', () => {
            container.scrollBy({ left: -300, behavior: 'smooth' });
        });
        document.getElementById('scrollRight').addEventListener('click', () => {
            container.scrollBy({ left: 300, behavior: 'smooth' });
        });

        $('body').on('click','.modalcourses',function(){
            alert('change modal content to show based on the newly clicked course');
        });
    </script>
</body>

</html>