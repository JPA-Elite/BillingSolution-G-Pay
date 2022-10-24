<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Forgot Password | G-Pay</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('/src/img/logo.png')}}">
    <link href="/dash/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/dash/css/style.css" rel="stylesheet">

    <style>
        body {
            background-image: url("/src/img/login-back.png");
            background-size: cover;
            background-repeat: no-repeat;

            overflow: hidden;

        }
    </style>

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <img src="/src/img/logo.png" style="width:30%" alt="">
                                        <h1 class="text-center mb-4" style="color: #6D60F7;">G-Pay</h1>
                                    </div>
                                    <h4 class="text-center mb-4">Forgot Password</h4>
                                    <p>We will send a link to your gmail account to reset your password.</p>
                                    <div action="#">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div style="display: flex;align-items: center;justify-content: right;gap:1rem">
                                            <a href="/gpay.com/register/"> <button class="btn btn-primary ">BACK</button></a>
                                            <a href=""> <button type="submit" class="btn btn-primary ">SUBMIT</button></a>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/dash/vendor/global/global.min.js"></script>
    <script src="/dash/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/dash/js/custom.min.js"></script>
    <script src="/dash/js/deznav-init.js"></script>
    <script src="/dash/js/demo.js"></script>
    <script src="/dash/js/styleSwitcher.js"></script>
</body>

</html>