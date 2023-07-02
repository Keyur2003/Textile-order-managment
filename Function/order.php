<?php

$id = $_GET['id'];
$sql = "SELECT * FROM `orderprocessing` Where ID = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if ($row == 0) {
    echo '<script>alert("database is empty!")</script>';
}

$sql1 = "SELECT * FROM `deliveryinformation` Where ID = $id";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);
if ($row1 == 0) {
    echo '<script>alert("database is empty!")</script>';
}

$sql2 = "SELECT * FROM `payments` Where ID = $id";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);
if ($row2 == 0) {
    echo '<script>alert("database is empty!")</script>';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opOdate = date('Y-m-d', strtotime($_POST['opOrderDate']));
    $opOnum = $_POST['opOrderNumber'];
    $opTgl = $_POST['opTotalGreyLot'];
    $opMt = $_POST['opMaterialType'];
    $opCn = $_POST['opCatalogName'];
    $opDn = $_POST['opDesignName'];
    $opS = $_POST['opOrderStatus'];
    $diDn = $_POST['diDeliveryNumber'];
    $diDd = date('Y-m-d', strtotime($_POST['diDeliveryDate']));
    $diTl = $_POST['diTotalLot'];
    $diCn = $_POST['diCatalogName'];
    $diDnu = $_POST['diDesignName'];
    $diVn = $_POST['diVehicleNumber'];
    $diDna = $_POST['diDriverName'];
    $diDpn = $_POST['diDriverMobileNumber'];
    $pOn = $_POST['pOrderNumber'];
    $pOd = date('Y-m-d', strtotime($_POST['pOrderDate']));
    $pTa = $_POST['pTotalAmount'];
    $pAp = $_POST['pAdvancePay'];
    $pRa = $_POST['pRemainingAmount'];
    $sql = "Select * from `orderprocessing` where ID = '$id' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $update = "UPDATE `orderprocessing` SET `OrderNumber`='$opOnum',`OrderDate`='$opOdate',`DesignName`='$opDn',`CatalogName`='$opCn',`MaterialType`='$opMt',`TotalGrayLot`='$opTgl',`OrderStatus`='$opS' WHERE ID = '$id'";
        $update1 = "UPDATE `deliveryinformation` SET `CatalogName`='$diCn',`DesignName`='$diDn',`TotalLot`='$diTl',`DeliveryNumber`='$diDnu',`DeliveryDate`='$diDd',`VehicleNumber`='$diVn',`DriverName`='$Dida',`DriverMobileNumber`='$diDpn' WHERE ID = '$id'";
        $update2 = "UPDATE `payments` SET `TotalAmount`='$pTa',`RemainingAmount`='$pRa',`AdvancePay`='$pAp',`OrderNumber`='$pOn',`OrderDate`='$pOd' WHERE ID = '$id'";
        $result3 = mysqli_query($conn, $update);
        $result4 = mysqli_query($conn, $update1);
        $result5 = mysqli_query($conn, $update2);
        if ($result3 && $result4 && $result5) {
            echo '<script>alert("Your Data has Bee Updated!")</script>';
            header("Refresh: 0; url= Order.php");
        } else {
            echo '<script>alert("SomeThing Went Wrong!")</script>';
        }
    } else {
        echo '<script>alert("SomeThing Went Wrong!")</script>';
    }
}
