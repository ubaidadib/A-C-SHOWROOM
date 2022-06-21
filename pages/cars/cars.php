<?php
class cars
{

  public function display_cars($page)
  {

?>
    <!-- ======= Navigation ======= -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php?p=home"><img src="assets/img/navbar-logo.png" style="height: 75px;" 
        alt="A&C Cars GmbH Logo" /></a>
        
        <!--<a class="navbar-brand" href="index.php?p=home">A&C Cars GmbH</a>-->

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
            <li class="nav-item"><a class="nav-link" href="index.php?p=home">Startseite</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=cars">Fahrzeuge</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=service">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=contact_us">Kontakt</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=imprint">Impressum</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=dataprotection">Datenschutz</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- ======= End Navigation ======= -->

    <!-- ======= Masthead =======-->
    <header class="masthead">
      <div class="container content-wrapper">
        <div class="text-center shadow-sm" style="text-shadow: 4px 4px 8px rgb(0 0 0 / 75%);">
          <p class="text-uppercase fs-1  fw-bold">
            Herzlich Willkommen bei&nbsp;<span class="text-warning">A&C Cars GmbH</span>
          </p>

          <p class="text-uppercase fs-1  fw-bold">
            Ihr&nbsp;<span class="text-warning">Fahrzeug</span>&nbsp;Spezialist
          </p>
         
          <a href="#test" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Testen Sie Ihr Auto !</a>

        </div>
      </div>
    </header>
    <!-- ======= End Masthead =======-->
   
    <main id="main">


      <!-- Cars-->
      <br><br><br>
      <div class="container content-wrapper">
          <div class="text-center">
            <h2 class="text-uppercase">Fahrzeuge</h2>
            <h3 class="" >Willkommen bei A&C Cars GmbH</h3>
          </div>

    <iframe id="Fahrzeugangebot" 
            src="https://home.mobile.de/home/index.html?partnerHead=false&amp;colorTheme=default&amp;customerId=14613601#ses" 
            name="Fahrzeugangebot"
            frameborder="0"
            width="100%"
            height="2500">
            Ihr Browser kann leider keine eingebetteten Frames anzeigen!</iframe>
    </div>
      <!-- End Cars Section -->

    </main><!-- End #main -->

<br><br><br><br><br><br><br><br><br>

    <!-- ======= Footer ======= -->
    <footer class="bg-dark" id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="footer-top bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 footer-links">
              <h4 class="text-warning">Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="index.php?p=home">Startseite</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="index.php?p=cars">Fahrzeuge</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="index.php?p=service">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="index.php?p=contact_us">Kontakt</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="index.php?p=imprint">Impressum</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="index.php?p=dataprotection">Datenschutz</a></li>
              </ul>
            </div>



             <div class="col-lg-4 col-md-6 footer-contact">
              <h4 class="text-warning">Kontakt</h4>
              <p>
                Prinzenstrasse 63<br>
                47475 Kamp-lintfort<br>
                Deutschland<br><br>
                <p>
                <strong>Landnummer:</strong><a href="tel:+4928429039168" style="text-decoration: none;">+491726344871</a><br>
                <strong>Handy:</strong><a href="tel:+491726344871" style="text-decoration: none;">+491726344871</a><br>
               
              </p>

            </div>

            <div class="col-lg-4 col-md-6 footer-info">
              <h3 class="text-warning">Über A&C Cars GmbH</h3>
              <img src="assets/img/navbar-logo.png" class="img-fluid" alt="A&C Logo" width="300px" height="300px">
             </div>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span class="text-warning">URM</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="ubaidadib76@gmail.com">URM</a>,2021
        </div>
      </div>
    </footer><!-- End Footer -->


    

<?php

  }

  public function send_msg()
  {
    $connect = new connect();
    $conn = $connect->getConn();
    $sender_id = filter_input(INPUT_POST, 'sender_id');
    $sender_name = filter_input(INPUT_POST, 'name');
    $sender_email = filter_input(INPUT_POST, 'email');
    $msg_subject = filter_input(INPUT_POST, 'subject');
    $msg_content = filter_input(INPUT_POST, 'message');
    date_default_timezone_set("Asia/Beirut");
    $msg_date = date("Y:m:j H:i:s", time());
    $msg_query = "INSERT INTO `messages`(`message_id`, `sender_id`, `receiver_id`, `content`, `status`, `type`, `date`)
			  VALUES (NULL,'" . $sender_id . "','1','" . $msg_content . "','1','new','" . $msg_date . "')";
    $msg_result = $conn->query($msg_query);
    if ($msg_result) {
      echo "<script>
                   Swal.fire('Good job!','Message Sent !','success')</script>";
    } else {
      echo "<script>
               Swal.fire({ type: 'error',title: 'Oops...',text: 'Something went wrong,try again!'})</script>";
    }
  }
}

?>