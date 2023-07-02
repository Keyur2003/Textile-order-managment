<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST["email"];
    $password = md5($_POST["password"]); 
    
     
    $sql = "Select * from `manufacturer` where Email='$email' AND Password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $row = $result->fetch_assoc();
        $verified = $row['verified'];
        $date = $row['DateOfRegister'];
        $Role = $row['Role'];
        $email = $row['Email'];
        $date = strtotime($date);
        $date = date('M d Y');
        $satus=$row['Status'];
        if ($verified == 1 ) {
            if($satus==1){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $emial;
                header("location: Home.php");
            }
            else{
                $showError = "your account is not active";
            }
           
        } 
        else{
            $showError = "This Account Has Not Been Verified. An Email Was Sent to you on $email on $date";
        }
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
?>