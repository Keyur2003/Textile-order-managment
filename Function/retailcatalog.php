<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["cname"];
    $date = date('Y-m-d', strtotime($_POST["date"]));
    $fname = $_FILES["file"]["name"];
    $ftype = $_FILES["file"]["type"];
    $fsize = $_FILES["file"]["size"];
    $f_tem_loc = $_FILES["file"]["tmp_name"];
    $f_store = "Catalog/" . $fname;
    $exists = false;

    $user = mysqli_query($conn, "SELECT * FROM `retailscatalog` WHERE FileName = '$fname'");
    if (mysqli_num_rows($user) > 0) {
        $showError = "File Name Has Already Been Taken";
        $exists = true;
    }
    $user = mysqli_query($conn, "SELECT * FROM `retailscatalog` WHERE CatalogName = '$name'");
    if (mysqli_num_rows($user) > 0) {
        $showError = "Catalog Name Has Already Been Taken";
        $exists = true;
    }
    if ($exists == false) {
        $sql = "INSERT INTO `retailscatalog`(`ID`, `CatalogName`, `ExpireDate`, `FileName`) VALUES (null,'$name','$date','$fname')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = true;
            move_uploaded_file($f_tem_loc, $f_store);
            // redirect to retailcatalogshow.php
            echo "<script>alert('Catalog Successfully Added');</script>";
            echo "<script>window.location.href='../Text_Tile/RetailCatalogShow.php';</script>";
            // header("Refresh: 1; url= RetailCatalogShow.php");
            
        }
        else{
            $showError = "Something Went Wrong Plz Try Again!";
        }
    }
}
