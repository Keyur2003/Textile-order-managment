<?php

    //admin session destroy and logout
    session_start();
    
    if(isset($_SESSION['adminusername'])){

        
        unset($_SESSION['adminusername']);

        // unset all verialbel
        session_unset();
        session_destroy();
        echo "<script>window.alert('Logout Successful!')</script>";
        echo "<script>window.location.href='adminlogin.php'</script>";
    }





?>