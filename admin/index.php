<?php include("includes/header.php") ?>
<?php include("includes/sidebar.php") ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info bg-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                <?php $query1=mysqli_query($conn,"Select * from feedback");
                                $totalmessages=mysqli_num_rows($query1);
                                ?>
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                Queries</div>
                                            <div class="h5 mb-0 font-weight-bold text-white"><?php echo $totalmessages;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div><br>
                                    <p><a href="queries.php" class="text-white">View Queries</a></p>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning bg-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <?php $query1=mysqli_query($conn,"Select * from  emails_subscriptions");
                                $totalsubscription=mysqli_num_rows($query1);
                                ?>
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                Subscription</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalsubscription ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                    <p><a href="subscribe.php" class="text-white">View Subscribers</a></p>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                    <!--    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2 bg-warning">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <?php $query1=mysqli_query($conn,"Select * from  emails_subscriptions");
                                $totalsubscription=mysqli_num_rows($query1);
                                ?>
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Testimonials
                                            </div>
                                        
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                    <p><a href="" class="text-white">View Testimonials</a></p>
                            </div>
                        </div>  -->

                        <!-- Pending Requests Card Example -->
                       <!--  <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2 bg-success">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                    <p><a href="" class="text-white"></a></p>
                            </div>
                        </div>
                    </div>
-->
                    <!-- Content Row -->


            </div>
            <!-- End of Main Content -->

           
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


<?php include("includes/footer.php") ?>