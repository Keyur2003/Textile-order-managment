<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $material_id = $_POST['material_id'];
        $material_type = $_POST['material_type'];

        if(isset($_FILES['material_file'])){
            $file_name = $_FILES['material_file']['name'];
            $file_tmp= $_FILES['material_file']['tmp_name'];
            $file_size = $_FILES['material_file']['size'];
            $file_error = $_FILES['material_file']['error'];
            $file_ext = explode('.',$file_name);
            $file_ext = strtolower(end($file_ext));
            $allowed = array('pdf');

                if($file_ext!='pdf'){
                    echo "<script>window.alert('Only PDF files are allowed!')</script>";
                    echo "<script>window.location.href='add_material.php'</script>";
                }
                else if($material_id=='' || $material_type==''){
                    echo "<script>window.alert('Please fill all the fields!')</script>";
                    echo "<script>window.location.href='add_material.php'</script>";
                    
                }else{


                    
                    //give material_id to the name of the file and move it to the materials folder
                    $file_new_name = $material_id.'.'.$file_ext;
                    move_uploaded_file($file_tmp,'materials/'.$file_new_name);
                    include("../Text_Tile/Function/conn.php");
                    $sql="INSERT INTO `materialsdetail`(`ID`, `MaterialType`, `MaterialID`, `FileName`) VALUES (null,'$material_type','$material_id','$file_new_name')";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        echo "<script>window.alert('Material added successfully!')</script>";
                        echo "<script>window.location.href='material.php'</script>";
                    }else{
                        echo "<script>window.alert('Material not added!')</script>";
                        echo "<script>window.location.href='material.php'</script>";
                    }
                    

                    



            }


        }

    }
    
    




?>


<!-- Header START -->
<?php
include("include/Header.php");
?>
<!-- Side Nav END -->

            <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/others/login-3.png')">
                <div class="d-flex flex-column justify-content-between w-100">
                    <div class="container d-flex h-100">
                        <div class="row align-items-center w-100">
                            <div class="col-md-7 col-lg-5 m-h-auto">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between m-b-30">
                                            <img class="img-fluid" alt="" src="assets/images/logo/logo.png" width="150" height="150">
                                            <h2 class="m-b-0">Upload Material</h2>
                                        </div>
                                        <form action="add_material.php" method="post"  enctype='multipart/form-data' name="add_material">
                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="userName">Material Id</label>
                                                <div class="input-affix">
                                                    <!-- <i class="prefix-icon anticon anticon-user"></i> -->
                                                    <input type="text" class="form-control" id="material_id" name="material_id"placeholder="Material ID">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="password">Material Type</label>
                                                <!-- <a class="float-right font-size-13 text-muted" href="">Forget Password?</a> -->
                                                <div class="input-affix m-b-10">
                                                    <!-- <i class="prefix-icon anticon anticon-lock"></i> -->
                                                    <input type="text" class="form-control" id="material_type" name="material_type" placeholder="Material type">
                                                </div>
                                            </div>

                                            <!-- upload file -->
                                            <div class="form-group">
                                                <label class="font-weight-semibold" for="password">Material File</label>
                                                <!-- <a class="float-right font-size-13 text-muted" href="">jghghugr</a> -->
                                                <div class="input-affix m-b-10">
                                                    <i class="prefix-icon "></i>
                                                    <input type="file" class="form-control" id="material_file" name="material_file" placeholder="Material File">
                                                </div>
                                            </div>

                                            <input type="submit" class="btn btn-primary"  value="Submit" name="submit">



                                        
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Page Container END -->

            <!-- Search Start-->
            <div class="modal modal-left fade search" id="search-drawer">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Search</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <i class="anticon anticon-close"></i>
                            </button>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="input-affix">
                                <i class="prefix-icon anticon anticon-search"></i>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <!-- Content goes Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search End-->

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
            <!-- Quick View END -->

<!-- Footer  -->
<?php
    include("include/Footer.php");
?>
        
<!-- Core Vendors JS -->
<?php
    include("include/Script.php");
?>