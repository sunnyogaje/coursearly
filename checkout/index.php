<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Course Checkout</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --brand: #009f91;
            --brand-2: #01e7d3ff;
        }

        html,
        body {
            font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial;
            background: #0b0d12;
            color: #e9eef6
        }

        .bg-card {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.04), rgba(255, 255, 255, 0.02));
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            backdrop-filter: blur(8px);
        }

        .brand {
            color: var(--brand)
        }

        .btn-brand {
            background: linear-gradient(90deg, var(--brand), var(--brand-2));
            border: none
        }

        .btn-brand:hover {
            filter: brightness(1.02);
        }

        .badge-soft {
            background: rgba(106, 56, 241, 0.15);
            color: #cbb8ff;
            border: 1px solid rgba(106, 56, 241, 0.35)
        }

        .shadow-soft {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25)
        }

        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .15), transparent)
        }

        .form-control,
        .form-select {
            background: #0f1219;
            border-color: #1c2333;
            color: #e9eef6
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--brand);
            box-shadow: 0 0 0 .2rem rgba(106, 56, 241, .15)
        }

        .form-check-input:checked {
            background-color: var(--brand);
            border-color: var(--brand)
        }

        .price-old {
            color: #9aa4b2;
            text-decoration: line-through
        }

        .secure-badge {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            font-size: .85rem;
            color: #a8b3c7
        }

        .secure-badge i {
            color: #22c55e
        }

        .step {
            height: 8px;
            background: #1a2131;
            border-radius: 999px;
            overflow: hidden
        }

        .step>span {
            display: block;
            height: 100%;
            width: 66%;
            background: linear-gradient(90deg, var(--brand), var(--brand-2))
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="container py-3">
        <div class="d-flex align-items-center justify-content-between gap-3">
            <div class="d-flex align-items-center gap-2">
                <div class="rounded-3 bg-card p-2">
                    <img src="../assets/images/favicon.svg" alt="Coursearly Logo" width="32" height="32">
                </div>
                <strong class="fs-5">Coursearly</strong>
            </div>
            <div class="secure-badge d-none d-md-inline-flex"><i class="bi bi-shield-lock-fill"></i> Secure checkout
            </div>
        </div>
    </header>

    <!-- Progress -->
    <div class="container pb-2">
        <div class="step"><span></span></div>
        <div class="d-flex justify-content-between mt-2 small text-secondary">
            <span>Cart</span><span class="text-white">Checkout</span><span>Complete</span>
        </div>
    </div>

    <!-- Main -->
    <main class="container py-4">
        <div class="row g-4">
            <!-- Left: Billing + Provider -->
            <div class="col-lg-7">
                <!-- Course Summary (mobile) -->
                <div class="bg-card p-3 d-lg-none shadow-soft">
                    <div class="d-flex gap-3">
                        <img src="https://images.unsplash.com/photo-1529078155058-5d716f45d604?q=80&w=800&auto=format&fit=crop"
                            alt="Course" class="rounded-3" style="width:96px; height:96px; object-fit:cover">
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="badge badge-soft">Bestseller</span>
                                <button class="btn btn-sm btn-outline-light border-0 px-2" id="removeCourseBtn"><i
                                        class="bi bi-x-lg"></i></button>
                            </div>
                            <h6 class="mt-1 mb-1">Mastering React Native & TypeScript</h6>
                            <div class="small text-secondary">by Jane Doe • 42 lessons • 9.5 hours</div>
                            <div class="mt-2 d-flex align-items-baseline gap-2">
                                <span class="h5 mb-0" id="unitPrice">₦45,000</span>
                                <span class="price-old" id="oldPrice">₦65,000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Billing Details -->
                <section class="bg-card p-4 mt-3 shadow-soft">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Billing details</h5>
                        <span class="secure-badge"><i class="bi bi-shield-check"></i> 256-bit SSL encryption</span>
                    </div>
                    <form id="billingForm" class="row g-3" novalidate>
                        <div class="col-md-6">
                            <label class="form-label">First name</label>
                            <input type="text" class="form-control" required />
                            <div class="invalid-feedback">Enter your first name</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Last name</label>
                            <input type="text" class="form-control" required />
                            <div class="invalid-feedback">Enter your last name</div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="you@example.com" required />
                            <div class="invalid-feedback">Provide a valid email</div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Country</label>
                            <select class="form-select" required>
                                <option value="">Choose…</option>
                                <option>Nigeria</option>
                                <option>Ghana</option>
                                <option>Kenya</option>
                                <option>United Kingdom</option>
                                <option>United States</option>
                            </select>
                            <div class="invalid-feedback">Select your country</div>
                        </div>
                        <div class="col-md-8">
                            <label class="form-label">Street address</label>
                            <input type="text" class="form-control" placeholder="House no. & street" required />
                            <div class="invalid-feedback">Enter your address</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" required />
                            <div class="invalid-feedback">Enter your city</div>
                        </div>

                        <div class="divider my-2"></div>

                        <!-- Payment Provider -->
                        <h6 class="mt-2">Payment provider</h6>
                        <div class="col-12">
                            <div class="list-group">
                                <label class="list-group-item bg-transparent text-white d-flex align-items-center">
                                    <input class="form-check-input me-2" type="radio" name="provider" value="paystack"
                                        checked>
                                    <span class="me-2"><i class="bi bi-credit-card"></i></span> Paystack
                                </label>
                                <label class="list-group-item bg-transparent text-white d-flex align-items-center">
                                    <input class="form-check-input me-2" type="radio" name="provider"
                                        value="flutterwave">
                                    <span class="me-2"><i class="bi bi-lightning-charge"></i></span> Flutterwave
                                </label>
                                <label class="list-group-item bg-transparent text-white d-flex align-items-center">
                                    <input class="form-check-input me-2" type="radio" name="provider" value="others">
                                    <span class="me-2"><i class="bi bi-wallet2"></i></span> Other providers
                                </label>
                            </div>
                        </div>

                        <div id="providerNote" class="alert alert-info mt-2" role="alert">
                            You'll be redirected to <strong>Paystack</strong> to complete payment securely.
                        </div>

                        <div class="col-12 align-items-start gap-2 mt-2">
                            <input class="form-check-input mt-1" type="checkbox" id="tos" required>
                            <label for="tos" class="form-check-label small">I agree to the <a href="#" class="link-light link-underline-opacity-25">Terms of Service</a> and <a href="#" class="link-light link-underline-opacity-25">Refund Policy</a>.</label>
                            <div class="invalid-feedback d-block" style="display:none">You must agree before paying.
                            </div>
                        </div>
                    </form>
                </section>
            </div>

            <!-- Right: Order Summary -->
            <aside class="col-lg-5">
                <div class="bg-card p-4 shadow-soft position-sticky" style="top:24px">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Order summary</h5>
                        <button class="btn btn-sm btn-outline-light opacity-75" data-bs-toggle="offcanvas"
                            data-bs-target="#summaryCanvas"><i class="bi bi-list"></i><span
                                class="ms-2 d-none d-md-inline">View</span></button>
                    </div>
                    <div class="d-flex gap-3">
                        <img src="https://images.unsplash.com/photo-1529078155058-5d716f45d604?q=80&w=800&auto=format&fit=crop"
                            alt="Course" class="rounded-3" style="width:96px; height:96px; object-fit:cover">
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="badge badge-soft">Bestseller</span>
                                <button class="btn btn-sm btn-outline-light border-0 px-2 d-none d-lg-inline"
                                    id="removeCourseBtn2"><i class="bi bi-x-lg"></i></button>
                            </div>
                            <h6 class="mt-1 mb-1">Mastering React Native & TypeScript</h6>
                            <div class="small text-secondary">by Jane Doe • Lifetime access</div>
                        </div>
                    </div>

                    <div class="divider my-3"></div>

                    <div id="couponToast" class="mt-2 small"></div>

                    <ul class="list-unstyled mt-3 mb-0">
                        <li class="d-flex justify-content-between py-1"><span>Subtotal</span><strong
                                id="subtotal">₦45,000</strong></li>
                        <li class="d-flex justify-content-between py-1"><span>Discount</span><span id="discount">-
                                ₦0</span></li>
                        <li class="d-flex justify-content-between py-1"><span>VAT (7.5%)</span><span
                                id="tax">₦3,375</span></li>
                        <li class="d-flex justify-content-between py-2 border-top mt-2"><span>Total</span><strong
                                class="fs-5" id="total">₦48,375</strong></li>
                    </ul>

                    <!-- Pay button moved here -->
                    <div class="d-grid mt-3">
                        <button id="payBtn" class="btn btn-brand btn-lg">Pay ₦<span id="payAmount">48,375</span> <i
                                class="bi bi-arrow-right-short"></i></button>
                    </div>

                    <div class="mt-3 small text-secondary">30-day money-back guarantee • Access on mobile & TV</div>
                </div>
            </aside>
        </div>
    </main>

    <!-- Mobile Offcanvas Summary -->
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="summaryCanvas"
        aria-labelledby="summaryCanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="summaryCanvasLabel">Order summary</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="d-flex gap-3 mb-3">
                <img src="https://images.unsplash.com/photo-1529078155058-5d716f45d604?q=80&w=800&auto=format&fit=crop"
                    alt="Course" class="rounded-3" style="width:96px; height:96px; object-fit:cover">
                <div>
                    <div class="badge badge-soft">Bestseller</div>
                    <h6 class="mt-1 mb-1">Mastering React Native & TypeScript</h6>
                    <div class="small text-secondary">Lifetime access</div>
                </div>
            </div>
            <div class="divider my-3"></div>
            <ul class="list-unstyled mt-2 mb-0">
                <li class="d-flex justify-content-between py-1"><span>Subtotal</span><strong
                        id="subtotal2">₦45,000</strong></li>
                <li class="d-flex justify-content-between py-1"><span>Discount</span><span id="discount2">- ₦0</span>
                </li>
                <li class="d-flex justify-content-between py-1"><span>VAT (7.5%)</span><span id="tax2">₦3,375</span>
                </li>
                <li class="d-flex justify-content-between py-2 border-top mt-2"><span>Total</span><strong class="fs-5"
                        id="total2">₦48,375</strong></li>
            </ul>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-bg-dark border border-success">
                <div class="modal-header border-0">
                    <h5 class="modal-title"><i class="bi bi-check-circle-fill text-success me-2"></i> Payment Successful
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-1">You're enrolled in <strong>Mastering React Native & TypeScript</strong>.</p>
                    <p class="mb-0">We've sent your receipt and course access link to your email.</p>
                </div>
                <div class="modal-footer border-0">
                    <a href="#" class="btn btn-success">Go to course</a>
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="container py-4 small text-secondary">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <div>© <span id="year"></span> Coursearly</div>
            <div class="d-flex gap-3">
                <a href="#" class="link-light link-underline-opacity-0">Privacy</a>
                <a href="#" class="link-light link-underline-opacity-0">Terms</a>
                <a href="#" class="link-light link-underline-opacity-0">Support</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Prices
        const basePrice = 45000; // NGN
        const vatRate = 0.075;
        let discountValue = 0; // absolute NGN

        const fmt = new Intl.NumberFormat('en-NG', { style: 'currency', currency: 'NGN', maximumFractionDigits: 0 });

        const els = {
            subtotal: document.getElementById('subtotal'),
            discount: document.getElementById('discount'),
            tax: document.getElementById('tax'),
            total: document.getElementById('total'),
            subtotal2: document.getElementById('subtotal2'),
            discount2: document.getElementById('discount2'),
            tax2: document.getElementById('tax2'),
            total2: document.getElementById('total2'),
            payAmount: document.getElementById('payAmount'),
            couponInput: document.getElementById('couponInput'),
            couponToast: document.getElementById('couponToast'),
            applyCoupon: document.getElementById('applyCoupon'),
            billingForm: document.getElementById('billingForm'),
            payBtn: document.getElementById('payBtn'),
            tos: document.getElementById('tos'),
            year: document.getElementById('year'),
            remove1: document.getElementById('removeCourseBtn'),
            remove2: document.getElementById('removeCourseBtn2'),
        };

        function recalc() {
            const subtotal = basePrice;
            const tax = Math.round((subtotal - discountValue) * vatRate);
            const total = Math.max(0, subtotal - discountValue + tax);

            const d = (v) => `- ${fmt.format(v)}`;
            els.subtotal.textContent = fmt.format(subtotal);
            els.discount.textContent = d(discountValue);
            els.tax.textContent = fmt.format(tax);
            els.total.textContent = fmt.format(total);
            els.subtotal2.textContent = fmt.format(subtotal);
            els.discount2.textContent = d(discountValue);
            els.tax2.textContent = fmt.format(tax);
            els.total2.textContent = fmt.format(total);
            els.payAmount.textContent = total.toLocaleString('en-NG');
        }

        function showMsg(msg, ok = true) {
            els.couponToast.innerHTML = `<span class="${ok ? 'text-success' : 'text-danger'}">${msg}</span>`
        }

        // Coupon logic (demo): SAVE10 = 10%, SAVE5K = ₦5,000 off
        els.applyCoupon.addEventListener('click', () => {
            const code = els.couponInput.value.trim().toUpperCase();
            if (!code) { showMsg('Enter a coupon code', false); return; }
            if (code === 'SAVE10') {
                discountValue = Math.round(basePrice * 0.10);
                showMsg('Coupon applied: 10% off');
            } else if (code === 'SAVE5K') {
                discountValue = 5000;
                showMsg('Coupon applied: ₦5,000 off');
            } else {
                discountValue = 0;
                showMsg('Invalid coupon', false);
            }
            recalc();
        })

        // Provider toggle note
        const providerNote = document.getElementById('providerNote');
        document.querySelectorAll('input[name="provider"]').forEach(r => {
            r.addEventListener('change', e => {
                const map = { paystack: 'Paystack', flutterwave: 'Flutterwave', others: 'your selected provider' };
                providerNote.innerHTML = `You'll be redirected to <strong>${map[e.target.value]}</strong> to complete payment securely.`;
            })
        })

            // Client-side validation
            (function () {
                const form = els.billingForm;
                form.addEventListener('submit', evt => evt.preventDefault());
                els.payBtn.addEventListener('click', () => {
                    if (!form.checkValidity() || !els.tos.checked) {
                        form.classList.add('was-validated');
                        if (!els.tos.checked) {
                            form.querySelector('.invalid-feedback.d-block').style.display = 'block';
                        }
                        return;
                    }
                    // pretend processing then show success modal
                    els.payBtn.disabled = true; els.payBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Processing...';
                    setTimeout(() => {
                        els.payBtn.disabled = false; els.payBtn.innerHTML = `Pay ₦<span id="payAmount">${els.payAmount.textContent}</span> <i class="bi bi-arrow-right-short"></i>`;
                        const m = new bootstrap.Modal('#successModal'); m.show();
                    }, 1200);
                })
            })();

        // Remove course (demo)
        function removeCourse() {
            document.querySelectorAll('img[alt="Course"]').forEach(img => img.closest('.d-flex, .offcanvas-body')?.remove());
            discountValue = 0; recalc();
            els.subtotal.textContent = fmt.format(0);
            els.subtotal2.textContent = fmt.format(0);
            els.tax.textContent = fmt.format(0);
            els.tax2.textContent = fmt.format(0);
            els.total.textContent = fmt.format(0);
            els.total2.textContent = fmt.format(0);
            els.payAmount.textContent = '0';
            showMsg('Course removed', true);
        }
        els.remove1?.addEventListener('click', removeCourse);
        els.remove2?.addEventListener('click', removeCourse);

        // Year + init
        document.getElementById('year').textContent = new Date().getFullYear();
        recalc();
    </script>
</body>

</html>