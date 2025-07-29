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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- CSS Files -->
    <link rel="stylesheet" href="../../style.css" />

    <style>
        .instructor-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
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
            .instructor-card .row > div {
            flex: 0 0 100%;
            max-width: 100%;
            }

            .action-buttons {
            margin-top: 10px;
            }
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
                            <div class="col-lg-7 col-md-12 m-b-15 justify-content-end d-flex">
                                <button type="button" class="btn waves-effect waves-light btn-sm p-10" data-toggle="modal" data-target="#createcourse1" style="background-color:#009f91;color:#ffffff;font-size:13px;outline: none; box-shadow: none;">Create course</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-md-6 m-b-15">
                        <div class="instructor-card">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="../../assets/assets/images/users/5.jpg" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="Java Course">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body d-flex flex-column h-100">
                                        <div class="mb-2">
                                            <div class="course-title">Java Tutorial for Beginners</div>
                                            <div class="course-updated">Last updated: Mar 2023</div>
                                        </div>
                                        <div class="mb-3">
                                            <span class="course-status status-draft"><i class="fas fa-pen-to-square me-1"></i> Draft</span>
                                        </div>
                                        <div class="action-buttons mt-auto">
                                            <button class="btn-edit m-b-10"><i class="fas fa-edit me-1"></i>Edit</button>
                                            <button class="btn-delete m-b-10"><i class="fas fa-trash-alt me-1"></i>Delete</button>
                                            <button class="btn-request m-b-10"><i class="fas fa-paper-plane me-1"></i>Request Review</button>
                                            <button class="btn-publish m-b-10"><i class="fas fa-upload me-1"></i>Publish</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="createcourse1" tabindex="-1" aria-labelledby="createcourse1Label" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header" style="display: flex; align-items: center; justify-content: space-between; gap: 1rem;">

                            <!-- Logo Left -->
                            <div style="flex: 0 0 auto;">
                                <a class="navbar-brand" href="../../" target="_blank" style="display: flex; align-items: center;">
                                    <img src="../../assets/images/icon.svg" alt="homepage" width="35" class="dark-logo" />
                                </a>
                            </div>

                            <!-- Title Center -->
                            <div style="flex: 1; text-align: center;">
                                <h2 class="fw-bold mb-0" style="color: #009f91; font-weight: 500;">Create Course</h2>
                            </div>

                            <!-- Close Button Right -->
                            <div style="flex: 0 0 auto;">
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
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
                                                        <label for="courseTitle" class="form-label m-t-20"><small>Course Title</small></label>
                                                        <input type="text" class="form-control" id="courseTitle" placeholder="The main name of your course" style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">
                                                    
                                                        <label for="coursesubTitle" class="form-label m-t-20"><small>Subtitle</small></label>
                                                        <input type="text" class="form-control" id="coursesubTitle" placeholder="A short pitch or complement to the title" style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">
                                                    
                                                        <label for="courseCategory" class="form-label m-t-20"><small>Category</small></label>
                                                        <select class="form-select" id="courseCategory" style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">
                                                            <option selected>Select Category</option>
                                                            <option value="1">Web Development</option>
                                                        </select>

                                                        <label for="courseSubcategory" class="form-label m-t-20"><small>Subcategory</small></label>
                                                        <select class="form-select" id="courseSubcategory" style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">
                                                            <option selected>Select Subcategory</option>
                                                            <option value="1">HTML</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label for="courselevel" class="form-label m-t-20"><small>Learning Level</small></label>
                                                        <select class="form-select" id="courselevel" style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">
                                                            <option selected>Select Level</option>
                                                            <option value="1">Beginner</option>
                                                        </select>

                                                        <label for="courseLanguage" class="form-label m-t-20"><small>Language</small></label>
                                                        <select class="form-select" id="courseLanguage" style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">
                                                            <option selected>Select Language</option>
                                                            <option value="1">English</option>
                                                        </select>
                                                        
                                                        <label for="courseTags" class="form-label m-t-20"><small>Tags</small></label><br>
                                                        <input type="text" data-role="tagsinput" class="form-control" id="courseTags" placeholder="Keywords that help with discoverability" style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;"/>

                                                        <div class="row">
                                                            <!-- Currency Select -->
                                                            <div class="col-md-3 m-t-30">
                                                                <label class="form-label"><small>Currency</small></label>
                                                                <select class="form-select" style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">
                                                                    <option>USD</option>
                                                                    <option>NGN</option>
                                                                </select>
                                                            </div>

                                                            <!-- Price Tier Select -->
                                                            <div class="col-md-9 m-t-30">
                                                                <label class="form-label"><small>Course Price (Max: 10,000) <i class="ti-info-alt" style="font-size: 13px;"></i></small></label>
                                                                <input type="text" class="form-control" id="courseTitle" placeholder="Not more than 10,000" style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;">
                                                    
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
                                                                    <label for="input-file-max-fs" class="form-label m-t-20"><small>Course Thumbnail (Course cover image (ideal size e.g., 750x422px))</small></label>
                                                                    <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
                                                                </div>

                                                            </div>
                                                            <div class="col-md-6">
                                                                        
                                                                <div class="form-group">
                                                                    <label for="input-file-max-fs-video" class="form-label m-t-20"><small>Promotional Video (Optional but recommended for marketing)</small></label>
                                                                    <input type="file" id="input-file-max-fs-video" class="dropify" data-max-file-size="100M" />
                                                                </div>

                                                            </div>
                                                            <div class="col-md-12">
                                                                        
                                                                <div class="form-group" >
                                                                    <label for="description" class="form-label m-t-20"><small>Course Description</small></label>
                                                                    <textarea class="textarea_editor form-control" id="description" rows="5" placeholder="Full explanation of what the course covers, List of learning outcomes, Things students should know or have" style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;"></textarea>
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
                                                                            <h5 class="mt-0 mb-1" style="font-weight:500;">Sections/Modules</h5>

                                                                            <div id="sectionWrapper" class="sortable-wrapper">
                                                                                <div class="input-group mt-3 mb-3 section-item">
                                                                                    <!-- Move Icon (drag handle) -->
                                                                                    <div class="input-group-append" style="cursor: move;">
                                                                                        <span class="input-group-text drag-handle" style="border-radius: 0.25rem 0 0 0.25rem;background-color: #009f91;color: #ffffff;border:1px solid #009f91;">
                                                                                            <i class="ti-move"></i>
                                                                                        </span>
                                                                                    </div>

                                                                                    <!-- Input -->
                                                                                    <input type="text" class="form-control" placeholder="Section/Module Name"
                                                                                    style="font-size: 0.85rem;border:1px solid #009f91;outline: none; box-shadow: none;">

                                                                                    <!-- Trash Icon -->
                                                                                    <div class="input-group-append" onclick="removeSection(this)" style="cursor: pointer;">
                                                                                        <span class="input-group-text" style="background-color: red;color: #ffffff;border:1px solid red;">
                                                                                            <i class="ti-trash"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="input-group mt-3 mb-3 section-item">
                                                                                <!-- Input -->
                                                                                <input type="text" class="form-control" value="Quiz" placeholder="Course Quiz"
                                                                                style="font-size: 0.85rem;border:1px solid #009f91;outline: none; box-shadow: none;">
                                                                            </div>

                                                                            <!-- Add Button -->
                                                                            <div class="align-items-end justify-content-end d-flex mb-3">
                                                                            <button type="button" class="btn btn-sm"
                                                                                style="background-color:#007ffb;color:#ffffff;font-size:14px;font-weight:600;outline: none; box-shadow: none;"
                                                                                onclick="addSection()">
                                                                                <i class="ti-plus"> Add Section/Module</i>
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
                                                                    <a class="nav-link active text-white rounded" data-bs-toggle="tab" href="#m1" role="tab"
                                                                        style="font-size: 0.85rem; background-color: #009f91;">
                                                                        <i class="ti-move me-2"></i> Module 1 Name
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item mb-2 drag-tab-handle">
                                                                    <a class="nav-link text-dark bg-light rounded" data-bs-toggle="tab" href="#m3" role="tab"
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
                                                            <div class="tab-pane fade show active" id="m1" role="tabpanel">
                                                                <div class="card shadow-sm p-4">
                                                                    <small class="mb-4 d-block fw-semibold text-dark fs-6">Module 1 Name</small>

                                                                    <!-- Module Description -->
                                                                    <div class="mb-4">
                                                                        <label class="fw-medium">Module Description</label>
                                                                        <textarea class="form-control textarea_editor" rows="3"
                                                                            placeholder="Describe what this module covers..."
                                                                            style="font-size: 0.85rem; border:1px solid #009f91;"></textarea>
                                                                    </div>

                                                                    <!-- Video Upload or Link -->
                                                                    <div class="mb-4">
                                                                        <label class="fw-medium">Upload Video or Provide Link</label>
                                                                        <div class="row g-3">
                                                                            <div class="col-12 col-md-6">
                                                                                <small class="text-muted">Upload Video File</small>
                                                                                <input type="file" class="form-control"
                                                                                    style="font-size: 0.85rem; border:1px solid #009f91;">
                                                                            </div>
                                                                            <div class="col-12 col-md-6">
                                                                                <small class="text-muted">Or YouTube/Vimeo Link</small>
                                                                                <input type="url" class="form-control" placeholder="https://youtube.com/..."
                                                                                    style="font-size: 0.85rem; border:1px solid #009f91;">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Text Resource -->
                                                                    <div class="mb-4">
                                                                        <label class="fw-medium">Text Resource</label>
                                                                        <div class="row g-3">
                                                                            <div class="col-12 col-md-6">
                                                                                <small class="text-muted">Upload PDF or Document</small>
                                                                                <input type="file" class="form-control"
                                                                                    style="font-size: 0.85rem; border:1px solid #009f91;">
                                                                            </div>
                                                                            <div class="col-12 col-md-6">
                                                                                <small class="text-muted">Or Add Link</small>
                                                                                <input type="url" class="form-control" placeholder="https://link.com/resource.pdf"
                                                                                    style="font-size: 0.85rem; border:1px solid #009f91;">
                                                                            </div>
                                                                            <div class="col-12 mt-2">
                                                                                <small class="text-muted">Or Write Directly</small>
                                                                                <textarea class="form-control textarea_editor" rows="2"
                                                                                    placeholder="Type the content here..."
                                                                                    style="font-size: 0.85rem; border:1px solid #009f91;"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Quiz Section -->
                                                                    <div id="quizSection"></div>

                                                                    <div class="text-end mt-3">
                                                                        <button type="button" class="btn btn-sm text-white" onclick="addQuestion()"
                                                                            style="background-color: #007ffb;">
                                                                            <i class="ti-plus me-1"></i> Add Question for this Module
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Quiz Tab -->
                                                            <div class="tab-pane fade" id="m3" role="tabpanel">
                                                                <div class="card shadow-sm p-4">
                                                                    <small class="mb-4 d-block fw-semibold text-dark fs-6">Module Quiz</small>
                                                                    <div id="quizSection1"></div>
                                                                    <div class="text-end mt-3">
                                                                        <button type="button" class="btn btn-sm text-white" onclick="addQuestion1()"
                                                                            style="background-color: #007ffb;">
                                                                            <i class="ti-plus me-1"></i> Add Quiz Question
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
        $(document).ready(function() {
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

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
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

                // 'success', 'info', 'error', 'warning'
                type: 'success',
                message: 'submit'

            });

        });
    </script>
</body>

</html>