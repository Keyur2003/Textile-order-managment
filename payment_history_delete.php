<?php

include("../Text_Tile/Function/conn.php");
    

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        
        //store the recived id in a variable
        $fid = $_GET['id'];

        $sql="DELETE FROM `paymenthistory` WHERE `OrderNumber`='$fid'";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('Payment deleted successfully');</script>";
            header("Location: payment_history_home.php");
        }
        else{
            echo "<script>alert('Payment not deleted');</script>";
            header("Location: payment_history_home.php");
        }
       
   
        
    }
    else{
        echo "<script>alert('Invalid request');</script>";
    }

    
?>

