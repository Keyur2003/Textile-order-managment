<?php 
//  if $_SESSION['adminusername']=$adminusername; is set then script for welcome message
session_start();
if(isset($_SESSION['adminusername'])){
    echo "<script>window.alert('Welcome ".$_SESSION['adminusername']."!')</script>";
    
}else{
    echo "<script>window.alert('Please Login!')</script>";
    echo "<script>window.location.href='adminlogin.php'</script>";
    // header("Location: /webapp/starter/app/adminlogin.php");
}



?>


<?php

include ('admin_header.php');

?>


<?php 
include ('admin_footer.php');
?>