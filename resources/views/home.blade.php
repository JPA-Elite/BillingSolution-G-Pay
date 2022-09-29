<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage | G-Pay</title>
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('/src/img/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/home.css') }}">
    <link href="{{ URL::asset('/css/bootstrap.css') }}" rel="stylesheet">
</head>

<body class="body">
    <nav>
        <div class="d-flex align-items-end gap-5">
            <div class="logo d-grid gap-2">
                <div class="d-flex">
                    <img src="/src/img/logo.png" alt="logo">
                    <div class="title">
                        <h1 class="text-purple">G-Pay</h1>
                        <p>Invoice & Billings</p>
                    </div>
                </div>
            </div>
            <ul class="d-flex gap-4 ">
                <div class="d-flex align-items-end gap-1 features">
                    <li>Features</li>
                    <li><img class="w-50" src="/src/img/arrow-down.svg" alt="arrow-down"></li>
                    <div class="f-pop-up">
                        <div>
                            <h6>Clients</h6>
                        </div>
                        <div>
                            <h6>Mobile</h6>
                        </div>
                        <div>
                            <h6>Payments</h6>
                        </div>
                        <div>
                            <h6>Mileage Tracking</h6>
                        </div>
                        <div>
                            <h6>Expenses & Receipts</h6>
                        </div>
                        <div>
                            <h6>Invoicing</h6>
                        </div>

                        <div>
                            <h6>Estimates</h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end gap-1 emp-type">
                    <li>Who it’s for</li>
                    <li><img class="w-50" src="/src/img/arrow-down.svg" alt="arrow-down"></li>
                    <div class="s-pop-up">
                        <div>
                            <h6>Self-Employed Professionals</h6>
                        </div>
                        <div>
                            <h6>Freelancers</h6>
                        </div>
                        <div>
                            <h6>Businesses with Contractors
                            </h6>
                        </div>
                        <div>
                            <h6>Businesses with Employee
                            </h6>
                        </div>
                        <div>
                            <h6>Expenses & Receipts</h6>
                        </div>
                        <div>
                            <h6>Unemployed</h6>
                        </div>

                        <div>
                            <h6>Students</h6>
                        </div>
                    </div>
                </div>
                <li>Projects</li>
                <li>About Us</li>
            </ul>
        </div>

        <div class="d-flex align-items-end justify-content-center gap-0 user-info">
            <div class="d-flex align-items-end justify-content-center gap-2 w-50">
                <img class="w-30" src="/src/img/notify.svg" alt="notification">
                <img class="w-30" src="/src/img/comment.svg" alt="messages">
            </div>
            <img class="w-22" src="/src/img/user.svg" alt="user">
        </div>

    </nav>

    <div class="back-image">
        <div class="back-image-mask"></div>
    </div>

    <div class="search-bar">

        <div class="input-group mb-3 position-relative h-100">
            <span class="input-group-text"><img class="w-50 m-auto" src="/src/img/search.png" alt=""></span>
            <input type="search" class="form-control" placeholder="Search for your concerns...">
        </div>
    </div>

    <div class="f-page">
        <div class="fst-fpage-cont">
            <h2>What is G-Pay?</h2>
            <p>G-pay is an accurate billing services which you can select a lot of payment options that can paid you faster
                and the clients pay how they like.
            </p>
            <p>Recurring invoices, Automated Reminders,
                and <br> Online Payments make it easy.</p>
            <img src="/src/img/arrow-right.svg" alt="">
        </div>
        <img class="page-right-img w-30" src="/src/img/first-page-right.svg" alt="">

    </div>
    <div class="s-page">
        <div class="p-6">
            <h1 class="">Billing and Invoicing Software Built For<br>
                Any Business Size</h1>
        </div>


        <div class="selection-page">
            <div class="cont-arrow-left d-flex align-items-center justify-content-center">
                <svg width="44" height="44" viewBox="0 0 44 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.49817 29.4948L30.4501 1.45361C32.4512 -0.484536 35.687 -0.484536 37.6668 1.45361L42.4779 6.1134C44.479 8.05155 44.479 11.1856 42.4779 13.1031L21.9774 33L42.4992 52.8763C44.5003 54.8144 44.5003 57.9484 42.4992 59.866L37.6881 64.5464C35.687 66.4845 32.4512 66.4845 30.4714 64.5464L1.51945 36.5052C-0.502923 34.567 -0.502922 31.433 1.49817 29.4948Z" fill="black" fill-opacity="0.48" />
                </svg>

            </div>
            <div class="d-flex gap-3">
                <div class="pg-content">
                    <img src="/src/img/freelancer.png" alt="">
                    <h3>Freelancers
                        <br><br>
                    </h3>
                    <p class="mt-2">Features and plans designed
                        for every freelancer,
                        even if you’re on the go.</p>

                </div>
                <div class="pg-content">
                    <img src="/src/img/self.png" alt="">
                    <h3>Self-Employed
                        Professionals </h3>
                    <p>Solutions and plans designed to empower self-employed professionals.</p>
                </div>
                <div class="pg-content">
                    <img src="/src/img/construct.png" alt="">
                    <h3>Businesses With
                        Contractors</h3>
                    <p>Features and plans designed for businesses with multiple contractors.</p>
                </div>
                <div class="pg-content"> <img src="/src/img/small.png" alt="">
                    <h3>Businesses With
                        Employees</h3>
                    <p>Robust features and customized plans for scaling businesses with multiple employees and teams of accountants.</p>
                </div>
            </div>
            <div class="cont-arrow-right d-flex align-items-center justify-content-center">
                <svg width="45" height="44" viewBox="0 0 45 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M42.6758 36.7563L13.5583 64.6256C11.5458 66.5518 8.31005 66.5327 6.34177 64.5828L1.55833 59.8946C-0.431247 57.9447 -0.412684 54.8107 1.59973 52.9051L22.2177 33.1299L1.81402 13.1324C-0.175552 11.1825 -0.156989 8.04851 1.85543 6.14287L6.69419 1.49103C8.70672 -0.435229 11.9425 -0.416063 13.9108 1.53378L42.6961 29.746C44.7069 31.6961 44.6884 34.8301 42.6758 36.7563Z" fill="black" fill-opacity="0.48" />
                </svg>

            </div>
        </div>
    </div>

    <div class="t-page">
        <h1>Customer Support</h1>
        <div class="d-flex align-items-center justify-content-center gap-5">
            <img class="w-30" src="/src/img/online.png" alt="">
            <div>
                <div>
                    <div class="d-flex align-items-center gap-2">
                        <svg class="position-relative bottom-7px" width="30" height="20" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.1893 25.4894L0.439322 14.1579C-0.146441 13.4771 -0.146441 12.3733 0.439322 11.6925L2.56059 9.22708C3.14636 8.54624 4.09616 8.54624 4.68192 9.22708L11.25 16.8604L25.3181 0.510579C25.9038 -0.170193 26.8536 -0.170193 27.4394 0.510579L29.5607 2.97599C30.1464 3.65676 30.1464 4.76056 29.5607 5.4414L12.3107 25.4894C11.7248 26.1702 10.7751 26.1702 10.1893 25.4894Z" fill="#277C19" />
                        </svg>

                        <p>Our support team provides higher security for customers.</p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <svg class="position-relative bottom-7px" width="30" height="20" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.1893 25.4894L0.439322 14.1579C-0.146441 13.4771 -0.146441 12.3733 0.439322 11.6925L2.56059 9.22708C3.14636 8.54624 4.09616 8.54624 4.68192 9.22708L11.25 16.8604L25.3181 0.510579C25.9038 -0.170193 26.8536 -0.170193 27.4394 0.510579L29.5607 2.97599C30.1464 3.65676 30.1464 4.76056 29.5607 5.4414L12.3107 25.4894C11.7248 26.1702 10.7751 26.1702 10.1893 25.4894Z" fill="#277C19" />
                        </svg>

                        <p>Our support team is highly knowledgable and never
                            transfers you to another department.</p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <svg class="position-relative bottom-7px" width="30" height="20" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.1893 25.4894L0.439322 14.1579C-0.146441 13.4771 -0.146441 12.3733 0.439322 11.6925L2.56059 9.22708C3.14636 8.54624 4.09616 8.54624 4.68192 9.22708L11.25 16.8604L25.3181 0.510579C25.9038 -0.170193 26.8536 -0.170193 27.4394 0.510579L29.5607 2.97599C30.1464 3.65676 30.1464 4.76056 29.5607 5.4414L12.3107 25.4894C11.7248 26.1702 10.7751 26.1702 10.1893 25.4894Z" fill="#277C19" />
                        </svg>

                        <p>Our support team provides costumer’s payments easier
                            and faster.</p>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-4 mt-4">
                    <div class="cust-btn">
                        <p>CONTACT US</p>
                    </div>
                    <div class="cust-btn">
                        <p>HELP CENTER</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="fre-cont-page">
            <div class="d-flex align-items-center justify-content-center gap-2 pt-4">
                <h1>Frequently Asked Questions</h1>
                <svg class="position-relative -top-18px" width="54" height="46" viewBox="0 0 54 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27 0C12.0894 0 0 10.3021 0 23C0 35.7054 12.0894 46 27 46C41.9106 46 54 35.7054 54 23C54 10.3021 41.9106 0 27 0ZM27 41.5484C14.9663 41.5484 5.22581 33.2544 5.22581 23C5.22581 12.7525 14.9667 4.45161 27 4.45161C39.0293 4.45161 48.7742 12.7493 48.7742 23C48.7742 33.2508 39.0378 41.5484 27 41.5484ZM38.6758 17.8806C38.6758 24.0992 30.7912 24.1949 30.7912 26.4929V27.0806C30.7912 27.6952 30.2062 28.1935 29.4848 28.1935H24.5151C23.7936 28.1935 23.2087 27.6952 23.2087 27.0806V26.2776C23.2087 22.9625 26.1591 21.6373 28.3886 20.5725C30.3005 19.6594 31.4723 19.0384 31.4723 17.8293C31.4723 16.2298 29.0773 15.1682 27.141 15.1682C24.6164 15.1682 23.4509 16.1863 21.8126 17.9476C21.3709 18.4224 20.565 18.5106 19.9982 18.1446L16.969 16.1879C16.413 15.8288 16.2884 15.1616 16.6811 14.6704C19.2534 11.4528 22.5298 9.64516 27.6308 9.64516C32.9732 9.64516 38.6758 13.1975 38.6758 17.8806ZM31.5726 33.3871C31.5726 35.5349 29.5213 37.2823 27 37.2823C24.4787 37.2823 22.4274 35.5349 22.4274 33.3871C22.4274 31.2393 24.4787 29.4919 27 29.4919C29.5213 29.4919 31.5726 31.2393 31.5726 33.3871Z" fill="black" />
                </svg>

            </div>

            <div class="d-flex align-items-center justify-content-center gap-5">
                <div>
                    <div class="d-flex align-items-center justify-content-between">
                        <p>Why should I choose G-Pay?</p>
                        <svg class="cursor-pointer" width="25" height="25" viewBox="0 0 36 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.601 19.4695L0.579526 4.80264C-0.193175 4.09527 -0.193175 2.94845 0.579526 2.24116L2.44817 0.530509C3.21955 -0.175652 4.46974 -0.177011 5.24294 0.527489L18 12.1513L30.7571 0.527489C31.5303 -0.177011 32.7804 -0.175652 33.5518 0.530509L35.4205 2.24116C36.1932 2.94853 36.1932 4.09535 35.4205 4.80264L19.3991 19.4695C18.6264 20.1768 17.3737 20.1768 16.601 19.4695Z" fill="black" fill-opacity="0.48" />
                        </svg>

                    </div>
                    <svg width="485" height="4" viewBox="0 0 485 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="-0.000488281" y1="2.00391" x2="485.001" y2="2.00391" stroke="black" stroke-opacity="0.48" stroke-width="3" />
                    </svg>
                    <div class="d-flex align-items-center justify-content-between">
                        <p>Why should I switch to G-Pay<br>
                            billing and invoicing software?</p>
                        <svg class="cursor-pointer" width="25" height="25" viewBox="0 0 36 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.601 19.4695L0.579526 4.80264C-0.193175 4.09527 -0.193175 2.94845 0.579526 2.24116L2.44817 0.530509C3.21955 -0.175652 4.46974 -0.177011 5.24294 0.527489L18 12.1513L30.7571 0.527489C31.5303 -0.177011 32.7804 -0.175652 33.5518 0.530509L35.4205 2.24116C36.1932 2.94853 36.1932 4.09535 35.4205 4.80264L19.3991 19.4695C18.6264 20.1768 17.3737 20.1768 16.601 19.4695Z" fill="black" fill-opacity="0.48" />
                        </svg>
                    </div>

                </div>
                <div>
                    <svg width="6" height="259" viewBox="0 0 6 259" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="3.46814" y1="624.047" x2="3.46814" y2="0.95929" stroke="black" stroke-opacity="0.48" stroke-width="5" />
                    </svg>
                </div>
                <div>
                    <div class="d-flex align-items-center justify-content-between">
                        <p>Does G-Pay work on all of
                            my devices?</p>
                        <svg class="cursor-pointer" width="25" height="25" viewBox="0 0 36 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.601 19.4695L0.579526 4.80264C-0.193175 4.09527 -0.193175 2.94845 0.579526 2.24116L2.44817 0.530509C3.21955 -0.175652 4.46974 -0.177011 5.24294 0.527489L18 12.1513L30.7571 0.527489C31.5303 -0.177011 32.7804 -0.175652 33.5518 0.530509L35.4205 2.24116C36.1932 2.94853 36.1932 4.09535 35.4205 4.80264L19.3991 19.4695C18.6264 20.1768 17.3737 20.1768 16.601 19.4695Z" fill="black" fill-opacity="0.48" />
                        </svg>

                    </div>
                    <svg width="485" height="4" viewBox="0 0 485 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="-0.000488281" y1="2.00391" x2="485.001" y2="2.00391" stroke="black" stroke-opacity="0.48" stroke-width="3" />
                    </svg>
                    <div class="d-flex align-items-center justify-content-between">
                        <p>Does G-Pay offer support to
                            its customers?<br><br></p>
                        <svg class="cursor-pointer" width="25" height="25" viewBox="0 0 36 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.601 19.4695L0.579526 4.80264C-0.193175 4.09527 -0.193175 2.94845 0.579526 2.24116L2.44817 0.530509C3.21955 -0.175652 4.46974 -0.177011 5.24294 0.527489L18 12.1513L30.7571 0.527489C31.5303 -0.177011 32.7804 -0.175652 33.5518 0.530509L35.4205 2.24116C36.1932 2.94853 36.1932 4.09535 35.4205 4.80264L19.3991 19.4695C18.6264 20.1768 17.3737 20.1768 16.601 19.4695Z" fill="black" fill-opacity="0.48" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fo-page">
        <h1>Are you ready to get started?</h1>
        <div class="f-page-btn">
            <p>Let’s go</p>
        </div>
    </div>

    <footer>
        <div class="d-flex">
            <img src="/src/img/logo.png" alt="logo">
            <div class="title">
                <h1 class="text-purple">G-Pay</h1>
                <p class="text-light">Invoice & Billings</p>
            </div>
            <div class="social-media-links">
            <img src="/src/img/linkedin.png" alt="">
            <img src="/src/img/twitter.png" alt="">
            <img src="/src/img/facebook.png" alt="">
            <img src="/src/img/youtube.png" alt="">




            </div>
        </div>
    </footer>

</body>

</html>