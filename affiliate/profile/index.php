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
        <?php include('../../includes/profile.php'); ?>
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // if URL has a hash (e.g., #phistory)
            var hash = window.location.hash;
            if (hash) {
                // find the tab link that points to this hash
                var tabLink = document.querySelector('.nav-tabs a[href="' + hash + '"]');
                if (tabLink) {
                    // deactivate any active tab first
                    document.querySelectorAll('.nav-tabs .nav-link').forEach(el => el.classList.remove('active'));
                    document.querySelectorAll('.tab-content .tab-pane').forEach(el => el.classList.remove('active'));

                    // activate the right tab + pane
                    tabLink.classList.add('active');
                    var pane = document.querySelector(hash);
                    if (pane) pane.classList.add('active');
                }
            }
        });
    </script>

</body>

</html>