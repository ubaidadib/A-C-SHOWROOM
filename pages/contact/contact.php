<?php
class contact_us
{

  public function display_contact_us($page)
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
          <br><br>
          <a href="#test" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Testen Sie Ihr Auto !</a>

        </div>
      </div>
    </header>
    <!-- ======= End Masthead =======-->
   
    <main id="main">
  <!-- Contact-->
      <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        <div class="container">
          <div class="text-center">
            <h2 class="text-uppercase">Kontaktiere Uns</h2>
            <h3 class="" style="color: #ffffff;">Willkommen bei A&C Cars GmbH</h3>
          </div>
          <div class="row">

            <div class="col-lg-6">

              <div class="row">
                <div class="col-md-12 ">
                  <div class="info-box">
                    <i class="fas fa-map fa-lg"></i>
                    <h3>Unsere Adresse</h3>
                    <p>Prinzenstr. 63, 47475 Kamp-lintfort, Deutschland</p><br/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="fas fa-mail-bulk fa-lg"></i>
                    <h3>Schreiben Sie uns eine E-Mail</h3>
                    <p>info@accarsgmbh.de</p><br/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="fas fa-phone fa-lg"></i>
                    <h3>Rufen Sie uns an</h3>
                    <p><a href="tel:+491726344871" style="text-decoration: none;">+491726344871</a> <br>
                       <a href="tel:+4928429039168" style="text-decoration: none;">+491726344871</a>
                      <br></p><br>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-lg-6">
              <form action="index.php?p=contact_us" method="POST" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Vollständiger  Name" required oninvalid="this.setCustomValidity('Bitte dieses Feld ausfüllen')">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Dein Email" required oninvalid="this.setCustomValidity('Bitte dieses Feld ausfüllen')">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Gegenstand" required oninvalid="this.setCustomValidity('Bitte dieses Feld ausfüllen')">
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Nachricht" required oninvalid="this.setCustomValidity('Bitte dieses Feld ausfüllen')"></textarea>
                </div>
<br>
                <div class="text-center"><button type="submit">Nachricht senden</button></div>
              </form>
            </div>

          </div>
        </div>
      </section>
      <!-- End Contact Section -->

      <!-- ======= Map Section ======= -->
      <section class="map mt-2">
        <div class="container-fluid p-auto">
          <iframe src="https://maps.google.com/maps?q=Prinzenstr.%2063%2047475%20Kamp-lintfort%20Deutschland&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div><br>
      </section><!-- End Map Section -->

    </main><!-- End #main -->



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
               
                <strong>Landnummer:</strong><a href="tel:+4928429039168" style="text-decoration: none;"> +492842 9039168</a> <br>
                <strong>Handy:</strong><a href="tel:+491726344871" style="text-decoration: none;"> +491726344871</a> <br>

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
   
    // sending Contact Form 
    if (isset($_POST['email']) && $_POST['email'] != '') {
     
      if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        $sender_name = $_POST['name'];
        $sender_email = $_POST['email'];
        $sender_subject = $_POST['subject'];
        $sender_message = $_POST['message'];
		
        $to      = 'info@accarsgmbh.de';
		$subject = ''.$sender_subject;
		$message = ' '.$sender_message;
		$headers = array(
    	'From' => ''.$sender_email,
    	'Reply-To' => ''.$sender_email,
    	'X-Mailer' => 'PHP/' . phpversion()
		);


        $message_sent = mail($to, $subject, $message, $headers);
        
      }
      if ($message_sent) {
        echo "<script>
                Swal.fire('Gut gemacht!','Ihre Nachricht wurde gesendet. Wir werden Sie so schnell wie möglich kontaktieren. Vielen Dank!','success')</script>";
      } else {
        echo "<script>
            Swal.fire({ type: 'error',title: 'Oops...',text: 'Etwas ist schief gelaufen, bitte überprüfen Sie Ihre Eingaben noch einmal. Vielen Dank'})</script>";
      }
    }
  }
}




?>