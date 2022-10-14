<?php

//   use App\Models\Profile_info;
//   use Illuminate\Routing\Controller as Controller;
//   use Illuminate\Http\Request;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up - About your Business | G-Pay</title>
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('/src/img/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/signup.css') }}">
    <link href="{{ URL::asset('/css/bootstrap.css') }}" rel="stylesheet">

</head>

<body class="body">
    <div class="d-flex justify-content-center align-items-center main-signup h-100">
        <div class="sign-pg-left" name="registration">
            {{ csrf_field() }}
            <div class="d-flex" style="position:relative; left:-20px;top:-5px">
                <img style="width:80px;height:80px;position:relative;top:10px" class="logo-img" src="/src/img/logo.png" alt="logo">
                <div class="title">
                    <h1 class="text-purple">G-Pay</h1>
                    <p>Invoice & Billings</p>
                </div>
            </div>

            <h1>Tell us about your business!<br>
                so we can tailor your<br> experience
            </h1>

            <div class="d-grid justify-content-start align-items-center m-auto pt-3 b-cont">
                <div class="">
                    <p class="label-txt">What’s your company name?*</p>
                    <input type="text" class="company_name input-b" placeholder="" name="company_name">

                </div>
                <div class="pt-3">

                    <p class="label-txt">What does your business do?*</p>
                    <!-- <input type="tel" class="company_do input-b" placeholder="Choose industry" name="company_do"> -->
                    <select class="company_do" name="company_do" id="">
                        <option value=""></option>
                        <option value="Construction, Trade & Home Services">Construction, Trade & Home Services</option>
                        <option value="Creative Professionals">Creative Professionals</option>
                        <option value="Marketing, Communications & Media">Marketing, Communications & Media</option>
                        <option value="Development & Programming">Development & Programming</option>
                        <option value="Management Consulting">Management Consulting</option>
                        <option value="Information Technology & Support">Information Technology & Support</option>
                        <option value="Accounting & Finance">Accounting & Finance</option>
                        <option value="Automotive & Transport">Automotive & Transport</option>
                        <option value="Health & Wellnes">Health & Wellness</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="pt-3">

                    <p class="label-txt">How would you describe your business? *
                    </p>
                    <!-- <input type="tel" class="describe_business input-b" placeholder="Choose an option" name="describe_business"> -->
                    <select class="describe_business" name="describe_business" id="">
                        <option value=""></option>
                        <option value="Its launching soon">It’s launching soon</option>
                        <option value="Its part-time or supplements my main income">It’s part-time or supplements my
                            main income</option>
                        <option value="Its a new business but its my full-time focus">It’s a new business but it’s my
                            full-time focus</option>
                        <option value="Its been my full-time focus for over a year">It’s been my full-time focus for
                            over a year</option>
                    </select>
                </div>

                <div class="pt-3">
                    <p class="label-txt">What's your estimated revenue this year? *
                    </p>
                    <div class=" d-flex justify-content-start align-items-center gap-2">
                        <div>
                            <!-- <input class="currency" name="currency" type="text" placeholder="USD - US Dollar"> -->
                            <select class="currency" name="currency" id="">
                                <option value="USD - US Dollar">USD - US Dollar</option>
                                <option value="EUR - Euro">EUR - Euro</option>
                                <option value="AED - United Arab Emirates dirham">AED - United Arab Emirates dirham
                                </option>
                                <option value="PHP - Philippine Peso">PHP - Philippine Peso</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="demo-currency">

                            <!-- <input class="estimate_revenue" name="estimate_revenue" type="text" placeholder="Estimated Revenue"> -->
                            <select class="estimate_revenue" name="estimate_revenue" id="">
                                <option value=""></option>
                                <option value="Up to $30,000">Up to $30,000</option>
                                <option value="$31,000 to $75,000">$31,000 to $75,000</option>
                                <option value="$76,000 to $125,000<">$76,000 to $125,000</option>
                                <option value="$126,000 t">$126,000 to $500,000</option>
                                <option value="$500,000 or more">$500,000 or more</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="pt-3">

                    <p class="label-txt">How long does it take to complete your services? *
                    </p>
                    <!-- <input type="tel" class=" input-b" placeholder="Choose an option"> -->

                    <select class="long_service" name="long_service" id="">
                        <option value=""></option>
                        <option value="Real-time or within a few hours">Real-time or within a few hours</option>
                        <option value="Less than a week">Less than a week</option>
                        <option value="More than a week but less than a month">More than a week but less than a month
                        </option>
                        <option value="More than a month">More than a month</option>

                    </select>

                </div>

                <div class="pt-3">

                    <p class="label-txt">What do you currently use to bill your customers? *
                    </p>
                    <!-- <input type="tel" class=" input-b" placeholder="Choose an option"> -->
                    <select class="current_bill" name="current_bill" id="">
                        <option value=""></option>
                        <option class=" " value="Pen and paper">Pen and paper</option>
                        <option class=" " value="Spreadsheets and Word documents">Spreadsheets and Word documents
                        </option>
                        <option class=" " value="I don't use anything right now">I don't use anything right now</option>
                        <option class=" " value="Another accounting software">Another accounting software</option>

                    </select>


                </div>

                <div class="pt-3">
                    <p class="label-txt cust-txt">How customized is your offering for customers? *
                    </p>
                    <div class="d-flex justify-content-start align-items-center gap-2">
                        <input style="cursor:pointer; text-align:center;font-weight:400" type="button" value=" More or Less The Same" class="customized-btn btn-ml">


                        <input style="cursor:pointer; text-align:center;font-weight:400" type="button" value="  Different or customized" class="customized-btn btn-dc">


                    </div>

                </div>

            </div>

            <div class="d-grid ">
                <div class="line"></div>
                <div class="d-flex justify-content-start align-items-center gap-3">
                    <a href="/Gpay.com/register/"><input class="next-button" type="button" value="Back" style="cursor:pointer; text-align:center;font-weight:400"></a>
                    <a href="#"><button class="next-button n-b-extend save_extend_btn" type="submit">Save & Finished</button></a>
                </div>


            </div>
        </div>



        <div class="sign-pg-right">

            <div>
                <div class="d-flex justify-content-center ">
                    <div class="indicator i-2"></div>
                    <div>
                        <p class="txt-indicate">Enter your profile information</p>
                        <br>
                        <p class="txt-indicate">Tell us about your business</p>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-center gap-10">
                    <a href="" class="d-flex align-items-center justify-content-center cursor-pointer">
                        <p>Contact Support</p>
                        <img class="log" src="/src/img/question.png" alt="">
                    </a>
                    <a href="/Gpay.com/sign_up-profile_information/" class="d-flex align-items-center justify-content-center cursor-pointer">
                        <p>Back</p>
                        <img class="log" src="/src/img/back.png" alt="">
                    </a>
                </div>
            </div>


            <div class="bg-c bg1"></div>
            <div class="bg-c bg2"></div>
            <div class="bg-c bg3"></div>
            <div class="bg-c bg4"></div>




        </div>
    </div>

    <script>
        // Profile information
        const save_extend_btn = document.querySelector('.save_extend_btn');
        const company_name = document.querySelector('.company_name');
        const company_do = document.querySelector('.company_do');
        const describe_business = document.querySelector('.describe_business');
        const currency = document.querySelector('.currency');
        const estimate_revenue = document.querySelector('.estimate_revenue');
        const long_service = document.querySelector('.long_service');
        const current_bill = document.querySelector('.current_bill');
        const btn_ml = document.querySelector('.btn-ml');
        const btn_dc = document.querySelector('.btn-dc');
        const cust_txt = document.querySelector('.cust-txt');
        const demo_currency = document.querySelector('.demo-currency');


        currency.addEventListener('click', function() {
            if (this.value == "USD - US Dollar") {

                demo_currency.innerHTML = `
                <select  class="describe_business estimate_revenue" name="describe_business" id="">
                <option value="Up to $30,000">Up to $30,000</option>
                <option value="$31,000 to $75,000">$31,000 to $75,000</option>
                <option value="$76,000 to $125,000<">$76,000 to $125,000</option>
                <option value="$126,000 t">$126,000 to $500,000</option>
                <option value="$500,000 or more">$500,000 or more</option>
                </select>
                `;
            } else {
                demo_currency.innerHTML =
                    `<input style="padding:7px;width:92%" class="estimate_revenue" name="estimate_revenue" type="number" class="w-100" placeholder="Input an amount...">`;

            }
        });
        save_extend_btn.addEventListener("click", function(event) {
            if (company_name.value == "") {
                company_name.style.borderColor = "#842029";
                company_name.placeholder = "*This field must not be empty!";

            }
            if (company_do.value == "") {
                company_do.style.borderColor = "#842029";

                // l_name.placeholder = "*This field must not be empty!";
            }
            if (describe_business.value == "") {
                describe_business.style.borderColor = "#842029";

                // locate.placeholder = "*This field must not be empty!";
            }
            if (currency.value == "") {
                currency.style.borderColor = "#842029";

                // phone.placeholder = "*This field must not be empty!";
            }
            if (estimate_revenue.value == "") {
                estimate_revenue.style.borderColor = "#842029";

                // phone.placeholder = "*This field must not be empty!";
            }
            if (long_service.value == "") {
                long_service.style.borderColor = "#842029";

                // phone.placeholder = "*This field must not be empty!";
            }
            if (current_bill.value == "") {
                current_bill.style.borderColor = "#842029";

                // phone.placeholder = "*This field must not be empty!";
            }
            if (current_bill.value == "") {
                current_bill.style.borderColor = "#842029";

                // phone.placeholder = "*This field must not be empty!";
            } else {
                // Profile information
                //    const save_extend_btn = document.querySelector('.save_extend_btn');
                //         const company_name = document.querySelector('.company_name');
                //         const company_do = document.querySelector('.company_do');
                //         const describe_business = document.querySelector('.describe_business');
                //         const currency = document.querySelector('.currency');
                //         const estimate_revenue = document.querySelector('.estimate_revenue');
                //         const long_service = document.querySelector('.long_service');
                //         const current_bill = document.querySelector('.current_bill');
                //         const btn_ml = document.querySelector('.btn-ml');
                //         const btn_dc = document.querySelector('.btn-dc');
                //         const cust_txt = document.querySelector('.cust-txt');
                //         const demo_currency = document.querySelector('.demo-currency');
                const estimate_revenue = document.querySelector('.estimate_revenue');
                createCookie("company_name", company_name.value, "1");
                createCookie("company_do", company_do.value, "1");
                createCookie("describe_business", describe_business.value, "1");
                createCookie("currency", currency.value, "1");
                createCookie("estimate_revenue", estimate_revenue.value, "1");
                createCookie("long_service", long_service.value, "1");
                createCookie("current_bill", current_bill.value, "1");
                window.location.href = '/Gpay.com/sign_up-confirmation_email-address/';

            }
        });

        // Function to create the cookie
        function createCookie(name, value, days) {
            var expires;

            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toGMTString();
            } else {
                expires = "";
            }
            document.cookie = escape(name) + "=" +
                escape(value) + expires + "; path=/";
        }
    </script>
    <script src="{{ URL::asset('/js/jquery.js') }}"></script>
    <script src="{{ URL::asset('/js/function.js') }}"></script>


    <?php
    // class sign_up_about_business extends Controller
    // {
    //     protected function create_info(Request $account)
    //     {
    //         $register = new Profile_info();

    //         // Profile Information
    //         // $f_name = validate_data($_COOKIE["f_name"]);
    //         // $l_name = validate_data($_COOKIE["l_name"]);
    //         // $location = validate_data($_COOKIE["location"]);
    //         // $phone = validate_data($_COOKIE["phone"]);
    //         // $email = validate_data($_COOKIE["email"]);

    //         // $f_name = "hello";
    //         // $l_name = "hi";
    //         // $location = "23f";
    //         // $phone = "wdfwf";
    //         // $email = "fwfw";

    //         return $register->create_account($account);
    //     }


    //     // function validate_data($data)
    //     // {
    //     //     $data = trim($data);
    //     //     $data = stripslashes($data);
    //     //     $data = htmlspecialchars($data);
    //     //     return $data;
    //     // }
    // }

    // $create_information = new sign_up_about_business();
    // $create_information->create_info();
    // 
    ?>





</body>

</html>