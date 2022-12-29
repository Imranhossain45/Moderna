<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Signup</title>

         <!-- Perfect Scrollbar -->
    <link type="text/css" href="http://localhost/Moderna/admin/css/perfect-scrollbar.css" rel="stylesheet">

<!-- App CSS -->
<link type="text/css" href="http://localhost/Moderna/admin/css/app.css" rel="stylesheet">

<!-- Material Design Icons -->
<link type="text/css" href="http://localhost/Moderna/admin/css/vendor-material-icons.css" rel="stylesheet">

<!-- Font Awesome FREE Icons -->
<link type="text/css" href="http://localhost/Moderna/admin/css/vendor-fontawesome-free.css" rel="stylesheet">



    </head>

    <body class="layout-login-centered-boxed">

        <div class="layout-login-centered-boxed__form card">
         <?php 
         session_start();
         if(isset($_SESSION['error'])){
            foreach($_SESSION['error'] as $error){
                ?>
                <div class="alert alert-danger"><?=$error?></div>
                <?php
                 
            }
         }
         unset($_SESSION['error']);
         ?>


            <div class="d-flex flex-column justify-content-center align-items-center mt-2  navbar-light">
                <a href="#"
                   class="navbar-brand flex-column  align-items-center mr-0"
                   style="min-width: 0">
                    
                </a>
            </div>
            <a href="https://accounts.google.com/AddSession"
               class="btn btn-light btn-block">
                <span class="fab fa-google mr-2" style="color:red; font-size: 25px;"></span>
                Continue with Google
            </a>
           

            <div class="page-separator">
                <div class="page-separator__text" style="color:chocolate;">or</div>
            </div>

            <form action="signuppost.php" method="POST">
                <div class="form-group">
                    <label class=" font-weight-bolder" for="name_2">NAME:</label>
                    <div class="input-group input-group-merge">
                        <input id="name_2" type="text"required=""
                        class="form-control form-control-prepended" placeholder="Enter Your Name" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" font-weight-bolder" for="email_2">EMAIL ADDRESS:</label>
                    <div class="input-group input-group-merge">
                    <input id="email_2" type="email" required="" class="form-control form-control-prepended" placeholder="Enter Your Email" name="email">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class=" font-weight-bolder" for="password_2">PASSWORD:</label>
                    <div class="input-group input-group-merge">
                        <input id="password_2" type="password" required="" class="form-control form-control-prepended" placeholder="Enter your password" name="password">
                        
                    </div>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-primary mb-2" type="submit" name="submit">Create Account</button><br><br>
                    Already Have an account? <a class=" text-underline text-blue font-weight-bolder" href="login.php">Login</a>
                    
                </div>
            </form>
        </div>

    </body>

</html>