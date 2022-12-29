<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>


    <!-- Perfect Scrollbar -->
    <link type="text/css" href="http://localhost/Moderna/admin/css/erfect-scrollbar.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="http://localhost/Moderna/admin/css/app.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="http://localhost/Moderna/admin/css/vendor-material-icons.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="http://localhost/Moderna/admin/css/vendor-fontawesome-free.css" rel="stylesheet">

</head>

<body class="layout-login-centered-boxed">

    <div class="layout-login-centered-boxed__form card">

        <div class="alert alert-soft-success d-flex" role="alert">
        </div>

        <a href="https://accounts.google.com/AddSession" class="btn btn-light btn-block">
            <span class="fab fa-google mr-2" style="color:red; font-size: 25px;"></span>
            Continue with Google
        </a>

        <div class="page-separator">
            <div class="page-separator__text" style="color:chocolate;">or</div>
        </div><br>

        <form action="loginpost.php" method="POST">
            <div class="form-group">
                <label class=" font-weight-bolder" for="email_2">EMAIL ADDRESS:</label>
                <div class="input-group input-group-merge">
                    <input id="email_2" type="email" required="" class="form-control form-control-prepended" placeholder="Enter Your Email" name="email">

                </div>
            </div>
            <div class="form-group">
                <label class="font-weight-bolder" for="password_2">PASSWORD:</label>
                <div class="input-group input-group-merge">
                    <input id="password_2" type="password" required="" class="form-control form-control-prepended" placeholder="Enter your password" name="password">

                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-primary" type="submit" name="submit">Login</button>
            </div>
            <div class="form-group text-center">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked="" id="remember">
                    <label class="custom-control-label" for="remember">Remember me</label>
                </div>
            </div>
            <div class="form-group text-center">
                <a href="#">Forgot password?</a> <br><br>
                Don't have an account? <a class=" text-underline text-blue font-weight-bolder" href="signup.php">Sign up!</a>
            </div>
        </form>
    </div>

</body>

</html>