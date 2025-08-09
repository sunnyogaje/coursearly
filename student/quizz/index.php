<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Course Quiz</title>
    <link rel="shortcut icon" href="../../assets/images/favicon.svg" type="image/svg+xml" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        :root {
            --brand: #009f91;
        }

        body {
            background: #f9f9fb;
        }

        .option-card {
            border: 1px solid #e8e9f1;
            border-radius: 10px;
            transition: border-color .15s ease, background .15s ease;
        }

        .option-card:hover {
            border-color: #cfd1dd;
        }

        .option-card input {
            display: none;
        }

        .option-card .marker {
            width: 22px;
            height: 22px;
            border: 2px solid #cfd1dd;
            border-radius: 50%;
            display: inline-block;
            margin-right: 8px;
            position: relative;
            top: 4px;
        }

        .option-card input:checked+label .marker {
            border-color: var(--brand);
        }

        .option-card input:checked+label .marker::after {
            content: "";
            position: absolute;
            inset: 4px;
            border-radius: 50%;
            background: var(--brand);
        }

        .option-card input:checked+label {
            background: #f2fbfa;
            border-color: #d7f3ef;
        }

        .option-card label {
            display: block;
            padding: 12px 14px;
            border-radius: 10px;
            cursor: pointer;
        }

        .btn-brand {
            background: var(--brand);
            color: #fff;
        }

        .btn-brand:disabled {
            background: #7fcac4;
        }

        .btn-outline-brand {
            border-color: var(--brand);
            color: var(--brand);
        }

        .btn-outline-brand:hover {
            background: var(--brand);
            color: #fff;
        }

        .question-number {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            cursor: pointer;
            border: 1px solid #ccc;
            margin: 5px;
        }

        .question-number.answered {
            background: var(--brand);
            color: #fff;
            border-color: var(--brand);
        }

        .question-number.active {
            background: #006f67;
            color: #fff;
        }

        @media (max-width: 768px) {
            .sidebar {
                margin-top: 20px;
            }
        }

        /* Progress bar under top bar */
        .quiz-progress .progress {
            height: 6px;
            background: #eef0f6;
        }

        .quiz-progress .progress-bar {
            background: var(--brand);
            transition: width .25s ease;
        }
    </style>
</head>

<body>

    <!-- Top Bar -->
    <nav class="navbar navbar-light bg-white shadow-sm px-3">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <img src="../../assets/images/logo.svg" alt="Logo" style="height:35px; margin-right:10px;">
            </div>
            <!-- no timer -->
        </div>
    </nav>

    <!-- Progress (global, under the top bar) -->
    <div class="quiz-progress bg-white shadow-sm">
        <div class="container py-2">
                <span class="fw-semibold">Course Quiz</span>
            <div class="progress">
                <div class="progress-bar" id="quizProgressBar" style="width:0%"></div>
            </div>
        </div>
    </div>

    <!-- Main Layout -->
    <div class="container py-4">
        <div class="row">
            <!-- Question Area -->
            <div class="col-lg-9">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="text-muted mb-2" id="questionTopic">Topic</h6>
                        <h5 class="mb-3" id="questionText">Question text…</h5>

                        <div class="vstack gap-2" id="optionsWrap">
                            <!-- options injected here -->
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <button class="btn btn-outline-brand" id="btnPrev" disabled>Previous</button>
                    <div>
                        <button class="btn btn-light" id="btnSkip">Skip</button>
                        <button class="btn btn-brand" id="btnNext" disabled>Next</button>
                        <button class="btn btn-brand d-none" id="btnSubmit">Submit</button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Question Numbers -->
            <div class="col-lg-3 sidebar">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-3">Questions</h6>
                        <div class="d-flex flex-wrap" id="questionNumbers">
                            <!-- numbers injected here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Result Modal -->
    <div class="modal fade" id="quizResultModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center p-4">
                    <h4 class="mb-2">Quiz Completed</h4>
                    <p class="text-muted mb-3" id="scoreText">You scored 0/0</p>
                    <div class="progress mb-3" style="height:8px;">
                        <div class="progress-bar" id="scoreBar" style="width:0%; background:var(--brand);"></div>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="../learn/" class="btn btn-brand">Start Next Lesson</a>
                        <button class="btn btn-outline-brand" id="reviewBtn">Review Answers</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const questions = [
            { topic: "Networking", text: "Which command limits packet rate in nmap scans?", options: ["--max-rate", "--min-hostgroup", "--scan-delay", "--ttl"], answerIndex: 0 },
            { topic: "Security Basics", text: "Which term describes testing your own systems with permission?", options: ["Black-hat hacking", "Gray-hat hacking", "Ethical hacking", "Hacktivism"], answerIndex: 2 },
            { topic: "HTTP", text: "Which status code means 'Not Found'?", options: ["200", "301", "404", "500"], answerIndex: 2 },
            { topic: "Best Practices", text: "Before running intrusive scans on a shared network, you should:", options: ["Run at full speed to finish faster", "Ask for written authorization", "Turn off logging", "Disable firewalls temporarily"], answerIndex: 1 },
            { topic: "Recon", text: "A common tool for DNS enumeration is:", options: ["Hydra", "wfuzz", "dirb", "dnsenum"], answerIndex: 3 }
        ];

        let current = 0;
        let selected = new Array(questions.length).fill(null);
        let reviewMode = false;

        // Elements
        const questionTopic = document.getElementById('questionTopic');
        const questionText = document.getElementById('questionText');
        const optionsWrap = document.getElementById('optionsWrap');
        const btnPrev = document.getElementById('btnPrev');
        const btnNext = document.getElementById('btnNext');
        const btnSkip = document.getElementById('btnSkip');
        const btnSubmit = document.getElementById('btnSubmit');
        const questionNumbers = document.getElementById('questionNumbers');
        const quizProgressBar = document.getElementById('quizProgressBar');

        function renderNumbers() {
            questionNumbers.innerHTML = '';
            questions.forEach((q, i) => {
                const num = document.createElement('div');
                num.className = 'question-number' + (selected[i] !== null ? ' answered' : '') + (i === current ? ' active' : '');
                num.textContent = i + 1;
                num.onclick = () => { current = i; renderQuestion(); };
                questionNumbers.appendChild(num);
            });
        }

        function updateProgressBar() {
            // same behavior as the design you liked: position-based progress
            const pct = (current / questions.length) * 100;
            quizProgressBar.style.width = pct + '%';
        }

        function renderQuestion() {
            const q = questions[current];
            questionTopic.textContent = q.topic;
            questionText.textContent = q.text;

            optionsWrap.innerHTML = '';
            q.options.forEach((opt, idx) => {
                const id = `q${current}_opt${idx}`;
                const wrapper = document.createElement('div');
                wrapper.className = 'option-card';
                wrapper.innerHTML = `
      <input type="radio" name="q${current}" id="${id}" value="${idx}" ${selected[current] === idx ? 'checked' : ''} ${reviewMode ? 'disabled' : ''}>
      <label for="${id}" class="d-flex align-items-start">
        <span class="marker"></span>
        <span>${opt}</span>
      </label>
    `;

                if (reviewMode) {
                    const correctIdx = q.answerIndex;
                    const label = wrapper.querySelector('label');
                    if (idx === correctIdx) {
                        label.style.borderColor = '#28a745';
                        label.style.background = '#e6f9ee';
                    }
                    if (selected[current] === idx && selected[current] !== correctIdx) {
                        label.style.borderColor = '#dc3545';
                        label.style.background = '#fdeaea';
                    }
                }

                wrapper.querySelector('input').addEventListener('change', () => {
                    selected[current] = idx;
                    renderNumbers();
                    updateNav();
                });

                optionsWrap.appendChild(wrapper);
            });

            btnPrev.disabled = current === 0;
            updateNav();
            renderNumbers();
            updateProgressBar();
        }

        function updateNav() {
            const hasChoice = selected[current] !== null;
            const isLast = current === questions.length - 1;

            btnNext.classList.toggle('d-none', isLast || reviewMode);
            btnSubmit.classList.toggle('d-none', !isLast || reviewMode);

            btnNext.disabled = !hasChoice && !reviewMode;
            btnSubmit.disabled = !hasChoice && !reviewMode;
        }

        btnPrev.onclick = () => { if (current > 0) { current--; renderQuestion(); } };
        btnNext.onclick = () => { if (current < questions.length - 1) { current++; renderQuestion(); } };
        btnSkip.onclick = () => { if (current < questions.length - 1) { current++; renderQuestion(); } else { submitQuiz(); } };
        btnSubmit.onclick = submitQuiz;

        function submitQuiz() {
            const total = questions.length;
            let correct = 0;
            questions.forEach((q, i) => { if (selected[i] === q.answerIndex) correct++; });

            document.getElementById('scoreText').textContent = `You scored ${correct} / ${total}`;
            document.getElementById('scoreBar').style.width = (correct / total * 100) + '%';

            // fill progress to 100% on submit (like the one you liked)
            quizProgressBar.style.width = '100%';

            new bootstrap.Modal(document.getElementById('quizResultModal')).show();
        }

        document.getElementById('reviewBtn').onclick = () => {
            reviewMode = true;
            current = 0;
            renderQuestion();

            const modalElement = document.getElementById('quizResultModal');
            const modalInstance = bootstrap.Modal.getInstance(modalElement) || new bootstrap.Modal(modalElement);
            modalInstance.hide();
        };

        renderQuestion();
    </script>
</body>

</html>