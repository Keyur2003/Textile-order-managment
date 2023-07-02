<?php

session_start();
if(!isset($_SESSION['adminusername'])){
    echo "<script>window.alert('Please Login!')</script>";
    echo "<script>window.location.href='adminlogin.php'</script>";
    // header("Location: /webapp/starter/app/adminlogin.php");
    

   
}




if(isset($_GET['id'])){
    $id = $_GET['id'];
    require '_dbconnect.php';
    // get the status of the wholesaler
    $sql = "SELECT * FROM `wholeselerdetails` WHERE ID = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $status = $row['Status'];

    // change the status of the wholesaler if it is set==1 than change to 0 and vice versa
    if($status == 1){
        $sql = "UPDATE `wholeselerdetails` SET Status = 0 WHERE ID = '$id'";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }else{
        $sql = "UPDATE `wholeselerdetails` SET Status = 1 WHERE ID = '$id'";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }   
    }




}




?>



<?php 
    include ('admin_header.php');
?>








                    <div class="container">
                        <div class="page-header">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="page-header-left">
                                        <!-- <h1>Wholesaler Details -->
                                            <!-- <small>Manage Wholesaler</small> -->
                                        </h1>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6">
                                    <ol class="breadcrumb pull-right">
                                        <li class="breadcrumb-item"><a href="adminwholesaler.php"><i data-feather="home"></i></a></li>
                                        <li class="breadcrumb-item active">Wholesaler</li>
                                    </ol>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                <div class='card-title mt-4 ml-5 text-primary '><h3 class="text-primary "><b> Wholesaler Details</b></h3>
                                    <div class="card-body">

                                        <div class="table-responsive">
                                            <table id="myTable2" class="table  table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th> Email</th>
                                                        <th>status</th>
                                                        <th>Ation</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        require '_dbconnect.php';
                                                        $sql = "SELECT * FROM `wholeselerdetails`";
                                                        $result = mysqli_query($conn, $sql);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                $sts="";
                                                                if($row['Status']==1){
                                                                    $sts="Active";
                                                                }else{
                                                                    $sts="Blocked";
                                                                }
                                                                echo "<tr>";
                                                                echo "<td>".$row['ID']."</td>";
                                                                echo "<td>".$row['FirstName']."</td>";
                                                                echo "<td>".$row['LastName']."</td>";
                                                                echo "<td>".$row['Email']."</td>";
                                                                echo "<td>".$sts."</td>";
                                                                //create one toggel button for each row for changing status
                                                                // echo "<td><button class='btn btn-primary' onclick='changeStatus(".$row['manufacturer_id'].")'>Change Status</button></td>";
                                                                echo "<td><a href='adminwholesaler.php?id=".$row['ID']."' class='active btn btn-sm btn-primary'>Active / Block</a></td>";
                                                                echo "</tr>";
                                                            }
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<?php
include ('admin_footer.php');
?>