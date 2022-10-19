<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up - Confirmation - Email Address | G-Pay</title>
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('/src/img/logo.png')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/signup.css') }}">
    <link href="{{ URL::asset('/css/bootstrap.css') }}" rel="stylesheet">

</head>

<body class="verify-body">
    <nav>
        <div class="d-flex align-items-center gap-5">
            <a href="/gpay.com/register/" class="text-decoration-none">
                <div class="logo  gap-2">
                    <div class="d-flex justify-content-center align-items-center">
                        <img style="width:50px" src="/src/img/logo.png" alt="logo">
                        <div class="title t-verify">
                            <h1 class="text-purple">G-Pay</h1>
                            <p>Invoice & Billings</p>
                        </div>
                    </div>
                </div>
            </a>

            <h1 class="verify-title">Email - Verification</h1>



        </div>

        <a href="">Need help?</a>



    </nav>

    <div class="verification-cont">
        <h3>Verify your Email Address to Start Using <br>G-Pay</h3>
        <p>Thank you for signing up. Click the button below to access your <br> G-Pay account:</p>
        <div class="demo_verify">
            <button class="verify-btn" onclick="typeWriter()">Verify My Email</button>

            <p style='color:black' class="timer-txt"></p>

            <div class="resend_cont">
                <p style='color:black'>Did not receive it?</p>
                <button onclick="typeWriter()" class='resend' style='text-decoration:none;font-weight:bold'>Resend</button>
            </div>

        </div>

    </div>

    <script>
        var i = 60;
        var speed = 1000;


        const verify_btn = document.querySelector('.verify-btn');
        const resend = document.querySelector('.resend');
        // Send Email
        verify_btn.addEventListener('click', function() {
            window.location.href = "/gpay.com/sign_up-confirmation_email-address/send_mail/";
        });
        // Resend Email
        resend.addEventListener('click', function() {
            window.location.href = "/gpay.com/sign_up-confirmation_email-address/send_mail/";
        });

        function typeWriter() {
            document.getElementsByClassName("verify-btn")[0].style.display = "none";
            if (i >= 0) {
                document.getElementsByClassName("timer-txt")[0].style.display = "block";
                document.getElementsByClassName("timer-txt")[0].innerHTML = "Please wait " + i + " seconds to resend.";
                if (i == 0) {
                    document.getElementsByClassName("timer-txt")[0].style.display = "none";
                    document.getElementsByClassName("resend_cont")[0].style.display = "block";

                }
                i--;
                setTimeout(typeWriter, speed);
            }
        }
    </script>

</body>

</html>