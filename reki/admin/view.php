<?php
include ('connect.php');

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
    <title>Яаснеу</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!--link logo-->
    <link href="assets/img/samplelogo.png" rel="icon">

    <!-- CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="..//vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header class="sticky-top" data-bs-spy="scroll" data-bs-offset="50">
    <nav>
      <div class="container-fluid d-flex justify-content-evenly">
        <a href="#exp" class="hbtn btn" role="button">EXPERIENCE<i class="bi bi-hourglass-split"></i></a>
        <a href="#skills" class="hbtn btn" role="button">SKILLS<i class="bi bi-signpost-split-fill"></i></a>
        <a href="#pf" class="hbtn btn" role="button">PORTFOLIO<i class="bi bi-journal-album"></i></a>
        <a href="#edu" class="hbtn btn" role="button">EDUCATION<i class="bi bi-briefcase"></i></a>
        <a href="#con" class="hbtn btn" role="button">CONTACT<i class="bi bi-envelope-at"></i></a>
        <a href="admindash.php" class="hbtn btn" role="button">ADMIN DASH<i class="bi bi-door-open"></i></a>
      </div>
    </nav>
  </header>
  
  <section id="about">
    <div class="col-md-4" data-aos="fade-right">
      
        <?php
        $select_a="SELECT * FROM `about`";
        $result_a=mysqli_query($con,$select_a);

        while($row=mysqli_fetch_assoc($result_a)){
          $abid=$row['abid'];
          $aname=$row['aname'];
          $arole=$row['arole'];
          $img=$row['img'];
          $cv=$row['cv'];

          echo "
          <img src='../assets/img/$img' alt='' class='popupimg2 shadow mx-auto d-block' />
          <div class='aboutxt'>
            <h1>$aname</h1>
          <h3>$arole</h3>
          <a href='$cv' download='assets/img/$cv'>
          <button type='button' class='btn btnsub w-100'><i class='bi bi-download'> Download CV</i></button>
          </a>
          </div>
          ";
        }

        ?>
        
      
      
    </div>
  </section>
  
  <section id="exp">
    <div class="containertab" data-aos="fade-left">
      <h1 class="titletab2">experience_</h1>

      <div class="container">
        <div class="timeline">
          <?php
          $select_x="SELECT * FROM `experience`";
          $result_x=mysqli_query($con,$select_x);

          while($rowx=mysqli_fetch_assoc($result_x)){
            $expid=$rowx['expid'];
            $expname=$rowx['expname'];
            $expdate=$rowx['expdate'];
            $expplace=$rowx['expplace'];

            echo "
            <div class='timeline-row'>
              <div class='timeline-time'>
                $expname <small>$expdate</small>
              </div>
              <div class='timeline-content'>
                <i class='icon-attachment'></i>
                <h4>$expplace</h4>
              </div>
            </div>
            ";
          }
          ?>
        
          </div>
        </div>

    </div>
  </section>
  
  <section id="skills">
    <div class="col-md-6" data-aos="fade-right">
      <h1 class="titletab">skills_</h1>
      <div class="containertab">
        <?php
        $select_s="SELECT * FROM `skills`";
        $result_s=mysqli_query($con,$select_s);

        while($rows=mysqli_fetch_assoc($result_s)){
          $skid=$rows['skid'];
          $sname=$rows['sname'];
          $sper=$rows['sper'];

          echo "
          <h2 class='stitle'>$sname</h2>
        <div class='progress'>
          <div class='progress-bar progress-bar-striped bg-dark' role='progressbar' style='width: $sper%;' aria-valuenow='$sper' aria-valuemin='0' aria-valuemax='100'>$sper %</div>
        </div>
          ";
        }
        ?>
        
      </div>
    </div>
  </section>
  
  <section id="pf">
    <div class="col-md-8" data-aos="fade-in">
      <h1 class="titletab2" style="margin-bottom: 20px;">portfolio_</h1>
      <div class="row">
        <?php
        $select_p="SELECT * FROM `portfolio`";
        $result_p=mysqli_query($con,$select_p);

        while($rowp=mysqli_fetch_assoc($result_p)){
          $pid=$rowp['pid'];
          $pimg=$rowp['pimg'];
          $pname=$rowp['pname'];

          echo "
        
          <div class='col'>
            <div class='card shadow m-2' style='width: 17rem;'>
              <img src='../assets/img/$pimg' class='img-thumbnail glightbox mx-auto d-block' style='height: 15rem; max-width: 100%;'>
              <button class='btn card-btn w-100' type'button'>$pname</button>
            </div>
          </div>

        
          ";
        }
        
        ?> 
        </div>
       </div>   
        

  </section>
  
  <section id="edu">
    <div class="containertab" data-aos="fade-up">
      
      <h1 class="titletab">education_</h1>
      <div class="container">
        <div class="timeline">
          <?php
          $select_e="SELECT * FROM `education`";
          $result_e=mysqli_query($con,$select_e);
  
          while($rowe=mysqli_fetch_assoc($result_e)){
            $eduid=$rowe['eduid'];
            $eduname=$rowe['eduname'];
            $edudate=$rowe['edudate'];
            $eduplace=$rowe['eduplace'];
            $edug=$rowe['edug'];

            echo"
            <div class='timeline-row'>
              <div class='timeline-time'>
                $edug<small>$edudate</small>
              </div>
              <div class='timeline-content'>
                <i class='icon-attachment'></i>
                <h4>$eduname</h4>
                <p>$eduplace</p>
              </div>
            </div>
            ";
          }
          ?>
            
        
        
          </div>
        </div>
      
    </div>
  </section>
  
  <section id="con">
    <div class="containertab">
      <h1 class="titletab">contact_</h1>

      <?php
      $select_c="SELECT * FROM `contact`";
      $result_c=mysqli_query($con,$select_c);

      while($rowc=mysqli_fetch_assoc($result_c)){
        $conid=$rowc['conid'];
        $conadd=$rowc['conadd'];

        echo "
      <div>
        <i class='ikon2 bi bi-envelope-fill d-flex align-items-center justify-content-center'></i><h1 class='text-light fw-bold fs-3 font-monospace'>$conadd</h1>
      </div>
        ";
      }
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
