<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["cname"];
    $dname = $_POST['dname'];
    $date = date('Y-m-d', strtotime($_POST["date"]));
    $fname = $_FILES["file"]["name"];
    $ftype = $_FILES["file"]["type"];
    $fsize = $_FILES["file"]["size"];
    $f_tem_loc = $_FILES["file"]["tmp_name"];
    $f_store = "Catalog1/" . $fname;
    $exists = false;

    $user = mysqli_query($conn, "SELECT * FROM `wholesalecatalog` WHERE FileName = '$fname'");
    if (mysqli_num_rows($user) > 0) {
        $showError = "File Name Has Already Been Taken";
        $exists = true;
    }
    $user = mysqli_query($conn, "SELECT * FROM `wholesalecatalog` WHERE CatalogName = '$name'");
    if (mysqli_num_rows($user) > 0) {
        $showError = "Catalog Name Has Already Been Taken";
        $exists = true;
    }
    $user = mysqli_query($conn, "SELECT * FROM `wholesalecatalog` WHERE DesignName = '$dname'");
    if (mysqli_num_rows($user) > 0) {
        $showError = "Design Name Has Already Been Taken";
        $exists = true;
    }
    if ($exists == false) {
        $sql = "INSERT INTO `wholesalecatalog`(`ID`, `DesignName`, `ExpireDate`, `CatalogName`, `FileName`) VALUES (null,'$dname','$date','$name','$fname')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = true;
            move_uploaded_file($f_tem_loc, $f_store);
            echo "<script>alert('Catalog Successfully Added');</script>";
            echo "<script>window.location.href='../Text_Tile/WholesaleCatalogShow.php';</script>";

            // header("Refresh: 1; url= WholesaleCatalogShow.php");
        }
        else{
            $showError = "Something Went Wrong Plz Try Again!";
        }
    }
}
