<?php
include("Function/conn.php");
include("Function/regi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign-Up Manufacturer</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/text_favicon.png">

    <!-- page css -->
    <style>
        .error {
            color: red;
        }
    </style>
    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Thank You For Registration. We Have sent A Verification email to You.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>';
    }
    ?>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/others/login-3.png')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" alt="" src="assets/images/logo/text_logo.png" width="150" height="150">
                                        <h2 class="m-b-0">Sign Up</h2>
                                    </div>
                                    <form autocomplete="off" action="" method="post" id="regi">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="name">Name:</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="email">Email:</label>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email Address">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="phone">Phone Number:</label>
                                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter Your Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="cpassword">Confirm Password:</label>
                                            <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirm Your Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between p-t-15">
                                                <div class="checkbox">
                                                    <input id="checkbox" type="checkbox">
                                                    <label for="checkbox"><span>I have read the <a href="">agreement</a></span></label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Sign In</button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="font-size-13 text-muted">
                                                    <a href="Login.php">Already Have An Account?</a>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex p-h-40 justify-content-between">
                    <span class="">© 2022 Msquare Technologies</span>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="">Privacy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="assets/vendors/jquery-validation/jquery.validate.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="js/Regi.js"></script>
    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>