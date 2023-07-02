<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = md5($_POST["password"]);
    $cpassword = md5($_POST["cpassword"]);
    $vkey = md5(time() . $name);
    $exists=false;

      $user = mysqli_query($conn, "SELECT * FROM `manufacturer` WHERE Email = '$email'");
      if (mysqli_num_rows($user) > 0) {
        $showError = "Email Has Already Taken";
        $exists=true;
      }
      $user = mysqli_query($conn, "SELECT * FROM `manufacturer` WHERE PhoneNumber = '$phone'");
      if (mysqli_num_rows($user) > 0) {
        $showError = "Phone Number Has Already Taken";
        $exists=true;
      }
    if($exists==false){
        if(($password == $cpassword)){
            $sql = "INSERT INTO `manufacturer`(`ID`, `Name`, `Email`, `PhoneNumber`, `Password`, `Status`, `vkey`, `verified`, `DateOfRegister`, `Role`) VALUES (NULL,'$name','$email','$phone','$password','1','$vkey','0','current_timestamp()','0')";
            $result = mysqli_query($conn, $sql);
            if ($result){
              $to = "$email";
              $subject = "Email Verification";
              $message = "<a href='http://localhost/Text_Tile/Function/Verify.php?vkey=$vkey'> Register Account";
              $from = "noreply250102@gmail.com";
              $headers = "From: $from";

              if (mail($to, $subject, $message, $headers)) {
                  header("Refresh: 2; url= Login.php");
              $showAlert = true;
              } else {
                  echo $mysqli->error;
              }
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }  
}
