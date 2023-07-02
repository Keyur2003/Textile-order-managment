
<!DOCTYPE html>
<html lang="en">

<?php
    include ('admin_head.php');

?>



<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="adminhome.php">
                        <img class="mt-2" src="assets/images/logo/logo.png" alt="Logo" width="100" height="50">
                        <img class="logo-fold" src="assets/images/logo/logo-fold.png" alt="Logo" width="100" height="50">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="admin/adminhome.php">
                        <img src="assets/images/logo/logo-white.png" alt="Logo" width="100" height="50">
                        <img class="logo-fold" src="assets/images/logo/logo-fold-white.png" alt="Logo" width="100" height="50">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#search-drawer">
                                <i class="anticon anticon-search"></i>
                            </a>
                        </li> -->
                    </ul>
                    <ul class="nav-right">
                       
                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src=""  alt="">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <img src="" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold">Admin</p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i  class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span  class="m-l-10">Edit Profile</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                
                                <a href="adminlogout.php" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10" herf="">Logout</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">
                                <i class="anticon anticon-appstore"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>    
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <!-- <li class="nav-item dropdown">
                            <a href="adminwholesaler.php">
                                <span class="title mt-5 ml-3"><b>Wholesaler</b></span>
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item dropdown">
                            <a href="adminmanufacturer.php">
                                <span class="title mt-3 ml-3"><b>Manufecturer</b> </span>
                            </a>
                        </li> -->

                        <li class="nav-item mt-2 ">
                        <div class="ml-2 mr-2 card ">
                                <div class="mt-1 ml-2 mr-1 mb-1 class-body">
                            <a href="adminwholesaler.php">
                                
                                <span class="btn-floating  pulse">
                                    <i class="fas fa-atom"></i>
                                </span>
                                <span class="title pulse ml-1 "><b>Wholesaler</b></span>
                            </a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item mt-2 ">
                        <div class="ml-2 mr-2 card ">
                                <div class="mt-1 ml-2 mr-1 mb-1 class-body">
                            <a href="adminmanufacturer.php">
                                
                                <span class="btn-floating  pulse">
                                    <i class="fas fa-atom"></i>
                                </span>
                                <span class="title pulse ml-1 "><b>Manufecturer</b></span>
                            </a>
                                </div>
                            </div>
                        </li>

                       
                        
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <div class="main-content">