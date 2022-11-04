<?php
include "db/dbconn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZETLAND SOLUTIONS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

 
</head>

<body class="page-index">

<?php include ('includes/header.php') ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Resources</h2>
        <ol>
          <li><a href="./">Home</a></li>
          <li>Resources</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          
          <div class="col-lg-8">
            <div class="content ps-lg-5">

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

              <h3><?php echo $transRe['title'] ?></h3>
              <p>
<?php echo $transRe['body'] ?>
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i><?php echo $transRe['list1'] ?> </li>
                <li><i class="bi bi-check-circle-fill"></i> <?php echo $transRe['list2'] ?> </li>
              </ul>

<?php
}
}
?>
            </div>
          </div>
          <div class="col-lg-4">
            <img src="assets/img/hero.jpg" class="img-fluid" style="height: 60vh;" alt="">
          </div>
        </div>
        <button type="submit" class="btn btn-info"><i class="bi bi-download"></i> Download Free Guide Book</button></div>
      </div>
    </section><!-- End About Section -->
    <!-- ======= Services Cards Section ======= -->
    <section id="services-cards" class="services-cards">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/cards-1.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
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
                    <h4 class="card-title"><?php echo $transRe['title'] ?></h4>
                    <p><?php echo $transRe['body'] ?></p>
                  <br>
                <button type="submit" class="btn btn-info"><i class="bi bi-download"></i>Download</button></div>
<?php
}
}
?>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/cards-2.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
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

                    <h4 class="card-title"><?php echo $transRe['title'] ?></h4>
                    <p><?php echo $transRe['body'] ?></p>
                  <br>
                  <button type="submit" class="btn btn-info"><i class="bi bi-download"></i> Download</button></div>
<?php
}
}
?>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Services Cards Section -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-end">

          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

            <div class="info-item d-flex">
              <i class="bi bi-messenger flex-shrink-0"></i>
              <div>
                <h2>Welcome To Our Family:</h2>
                <p>Get Free downloads of our guides by subscribing to our News Letter.Thank You</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">


          <?php
    if (isset($_POST['subscribe_emails'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
      $date =  date('d-m-Y H:i:s') ;


           $query = "INSERT INTO `emails_subscriptions`(`name`, `email`,`date_subscribed`,`status`) VALUES ('$name','$email','$date',1)";
           $result = mysqli_query($conn,$query);
           if(!$result){
            die("error:" .mysqli_error($conn));
            echo '<div class="error-message d-block"> Error! - Database connection error. </div>';

           }else{
?>
    <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                            <i class="mdi mdi-alert-outline label-icon"></i><strong> Success!  You have successfully subscribed to our emails. </strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>

<?php
           }
}
?>

            <form action="" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="FullName" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <br>
              <div class="text-center"><button type="submit" class="btn btn-primary" name="subscribe_emails">Subscribe</button></div>
            </form>

          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <?php include ('includes/footer.php') ?>
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>