<?php include("includes/header.php") ?>
<?php include("includes/sidebar.php") ?>





        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <?php include("includes/header.php") ?>
            <?php include("includes/config.php") ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <?php
    if (isset($_POST['welcome'])){
                $message = mysqli_real_escape_string($conn,$_POST['message']);


           $query = "INSERT INTO `welcome`( `message`) VALUES ('$message')";
           $result = mysqli_query($conn,$query);
           if(!$result){
            die("error:" .mysqli_error($conn));
            echo '<div class="error-message d-block"> Error! - Database connection error. </div>';

           }else{
?>
    <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                            <i class="mdi mdi-alert-outline label-icon"></i><strong> Success!  Feedback submittion success. </strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                                        </div>


                                        
                                                                                <script type="text/javascript">
        setTimeout(function(){ 
      window.location.href='welcome.php'
      }, 3000);  
</script>

<?php
           }
}
?>

                    <!-- Content Row -->
                    <div class="row">

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Message</h1>
                            </div>
                            <form class="user" method="POST" action="">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <textarea type="text" class="form-control form-control" id="message" name="message"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <button type="submit" name="welcome" class="btn btn-success">
                                    Submit
                                </button>
                                 <button type="reset" class="btn btn-danger">
                                    Cancel
                                </button>
                                <hr>
                            </form>
                        </div>
                    </div>
                    </div>
                    <!-- Content Row -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Messages</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>MESSAGE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tfoot><?php
                    $message=mysqli_query($conn,"select * from  welcome");
                    $cnt=1;
                    while ($row=mysqli_fetch_array($message)) {

                      ?>
                    <tr>
                        <td><?php echo $cnt; ?></td>
                        <td><?php  echo $row['message'];?></td>
                        <td><button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                            <button type="reset" class="btn btn-danger">
                            Delete
                                </button>
                            </td>
                    </tr>
                <?php $cnt=$cnt+1;
               } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

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