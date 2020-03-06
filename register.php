<?php
session_start();
if (isset($_SESSION['email'])) {
    

    header('location:./dashboard.php');
} ?>
<!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/luna_admin-v1.4/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Mar 2020 12:41:27 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>i-hack</title>
<link rel="icon" type="image/png" sizes="16x16" href="p/images/favicon/favicon-16x16.png">
    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="vendor/animate.css/animate.css"/>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"/>

    <!-- App styles -->
    <link rel="stylesheet" href="styles/pe-icons/pe-icon-7-stroke.css"/>
    <link rel="stylesheet" href="styles/pe-icons/helper.css"/>
    <link rel="stylesheet" href="styles/stroke-icons/style.css"/>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="blank">

<!-- Wrapper-->
<div class="wrapper">


    <!-- Main content-->
    <section class="content">
        <div class="back-link">
            <a href="index.php" class="btn btn-accent">Back to Main</a>
        </div>

        <div class="container-center lg animated slideInDown">


            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-add-user"></i>
                </div>
                <div class="header-title">
                    <h3>Register</h3>
                    <small>
                        Please enter your data to register.
                    </small>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                    <p>

                    </p>
                    <form action="register1.php" id="loginForm" novalidate method="post">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Name</label>
                                <input type="text" value="" id="username" class="form-control" name="name" required>
                                <span class="form-text small">Your unique username to app</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Contact</label>
                                <input type="text" value="" id="contact" class="form-control" name="contact" required>
                                <span class="form-text small">Your contact no.</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Password</label>
                                <input type="password" value="" id="repeatpassword" class="form-control" name="password" required>
                                <span class="form-text small">Your hard to guess password</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input type="email" value="" id="email" class="form-control" name="email" required>
                                <span class="form-text small">Your address email to contact</span>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-accent">Register</button>
                            <a class="btn btn-default" href="login.php">Login</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="vendor/pacejs/pace.min.js"></script>
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- App scripts -->
<script src="scripts/luna.js"></script>

</body>


<!-- Mirrored from webapplayers.com/luna_admin-v1.4/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Mar 2020 12:41:27 GMT -->
</html>