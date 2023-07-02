<?php

include("../Text_Tile/Function/conn.php");
    

    if($_SERVER['REQUEST_METHOD'] == 'GET') {

            //connect to the database
            include("../Text_Tile/Function/conn.php");
        
            //store the recived id in a variable
            $fid = $_GET['id'];

            $sql="SELECT * FROM `paymenthistory` WHERE `OrderNumber`='$fid'";
            $result=mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);

            $payment_type=$row['PaymentMode'];

            switch($payment_type){



                case "online":
                    $sql="SELECT * FROM `onlinedetails` WHERE `OrderNumber`='$fid'";
                    $result=mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($result);
                    $payment_order_number=$row['OrderNumber'];
                    $payment_date=$row['PaymentDate'];
                    $payment_transfer_mode=$row['TransferMode'];
                    $payment_remaing_amount=$row['RemainingAmount'];


                    include("include/Header.php");
                   
                    ?>
                        <div class="main-content">

                        <button type="button" class="btn-sm btn-primary float-right mr-5 mb-5" onclick="location.href=' payment_history_home.php';">Back</button><h1 class="text-primary ml-3"> Online Payment</h1>
                        
                   <?php
                    
                    
                    
                    
                    echo "
                    <div class='card mt-5'>
                            <div class='card-header'>   
                                <h3 class='card-title mt-3'> Payment Details</h3>
                                
                                    
                            </div>




                            
                            
                            <div class='card-body'>
                                <table id='table_online' class='table table-bordered '>
                                    <thead>
                                        <tr>
                                            <th>Order Number</th>
                                            <th>Payment Date</th>
                                            <th>Transfer Mode</th>
                                            <th>Remaining Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>$payment_order_number</td>
                                            <td> $payment_date</td>
                                            <td> $payment_transfer_mode</td>
                                            <td> $payment_remaing_amount</td>
                                        </tr>
                                    </tbody>
                                </table>
                            
                            
                            </div>
                            </div>
                        
                        </div>";
                        include("include/Footer.php");
                        include("include/Script.php"); 
                        
                    break;




                case "cash":
                    $sql="SELECT * FROM `cashdetails` WHERE `OrderNumber`='$fid'";
                    $result=mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($result);
                    $payment_order_number=$row['OrderNumber'];
                    $payment_date=$row['PaymentDate'];
                    $payment_remaing_amount=$row['RemainingAmount'];


                    include("include/Header.php");
                   
                    ?>
                        <div class="main-content">
                        <button type="button" class="btn-sm btn-primary float-right mr-5 " onclick="location.href=' payment_history_home.php'">Back</button> <h1 class="text-primary ml-3">Cash Payment</h1>
                    <?php
                    
                    
                    
                    
                    echo "
                    <div class='card mt-5'>
                                <div class='card-header'>
                                    <h3 class='card-title mt-3'>Payment Details</h3>
                                </div>

                   


                        
                            
                                <div class='card-body'>
                                    <table id='table_cash' class='table table-bordered '>
                                        <thead>
                                            <tr>
                                                <th>Order Number</th>
                                                <th>Payment Date</th>
                                                <th>Remaining Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>$payment_order_number</td>
                                                <td> $payment_date</td>
                                                <td> $payment_remaing_amount</td>
                                            </tr>
                                        </tbody>
                                    </table>
                               
                                
                        </div>
                           </div>
                        
                    </div>";

                
                        
                
                    include("include/Footer.php");
                    include("include/Script.php");
                    
                        
                        
                    break;





                    case "cheque":
                        $sql="SELECT * FROM `chequedetails` WHERE `OrderNumber`='$fid'";
                        $result=mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result);
                        $payment_order_number=$row['OrderNumber'];
                        $payment_date=$row['PaymentDate'];
                        $payment_remaing_amount=$row['RemainingAmount'];
                        $payment_bank_name=$row['BankName'];
                        $payment_bank_branch=$row['Branch'];
                        $payment_cheque_number=$row['ChequeNumber'];
                        $payment_bank_ifsc=$row['IFSC'];

    
    
                        include("include/Header.php");
                       
                        ?>
                            <div class="main-content">
                        
                            <button type="button" class="btn-sm btn-primary float-right mr-5 " onclick="location.href=' payment_history_home.php'">Back</button> <h1 class="text-primary ml-3">Cash Payment</h1>

                        <?php
                        
                        
                        
                        
                        echo "
                        <div class='card mt-5'>
                                    <div class='card-header'>
                                        <h3 class='card-title mt-3'>Payment Details</h3>
                                    </div>
    
                       
    
    
                            
                                
                                    <div class='card-body'>
                                        <table id='table_cheque' class='table table-bordered '>
                                            <thead>
                                                <tr>
                                                    <th>Order Number</th>
                                                    <th>Payment Date</th>
                                                    <th>Bank Name</th>
                                                    <th>Branch Name</th>
                                                    <th>IFSC Code</th>
                                                    <th>Cheque Number</th>
                                                    <th>Remaining Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>$payment_order_number</td>
                                                    <td> $payment_date</td>
                                                    <td>$payment_bank_name</td>
                                                    <td> $payment_bank_branch</td>
                                                    <td>$payment_bank_ifsc</td>
                                                    <td> $payment_date</td>
                                                    <td>  $payment_cheque_number</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                   
                                    
                            </div>
                               
                            </div>
                            
                        </div>";
    
                    
                            
                        include("include/Footer.php");
                        include("include/Script.php"); 
                            
                            
                        break;








            }


    }
?>

