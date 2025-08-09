<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Course with YouTube Video</title>
    <link rel="shortcut icon" href="../../assets/images/favicon.svg" type="image/svg+xml" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            /* 🔒 prevent horizontal scroll */
            background: #fff;
        }

        /* Remove Bootstrap row negative margins since we're not wrapping in .container */
        .row {
            --bs-gutter-x: 0;
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .video-wrapper {
            position: relative;
            width: 100%;
            height: 100vh;
            background: #000;
            overflow: hidden;
        }

        /* YouTube iframe + its container */
        #player,
        #player>div,
        #player iframe {
            width: 100% !important;
            height: 100% !important;
            position: absolute;
            top: 0;
            left: 0;
        }

        #clickBlocker {
            position: absolute;
            inset: 0;
            background: transparent;
            z-index: 2;
        }

        .controls-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            padding: 20px;
            color: #fff;
            display: flex;
            flex-direction: column;
            z-index: 3;
            opacity: 1;
            transition: opacity .4s ease;
            pointer-events: auto;
        }

        .controls-overlay.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .video-info h3 {
            margin: 0;
            font-size: 18px;
            color: #ddd;
            font-weight: 600;
        }

        .video-info small {
            color: #ccc;
        }

        .control-buttons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .control-buttons span {
            color: #fff;
            cursor: pointer;
            font-size: 16px;
        }

        .progress-container {
            position: relative;
            width: 100%;
            height: 4px;
            background: rgba(255, 255, 255, 0.3);
            cursor: pointer;
            margin-top: 10px;
        }

        .progress {
            height: 100%;
            background: #009f91;
            width: 0%;
        }

        .timer {
            display: flex;
            justify-content: flex-end;
            margin-top: 5px;
            font-size: 14px;
            color: #ccc;
        }

        .video-logo {
            position: absolute;
            top: 15px;
            left: 15px;
            z-index: 4;
            height: 25px;
            width: auto;
        }

        .nav-tabs .nav-link {
            color: #009f91;
            border: 1px solid transparent;
            border-radius: .375rem;
            transition: .3s ease;
        }

        .nav-tabs .nav-link:hover {
            color: #fff;
            background-color: #009f91;
            border-color: #009f91;
        }

        .nav-tabs .nav-link.active {
            background-color: #009f91;
            color: #fff;
            border-color: #009f91;
        }

        .scroll-sidebar {
            height: 100vh;
            overflow-y: auto;
            overflow-x: hidden;
            padding: 16px 12px 24px 16px;
            /* room from the walls */
        }

        .scroll-sidebar::-webkit-scrollbar {
            width: 4px;
        }

        .scroll-sidebar::-webkit-scrollbar-thumb {
            background-color: #009f91;
            border-radius: 10px;
        }

        .rating-stars {
            display: inline-flex;
            flex-direction: row-reverse;
            /* important for the fill effect */
            gap: 6px;
        }

        .rating-stars input {
            display: none;
        }

        .rating-stars label {
            cursor: pointer;
            width: 24px;
            height: 24px;
            display: inline-block;
        }

        .rating-stars label svg {
            width: 100%;
            height: 100%;
            fill: #e6e7f2;
            transition: fill .15s ease;
        }

        /* hover fills current + previous stars */
        .rating-stars label:hover svg,
        .rating-stars label:hover~label svg {
            fill: #c26a00;
        }

        /* checked fills current + previous stars */
        .rating-stars input:checked~label svg {
            fill: #c26a00;
        }

        .completed {
            border-left: 4px solid #198754;
        }

        .inprogress {
            border-left: 4px solid #ffc107;
        }

        .list-group-item.disabled {
            background: #f8f9fa;
            color: #aaa;
        }

        .btn-next-quiz {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #009f91;
            color: #fff;
            padding: 12px 20px;
            border-radius: 50px;
            font-weight: 500;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: background 0.3s ease;
            z-index: 1050;
        }

        .btn-next-quiz:hover {
            background: #00786e;
            color: #fff;
        }

        .btn-next-quiz i {
            margin-left: 5px;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-lg-8">
            <div class="video-wrapper">
                <img src="../../assets/images/white-logo.svg" alt="Logo" class="video-logo" />
                <div id="player"></div>
                <div id="clickBlocker"></div>

                <div class="controls-overlay">
                    <div class="video-info">
                        <h3>Learn Ethical Hacking From Scratch</h3>
                        <small>IT &amp; Software &gt; Network &amp; Security &gt; Ethical Hacking</small>
                    </div>

                    <div class="progress-container" id="progressContainer">
                        <div class="progress" id="progressBar"></div>
                    </div>
                    <div class="timer" id="timeDisplay">0:00 / 0:00</div>

                    <div class="control-buttons">
                        <span onclick="rewindVideo()" aria-label="Rewind 15 seconds">
                            <!-- rewind icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 48 48"
                                fill="none">
                                <path d="M22 28V21L20 22.3125" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M25 27.5627C25.3134 27.8373 25.7029 28 26.125 28C27.1605 28 28 27.0206 28 25.8125C28 24.6044 27.1605 23.625 26.125 23.625C25.7029 23.625 25.3134 23.7877 25 24.0623L25.375 21H28"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M15.8161 15.8041C10.9691 20.1977 10.7039 27.579 15.2238 32.2905C19.7437 37.0021 27.337 37.2599 32.1839 32.8663C37.0309 28.4726 37.2961 21.0914 32.7762 16.3798C30.2053 13.6999 26.64 12.4609 23.1514 12.6992M24.8571 10L21.8008 12.8329L24.8571 15.871"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>

                        <span onclick="togglePlay()" id="playBtn" aria-label="Play/Pause">
                            <!-- play icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 48 48"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M34.99 23.7773C34.9219 22.8388 34.4205 21.9278 33.4859 21.394L19.4878 13.3994C17.4878 12.2571 15 13.7013 15 16.0044V31.9937C15 34.2968 17.4878 35.741 19.4878 34.5988L33.4859 26.6041C34.4205 26.0703 34.9219 25.1593 34.99 24.2208C35.0226 24.0751 35.0226 23.9231 34.99 23.7773Z"
                                    fill="white" />
                            </svg>
                        </span>

                        <span onclick="forwardVideo()" aria-label="Forward 15 seconds">
                            <!-- forward icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 48 48"
                                fill="none">
                                <path d="M22 28V21L20 22.3125" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M25 27.5627C25.3134 27.8373 25.7029 28 26.125 28C27.1605 28 28 27.0206 28 25.8125C28 24.6044 27.1605 23.625 26.125 23.625C25.7029 23.625 25.3134 23.7877 25 24.0623L25.375 21H28"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M32.1839 15.8041C37.0309 20.1977 37.2961 27.579 32.7762 32.2905C28.2563 37.0021 20.663 37.2599 15.8161 32.8663C10.9691 28.4726 10.7039 21.0914 15.2238 16.3798C17.7947 13.6999 21.36 12.4609 24.8486 12.6992M23.1429 10L26.1992 12.8329L23.1429 15.871"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 scroll-sidebar">

            <h5>Course Title: Learn Ethical Hacking From Scratch</h5>
            <p class="text-secondary small">
                Become an ethical hacker that can hack like black hat hackers and secure systems like cybersecurity
                experts.
                <a data-bs-toggle="collapse" href="#collapseExample1" aria-expanded="false"
                    aria-controls="collapseExample1" style="color:#009f91;">
                    View more detail
                </a>
            <div id="collapseExample1" class="collapse card card-body" data-bs-parent="#modulesAccordion"
                style="font-size:13px;">
                <p class="mb-2" style="font-size:14px;font-weight:bold;">
                    Last Updated: Tuesday 6 August, 2025 · Duration: 15 Hours <br>Total Lectures: 15
                </p>
                <p class="mb-2" style="font-size:14px;">English · Beginners</p>
                <p class="mb-2" style="font-size:14px;"><strong class="text-warning"> ★ 4.6 </strong> (132,725 ratings)
                    · 654,813 students · Beginners · English</p>
                <small class="text-muted" style="font-size:14px;">Created by John Doe</span></small>
                <!-- <span class="text-muted" style="font-size:14px;">Course Description: <span style="cursor:pointer;color:#009f91;">Click to view</span></span> -->
            </div>
            <button class="btn btn-sm text-white ms-auto" style="background:#007ffb;" data-bs-toggle="offcanvas"
                href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                All Modules
            </button>
            </p>
            <hr>
            <h5 class="fw-bold">Module 1: Learn Ethical Hacking From Scratch</h5>
            <p class="text-secondary small">
                Become an ethical hacker that can hack like black hat hackers and secure systems like cybersecurity
                experts.
            </p>
            <p class="mb-2" style="font-size:14px;font-weight:bold;">
                Duration: 15 Mins
            </p>
            <nav class="mt-3">
                <div class="nav nav-tabs gap-2" id="nav-tab" role="tablist" style="font-size:15px;color:#009f91;">
                    <button class="nav-link active" id="nav-overview-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-overview" type="button" role="tab" aria-controls="nav-overview"
                        aria-selected="true">Description</button>
                    <button class="nav-link" id="nav-comms-tab" data-bs-toggle="tab" data-bs-target="#nav-comms"
                        type="button" role="tab" aria-controls="nav-comms" aria-selected="false">Chats</button>
                    <button class="nav-link" id="nav-reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-reviews"
                        type="button" role="tab" aria-controls="nav-reviews" aria-selected="false">Reviews</button>
                    <button class="nav-link" id="nav-resources-tab" data-bs-toggle="tab" data-bs-target="#nav-resources"
                        type="button" role="tab" aria-controls="nav-resources" aria-selected="false">Resources</button>
                </div>
            </nav>

            <div class="tab-content mt-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-overview" role="tabpanel"
                    aria-labelledby="nav-overview-tab">
                    <p>
                        <small class="fw-bold text-secondary">Description</small>
                    <p>
                        <small>
                            Description Here
                        </small>
                    </p>
                    </p>
                </div>

                <!-- Communications -->
                <div class="tab-pane fade" id="nav-comms" role="tabpanel" aria-labelledby="nav-comms-tab">
                    <div class="mt-3">
                        <div class="card-body p-0 d-flex flex-column">

                            <!-- Scrollable messages -->
                            <div class="flex-grow-1 p-3 overflow-auto" id="chatMessages"
                                style="max-height: calc(380px - 58px);">
                                <!-- Incoming -->
                                <div class="d-flex mb-3">
                                    <div class="rounded-circle bg-dark text-white d-flex align-items-center justify-content-center me-2 p-2"
                                        style="width:34px;height:34px;font-size:13px;">JD</div>
                                    <div>
                                        <div class="p-2 rounded"
                                            style="background:#f5f6fb; border:1px solid #e6e7f2;font-size:14px;">
                                            Hi! Welcome to the course. Feel free to ask any questions here.
                                        </div>
                                        <small class="text-muted" style="font-size:11px;">09:40</small>
                                    </div>
                                </div>

                                <!-- Outgoing -->
                                <div class="d-flex mb-3 flex-row-reverse">
                                    <div class="rounded-circle bg-dark text-white d-flex align-items-center justify-content-center ms-2 p-1"
                                        style="width:34px;height:34px;font-size:13px;">AD</div>
                                    <div>
                                        <div class="p-2 rounded text-white" style="background:#009f91;font-size:14px;">
                                            Thank you! I wanted to ask about the next assignment.
                                        </div>
                                        <small class="text-muted d-block text-end" style="font-size:11px;">09:42</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Fixed input area -->
                            <div class="border-top p-2" style="background:#fff;">
                                <form class="d-flex align-items-center gap-2">
                                    <input type="text" class="form-control" placeholder="Type a message...">
                                    <button type="submit" class="btn text-white btn-sm"
                                        style="background:#009f91;">Send</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Reviews -->
                <div class="tab-pane fade show" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                    <div class="card mt-3 border-0">
                        <div class="card-body">

                            <div class="d-flex align-items-start justify-content-between flex-wrap">

                                <div class="me-4 mb-3">
                                    <div class="d-flex align-items-end">
                                        <div class="display-4 fw-bold lh-1 me-3" style="color:#c26a00;font-size:25px;">
                                            4.6</div>
                                        <div class="small text-muted">Course Rating</div>
                                    </div>
                                    <div class="mt-2" style="font-size:13px;">
                                        <!-- 4 full + 1 outline (no half-fill to keep it simple) -->
                                        <span class="me-1" style="color:#c26a00;">★</span>
                                        <span class="me-1" style="color:#c26a00;">★</span>
                                        <span class="me-1" style="color:#c26a00;">★</span>
                                        <span class="me-1" style="color:#c26a00;">★</span>
                                        <span class="me-1" style="color:#c26a00;opacity:.35;">★</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start justify-content-between">
                                    <button class="btn btn-sm text-white ms-auto" style="background:#009f91;"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Write a review
                                    </button>
                                </div>
                                <!-- Right: Breakdown (text only) -->
                                <div class="flex-grow-1" style="font-size:12px;">
                                    <div class="row g-2">
                                        <div class="col-12">
                                            <div
                                                class="d-flex align-items-center justify-content-between border rounded px-3 py-2">
                                                <div class="d-flex align-items-center gap-2">
                                                    <strong>5 stars</strong>
                                                    <span style="color:#c26a00;">★★★★★</span>
                                                </div>
                                                <a href="#" style="color:#5930e5;text-decoration:none;">61%</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div
                                                class="d-flex align-items-center justify-content-between border rounded px-3 py-2">
                                                <div class="d-flex align-items-center gap-2">
                                                    <strong>4 stars</strong>
                                                    <span style="color:#c26a00;">★★★★</span><span
                                                        style="color:#c26a00;opacity:.35;">★</span>
                                                </div>
                                                <a href="#" style="color:#5930e5;text-decoration:none;">30%</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div
                                                class="d-flex align-items-center justify-content-between border rounded px-3 py-2">
                                                <div class="d-flex align-items-center gap-2">
                                                    <strong>3 stars</strong>
                                                    <span style="color:#c26a00;">★★★</span><span
                                                        style="color:#c26a00;opacity:.35;">★★</span>
                                                </div>
                                                <a href="#" style="color:#5930e5;text-decoration:none;">7%</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div
                                                class="d-flex align-items-center justify-content-between border rounded px-3 py-2">
                                                <div class="d-flex align-items-center gap-2">
                                                    <strong>2 stars</strong>
                                                    <span style="color:#c26a00;">★★</span><span
                                                        style="color:#c26a00;opacity:.35;">★★★</span>
                                                </div>
                                                <a href="#" style="color:#5930e5;text-decoration:none;">1%</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div
                                                class="d-flex align-items-center justify-content-between border rounded px-3 py-2">
                                                <div class="d-flex align-items-center gap-2">
                                                    <strong>1 star</strong>
                                                    <span style="color:#c26a00;">★</span><span
                                                        style="color:#c26a00;opacity:.35;">★★★★</span>
                                                </div>
                                                <a href="#" style="color:#5930e5;text-decoration:none;">1%</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Single Review -->
                                <div class="d-flex align-items-start mt-4">
                                    <!-- Avatar Circle -->
                                    <div class="rounded-circle bg-dark text-white fw-bold d-flex align-items-center justify-content-center me-3 p-2"
                                        style="width:10%;height:10%;">
                                        AD
                                    </div>

                                    <div>
                                        <!-- Name + Stars + Time -->
                                        <div class="d-flex align-items-center flex-wrap mb-1">
                                            <strong class="me-2">Amanda D.</strong>
                                            <div class="me-2" style="color:#c26a00; font-size:14px;">
                                                ★ ★ ★ ★ <span style="opacity:.35;">★</span>
                                            </div>
                                            <small class="text-muted">a month ago</small>
                                        </div>

                                        <!-- Review text -->
                                        <p class="mb-0 text-dark" style="font-size:14px; line-height:1.5;">
                                            Very informative. Gives me ideas for what I can do. The topic on the need
                                            for good landing pages is also very good.
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mt-4">
                                    <!-- Avatar Circle -->
                                    <div class="rounded-circle bg-dark text-white fw-bold d-flex align-items-center justify-content-center me-3 p-2"
                                        style="width:10%;height:10%;">
                                        AD
                                    </div>

                                    <div>
                                        <!-- Name + Stars + Time -->
                                        <div class="d-flex align-items-center flex-wrap mb-1">
                                            <strong class="me-2">Amanda D.</strong>
                                            <div class="me-2" style="color:#c26a00; font-size:14px;">
                                                ★ ★ ★ ★ <span style="opacity:.35;">★</span>
                                            </div>
                                            <small class="text-muted">a month ago</small>
                                        </div>

                                        <!-- Review text -->
                                        <p class="mb-0 text-dark" style="font-size:14px; line-height:1.5;">
                                            Very informative. Gives me ideas for what I can do. The topic on the need
                                            for good landing pages is also very good.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Resources -->
                <div class="tab-pane fade" id="nav-resources" role="tabpanel" aria-labelledby="nav-resources-tab">
                    <p>
                        <small class="fw-bold text-secondary">Module Resources</small>
                    <p>
                        <a style="color:#009f91;cursor:pointer;">
                            <img width="50" height="50" src="https://img.icons8.com/3d-fluency/94/download.png"
                                alt="download" /> Click to download resources
                        </a>
                    </p>
                    <p>
                        <small>
                            Resource text here if available
                        </small>
                    </p>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Next Button -->
    <a href="../quizz/" class="btn btn-next-quiz">
        Next <i class="bi bi-arrow-right"></i>
    </a>


    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Course Modules</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
            <div class="list-group">

                <!-- Completed -->
                <button type="button"
                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-start completed">
                    <div>
                        <div class="fw-semibold">Module 1: Getting Started</div>
                        <small class="text-muted">Introduction to the course and setup instructions.</small>
                    </div>
                    <span class="badge bg-success rounded-pill">Completed</span>
                </button>

                <!-- In Progress -->
                <button type="button"
                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-start inprogress">
                    <div>
                        <div class="fw-semibold">Module 2: Core Concepts</div>
                        <small class="text-muted">Learn the main principles and techniques.</small>
                    </div>
                    <span class="badge bg-warning text-dark rounded-pill">In Progress</span>
                </button>

                <!-- Not Started -->
                <button type="button"
                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                    <div>
                        <div class="fw-semibold">Module 3: Practical Labs</div>
                        <small class="text-muted">Hands-on exercises to apply your skills.</small>
                    </div>
                    <span class="badge bg-secondary rounded-pill">Not Started</span>
                </button>

                <!-- Locked -->
                <button type="button"
                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-start disabled"
                    disabled>
                    <div>
                        <div class="fw-semibold">Module 4: Final Project</div>
                        <small class="text-muted">Capstone project to test your knowledge.</small>
                    </div>
                    <span class="badge bg-dark rounded-pill">Locked</span>
                </button>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Write a Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <!-- Rating -->
                    <div class="mb-3">
                        <small class="form-label mb-1">Your Rating</small>
                        <div class="d-flex align-items-center gap-2">
                            <div class="rating-stars" aria-label="Star rating">
                                <!-- note: row-reverse lets CSS fill all previous stars -->
                                <input type="radio" id="star5" name="rating" value="5">
                                <label for="star5" title="5 stars">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27 18.18 21 16.54 13.97 22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </label>

                                <input type="radio" id="star4" name="rating" value="4">
                                <label for="star4" title="4 stars">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27 18.18 21 16.54 13.97 22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </label>

                                <input type="radio" id="star3" name="rating" value="3">
                                <label for="star3" title="3 stars">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27 18.18 21 16.54 13.97 22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </label>

                                <input type="radio" id="star2" name="rating" value="2">
                                <label for="star2" title="2 stars">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27 18.18 21 16.54 13.97 22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </label>

                                <input type="radio" id="star1" name="rating" value="1">
                                <label for="star1" title="1 star">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27 18.18 21 16.54 13.97 22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </label>
                            </div>
                            <small id="ratingValue" class="text-muted">Select rating</small>
                        </div>
                    </div>

                    <!-- Review text -->
                    <div>
                        <small for="reviewText" class="form-label mb-1">Your Review</small>
                        <textarea class="form-control" id="reviewText" rows="3"
                            style="border:1px solid #009f91;outline: none; box-shadow: none;font-size: 0.85rem;"
                            placeholder="Write your review here" maxlength="1000" required></textarea>
                        <small class="text-muted d-block mt-1"><span id="charCount">0</span>/1000</small>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm" id="saveReviewBtn"
                        style="background:#009f91;border:none;">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>

    <script>
        let player;
        let isDragging = false;
        let hideControlsTimeout;

        function loadYouTubePlayer() {
            if (window.YT && window.YT.Player) {
                initYouTubePlayer();
            } else {
                const tag = document.createElement('script');
                tag.src = "https://www.youtube.com/iframe_api";
                document.head.appendChild(tag);
                window.onYouTubeIframeAPIReady = initYouTubePlayer;
            }
        }

        function initYouTubePlayer() {
            player = new YT.Player('player', {
                videoId: 'ED0v9YuVpiE',
                playerVars: { autoplay: 0, controls: 0, modestbranding: 1, rel: 0, disablekb: 1 },
                events: { onReady: onPlayerReady, onStateChange: onPlayerStateChange }
            });
        }

        function onPlayerReady() { updateProgress(); }

        function togglePlay() {
            const state = player.getPlayerState();
            const btn = document.getElementById('playBtn');
            if (state === YT.PlayerState.PLAYING) {
                player.pauseVideo();
                btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 48 48" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M34.99 23.7773C34.9219 22.8388 34.4205 21.9278 33.4859 21.394L19.4878 13.3994C17.4878 12.2571 15 13.7013 15 16.0044V31.9937C15 34.2968 17.4878 35.741 19.4878 34.5988L33.4859 26.6041C34.4205 26.0703 34.9219 25.1593 34.99 24.2208C35.0226 24.0751 35.0226 23.9231 34.99 23.7773Z" fill="white"/></svg>`;
                showControls();
            } else {
                player.playVideo();
                btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 48 48" fill="none"><path d="M26.2857 15.1111C26.2857 14.4975 26.7974 14 27.4286 14H30.8571C31.4883 14 32 14.4975 32 15.1111V32.8889C32 33.5025 31.4883 34 30.8571 34H27.4286C26.7974 34 26.2857 33.5025 26.2857 32.8889V15.1111Z" fill="white"/><path d="M16 15.1111C16 14.4975 16.5117 14 17.1429 14H20.5714C21.2026 14 21.7143 14.4975 21.7143 15.1111V32.8889C21.7143 33.5025 21.2026 34 20.5714 34H17.1429C16.5117 34 16 33.5025 16 32.8889V15.1111Z" fill="white"/></svg>`;
                startHideControlsTimer();
            }
        }

        function rewindVideo() { player.seekTo(player.getCurrentTime() - 15, true); showControls(); }
        function forwardVideo() { player.seekTo(player.getCurrentTime() + 15, true); showControls(); }

        function updateProgress() {
            if (player && player.getDuration) {
                const duration = player.getDuration() || 0;
                const currentTime = player.getCurrentTime() || 0;
                const percent = duration ? (currentTime / duration) * 100 : 0;
                document.getElementById('progressBar').style.width = percent + "%";
                document.getElementById('timeDisplay').textContent = formatTime(currentTime) + " / " + formatTime(duration);
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
            const el = document.getElementById('progressContainer');
            const rect = el.getBoundingClientRect();
            const x = Math.min(Math.max(0, (e.clientX - rect.left) / rect.width), 1);
            const newTime = x * (player.getDuration() || 0);
            player.seekTo(newTime, true);
        }

        document.addEventListener("DOMContentLoaded", () => {
            loadYouTubePlayer();

            // Progress drag
            const progressContainer = document.getElementById('progressContainer');
            progressContainer.addEventListener('mousedown', (e) => { isDragging = true; seekVideo(e); });
            document.addEventListener('mousemove', (e) => { if (isDragging) seekVideo(e); });
            document.addEventListener('mouseup', () => { if (isDragging) { isDragging = false; updateProgress(); } });

            // Overlay show/hide on hover/click
            const wrapper = document.querySelector('.video-wrapper');
            wrapper.addEventListener('mouseenter', showControls);
            wrapper.addEventListener('mouseleave', () => {
                if (player && player.getPlayerState() === YT.PlayerState.PLAYING) startHideControlsTimer();
            });
            wrapper.addEventListener('click', (e) => {
                if (!e.target.closest('.control-buttons') && !e.target.closest('#progressContainer')) togglePlay();
            });

        });

        function onPlayerStateChange(event) {
            updateProgress();
            if (event.data === YT.PlayerState.PLAYING) {
                startHideControlsTimer();
            } else {
                showControls();
            }
        }

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
    </script>

    <script>
        (function () {
            const ratingLabels = document.querySelectorAll('.rating-stars input[name="rating"]');
            const ratingValue = document.getElementById('ratingValue');
            const textarea = document.getElementById('reviewText');
            const charCount = document.getElementById('charCount');
            const saveBtn = document.getElementById('saveReviewBtn');

            ratingLabels.forEach(r => {
                r.addEventListener('change', () => {
                    ratingValue.textContent = r.value + ' / 5';
                });
            });

            textarea.addEventListener('input', () => {
                charCount.textContent = textarea.value.length;
            });

            saveBtn.addEventListener('click', () => {
                const selected = document.querySelector('.rating-stars input[name="rating"]:checked');
                const rating = selected ? parseInt(selected.value, 10) : 0;
                const review = textarea.value.trim();

                if (!rating) {
                    alert('Please select a rating.');
                    return;
                }
                if (!review) {
                    alert('Please write a review.');
                    return;
                }

                const modalEl = document.getElementById('exampleModal');
                const modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
                modal.hide();

                textarea.value = '';
                charCount.textContent = '0';
                ratingLabels.forEach(r => r.checked = false);
                ratingValue.textContent = 'Select rating';
            });
        })();
    </script>

</body>

</html>