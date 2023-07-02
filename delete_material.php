<?php

include("../Text_Tile/Function/conn.php");
    

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        
        //store the recived id in a variable
        $fid = $_GET['id'];

        $sql="SELECT * FROM `materialsdetail` WHERE `MaterialID`='$fid'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);

        //remove file from server which name is same as the file name in database
        $file_path = 'materials/'.$row['File Name'];
       

        $sql = "DELETE FROM `materialsdetail` WHERE `MaterialID`='$fid'";
        $result = mysqli_query($conn, $sql);
        if($result){
            if(file_exists($file_path)) {
                unlink($file_path);
            }
            echo "<script>alert('Material deleted successfully');</script>";
            header("Location: material.php");

        }
        else{
            echo "<script>alert('Material not deleted');</script>";
            header("Location: material.php");
        }
       
   
        
    }
    else{
        echo "<script>alert('Invalid request');</script>";
    }

 
?>

