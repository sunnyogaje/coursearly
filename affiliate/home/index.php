<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Basics -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />

    <!-- Title -->
    <title>Dashboard | Coursearly</title>
    <meta name="description" content="Login to your Coursearly account to access your courses, progress, and settings." />

    <!-- Prevent Indexing -->
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.svg" type="image/svg+xml" />

    <link href="../../assets/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- chartist CSS 1st one-->
    <link href="../../assets/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../../assets/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../../assets/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../../assets/assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="../../assets/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../../assets/css/colors/blue.css" id="theme" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body class="fix-sidebar fix-header card-no-border mini-sidebar show-sidebar">
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
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
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
                    <h5 class="text-themecolor">Dashboard</h5>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)" style="color:#009f91;">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
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
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-9 col-xlg-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-wrap">
                                    <div>
                                        <h5 class="card-title">Analytics Overview</h5>
                                        <h6 class="card-subtitle">Discover key insights about how you're performing</h6>
                                    </div>
                                    <div class="ml-auto align-self-center">
                                        <ul class="list-inline m-b-0">
                                            <li>
                                                <select class="form-select" style="outline: none; box-shadow: none;font-size: 0.85rem;border:1px solid #009f91;">
                                                    <option>Last 7 Days</option>
                                                    <option>Last 30 Days</option>
                                                    <option>Last 12 Months</option>
                                                    <option>All Time</option>
                                                </select>
                                            </li>
                                            <li>
                                                <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Instructor Earning</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="chart-container">
                                    <canvas id="analyticsChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <select class="form-select" style="outline: none; box-shadow: none;font-size: 0.85rem;border:1px solid #009f91;">
                                <option>My Instructor Earnings</option>
                                <option>My Affiliate Earnings</option>
                            </select>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Revenue</h5>
                                <div class="d-flex">
                                    <div class="align-self-center">
                                        <h6 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i>  ₦12,456</h6></div>
                                    <div class="ml-auto">
                                        <div id="spark8"></div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="align-self-center">
                                        <small class="m-b-0" style="font-size:13px;">₦12,456 This Month</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Enrollment</h5>
                                <div class="d-flex">
                                    <div class="align-self-center">
                                        <h6 class="font-medium m-b-0"><i class="ti-angle-down text-danger"></i>  456</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <div id="spark9"></div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="align-self-center">
                                        <small class="m-b-0" style="font-size:13px;">₦12,456 This Month</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Instructor Rating</h5>
                                <div class="d-flex">
                                    <div class="align-self-center">
                                        <h6 class="font-medium m-b-0"><i class="ti-angle-up text-success"></i> 2456</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <div id="spark10"></div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="align-self-center">
                                        <small class="m-b-0" style="font-size:13px;">₦12,456 This Month</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-4 col-xlg-3">
                        <div class="card card-inverse card-info">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="ti-book"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Total Courses</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <h2 class="font-light text-white"><sup><small><i class="ti-arrow-up"></i></small></sup>35487</h2>
                                    </div>
                                    <div class="col-8 p-t-10 p-b-20 text-right">
                                        <div class="spark-count" style="height:65px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-inverse card-primary">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="ti-user"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">My Students</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <h2 class="font-light text-white"><sup><small><i class="ti-arrow-up"></i></small></sup>2,000</h2>
                                    </div>
                                    <div class="col-8 p-t-10 p-b-20 text-right align-self-center">
                                        <div class="spark-count2" style="height:65px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <h5 class="card-title">Course Engagement</h5>
                                </div>
                                <div class="table-responsive m-t-20">
                                    <table class="table nowrap stylish-table">
                                        <thead>
                                            <tr>
                                                <th>Courses</th>
                                                <th>Students</th>
                                                <th>Percentage Complete</th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-us"></i>
                                                    <span class="country-name">U.S.A</span>
                                                </td>
                                                <td>18,224</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span></div>
                                                    </div>
                                                </td>
                                                <td>50%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-gb"></i>
                                                    <span class="country-name">U.K</span>
                                                </td>
                                                <td>12,347</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%; height:6px;"> <span class="sr-only">50% Complete</span></div>
                                                    </div>
                                                </td>
                                                <td>60%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-ca"></i>
                                                    <span class="country-name">Canada</span>
                                                </td>
                                                <td>11,868</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span></div>
                                                    </div>
                                                </td>
                                                <td>50%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-de"></i>
                                                    <span class="country-name">Germany</span>
                                                </td>
                                                <td>10,346</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span></div>
                                                    </div>
                                                </td>
                                                <td>50%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-in"></i>
                                                    <span class="country-name">India</span>
                                                </td>
                                                <td>8,354</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span></div>
                                                    </div>
                                                </td>
                                                <td>80%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-au"></i>
                                                    <span class="country-name">Australia</span>
                                                </td>
                                                <td>7,675</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span></div>
                                                    </div>
                                                </td>
                                                <td>50%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row" style="display:none;">
                    <div class="col-lg-8 col-xlg-9">
                        <div id="morris-area-chart2"></div>
                    </div>
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
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
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../../assets/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../../assets/js/waves.js"></script>

    <!--Menu sidebar -->
    <script src="../../assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../../assets/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../../assets/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--stickey kit -->
    <script src="../../assets/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../../assets/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../../assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../../assets/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../../assets/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--morris JavaScript -->
    <script src="../../assets/assets/plugins/raphael/raphael-min.js"></script>
    <script src="../../assets/assets/plugins/morrisjs/morris.min.js"></script>
    <!-- Vector map JavaScript -->
    <script src="../../assets/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../../assets/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../assets/js/dashboard2.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <script>
        const ctx = document.getElementById('analyticsChart').getContext('2d');

        new Chart(ctx, {
            type: 'line',
            data: {
            labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6', 'Day 7', 'Day 8'],
            datasets: [{
                data: [0, 5000, 15000, 8000, 15000, 12000, 30000, 0],
                borderColor: '#00d4d4',
                backgroundColor: 'rgba(0, 212, 212, 0.1)',
                fill: true,
                tension: 0.4,
                pointBackgroundColor: '#00d4d4',
                pointRadius: 5
            }]
            },
            options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                title: {
                    display: true,
                    text: 'Amount (₦)',
                    color: '#333'
                },
                ticks: {
                    callback: function(value) {
                    return '₦' + value.toLocaleString();
                    }
                },
                beginAtZero: true
                },
                x: {
                title: {
                    display: true,
                    text: 'Days',
                    color: '#333'
                }
                }
            }
            }
        });
    </script>
</body>

</html>