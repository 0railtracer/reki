<?php
include('admin/connect.php');
if(isset($_POST['adminn'])){
    $a_id=$_POST['a_id'];  
    $a_name=$_POST['an'];
    $a_pass=$_POST['ap'];

    $select_query="SELECT * FROM `admin` WHERE a_name='$a_name'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
      header("location:admin/admindash.php");
    }else{
        echo "<script>alert('Unauthorized user.')</script>";

    }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
    <title>Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!--link logo-->
    <link href="assets/img/samplelogo.png" rel="icon">

    <!-- CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header class="sticky-top" data-bs-spy="scroll" data-bs-offset="50">
    <nav>
      <div class="container-fluid d-flex justify-content-evenly">
        <a href="index.php#exp" class="hbtn btn" role="button">EXPERIENCE<i class="bi bi-hourglass-split"></i></a>
        <a href="index.php#skills" class="hbtn btn" role="button">SKILLS<i class="bi bi-signpost-split-fill"></i></a>
        <a href="index.php#pf" class="hbtn btn" role="button">PORTFOLIO<i class="bi bi-journal-album"></i></a>
        <a href="index.php#edu" class="hbtn btn" role="button">EDUCATION<i class="bi bi-briefcase"></i></a>
        <a href="index.php#con" class="hbtn btn" role="button">CONTACT<i class="bi bi-envelope-at"></i></a>
      </div>
    </nav>
  </header>

  <section id="login">
    <div class="container" data-aos="flip-right">
      <div class="card logincard row d-flex align-items-center justify-content-center" style="width: 50%;">
        
        <h1 class="titletab2">LOGIN</h1>
        <form action="" method="POST">
        <div class="invisible">
          <input class="form-control" type="text" placeholder="" aria-label="default input example" name="a_id">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label loginlabel">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@email.com" name="an" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label loginlabel">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password" name="ap" required>
          </div>
          <a href="admin/admindash.php"><input type="submit" class="btn w-100 btn-success m-1 rounded-0" name="adminn" value="Save changes"></a>
          </form>
          <button class="btn btn-lg secbtn"><a href="index.php">Continue as Guest<i class="bi bi-person"></i></a></button>
          
      </div>
    </div>
  </section>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><img src="assets/img/up.png"></a>

  <!-- Vendor -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- JS -->
  <script src="assets/js/script.js"></script>

</body>

</html>