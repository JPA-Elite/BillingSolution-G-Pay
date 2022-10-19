<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing | G-Pay</title>
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('/src/img/logo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/pricing.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/features.css') }}">
    <link href="{{ URL::asset('/css/bootstrap.css') }}" rel="stylesheet">
</head>

<body class="body">
    <nav>
        <div class="d-flex align-items-end gap-5">
            <a href="/gpay.com/homepage/" class="text-decoration-none">
                <div class="logo d-grid gap-2">
                    <div class="d-flex">
                        <img src="/src/img/logo.png" alt="logo">
                        <div class="title">
                            <h1 class="text-purple">G-Pay</h1>
                            <p>Invoice & Billings</p>
                        </div>
                    </div>
                </div>
            </a>
            <ul class="d-flex gap-4 ">
                <div class="d-flex align-items-end gap-1 features ">
                    <li class="f1">Features</li>
                    <li class="f1"><img class="w-50 " src="/src/img/arrow-down.svg" alt="arrow-down"></li>
                    <div class="f-pop-up">
                        <a href="/gpay.com/features-client/">
                            <h6>
                                Clients
                            </h6>
                        </a>
                        <a href="/gpay.com/features-mobile">
                            <h6>
                                Mobile
                            </h6>
                        </a>

                        <a href="/gpay.com/features-payments/">
                            <h6>
                                Payments
                            </h6>
                        </a>
                        <a href="/gpay.com/features-mileage-tracking/">
                            <h6>
                                Mileage Tracking
                            </h6>
                        </a>
                        <a href="/gpay.com/features-expenses&receipts/">
                            <h6>
                                Expenses & Receipts
                            </h6>
                        </a>
                        <a href="/gpay.com/features-invoices/">
                            <h6>
                                Invoicing
                            </h6>
                        </a>
                        <a href="/gpay.com/features-estimates/">
                            <h6>
                                Estimates
                            </h6>
                        </a>
                    </div>
                </div>
                <div class="d-flex align-items-end gap-1 emp-type">
                    <li class="f2">Who it’s for</li>
                    <li class="f2"><img class="w-50" src="/src/img/arrow-down.svg" alt="arrow-down"></li>
                    <div class="s-pop-up">
                        <a href="/gpay.com/whoitsfor-self-employed-professionals/">
                            <h6>
                                Self-Employed Professionals
                            </h6>
                        </a>

                        <a href="/gpay.com/whoitsfor-freelancers/">
                            <h6>
                                Freelancers
                            </h6>
                        </a>

                        <a href="/gpay.com/whoitsfor-business_with_constractor/">
                            <h6>
                                Businesses with Contractors
                            </h6>
                        </a>
                        <a href="/gpay.com/whoitsfor-business_with_employees/">
                            <h6>
                                Businesses with Employee
                            </h6>
                        </a>

                        <a href="/gpay.com/features-expenses&receipts/">
                            <h6>
                                Expenses & Receipts
                            </h6>
                        </a>
                        <a href="/gpay.com/whoitsfor_unemployed/">
                            <h6>
                                Unemployed
                            </h6>
                        </a>

                        <a href="/gpay.com/whoitsfor_students/">
                            <h6>
                                Students
                            </h6>
                        </a>

                    </div>
                </div>
                <a href="/gpay.com/pricing/">
                    <li>Pricing</li>
                </a>
                <a href="/gpay.com/about_us/">
                    <li>About Us</li>
                </a>
            </ul>
        </div>

        <div class="d-flex align-items-center justify-content-center user-info">
            <div class="d-flex align-items-end gap-1">
                <li class="f3_pop">Help</li>
                <li class="f3_pop"><img class="w-50" src="/src/img/arrow-down.svg" alt="arrow-down"></li>
                <div class="t-pop-up">
                    <a href="#">
                        <h6>
                            Accounting Software
                        </h6>
                    </a>

                    <a href="#">
                        <h6>
                            Invoice Template
                        </h6>
                    </a>
                    <a href="#">
                        <h6>
                            Billing Guide
                        </h6>
                    </a>
                    <a href="#">
                        <h6>
                            Help Center
                        </h6>
                    </a>

                    <a href="#">
                        <h6>
                            Help Docs
                        </h6>
                    </a>
                    <a href="#">
                        <h6>
                            FAQS
                        </h6>
                    </a>
                    <a href="#">
                        <h6>
                            Contact Us
                        </h6>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center gap-3">
                <a class="btn_nav" href="/gpay.com/register/">
                    <li>Log in</li>
                </a>
                <a class="btn_nav nav-sign-up" href="/gpay.com/sign_up-profile_information/">
                    <li>Sign up</li>
                </a>
            </div>


        </div>

    </nav>

    <div class="text-center about_bg_back">
        <h1>Plans That Serve You and Your Clients</h1>
        <main class="d-flex align-items-center switch-col">
            <h5>Monthly</h5>
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
            <h5>Yearly</h5>
        </main>

        <div class=""></div>

    </div>

    <div class="pricing-tags">

        <div class="price-list">
            <div>
                <h2>Lite</h2>
                <p>For professionals with <br>
                    basic needs</p>
            </div>
            <div>
                <img src="/src/img/15.png" alt="">
                <br>
                <br>
                <h3>5 Billable Clients</h3>
                <br>
                <button>Try it Free</button><br>

                <small>Buy Now</small>
                <br>
                <br>
                <br>
                <h2>TOP FEATURES</h2>

                <ul>
                    <li>Send unlimited invoices to up to 5 clients</li>
                    <li>Track unlimited expenses</li>
                    <li>Send unlimited estimates</li>
                    <li>Get paid with credit cards and
                        bank transfers</li>
                    <li>Track sales tax & see reports</li>
                    <li>Access anywhere on iOS and Android</li>
                </ul>

                <a href=""> See Full Plan Details</a>
                <br>
                <br>
                <br>
                <h2>ADD-ONS</h2>
                <ul>
                    <li>Team Members ($10/person/mo)</li>
                    <li>Gusto Payroll (talk to our Specialists to learn more)
                    </li>
                </ul>

                <button>Try it Free</button><br>
                <small>Buy Now</small>

            </div>
        </div>
        <div class="price-list">

            <div>
                <h2>Plus</h2>
                <p>For owners looking for more <br>
                    automation and insights</p>
            </div>
            <div>
                <img src="/src/img/30.png" alt="">
                <h3>50 Billable Clients</h3>
                <br>

                <button>Try it Free</button><br>
                <small>Buy Now</small>
                <br><br><br>
                <h2>TOP FEATURES</h2>

                <ul>
                    <li>Send unlimited invoices to up to 50 clients</li>
                    <li>Automatically track expenses</li>
                    <li>Automatically capture receipt data</li>
                    <li>Send unlimited estimates and proposals</li>
                    <li>Get paid with credit cards and bank transfers</li>
                    <li>Set up recurring billing and client retainers</li>
                </ul>

                <a href=""> See Full Plan Details</a>
                <br><br><br>
                <h2>ADD-ONS</h2>
                <ul>
                    <li>Team Members ($10/person/mo)</li>
                    <li>Gusto Payroll (talk to our Specialists to learn more)
                    </li>
                    <li>Advanced Payments ($20/mo)
                    </li>
                </ul>

                <button>Try it Free</button><br>
                <small>Buy Now</small>

            </div>
            <label for="" class="price-label">Most Popular</label>
        </div>
        <div class="price-list">
            <div>
                <h2>Premium</h2>
                <p>For growing businesses that<br>
                    want to empower employees</p>
            </div>
            <div>
                <img src="/src/img/55.png" alt="">
                <h3>Unlimited Billable Clients</h3>
                <br>
                <button>Try it Free</button><br>
                <small>Buy Now</small>
                <br><br><br>
                <h2>TOP FEATURES</h2>

                <ul>
                    <li>Send unlimited invoices to an unlimited amount of clients</li>
                    <li>Track project profitability</li>
                    <li>Customize email templates with dynamic<br> fields</li>
                    <li>Send unlimited estimates and proposals</li>
                    <li>Get paid with checkout links</li>
                    <li>Mobile mileage tracking</li>
                </ul>

                <a href=""> See Full Plan Details</a>
                <br><br><br>
                <h2>ADD-ONS</h2>
                <ul>
                    <li>Team Members ($10/person/mo)</li>
                    <li>Gusto Payroll (talk to our Specialists to learn more)
                    </li>
                    <li>Advanced Payments ($20/mo)</li>
                </ul>

                <button>Try it Free</button><br>
                <small>Buy Now</small>

            </div>
        </div>
        <div class="price-list">
            <div>
                <h2>Select</h2>
                <p>For businesses with <br>
                    more complex needs</p>
            </div>
            <div>
                <img src="/src/img/custom.png" alt="">
                <br>
                <br>
                <h3>Unlimited Billable Clients <br>
                    and Specialized Features</h3>
                <br>
                <button>Request a Demo</button><br>
                <small>Learn More</small>
                <br><br><br>
                <h2>TOP FEATURES</h2>

                <ul>
                    <li>Send unlimited invoices to an unlimited amount of clients</li>
                    <li>Start with 2 team member accounts</li>
                    <li>Get a dedicated account manager</li>
                    <li>Get help migrating from other software</li>
                    <li>Set up your account with custom onboarding services</li>
                    <li>Access anywhere on iOS and Android</li>
                </ul>

                <a href=""> See Full Plan Details</a>
                <br>
                <br>
                <br>
                <h2>ADD-ONS</h2>
                <ul>
                    <li>Team Members ($10/person/mo)</li>
                    <li>Gusto Payroll (talk to our Specialists to learn more)
                    </li>
                    <li>Advanced Payments ($20/mo)</li>
                </ul>

                <button>Try it Free</button><br>
                <small>Buy Now</small>

            </div>
        </div>



    </div>

    <div class="d-flex justify-content-center gap-5 bt-price">
        <div class="text-center bt-price-div">
            <img src="/src/img/check.png" alt="">
            <h5>WE’VE GOT YOUR BACK</h5>
            <p class="fw-normal">Our support staff is with you every step of the way,
                starting the moment you make the switch from
                spreadsheets or any other accounting software.</p>

            <div class="bg-violet" style="width:100%;height:5px"></div>
        </div>
        <div class="text-center bt-price-div">
            <img src="/src/img/check.png" alt="">
            <h5>SAFE AND SECURE</h5>
            <p class="fw-normal">G-Pay protects your personal info and your client’s info with industry-standard SSL and encryption so everything is always safe and secure.</p>

            <div class="bg-violet" style="width: 100%;height:5px"></div>
        </div>
        <div class="text-center bt-price-div">
            <img src="/src/img/check.png" alt="">
            <h5>30-DAY GUARANTEE</h5>
            <p class="fw-normal">Start a free 30-day trial today, no credit card required.
                Once your trial ends you can cancel anytime and contact us for a full refund</p>

            <div class="bg-violet" style="width: 100%;height:5px"></div>
        </div>

    </div>

    <div class="fo-page">
        <h1>Are you ready to get started?</h1>
        <div class="f-page-btn">
            <p>Let’s go</p>
        </div>
    </div>

    <footer>
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex gap-5">
                <div class="d-flex">
                    <img class="logo-img" src="/src/img/logo.png" alt="logo">
                    <div class="title">
                        <h1 class="text-purple fs-2">G-Pay</h1>
                        <p class="text-light">Invoice & Billings</p>
                    </div>
                </div>

                <div class="social-media-links">
                    <img src="/src/img/linkedin.png" alt="">
                    <img src="/src/img/twitter.png" alt="">
                    <img src="/src/img/facebook.png" alt="">
                    <img src="/src/img/youtube.png" alt="">
                </div>

            </div>
            <div class="flag-collections">
                <div class="d-flex align-items-center gap-2">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="26" height="26" fill="url(#pattern0)" />
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_48_48" transform="scale(0.0208333)" />
                            </pattern>
                            <image id="image0_48_48" width="48" height="48" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAABQUlEQVRoge3WsUrDUBTG8X80qC1CCLg5uHSwQzfBxaGLiKPiW/gCdezQ1UfwCRQndRAXBQmCiw7dhFIIFdGESMUIGqcEoyK03ptw4fym3OXmfpyccwNCCCGEKI8FkCSJ1dw8/lC9+VHUVr1lZvbsygKY0PaGguQCVCs2G+sLY68bdZdG3dV53h/s9GF6apLd9jKLNYenMMa7fhhpfdd7prOzBMB265K+P+R1/1TfyV0nHyB+e+fcG+Dfv3DTDUZeB2HMhTcAoO8P9R38G61NfLC3onrLzJzrWPClAqlqxWatOc/hSW+sddoDt92Ama1VbQFSuQCq+4BI+/nzAUzsA+N7QO6Bv+6BQgPo+P6LmELyM1e2rAKPYaS8Ajr9OoVMZHyAbAoVMTF0ML4CxgeQKVQ24wPIFCqb8QGEEEIIIf7hEycURuUfhn7yAAAAAElFTkSuQmCC" />
                        </defs>
                    </svg>
                    <p>United States</p>

                </div>
                <svg class="cursor-pointer" width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.37821 7.78781L0.257567 1.92106C-0.0858556 1.63811 -0.0858556 1.17938 0.257567 0.896463L1.08808 0.212204C1.43091 -0.0702607 1.98655 -0.0708043 2.33019 0.210996L8.00002 4.8605L13.6698 0.210996C14.0134 -0.0708043 14.5691 -0.0702607 14.9119 0.212204L15.7424 0.896463C16.0859 1.17941 16.0859 1.63814 15.7424 1.92106L8.62183 7.78781C8.27841 8.07073 7.72163 8.07073 7.37821 7.78781Z" fill="#9D9D9D" />
                </svg>

            </div>


        </div>
        <div>
            <div>
                <h1>FEATURES</h1>
                <div>
                    <a href="/gpay.com/features-client/">Clients</a><br>
                    <a href="/gpay.com/features-mobile/">Mobile</a><br>
                    <a href="/gpay.com/features-payments/">Payments</a><br>
                    <a href="/gpay.com/features-mileage-tracking/">Mileage Tracking</a><br>
                    <a href="/gpay.com/features-expenses&receipts/">Expenses & Receipts</a><br>
                    <a href="/gpay.com/features-invoices/">Invoicing</a><br>
                    <a href="/gpay.com/features-estimates/">Estimates</a><br>
                </div>
            </div>
            <div class="ver-line"></div>
            <div>
                <h1>WHO IT’S FOR</h1>
                <div>
                    <a href="/gpay.com/whoitsfor-self-employed-professionals/">Self-Employed Professionals</a><br>
                    <a href="/gpay.com/whoitsfor-freelancers/">Freelancers</a><br>
                    <a href="/gpay.com/whoitsfor-business_with_constractor/">Businesses with Contractors</a><br>
                    <a href="/gpay.com/whoitsfor-business_with_employees/">Businesses with Employee</a><br>
                    <a href="/gpay.com/whoitsfor_unemployed/">Unemployed</a><br>
                    <a href="/gpay.com/whoitsfor_students/">Students</a><br>
                </div>
            </div>
            <div class="ver-line"></div>
            <div>
                <h1>HELPFUL LINKS</h1>
                <div>
                    <a href="">Accounting Software</a><br>
                    <a href="">Accounting Templates</a><br>
                    <a href="">Invoice Template</a><br>
                    <a href="">Sitemap</a><br>
                    <a href="/gpay.com/about_us/">About Us</a><br>
                    <a href="">Support</a><br>
                    <a href="">Contact Us</a><br>
                </div>
            </div>
            <div class="ver-line"></div>
            <div>
                <h1>POLICIES</h1>
                <div>
                    <a href="">Accessibility</a><br>
                    <a href="">Privacy Policy</a><br>
                    <a href="">Payments</a><br>
                    <a href="">Security Safeguards</a><br>
                    <a href="">Terms of Service</a><br>
                </div>
            </div>
        </div>
        <p>© Copyrights 2022 G-Pay. All rights reserved.</p>
    </footer>
    <script src="{{ URL::asset('/js/nav.js') }}"></script>

</body>

</html>