<?php
include_once "db/dbconn.php";
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

        <h2>Program</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Program</li>
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
$trans = "SELECT * FROM `program_page` WHERE `id` = 1 ";
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
                <li><i class="bi bi-check-circle-fill"></i><?php echo $transRe['list1'] ?></li>
                <li><i class="bi bi-check-circle-fill"></i> <?php echo $transRe['list2'] ?></li>
              </ul>

    <?php
}
}
    ?>
            </div>
          </div><div class="col-lg-4">
            <img src="assets/img/hero-bg.jpg" class="img-fluid" style="height: 60vh;" alt="">
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Program</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-7 slides  position-relative">


                <div class="swiper-slide">
                  <div class="item">
<?php
$trans = "SELECT * FROM `program_page` WHERE `id` = 2 ";
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
                    <h3 class="mb-3"><?php echo $transRe['title'] ?></h3>
                    <P><?php echo $transRe['body'] ?>
                    <br>
                    <b><?php echo $transRe['sub_title'] ?>.</b> <br>
                    
                    <i class="bi bi-check-circle-fill"></i> <?php echo $transRe['list1'] ?>
                    <br> <br>
                    <i class="bi bi-check-circle-fill"></i> <?php echo $transRe['list2'] ?>
                     <br> <br>
                       <i class="bi bi-check-circle-fill"></i> <?php echo $transRe['list3'] ?>
                     <br> <br>
                             <i class="bi bi-check-circle-fill"></i> <?php echo $transRe['list4'] ?>
                     <br> <br>

                    <br>
                    </p>

<?php
}
}
?>
                  </div>
                </div><!-- End slide item -->

          </div>

          <div class="col-xl-5 img-bg" style="background-image: url('assets/img/program.jpg')"></div>
        </div>

      </div>
    </section><!-- End Why Choose Us Section -->
    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>ISAIAH 61:1</h3>
            <p>For I, the <b>LORD</b>, love justice;I hate robbery and iniquity.In my faithfulness i will reward them and make an everlasting
              with them.Their descendants will be known among the peoples.All who see them will acknowledge that they are a people the <b>LORD</b> 
              has blessed.
            </p>
            <a class="cta-btn" href="https://checkout.stripe.com/pay">Join Us</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

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