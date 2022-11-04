<?php
ob_start();
include "db/dbconn.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ZETLAND | ADMIN DASHBOARD</title>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'><link rel="stylesheet" href="css/style.css">


</head>
<body>

<!-- partial:index.partial.html -->
<div class="screen-1">
  <svg class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="250" height="250" viewbox="0 0 640 480" xml:space="preserve">
    <g transform="matrix(3.31 0 0 3.31 320.4 240.4)">
      <circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(61,71,133); fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="40"></circle>
    </g>
    <g transform="matrix(0.98 0 0 0.98 268.7 213.7)">
      <circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="40"></circle>
    </g>
    <g transform="matrix(1.01 0 0 1.01 362.9 210.9)">
      <circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="40"></circle>
    </g>
    <g transform="matrix(0.92 0 0 0.92 318.5 286.5)">
      <circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="40"></circle>
    </g>
    <g transform="matrix(0.16 -0.12 0.49 0.66 290.57 243.57)">
      <polygon style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" points="-50,-50 -50,50 50,50 50,-50 "></polygon>
    </g>
    <g transform="matrix(0.16 0.1 -0.44 0.69 342.03 248.34)">
      <polygon style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" points="-50,-50 -50,50 50,50 50,-50 "></polygon>
    </g>
  </svg>


                                          <?php
      if(isset($_POST['login_now'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        if (empty($email) ||empty($password)){
          echo "<div class='alert alert-warning' role='alert'>
            Please fill all the fields
            </div>";
        }
        
        // $hashfomat = "$2y$10$";
        // $salt = "iusesomecrazystrings22";
        // $hash_salt = $hashfomat.$salt;
        // $password = crypt($password,$hash_salt);
        
        $query = "SELECT * FROM `admin` WHERE `email` = '$email'";
        $results = mysqlI_query($conn,$query);
        if(!$results){
          die ("Error: ".mysqli_error($conn));
        }
          $userCount = mysqli_num_rows($results);
          if($userCount == 0){
            echo         '
                                
                                   <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                            <i class="mdi mdi-block-helper label-icon"></i><strong> Error</strong> -  The user you have entered does not exist.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        
                                        ';
            ?>
      <?php
         }else{
           foreach($results as $user){
             $dbUserName = $user['username'];
             if ($password == $user['password']) {
               $dbEmail = $user['email'];
               $_SESSION['email'] = $dbEmail;
                            echo         ' 
                                
                                   <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                            <i class="mdi mdi-check-all label-icon"></i><strong>Success!</strong> - Login success!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        
                                        ';

                                        ?>
<script type="text/javascript">
            setTimeout(function(){ 
      window.location.href='index.php'
      }, 500);   
</script>
<?php

             } else {
             echo         ' 
                                
                                 <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                            <i class="mdi mdi-block-helper label-icon"></i><strong> Error!</strong> - Invalid Password or Email .
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        
                                        ';
             }

           }

          }
        }
       ?>

<br>
<br>


  <form method="post" action="">
  <div class="email">
    <label for="email">Email Address</label>
    <div class="sec-2">
      <ion-icon name="mail-outline"></ion-icon>
      <input type="email" class="text-muted" required  name="email" placeholder="Enter your email"/>
    </div>
  </div> <br>
  <div class="password">
    <label for="password">Password</label>
    <div class="sec-2">
       <ion-icon name="lock-closed-outline"></ion-icon>
      <input class="text-muted"  type="password" required name="password" placeholder="Enter your password"/>

    </div>
  </div><br>
  <button type="submit" name="login_now" class="login bg-success">Login </button> <br><br>
  </form>
  
</div>
<!-- partial -->
  
</body>
</html>
