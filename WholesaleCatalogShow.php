<?php
    include("./Function/conn.php");
?>




<!-- Header start -->
<?php
    include("include/Header.php");

?>
<!-- display material_id ,material_type and material_file in table format  -->
<div class="main-content">
        <div class="container  ">
            <div class="page-header ">
                <div class="row ">
                   

                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-material"> -->
                        <button type="button" class="btn-floating pulse btn-sm btn-primary ml-3 " onclick="location.href='WholesaleCatalog.php';">
                            <i class="anticon anticon-plus "></i>
                            Add Catalog</button>
                    
                </div>
            </div>
        </div>
<div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    <h1 class='card-title mt-4 ml-5 '><b> Wholesale Catalog</b></h1>
                        <div class="card-body">
                            <div class="table-responsive table-border">
                                <table id="wholesale_catalog_show" name="wholesale_catalog_show" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>DesignName</th>
                                            <th>Catalog Name</th>
                                            <th>Expiery Date</th>
                                            <th>Show</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("../Text_Tile/Function/wholesalecatalogshow.php");
                                        
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['ID'] . "</td>";
                                            echo "<td>" . $row['DesignName'] . "</td>";
                                            echo "<td>" . $row['CatalogName'] . "</td>";
                                            echo "<td>" . $row['ExpireDate'] . "</td>";
                                            //display the file that hava material_id name
                                            echo "<td><a href='Catalog1/" . $row['FileName'] . "' target='_blank'>" . $row['FileName'] . "</a></td>";
                                            echo "<td><a href='./Function/delete_wholesale_catalog.php?id=" . $row['ID'] . "' class='btn btn-sm ml-2 btn-danger'>Delete</a>";
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
        
                    
</div>


</div>




<?php
    
    include("include/Footer.php");
    include("include/Script.php");
?>



</body>
</html>