<?php
require 'conn.php';
$success = false;
$showError = false;
if (isset($_POST['submit'])) {
    $password = ($_POST["password"]);
    $cpassword = ($_POST["cpassword"]);
    $exists = false;

    if (empty($password) || empty($cpassword)) {
        $showError = "Please Fill Out The Form!";
        $exists = true;
    }
    $password = md5($_POST["password"]);
    $cpassword = md5($_POST["cpassword"]);
    if (!($password == $cpassword)) {
        $showError = "Password And Confirm Password Are Not Same";
        $exists = true;
    }
    if ($exists == false) {
        if (isset($_GET['email'])) {
            $email = $_GET['email'];
            $sql = "Select * from `manufacturer` where Email = '$email' ";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if ($num == 1) {
                $update = "UPDATE `manufacturer` SET Password = '$password' WHERE Email = '$email'";
                $result1 = mysqli_query($conn, $update);
                if ($result1) {
                     die("Your Password has Bee Updated! You May Now Login");
                } else {
                    echo $mysqli->error;
                }
            } else {
                echo "Email Is Invalid";
            }
        } else {
            die("Something went Wrong!");
        }
    }
}
?>