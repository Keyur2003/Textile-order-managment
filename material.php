<!-- Header START -->
<?php
include("include/Header.php");
?>
<!-- Side Nav END -->

    <div class="main-content ">

   





        <div class="container ">
            <div class="page-header ">
                <div class="row ">
                    

                        <button type="button" class="btn-floating pulse btn-sm ml-3 btn-primary " onclick="location.href='add_material.php';">
                            <i class="anticon anticon-plus "></i>
                            Add Material</button>
                    
                </div>
            </div>
        </div>

        <!-- display material_id ,material_type and material_file in table format  -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                         <h1 class='card-title mt-4 ml-5 '><b> Material Details</b></h1>
                        <div class="card-body">
                            <div class="table-responsive table-border">
                                <table id="material_table" name="material_table" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Material Id</th>
                                            <th>Material Type</th>
                                            <th>Material File</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("../Text_Tile/Function/conn.php");
                                        $sql = "SELECT * FROM `materialsdetail`";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['MaterialID'] . "</td>";
                                            echo "<td>" . $row['MaterialType'] . "</td>";
                                            //display the file that hava material_id name
                                            echo "<td><a href='materials/" . $row['FileName'] . "' target='_blank'>" . $row['FileName'] . "</a></td>";
                                            echo "<td><a href='delete_material.php?id=" . $row['MaterialID'] . "' class='btn btn-sm btn-danger ml-2'>Delete</a>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- horizontal space -->

            <!-- <button type="button" class="mt-5 btn btn-primary" data-toggle="modal" data-target="#add-material"> -->
            <!-- Page Container END -->

            

            <!-- Quick View START -->
            <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Quick View</h5>
                        </div>
                        <div class="modal-body scrollable">
                            <!-- Content goes Here -->
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Quick View END -->
        </div>
    </div>
        <!-- Footer START -->
        <?php
        include("include/Footer.php");
        ?>
        <!-- Footer END -->
        <!-- Core Vendors JS -->
        <?php
        include("include/Script.php");
        ?>
    
    </body>
</html>