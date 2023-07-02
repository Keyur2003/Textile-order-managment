<?php
include("Function/conn.php");
include("Function/wholecatalog.php");
?>
<!-- Header START -->
<?php
include("include/Header.php");
?>
<?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show m-t-70" role="alert" style="margin: 70px 0px 0px">
        <strong>Success!</strong> Thank You For Registration. We Have sent A Verification email to You.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin: 70px 0px 0px">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>';
    }
    ?>
<!-- Side Nav END -->
<!-- Content Wrapper END -->
<div class="app mt-5">
    <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex">
        <div class="d-flex flex-column justify-content-between w-100">
            <div class="container d-flex h-100">
                <div class="row align-items-center w-100">
                    <div class="col-md-7 col-lg-5 m-h-auto">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between m-b-30">
                                    <img class="img-fluid" alt="" src="assets/images/logo/text_logo.png" width="150" height="150">
                                    <h4 class="m-b-0">Wholesale Catalog</h4>
                                </div>
                                <form autocomplete="off" action="" method="post" id="rcatalog" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="cname">Catalog Name:</label>
                                        <div class="input-affix">
                                            <i class="prefix-icon anticon anticon-user"></i>
                                            <input type="text" name="cname" class="form-control" id="name" placeholder="Enter Catalog Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="dname">Design Name:</label>
                                        <div class="input-affix">
                                            <i class="prefix-icon anticon anticon-user"></i>
                                            <input type="text" name="dname" class="form-control" id="name" placeholder="Enter Design Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="date">Expire Date:</label>
                                        <div class="input-affix m-b-10">
                                            <i class="prefix-icon anticon anticon-lock"></i>
                                            <input type="date" name="date" class="form-control" id="date" placeholder="Enter Expire Date" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="customFile">Choose File:</label>
                                        <div class="custom-file">
                                            <input type="file" name="file" class="form-control" id="file" accept="application/pdf" required>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button class="btn btn-primary" name="upload">Upload</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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