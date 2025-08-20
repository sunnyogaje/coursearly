<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Basics -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />

    <!-- Title -->
    <title>Profile | Coursearly</title>
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

    <link href="../../assets/assets/plugins/notify/wnoty.css" rel="stylesheet">
    <!-- Custom CSS -->
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
                    <h4 class="text-themecolor">Profile</h4>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)" style="color: #009f91;">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30">
                                    <img src="../../assets/assets/images/users/5.jpg" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10">Hanna Gover</h4>
                                    <h6 class="card-subtitle">johnathan@admin.com</h6>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile"
                                        role="tab">Profile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#notification"
                                        role="tab">Notifications</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wishlist"
                                        role="tab">WishList</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#phistory"
                                        role="tab">Purchase History</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">Johnathan Deo</p>
                                            </div>
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">(123) 456 7890</p>
                                            </div>
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">johnathan@admin.com</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Johnathan Doe"
                                                        class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com"
                                                        class="form-control form-control-line" name="example-email"
                                                        id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890"
                                                        class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Designation</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890"
                                                        class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Bio</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5"
                                                        class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane" id="notification" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="comment-widgets m-b-20">
                                                <!-- Comment Row -->
                                                <div class="d-flex flex-row comment-row" style="cursor: pointer;"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <div class="p-2">
                                                        <span class="round">
                                                            <img src="../../assets/assets/images/users/1.jpg" alt="user"
                                                                width="50"></span>
                                                    </div>
                                                    <div class="comment-text w-100">
                                                        <h5>Notification Title</h5>
                                                        <div class="comment-footer">
                                                            <span class="date">April 14, 2016</span>
                                                        </div>
                                                        <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the
                                                            printing and type setting industry. Lorem Ipsum has beenorem
                                                            Ipsum is simply dummy text of the printing and type setting
                                                            industry.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="wishlist" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row g-4">

                                            <div class="col-md-12 col-lg-6 m-b-15">
                                                <div
                                                    style="border: 1px solid #e5e5e5; border-radius: 12px; overflow: hidden; background: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.05); font-family: Arial, sans-serif;">

                                                    <!-- Top Image with Category Tag + Wishlist -->
                                                    <div style="position: relative;">
                                                        <img src="../../assets/assets/images/users/5.jpg"
                                                            alt="Course Image"
                                                            style="width: 100%; display: block; object-fit: cover; height: 180px;">

                                                        <!-- Category -->
                                                        <span
                                                            style="position: absolute; top: 12px; left: 12px; background: #009f91; color: white; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: bold;">
                                                            Data Science
                                                        </span>

                                                        <!-- Wishlist Heart -->
                                                        <button class="wishlistBtn"
                                                            style="color:#009f91;background-color:transparent;outline: none;position: absolute; top: 12px; right: 12px; background: white; border-radius: 50%; width: 34px; height: 34px; display: flex; align-items: center; justify-content: center; font-size: 16px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.1); transition: all 0.3s;border:none;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" fill="none" viewBox="0 0 24 24"
                                                                stroke="#d32f2f">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
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
                                                                style="cursor:pointer;"><i class="fa fa-user"></i>
                                                                Harrison Stone</span>
                                                        </div>

                                                        <!-- Title -->
                                                        <h5 style="margin: 0 0 20px 0; font-size: 15px; font-weight: bold; color: #222; line-height: 1.4; cursor: pointer;"
                                                            onmouseover="this.style.color='#009f91'"
                                                            onmouseout="this.style.color='#222'" data-bs-toggle="modal"
                                                            data-bs-target="#coursedetail">
                                                            Data Competitive Strategy Law and Organization Course
                                                        </h5>

                                                        <!-- Rating -->
                                                        <div data-bs-toggle="modal" data-bs-target="#coursedetail"
                                                            style="cursor:pointer;display: flex; align-items: center; font-size: 13px; margin-bottom: 20px; color: #f1c40f;">
                                                            <span>⭐⭐⭐⭐⭐</span>
                                                            <span style="color: #888; margin-left: 6px;">(09
                                                                Reviews)</span>
                                                        </div>

                                                        <hr
                                                            style="border: none; border-top: 1px solid #eee; margin: 20px 0;">

                                                        <!-- Footer -->
                                                        <div
                                                            style="display: flex; justify-content: space-between; align-items: center; font-size: 14px;">
                                                            <span
                                                                style="font-weight: bold; color: #009f91; font-size: 16px;">$674.00</span>
                                                            <span style="color: #555;"><i
                                                                    class="fas fa-user-graduate"></i> 673
                                                                Students</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-6 m-b-15">
                                                <div
                                                    style="border: 1px solid #e5e5e5; border-radius: 12px; overflow: hidden; background: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.05); font-family: Arial, sans-serif;">

                                                    <!-- Top Image with Category Tag + Wishlist -->
                                                    <div style="position: relative;">
                                                        <img src="../../assets/assets/images/users/5.jpg"
                                                            alt="Course Image"
                                                            style="width: 100%; display: block; object-fit: cover; height: 180px;">

                                                        <!-- Category -->
                                                        <span
                                                            style="position: absolute; top: 12px; left: 12px; background: #009f91; color: white; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: bold;">
                                                            Data Science
                                                        </span>

                                                        <!-- Wishlist Heart -->
                                                        <button class="wishlistBtn"
                                                            style="color:#009f91;background-color:transparent;outline: none;position: absolute; top: 12px; right: 12px; background: white; border-radius: 50%; width: 34px; height: 34px; display: flex; align-items: center; justify-content: center; font-size: 16px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.1); transition: all 0.3s;border:none;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" fill="none" viewBox="0 0 24 24"
                                                                stroke="#d32f2f">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
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
                                                                style="cursor:pointer;"><i class="fa fa-user"></i>
                                                                Harrison Stone</span>
                                                        </div>

                                                        <!-- Title -->
                                                        <h5 style="margin: 0 0 20px 0; font-size: 15px; font-weight: bold; color: #222; line-height: 1.4; cursor: pointer;"
                                                            onmouseover="this.style.color='#009f91'"
                                                            onmouseout="this.style.color='#222'" data-bs-toggle="modal"
                                                            data-bs-target="#coursedetail">
                                                            Data Competitive Strategy Law and Organization Course
                                                        </h5>

                                                        <!-- Rating -->
                                                        <div data-bs-toggle="modal" data-bs-target="#coursedetail"
                                                            style="cursor:pointer;display: flex; align-items: center; font-size: 13px; margin-bottom: 20px; color: #f1c40f;">
                                                            <span>⭐⭐⭐⭐⭐</span>
                                                            <span style="color: #888; margin-left: 6px;">(09
                                                                Reviews)</span>
                                                        </div>

                                                        <hr
                                                            style="border: none; border-top: 1px solid #eee; margin: 20px 0;">

                                                        <!-- Footer -->
                                                        <div
                                                            style="display: flex; justify-content: space-between; align-items: center; font-size: 14px;">
                                                            <span
                                                                style="font-weight: bold; color: #009f91; font-size: 16px;">$674.00</span>
                                                            <span style="color: #555;"><i
                                                                    class="fas fa-user-graduate"></i> 673
                                                                Students</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="phistory" role="tabpanel">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-2 align-items-center mb-3"
                                            style="font-size:12px;">
                                            <input id="ph-search" class="form-control form-control-sm"
                                                placeholder="Search orders, items, IDs"
                                                style="max-width:240px; font-size:12px;">

                                            <select id="ph-status" class="form-select form-select-sm"
                                                style="max-width:160px; font-size:12px;">
                                                <option value="" style="font-size:12px;">All statuses</option>
                                                <option style="font-size:12px;">Completed</option>
                                                <option style="font-size:12px;">Pending</option>
                                                <option style="font-size:12px;">Failed</option>
                                            </select>
                                        </div>

                                        <style>
                                            /* placeholder needs CSS, can’t be inline */
                                            #ph-search::placeholder {
                                                font-size: 12px;
                                            }
                                        </style>


                                        <div class="table-responsive">
                                            <table id="ph-table" class="table align-middle mb-0">
                                                <thead class="table-light">
                                                    <tr style="font-size: 12px;">
                                                        <th>Item</th>
                                                        <th class="d-none d-md-table-cell">Order ID</th>
                                                        <th>Date</th>
                                                        <th class="d-none d-lg-table-cell">Method</th>
                                                        <th class="text-end">Amount</th>
                                                        <th>Status</th>
                                                        <th class="text-end">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="font-size: 12px;">
                                                    <!-- Row -->
                                                    <tr data-status="Completed">
                                                        <td>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <img src="../../assets/assets/images/users/5.jpg" alt=""
                                                                    class="rounded"
                                                                    style="width:44px;height:44px;object-fit:cover;">
                                                                <div>
                                                                    <div class="fw-semibold">Data Competitive
                                                                        Strategy</div>
                                                                    <div class="text-muted small d-md-none">
                                                                        #TXN-239847 • Visa •••• 8842</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="d-none d-md-table-cell text-muted">#TXN-239847
                                                        </td>
                                                        <td>20 Aug 2025</td>
                                                        <td class="d-none d-lg-table-cell text-muted">Visa •••• 8842
                                                        </td>
                                                        <td class="text-end fw-semibold">₦674,000</td>
                                                        <td><span
                                                                class="badge bg-success-subtle text-success">Completed</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <button class="btn btn-sm btn-outline-secondary"
                                                                data-bs-toggle="modal" data-bs-target="#receiptModal"
                                                                data-order="#TXN-239847">View</button>
                                                        </td>
                                                    </tr>

                                                    <tr data-status="Pending">
                                                        <td>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <img src="../../assets/assets/images/users/6.jpg"
                                                                    class="rounded"
                                                                    style="width:44px;height:44px;object-fit:cover;">
                                                                <div>
                                                                    <div class="fw-semibold">Intro to Python
                                                                        (Beginner)</div>
                                                                    <div class="text-muted small d-md-none">
                                                                        #TXN-239990 • Paystack</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="d-none d-md-table-cell text-muted">#TXN-239990
                                                        </td>
                                                        <td>18 Aug 2025</td>
                                                        <td class="d-none d-lg-table-cell text-muted">Paystack</td>
                                                        <td class="text-end fw-semibold">₦95,000</td>
                                                        <td><span
                                                                class="badge bg-warning-subtle text-warning">Pending</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <button class="btn btn-sm btn-outline-secondary"
                                                                data-bs-toggle="modal" data-bs-target="#receiptModal"
                                                                data-order="#TXN-239990">View</button>
                                                        </td>
                                                    </tr>

                                                    <tr data-status="Failed">
                                                        <td>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <img src="../../assets/assets/images/users/7.jpg"
                                                                    class="rounded"
                                                                    style="width:44px;height:44px;object-fit:cover;">
                                                                <div>
                                                                    <div class="fw-semibold">Advanced React Patterns
                                                                    </div>
                                                                    <div class="text-muted small d-md-none">
                                                                        #TXN-240011 • Flutterwave</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="d-none d-md-table-cell text-muted">#TXN-240011
                                                        </td>
                                                        <td>12 Aug 2025</td>
                                                        <td class="d-none d-lg-table-cell text-muted">Flutterwave
                                                        </td>
                                                        <td class="text-end fw-semibold">₦120,000</td>
                                                        <td><span
                                                                class="badge bg-danger-subtle text-danger">Failed</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <button class="btn btn-sm btn-outline-secondary"
                                                                data-bs-toggle="modal" data-bs-target="#receiptModal"
                                                                data-order="#TXN-240011">View</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div
                                            class="card-footer bg-white d-flex justify-content-between align-items-center">
                                            <small class="text-muted">Showing 1–3 of 3</small>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-outline-secondary disabled">Prev</button>
                                                <button class="btn btn-outline-secondary">Next</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Receipt Modal -->
                                    <div class="modal fade" id="receiptModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title">Receipt</h6>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <div class="fw-semibold">Order</div>
                                                            <div id="r-order" class="text-muted">#—</div>
                                                        </div>
                                                        <div class="text-end">
                                                            <div class="fw-semibold">Amount</div>
                                                            <div id="r-amount" class="text-muted">—</div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="small text-muted">
                                                        <div>Date: <span id="r-date">—</span></div>
                                                        <div>Method: <span id="r-method">—</span></div>
                                                        <div>Item: <span id="r-item">—</span></div>
                                                        <div>Status: <span id="r-status">—</span></div>
                                                        <div>Customer: <span id="r-buyer">You</span></div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-outline-secondary btn-sm"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary btn-sm">Download Invoice</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Notification Title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Notification Description
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
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

        document.querySelector('.video-wrapper').addEventListener('click', function (e) {
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

        $('body').on('click', '#addcartBtn', function () {

            $.wnoty({
                type: 'success',
                message: 'Added to Cart'
            });
        });

        $('body').on('click', '#buynowBtn', function () {
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

        $('body').on('click', '.modalcourses', function () {
            alert('change modal content to show based on the newly clicked course');
        });
    </script>

    <script>
        // tiny client-side search & filter
        const search = document.getElementById('ph-search');
        const status = document.getElementById('ph-status');
        const rows = Array.from(document.querySelectorAll('#ph-table tbody tr'));

        function applyFilter() {
            const q = (search.value || '').toLowerCase();
            const s = status.value;
            rows.forEach(tr => {
                const text = tr.innerText.toLowerCase();
                const okQ = !q || text.includes(q);
                const okS = !s || tr.dataset.status === s;
                tr.style.display = (okQ && okS) ? '' : 'none';
            });
        }
        search.addEventListener('input', applyFilter);
        status.addEventListener('change', applyFilter);

        // fill modal with row data
        const receiptModal = document.getElementById('receiptModal');
        receiptModal.addEventListener('show.bs.modal', e => {
            const btn = e.relatedTarget.closest('tr');
            document.getElementById('r-order').textContent = btn.querySelector('td.d-none.d-md-table-cell, .text-muted')?.textContent.trim() || '';
            document.getElementById('r-item').textContent = btn.querySelector('.fw-semibold')?.textContent.trim() || '';
            document.getElementById('r-date').textContent = btn.children[2].textContent.trim();
            document.getElementById('r-method').textContent = (btn.querySelector('.d-none.d-lg-table-cell')?.textContent || '').trim();
            document.getElementById('r-amount').textContent = btn.children[4].textContent.trim();
            document.getElementById('r-status').textContent = btn.children[5].innerText.trim();
        });
    </script>
</body>

</html>