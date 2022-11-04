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



<?php
if(isset($_POST['update_content1'])){
$get_title =mysqli_real_escape_string($conn,$_POST['title']);
$get_body =mysqli_real_escape_string($conn,$_POST['body']);
$get_list1 =mysqli_real_escape_string($conn,$_POST['list1']);
$get_list2 =mysqli_real_escape_string($conn,$_POST['list2']);
$get_list3 =mysqli_real_escape_string($conn,$_POST['list3']);
$get_list4 =mysqli_real_escape_string($conn,$_POST['list4']);

$query = "UPDATE `resources_page` SET `title` = '$get_title',`body` = '$get_body',`list1` = '$get_list1',`list2` = '$get_list2',`list3` = '$get_list3',`list4` = '$get_list4' WHERE `resources_page`.`id` = 1";
$run_me = mysqli_query($conn,$query);

$run_me = mysqli_query($conn,$query);
  if(!$run_me){
    die("Error: ".mysqli_error($conn));
  }
  else{
echo ' <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                            <i class="mdi mdi-alert-outline label-icon"></i><strong> Success </strong> - Content updated!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                                                  ?>
                                                                                <script type="text/javascript">
        setTimeout(function(){ 
      window.location.href='resources.php'
      }, 1000);  
</script>
                                        <?php
}
}

?>


<?php
if(isset($_POST['update_content2'])){
$get_title =mysqli_real_escape_string($conn,$_POST['title']);
$get_body =mysqli_real_escape_string($conn,$_POST['body']);

$query = "UPDATE `resources_page` SET `title` = '$get_title',`body` = '$get_body' WHERE `resources_page`.`id` = 2";
$run_me = mysqli_query($conn,$query);

$run_me = mysqli_query($conn,$query);
  if(!$run_me){
    die("Error: ".mysqli_error($conn));
  }
  else{
echo ' <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                            <i class="mdi mdi-alert-outline label-icon"></i><strong> Success </strong> - Content updated!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                                                  ?>
                                                                                <script type="text/javascript">
        setTimeout(function(){ 
      window.location.href='resources.php'
      }, 1000);  
</script>
                                        <?php
}
}

?>


<?php
if(isset($_POST['update_content3'])){
$get_title =mysqli_real_escape_string($conn,$_POST['title']);
$get_body =mysqli_real_escape_string($conn,$_POST['body']);

$query = "UPDATE `resources_page` SET `title` = '$get_title',`body` = '$get_body' WHERE `resources_page`.`id` = 3";
$run_me = mysqli_query($conn,$query);

$run_me = mysqli_query($conn,$query);
  if(!$run_me){
    die("Error: ".mysqli_error($conn));
  }
  else{
echo ' <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                            <i class="mdi mdi-alert-outline label-icon"></i><strong> Success </strong> - Content updated!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                                                  ?>
                                                                                <script type="text/javascript">
        setTimeout(function(){ 
      window.location.href='resources.php'
      }, 1000);  
</script>
                                        <?php
}
}

?>



<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        CONTENT 1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
               <!-- Content Row -->
                    <div class="row">
                    <div class="col-lg-7">
                        <div class="p-0">
<?php
$trans = "SELECT * FROM `resources_page` WHERE `id` = 1 ";
$transRes = mysqli_query($conn,$trans);
if(!$transRes){
die("Error:".mysqli_error($conn));
}
if(mysqli_num_rows($transRes) == 0){
?>
<tr>
<td>No data available</td>
</tr>
<?php
}else{
foreach ($transRes as $transRe) {
?>
                            <form class="user" method="POST" action="">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label>MAIN TITLE </label>
                                        <input type="text" class="form-control form-control" id="title" name="title" value="<?php echo $transRe['title']; ?>"
                                            >
                                    </div>
                        
                                </div>

                                       <div class="form-group row">
                                     <div class="col-sm-12">
                                          <label>BODY TEXT</label>
                                        <textarea type="text" class="form-control form-control" id="about" name="body"  rows="10" cols="50"
                                            ><?php echo $transRe['body']; ?></textarea>
                                    </div>
                                </div>

                                     <div class="form-group row">
                                     <div class="col-sm-12">
                                          <label>LIST 1 </label>
                                        <textarea type="text" class="form-control form-control" id="about" name="list1"
                                            ><?php echo $transRe['list1']; ?></textarea>
                                    </div>
                                </div>


    <div class="form-group row">
                                     <div class="col-sm-12">
                                          <label>LIST 2 </label>
                                        <textarea type="text" class="form-control form-control" id="about" name="list2"
                                            ><?php echo $transRe['list2']; ?></textarea>
                                    </div>
                                </div>

                                    <div class="form-group row">
                                     <div class="col-sm-12">
                                          <label>LIST 3 </label>
                                        <textarea type="text" class="form-control form-control" id="about" name="list3"
                                        ><?php echo $transRe['list3']; ?></textarea>
                                    </div>
                                </div>

                                        <div class="form-group row">
                                     <div class="col-sm-12">
                                          <label>LIST 4 </label>
                                        <textarea type="text" class="form-control form-control" id="about" name="list4"
                                        ><?php echo $transRe['list4']; ?></textarea>
                                    </div>
                                </div>


                                <button type="submit" name="update_content1" class="btn btn-success">
                                    UPDATE CONTENT
                                </button>
                                 <button type="reset" class="btn btn-danger">
                                    Cancel
                                </button>
                                <hr>
                            </form>

<?php
} 
}
?>
                        </div>
                    </div>
                    </div>
                    <!-- Content Row -->


      </div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        CONTENT #2 
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
  <!-- Content Row -->
                    <div class="row">
                    <div class="col-lg-7">
                        <div class="p-0">    
            <?php
$trans = "SELECT * FROM `resources_page` WHERE `id` = 2 ";
$transRes = mysqli_query($conn,$trans);
if(!$transRes){
die("Error:".mysqli_error($conn));
}
if(mysqli_num_rows($transRes) == 0){
?>
<tr>
<td>No data available</td>
</tr>
<?php
}else{
foreach ($transRes as $transRe) {
?>
                            <form class="user" method="POST" action="">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label>TITLE </label>
                                        <input type="text" class="form-control form-control" id="title" name="title" value="<?php echo $transRe['title']; ?>"
                                            >
                                    </div>
                        
                                </div>

                                       <div class="form-group row">
                                     <div class="col-sm-12">
                                          <label>BODY TEXT</label>
                                        <textarea type="text" class="form-control form-control" id="about"  name="body"
                                            ><?php echo $transRe['body']; ?></textarea>
                                    </div>
                                </div>
                           
                                            <button type="submit" name="update_content2" class="btn btn-success">
                                    UPDATE CONTENT
                                </button>
                                 <button type="reset" class="btn btn-danger">
                                    Cancel
                                </button>
                                <hr>
                            </form>
<?php
}
}
?>
                        </div>
                    </div>
                    </div>
                    <!-- Content Row -->

      </div>
    </div>
  </div>





  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        CONTENT #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
  <!-- Content Row -->
                    <div class="row">
                    <div class="col-lg-7">
                        <div class="p-0">    
            <?php
$trans = "SELECT * FROM `resources_page` WHERE `id` = 3 ";
$transRes = mysqli_query($conn,$trans);
if(!$transRes){
die("Error:".mysqli_error($conn));
}
if(mysqli_num_rows($transRes) == 0){
?>
<tr>
<td>No data available</td>
</tr>
<?php
}else{
foreach ($transRes as $transRe) {
?>
                            <form class="user" method="POST" action="">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label>TITLE</label>
                                        <input type="text" class="form-control form-control" id="title" name="title" value="<?php echo $transRe['title']; ?>"
                                            >
                                    </div>
                        
                                </div>

                                       <div class="form-group row">
                                     <div class="col-sm-12">
                                          <label>BODY TEXT</label>
                                        <textarea type="text" class="form-control form-control" id="about" name="body"
                                            ><?php echo $transRe['body']; ?></textarea>
                                    </div>
                                </div>
                           
                                            <button type="submit" name="update_content3" class="btn btn-success">
                                    UPDATE CONTENT
                                </button>
                                 <button type="reset" class="btn btn-danger">
                                    Cancel
                                </button>
                                <hr>
                            </form>
<?php
}
}
?>
                        </div>
                    </div>
                    </div>
                    <!-- Content Row -->

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