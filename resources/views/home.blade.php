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

</body>

</html>