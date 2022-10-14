<?php
session_start();
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up - Profile Information | G-Pay</title>
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('/src/img/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/signup.css') }}">
    <link href="{{ URL::asset('/css/bootstrap.css') }}" rel="stylesheet">

</head>

<body class="body">
    <div class="d-flex justify-content-center align-items-center main-signup h-100">
        <form class="sign-pg-left" action="/profile_info/create_account" method="post" name="registration">
            {{ csrf_field() }}
            <div class="d-flex" style="position:relative; left:-20px;top:-5px">
                <img style="width:80px;height:80px;position:relative;top:10px" class="logo-img" src="/src/img/logo.png" alt="logo">
                <div class="title">
                    <h1 class="text-purple">G-Pay</h1>
                    <p>Invoice & Billings</p>
                </div>
            </div>

            <h1>Welcome!<br>
                Let's Get You Set Up!
            </h1>

            <div class="d-grid justify-content-start align-items-center m-auto pt-3 b-cont">
                <div class="d-flex justify-content-start align-items-center gap-2">
                    <div>
                        <p class="label-txt">First Name*</p>
                        <input class="f-name" name="f_name" type="text">
                    </div>
                    <div>
                        <p class="label-txt">Last Name*</p>
                        <input class="l-name" name="l_name" type="text">
                    </div>
                </div>
                <div class="">

                    <p class="label-txt">Where are you located?*</p>
                    <input class="location" name="location" type="text" class="w-100">

                </div>
                <div class="">

                    <p class="label-txt">Phone number*</p>
                    <input class="phone" name="phone" type="number" class="w-100">

                </div>
                <div class="">

                    <p class="label-txt">Email Address*</p>
                    <input class="email" name="email" type="text" class="w-100">

                </div>
                <div class="">

                    <p class="label-txt">Password*</p>
                    <input class="password" name="password" type="password" class="w-100">

                </div>

                <div class="">

                    <p class="label-txt">Confirm Password*</p>
                    <input class="c-password" name="c-password" type="password" class="w-100">

                </div>
            </div>

            <div class="d-grid ">
                <div class="line"></div>
                <!-- /Gpay.com/sign_up-about_business/ -->
                <a href="#" class="pro-sub"><button class="next-button" type="submit">Next</button></a>
            </div>
        </form>

        <div class="sign-pg-right">

            <div>
                <div class="d-flex justify-content-center ">
                    <div class="indicator"></div>
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
                    <a href="/Gpay.com/register/" class="d-flex align-items-center justify-content-center cursor-pointer">
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
        const pro_sub = document.querySelector('.pro-sub');
        const f_name = document.querySelector('.f-name');
        const l_name = document.querySelector('.l-name');
        const locate = document.querySelector('.location');
        const phone = document.querySelector('.phone');
        const email = document.querySelector('.email');
        const password = document.querySelector('.password');
        const c_password = document.querySelector('.c-password');

        pro_sub.addEventListener("click", function(event) {
            if (f_name.value == "") {
                f_name.style.borderColor = "#842029";
                f_name.placeholder = "*This field must not be empty!";
                event.preventDefault();


            }
            if (l_name.value == "") {
                l_name.style.borderColor = "#842029";
                l_name.placeholder = "*This field must not be empty!";
                event.preventDefault();
            }
            if (locate.value == "") {
                locate.style.borderColor = "#842029";
                locate.placeholder = "*This field must not be empty!";
                event.preventDefault();
            }
            if (phone.value == "") {
                phone.style.borderColor = "#842029";
                phone.placeholder = "*This field must not be empty!";
                event.preventDefault();
            }

            if (!(ValidateEmail(email))) {
                email.style.borderColor = "#842029";
                email.placeholder = "*This field must not be empty!";
                event.preventDefault();
            }

            if (password.value != c_password.value) {
                password.style.borderColor = "#842029";
                c_password.style.borderColor = "#842029";
                event.preventDefault();
            } else {
                createCookie("f_name", f_name.value, "1");
                createCookie("l_name", l_name.value, "1");
                createCookie("location", locate.value, "1");
                createCookie("phone", phone.value, "1");
                createCookie("email", email.value, "1");
                createCookie("password", password.value, "1");
                // window.location.href = "/Gpay.com/sign_up-about_business/";
            }


        });

        function ValidateEmail(email) {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (email.value.match(mailformat)) {
                return true;
            } else {
                return false;
            }
        }

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


</body>

</html>