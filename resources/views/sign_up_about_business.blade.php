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
        <div class="sign-pg-left">
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
                    <input type="text" class=" input-b" placeholder="">

                </div>
                <div class="">

                    <p class="label-txt">What does your company do?*</p>
                    <input type="tel" class=" input-b" placeholder="Choose industry">

                </div>
                <div class="">

                    <p class="label-txt">How would you describe your business? *
                    </p>
                    <input type="tel" class=" input-b" placeholder="Choose an option">

                </div>

                <div class="">
                    <p class="label-txt">What's your estimated revenue this year? *
                    </p>
                    <div class="d-flex justify-content-start align-items-center gap-2">
                        <div>
                            <input type="text" placeholder="USD - US Dollar">
                        </div>
                        <div>
                            <input type="text" placeholder="Estimated Revenue">
                        </div>
                    </div>

                </div>

                <div class="">

                    <p class="label-txt">How long does it take to complete your services? *
                    </p>
                    <input type="tel" class=" input-b" placeholder="Choose an option">

                </div>

                <div class="">

                    <p class="label-txt">What do you currently use to bill your customers? *
                    </p>
                    <input type="tel" class=" input-b" placeholder="Choose an option">

                </div>

                <div class="">
                    <p class="label-txt">How customized is your offering for customers? *
                    </p>
                    <div class="d-flex justify-content-start align-items-center gap-2">
                        <button class="customized-btn">
                            More or Less The Same
                        </button>
                        <button class="customized-btn">
                            Different or customized
                        </button>
                    </div>

                </div>

            </div>

            <div class="d-grid ">
                <div class="line"></div>
                <div class="d-flex justify-content-start align-items-center gap-3">
                    <a href="/Gpay.com/register/"><button class="next-button">Back</button></a>
                    <a href=""><button class="next-button n-b-extend">Save & Finished</button></a>
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




</body>

</html>