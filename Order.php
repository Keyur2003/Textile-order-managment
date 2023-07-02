<!-- Header START -->
<?php
include("include/Header.php");
include("./Function/conn.php");
    $sql3 = "SELECT * FROM `orderdetails`";
    $result3 = mysqli_query($conn, $sql3);
    $row3 = mysqli_fetch_assoc($result3);
?>
<!-- Side Nav END -->

<!-- Content Wrapper START -->
<div class="main-content">
    
    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <div class="col-lg-8">
                    <div class="d-md-flex">
                        <div class="m-b-10">
                        <h3 class="header-title ml-3"><b>Orders List</b></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-right">
                    <button class="btn btn-primary">
                        <i class="anticon anticon-file-excel m-r-5"></i>
                        <span>Export</span>
                    </button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover e-commerce-table">
                    <thead>
                        <tr>
                            <th>
                                <div class="checkbox">
                                    <input id="checkAll" type="checkbox">
                                    <label for="checkAll" class="m-b-0"></label>
                                </div>
                            </th>
                            <th>ID</th>
                            <th>CatalogName</th>
                            <th>DesignName</th>
                            <th>TotalGrayLot</th>
                            <th>AmountPerLot</th>
                            <th>TotalAmount</th>
                            <th>OrderNumber</th>
                            <th>OrderDate</th>
                            <th>OrderStatus</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="checkbox">
                                    <input id="check-item-1" type="checkbox">
                                    <label for="check-item-1" class="m-b-0"></label>
                                </div>
                            </td>
                            <td>
                                <?php echo $row3['ID']; ?>
                            </td>
                            <td>
                                <?php echo $row3['CatalogName']; ?>
                            </td>
                            <td><?php echo $row3['DesignName']; ?></td>
                            <td><?php echo $row3['TotalGreyLot']; ?></td>
                            <td><?php echo $row3['AmountPerLot']; ?></td>
                            <td><?php echo $row3['TotalAmount']; ?></td>
                            <td><?php echo $row3['OrderNumber']; ?></td>
                            <td><?php echo $row3['OrderDate']; ?></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div><?php echo $row3['OrderStatus']; ?></div>
                                </div>
                            </td>
                            <td class="text-right">
                                <a href="OrderDetails.php?id=<?php echo $row3["ID"]; ?>">
                                    <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                        <i class="anticon anticon-edit"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                    <i class="anticon anticon-delete"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Content Wrapper END -->

<!-- Footer START -->
<?php
    include("include/Footer.php");
?>
<!-- Footer END -->

<!-- Core Vendors JS -->
<?php
    include("include/Script.php");
?>