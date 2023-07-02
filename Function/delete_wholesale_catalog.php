<?php

    include("conn.php");
    if($_SERVER["REQUEST_METHOD"]=="GET"){

        $id=$_GET["id"];

       


        $sql2="SELECT * FROM `wholesalecatalog` WHERE `ID`='$id'";
        $result2=mysqli_query($conn,$sql2);
        $row2=mysqli_fetch_assoc($result2);

        // delete the file from the folder
        unlink("../Catalog1/".$row2["FileName"]);

        
        // delete file from server
        if(file_exists($delete_file_path)){
            unlink($delete_file_path);
        }

        $sql1="DELETE FROM `wholesalecatalog` WHERE `ID`='$id'";
        $result1=mysqli_query($conn,$sql1);

        if($result1){
            echo "<script>alert('Catalog deleted successfully');</script>";
            header("Location: ../WholesaleCatalogShow.php");
        }
        else{
            echo "<script>alert('Catalog not deleted');</script>";
            header("Location: ../WholesaleCatalogShow.php");
        }

    }

?>