<!-- Header START -->
<?php
include("include/Header.php");
?>
<!-- Side Nav END -->
<div class="main-content">
    <!-- display payment history in table formate -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Payment History</b></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Order Number</th>
                                    <th>Payment ID</th>
                                    <th>Payment Mode</th>
                                    <th>Total Amount</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../Text_Tile/Function/conn.php");
                                $i = 1;
                                $sql = "SELECT * FROM `paymenthistory` ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['OrderNumber']; ?></td>
                                        <td><?php echo $row['PaymentID']; ?></td>
                                        <td><?php echo $row['PaymentMode']; ?></td>
                                        <td><?php echo $row['TotalAmount']; ?></td>
                                        <td>

                                            <a href="payment_history_show.php?id=<?php echo $row['OrderNumber']; ?>" class="btn  btn-sm ml-3 mr-2 btn-primary">Details</a>
                                            <!-- <a href="manufacturer_payment_history_view.php?id=<?php echo $row['OrderNumber']; ?>" class="btn btn-primary">View</a> -->
                                            <a href="payment_history_delete.php?id=<?php echo $row['OrderNumber']; ?>" class="btn btn-sm ml-2 btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->


                </div>

            </div>
        </div>
    </div>
</div>

<?php
    include("include/Footer.php");
?>
    <!-- Footer END -->
    <!-- Core Vendors JS -->
<?php
    include("include/Script.php");
?>