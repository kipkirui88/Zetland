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
                        
            <!-- Begin Page Content -->
                <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Manage Queries</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Feedback</h6>
    </div>



<?php
if(isset($_POST['delete_query'])){
    $id_pressed = mysqli_real_escape_string($conn, $_POST['get_id']);
	 $updateQuery = "DELETE FROM `feedback` WHERE `feedback`.`id` = $id_pressed";
              $run_me = mysqli_query($conn,$updateQuery);
$run_me = mysqli_query($conn,$query);

$run_me = mysqli_query($conn,$query);
  if(!$run_me){
    die("Error: ".mysqli_error($conn));
  }
  else{
echo ' <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                            <i class="mdi mdi-alert-outline label-icon"></i><strong> Success </strong> - Query deleted!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                                                  ?>
                                                                                <script type="text/javascript">
        setTimeout(function(){ 
      window.location.href='queries.php'
      }, 1000);  
</script>
                                        <?php
}
}

?>



    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>MESSAGE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
<?php
$subscribe=mysqli_query($conn,"select * from  feedback");
if(!$subscribe){
die("Error:".mysqli_error($conn));
}
if(mysqli_num_rows($subscribe) == 0){
?>
<tr>
<td>No data available</td>
</tr>

<?php
}else{
foreach ($subscribe as $transRe) {
?>


                    <tr>
                        <td><?php echo $transRe['id']; ?></td>
                        <td><?php  echo $transRe['name'];?></td>
                        <td><?php  echo $transRe['email'];?></td>
                        <td><?php  echo $transRe['message'];?></td>

                       <td>
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <form method="POST" action="">
                                <input type="hidden" name="get_id" value="<?php echo $transRe['id']; ?>">
 <button name="delete_query" type="submit"  class="dropdown-item text-danger">DELETE</button>
                     </form>
                                                        </div>
                                                    </div>
                                                </td>




                    </tr>
<?php
}
} 
?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

<?php include("includes/footer.php") ?>