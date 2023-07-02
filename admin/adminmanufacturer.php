


<?php
session_start();
if(!isset($_SESSION['adminusername'])){
    echo "<script>window.alert('Please Login!')</script>";
    echo "<script>window.location.href='adminlogin.php'</script>";
    // header("Location: /webapp/starter/app/adminlogin.php");
    

   
}



if(isset($_GET['id'])){
    $id = $_GET['id'];
    //retrive data of the selected manufacturer
    require '_dbconnect.php';
    $query = "SELECT * FROM manufacturer WHERE ID = $id";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query Failed".mysqli_error($connection));
    }
    $row=mysqli_fetch_assoc($result);
    $manufacturer_status = $row['Status'];
    if($manufacturer_status == 1){
        $query = "UPDATE manufacturer SET Status = 0 WHERE ID = $id";
    }else{
        $query = "UPDATE manufacturer SET Status = 1 WHERE ID = $id";
    }
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query Failed".mysqli_error($conn));
    }
    header("Location: adminmanufacturer.php");

}
?>
 
<?php

include ('admin_header.php');

?>













                <div class="container-fluid">
                    <div class="page-header">
                        <!-- <h1 >Manufacturer Details</h1> -->
                        <!-- <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <!-- <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                                <a href="#" class="breadcrumb-item"><span>Manufacturer</span></a> -->
                            </nav>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                            <div class='card-title mt-4 ml-5  '><h3 class="text-primary"><b> Manufacturer Details</b></h3>
                                <div class="card-body">
                                <div class="table-responsive">
                                            <table id="myTable1" class="table  table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        
                                                        <th> Name</th>
                                                        <th> Email</th>
                                                        <th>status</th>
                                                        <th>Ation</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        require '_dbconnect.php';
                                                        $sql = "SELECT * FROM manufacturer";
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
                                                               
                                                                echo "<td>".$row['Name']."</td>";
                                                               
                                                                echo "<td>".$row['Email']."</td>";
                                                                echo "<td>".$sts."</td>";
                                                                //create one toggel button for each row for changing status
                                                                // echo "<td><button class='btn btn-primary' onclick='changeStatus(".$row['manufacturer_id'].")'>Change Status</button></td>";
                                                                echo "<td><a href='adminmanufacturer.php?id=".$row['ID']."' class='active btn btn-sm btn-primary'>Active / Block</a></td>";
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
                                                   
            











                



















<?php

include ('admin_footer.php');

?>