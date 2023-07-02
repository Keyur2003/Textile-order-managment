<?php

$login=false;
session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){

    require "_dbconnect.php";

    $adminusername=$_POST['username'];
    $adminpassword=$_POST['password'];

    $sql="SELECT * FROM `admin` WHERE admin_username='$adminusername' AND admin_password='$adminpassword'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    if($row){
        
        $login=true;
        $_SESSION['adminusername']=$adminusername;
       
       
       echo "<script>window.location.href='adminhome.php'</script>";
            // header("location: adminhome.php");
    }
    else{
        echo "<script>window.alert('Invalid Credentials')</script>";
        echo "<script>window.location.href='adminlogin.php'</script>";

    
    }
        
        
    
}


?>

<!DOCTYPE html>
<html lang="en">

<?php
    include ('admin_head.php');
?>



<body>

    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/others/login-3.png')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" alt="" src="assets/images/logo/logo.png" width="150" height="150">
                                        <h2 class="m-b-0">Admin</h2>
                                    </div>

                                    <form method="post" action="adminlogin.php">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="username">Username:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <!-- <a class="float-right font-size-13 text-muted" href="">Forget Password?</a> -->
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                
                                                <button class="btn btn-primary">Login</button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="font-size-13 text-muted">
                                                    <a href="../Login.php">Manufacturer Login</a>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="font-size-13 text-muted">
                                                    <a href="Login.php">Manufacturer Login</a>
                                                </span>
                                            </div>
                                        </div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


 <?php
    include ('admin_footer.php');
    ?>