<?php
include('connect.php');
$conid=$_GET['conid'];

$selectc="SELECT * FROM `contact` WHERE conid=$conid";
$resultc=mysqli_query($con,$selectc);
$rowc=mysqli_fetch_assoc($resultc);
$conadd=$rowc['conadd'];

if(isset($_POST['incon'])){
  $conadd=$_POST['cadd'];

  $selectc="UPDATE `contact` SET conid=$conid, conadd='$conadd' WHERE conid=$conid";
  $resultc=mysqli_query($con,$selectc);

  if($resultc){
    echo "<script>alert('Contact updated successfully.')</script>";
    }
    
  else{
    echo "<script>alert('Contact already exists.')</script>";
}
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
    <title>Яаснеу | ADMIN</title>
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
        <a href="admin-about.php"><h2 class="fw-bolder">ADMIN DASHBOARD</h2></a>
    </div>
    <nav>
      <div class="container-fluid d-flex justify-content-evenly">
      <a href="admindash.php#exp" class="hbtn btn" role="button">EXPERIENCE<i class="bi bi-hourglass-split"></i></a>
        <a href="admindash.php#ski" class="hbtn btn" role="button">SKILLS<i class="bi bi-signpost-split-fill"></i></a>
        <a href="admindash.php#pf" class="hbtn btn" role="button">PORTFOLIO<i class="bi bi-journal-album"></i></a>
        <a href="admindash.php#edu" class="hbtn btn" role="button">EDUCATION<i class="bi bi-briefcase"></i></a>
        <a href="admindash.php#con" class="hbtn btn" role="button">CONTACT<i class="bi bi-envelope-at"></i></a>
        <a href="../index.php" class="hbtn btn" role="button">LOGOUT<i class="bi bi-door-closed"></i></a>
      </div>
    </nav>
  </header>

  
  <section id="con" style="height: 85vh;">

    <div class="col-md-6">
      <form action="" method="POST">
        <div class="invisible">
          <input class="form-control" type="text" placeholder="" aria-label="default input example" name="conid">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light fw-bold fs-3 font-monospace">Message me at...</label>
            <input class="form-control" type="text" value="<?php echo $conadd; ?>" aria-label="default input example" name="cadd">
        </div>
        <a href="admindash.php#con"><input type="button" class="btn w-100 btn-dark m-1 rounded-0" value="Back"></a>
        <input type="submit" class="btn w-100 btn-success m-1 rounded-0" name="incon" value="Save changes">
      </form>
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