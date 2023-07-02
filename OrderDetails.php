<!-- Header START -->
<?php
    include("Function/conn.php");
    include("./Function/order.php");
?>

<?php
    include("include/Header.php");
?>

<!-- Side Nav END   


      n r2 rop-0
     -->

<!-- Content Wrapper START -->
<div class="main-content">
    <form method="post">
        <div class="page-header no-gutters has-tab">
            <div class="d-md-flex m-b-15 align-items-center justify-content-between">
                <div class="media align-items-center m-b-15">
                    <div class="avatar avatar-image rounded" style="height: 70px; width: 70px">
                        <img src="assets/images/others/thumb-16.jpg" alt="">
                    </div>
                    <div class="m-l-15">
                        <h4 class="m-b-0">Order Name</h4>
                        <p class="text-muted m-b-0">Order Number</p>
                    </div>
                </div>
                <div class="m-b-15">
                    <button class="btn btn-primary" id="Save" name="save">
                        <i class="anticon anticon-save"></i>
                        <span>Save</span>
                    </button>
                </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#OrderProcessing">Order Processing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#DeliveryInfo">Delivery Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Payment">Payment</a>
                </li>
            </ul>
        </div>
        <div class="tab-content m-t-15">
            <div class="tab-pane fade show active" id="OrderProcessing">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-semibold" for="opOrderDate">Order Date</label>
                            <input type="text" class="form-control" name="opOrderDate" id="OrderDate" placeholder="Order Date" value="<?php echo $row['OrderDate']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="opOrderNumber">Order Number</label>
                            <input type="text" class="form-control" name="opOrderNumber" id="OrderNumber" placeholder="Order Number" value="<?php echo $row['OrderNumber']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="opTotalGreyLot">Total Grey Lot</label>
                            <input type="text" class="form-control" name="opTotalGreyLot" id="TotalGreyLot" placeholder="Total Grey Lot" value="<?php echo $row['TotalGrayLot']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="opMaterialType">Material type</label>
                            <input type="text" class="form-control" name="opMaterialType" id="MaterialType" placeholder="Material Type" value="<?php echo $row['MaterialType']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="opCatalogName">Catalog Name/Number</label>
                            <input type="text" class="form-control" name="opCatalogName" id="CatalogName" placeholder="Catalog Name or Number" value="<?php echo $row['CatalogName']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="opDesignName">Design Name/Number</label>
                            <input type="text" class="form-control" name="opDesignName" id="DesignName" placeholder="Design Name or NUmber" value="<?php echo $row['DesignName']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="opOrderStatus">Order Status</label>
                            <input type="text" class="form-control" name="opOrderStatus" id="OrderStatus" placeholder="Order Status" value="<?php echo $row['OrderStatus']; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="DeliveryInfo">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-semibold" for="diDeliveryNumber">Delivery Number</label>
                            <input type="text" class="form-control" name="diDeliveryNumber" id="DeliveryNumber" placeholder="Delivery Number" value="<?php echo $row1['DeliveryNumber']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="diDeliveryDate">Delivery Date</label>
                            <input type="text" class="form-control" name="diDeliveryDate" id="DeliveryDate" placeholder="Delivery Date" value="<?php echo $row1['DeliveryDate']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="diTotalLot">Total Lot</label>
                            <input type="text" class="form-control" name="diTotalLot" id="TotalLot" placeholder="Total Lot" value="<?php echo $row1['TotalLot']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="diCatalogName">Catalog Name/Number</label>
                            <input type="text" class="form-control" name="diCatalogName" id="CatalogName" placeholder="Catalog Name or Number" value="<?php echo $row1['CatalogName']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="diDesignName">Design Name/Number</label>
                            <input type="text" class="form-control" name="diDesignName" id="DesignName" placeholder="Design Name or NUmber" value="<?php echo $row1['DesignName']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="diVehicleNumber">Vehicle Number</label>
                            <input type="text" class="form-control" name="diVehicleNumber" id="VehicleNumber" placeholder="Vehicle Number" value="<?php echo $row1['VehicleNumber']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="diDriverName">Driver Name</label>
                            <input type="text" class="form-control" name="diDriverName" id="DriverName" placeholder="Driver Name" value="<?php echo $row1['DriverName']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="diDriverMobileNumber">Driver Mobile Number</label>
                            <input type="text" class="form-control" name="diDriverMobileNumber" id="DriverMobileNumber" placeholder="Driver Mobile Number" value="<?php echo $row1['DriverMobileNumber']; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Payment">
                <div class="card">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="font-weight-semibold" for="pOrderNumber">Order Number</label>
                                <input type="text" class="form-control" name="pOrderNumber" id="OrderNumber" placeholder="Order Number" value="<?php echo $row2['OrderNumber']; ?>">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="pOrderDate">Order Date</label>
                                <input type="text" class="form-control" name="pOrderDate" id="OrderDate" placeholder="Order Date" value="<?php echo $row2['OrderDate']; ?>">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="pTotalAmount">Total Amount</label>
                                <input type="text" class="form-control" name="pTotalAmount" id="TotalAmount" placeholder="Total Amount" value="<?php echo $row2['TotalAmount']; ?>">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="pAdvancePay">Advance Pay</label>
                                <input type="text" class="form-control" name="pAdvancePay" id="AdvancePay" placeholder="Advance Paay" value="<?php echo $row2['AdvancePay']; ?>">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="pRemainingAmount">Remaining Amount</label>
                                <input type="text" class="form-control" name="pRemainingAmount" id="RemainingAmount" placeholder="Remaining Amount" value="<?php echo $row2['RemainingAmount']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
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