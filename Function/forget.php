<?php
$success = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'conn.php';
    $email = $_POST["email"];

    $sql = "Select * from `manufacturer` where Email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $to = "$email";
        $subject = "Email Verification";
        $message = "<a href='http://localhost/Text_Tile/NewPassword.php?email=$email'> Change Password";
        $from = "noreply250102@gmail.com";
        $headers = "From: $from";
        if (mail($to, $subject, $message, $headers)) {
            $success = "Reset Password Link Has Been Sent To $email ";
            header("Refresh: 2; url= Login.php");
        } else {
            echo $mysqli->error;
        }
    }else{
        $showError = "Invalid Email Id!";
    }
}
?>