<?php
include('connect.php');

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
    <title>Яаснеу | EDIT</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!--link logo-->
    <link href="../assets/img/samplelogo.png" rel="icon">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

    <link href="../assets/css/style2.css" rel="stylesheet">
</head>

<body>
  <header class="sticky-top" data-bs-spy="scroll" data-bs-offset="50">
    <div class="container-fluid d-flex justify-content-evenly">
        <a href="#"><h2 class="fw-bolder">ADMIN DASHBOARD</h2></a>
    </div>
    <nav>
      <div class="container-fluid d-flex justify-content-evenly">
        <a href="#exp" class="hbtn btn" role="button">EXPERIENCE<i class="bi bi-hourglass-split"></i></a>
        <a href="#skills" class="hbtn btn" role="button">SKILLS<i class="bi bi-signpost-split-fill"></i></a>
        <a href="#pf" class="hbtn btn" role="button">PORTFOLIO<i class="bi bi-journal-album"></i></a>
        <a href="#edu" class="hbtn btn" role="button">EDUCATION<i class="bi bi-briefcase"></i></a>
        <a href="#con" class="hbtn btn" role="button">CONTACT<i class="bi bi-envelope-at"></i></a>
        <a href="view.php" class="hbtn btn" role="button">VIEW<i class="bi bi-person"></i></a>
        <a href="../login.php" class="hbtn btn" role="button">LOGOUT<i class="bi bi-door-closed"></i></a>
      </div>
    </nav>
  </header>
  
  <section id="about"> <!--------- ABOUT -------->

    <div class="col-md-6">
      <?php
      include('admin-about.php');
      ?>
    </div>

  </section>
  
  <section id="exp"> <!--------- EXPERIENCE -------->

    <div class="col-md-6">
    <?php
      include('admin-exp.php');
      ?>
    </div>

  </section>
  
  <section id="skills"> <!--------- SKILLS -------->
    
    <div class="col-md-6">
    <?php
      include('admin-ski.php');
      ?>
    </div>

  </section>
  
  <section id="pf"> <!--------- PORTFOLIO -------->

    <div class="col-md-6">
    <?php
      include('admin-pf.php');
      ?>
    </div>

  </section>
  
  <section id="edu"> <!--------- EDUCATION -------->

    <div class="col-md-6">
    <?php
      include('admin-edu.php');
      ?>
    </div>

  </section>
  
  <section id="con"> <!--------- CONTACT -------->

    <div class="col-md-6">
    <?php
      include('admin-con.php');
      ?>
    </div>

  </section>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><img src="../assets/img/up.png"></a>

  <!-- Vendor -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- JS -->
  <script src="../assets/js/script.js"></script>

</body>

</html>