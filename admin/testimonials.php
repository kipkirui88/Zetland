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
    if (isset($_POST['testimonial'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
                $message = mysqli_real_escape_string($conn,$_POST['message']);


           $query = "INSERT INTO `testimonial`(`name`, `message`) VALUES ('$name','$message')";
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
      window.location.href='testimonials.php'
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
                                <h1 class="h4 text-gray-900 mb-4">Post Testimonial</h1>
                            </div>
                            <form class="user" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control" id="name" name="name"
                                            placeholder="Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea type="text" class="form-control form-control" id="message" name="message"
                                            placeholder="Testimony"></textarea>
                                    </div>
                                </div>
                                <button type="submit" name="testimonial" class="btn btn-success">
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
                        <th>NAME</th>
                        <th>MESSAGE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tfoot><?php
                    $testimonial=mysqli_query($conn,"select * from  testimonial");
                    $cnt=1;
                    while ($row=mysqli_fetch_array($testimonial)) {

                      ?>
                    <tr>
                        <td><?php echo $cnt; ?></td>
                        <td><?php  echo $row['name'];?></td>
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