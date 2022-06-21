<?php
class home
{

  public function display_home($page)
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
   

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/descriptionLogo.jpeg" class="img-fluid" alt="">

          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="fas fa-home fa-3x"></i></div>
              <h4 class="title text-primary">A&C Cars GmbH</h4>
              <p class="description">Herzlich Willkommen im A&C Cars GmbH Kamp-Lintfort</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="fas fa-smile fa-3x"></i></div>
              <h4 class="title text-primary">A&C Cars GmbH</h4>
              <p class="description">Schön das Sie da sind.
                <br>Sie suchen ein neues Fahrzeug, oder Sie möchten Ihr jetziges Fahrzeug verkaufen gerne sind wir Ihnen dabei behilflich.
                <br>Selbstverständlich können Sie Ihr Fahrzeug auch bei uns in Zahlung geben. Unsere Erfahrenen Mitarbeiter sind Ihnen dabei
                <br> gerne behilflich und stehen Ihnen mit bestem Wissen zur Verfügung.
				<br> Sprechen Sie uns an, oder besuchen Sie uns in unserer A&C Cars in Kamp-Lintfort am schönen Niederrhein.</p>
            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section class="services ">
      <div class="container">
        <div class="container shadow p-3 mb-5 bg-white rounded">
          <div class="text-center">
            <h2 class="section-heading text-uppercase">Services</h2><br>

          </div>
          <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
              <div class="icon-box icon-box-pink">
                <div class="icon">
                  <span class="fa-2x">
                    <i class="fas fa-car"></i>
                  </span>

                </div>
                <h4 class="title">A&C Cars GmbH – Ihr starker Partner für Gebrauchtwagen am Niederrhein !</h4>
                <p class="description">Wir sind spezialisiert auf deutsche Fabrikate und bieten Ihnen Fahrzeuge aller Klassen - alle samt werkstattgeprüft, mit umfassenden Serviceleistungen zum fairen Preis.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box icon-box-cyan">
                <div class="icon">
                  <span class="fa-2x">
                    <i class="fas fa-toolbox"></i>
                  </span>
                </div>
                <h4 class="title">Unser Motto ist Kundenfreundlichkeit</h4>
                <p class="description">
                 Wer sein Auto verkaufen möchte, wo immer er ist, wir kommen gerne und bringen das Auto überall hin,
                 <br>Fühlen Sie sich frei uns zu kontaktieren
                 <br><br>
                  <button type="button" class="btn-outline-dark btn-sm"> 
        			<a href="index.php?p=contact_us" style="text-decoration:none;">Kontakt!</a>
        		</button>
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box icon-box-green">
                <div class="icon">
                  <span class="fa-2x">
                    <i class="fas fa-euro-sign"></i>
                  </span>
                </div>
                <h4 class="title">Finanzierung</h4>
                <p class="description">Finanzieren Sie Ihr Traumauto zu günstigen Konditionen. Mit unserem Partner, der CreditPlus Bank, bieten wir Ihnen gerne eine Finanzierung für Ihren Autokauf bei uns an.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box icon-box-blue">
                <div class="icon">
                  <span class="fa-2x">
                    <i class="fas fa-globe-europe"></i>
                  </span>

                </div>
                <h4 class="title">Werkstatt Serviceleistungen</h4>
                <p class="description">Wartung und Inspektion nach Herstellervorgaben. Hauptuntersuchung (HU) Abgasuntersuchung (AU), Fehler Diagnose, Unfallinstandsetzung, Ersatzteile & Zubehör, Glas- und Glasreparatur Service, Räder & Reifenmontage + Lagern, Klimaanlagenservice, Fahrzeugaufbereitung....</p>
              </div>
            </div>

          </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- Contact-->
    <section class="contact" id="test" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

      <div class="container shadow p-3 mb-5 bg-white rounded" >
        <div class="text-center">
          <h2 class="text-uppercase">JETZT PROBEFAHRT VEREINBAREN!</h2>
          <p>
            haben ein interessantes Fahrzeug gefunden? Sie möchten sich das Fahrzeug gerne näher anschauen? Oder möchten Sie vielleicht direkt eine Probefahrt vereinbaren?
            Kein Problem nutzen Sie dafür bequem unser Anfrageformular,
            unser Service Team wird sich schnellstens mit Ihnen in Verbindung setzen.
          </p>
        </div>
        <div class="row">

          <div class="col">
            <form action="index.php?p=home" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="fname" class="form-control" id="fname" placeholder="Vorname" required oninvalid="this.setCustomValidity('Bitte dieses Feld ausfüllen')">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="lname" id="lname" placeholder="Nachname" required oninvalid="this.setCustomValidity('Bitte dieses Feld ausfüllen')">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required oninvalid="this.setCustomValidity('Bitte dieses Feld ausfüllen')">
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Gegenstand" required oninvalid="this.setCustomValidity('Bitte dieses Feld ausfüllen')">
              </div>
              <div class="form-group mt-3">
                <input type="phonenumber" class="form-control" name="phonenumber" id="phonenumber" placeholder="Telefonnummer" required oninvalid="this.setCustomValidity('Bitte dieses Feld ausfüllen')">
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="carType" id="carType" placeholder="Welches Fahrzeug möchten Sie Probefahren?" required oninvalid="this.setCustomValidity('Bitte dieses Feld ausfüllen')">
              </div> <br>
              <div class="input-group mb-3">
                <div class="input-group-text">
                  <input class="form-check-input mt-0" type="checkbox" value="agree" name ="agree" aria-label="Checkbox for following text input" required oninvalid="this.setCustomValidity('Bitte dieses Feld ausfüllen')">
                </div>
                <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Sind sie damit einverstanden, dass ihre persönlichen Daten gespeichert und verwendet werden, um wieder mit ihnen in Kontakt zu treten." readonly>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Nachricht" required oninvalid="this.setCustomValidity('Bitte dieses Feld ausfüllen')"></textarea>
              </div>
              <br><br>
              <div class="text-center"><button type="submit">Senden</button></div>
            </form>
          </div>

        </div>
      </div>
    </section>
    <!-- End Contact Section -->

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
                <strong>Landnummer:</strong><a href="tel:+4928429039168" style="text-decoration: none;"> +49 28429039168</a> <br>
                <strong>Handy:</strong><a href="tel:+491726344871" style="text-decoration: none;"> +491726344871</a> <br>
               
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
    </footer>
    <!-- End Footer -->












<?php 
 // sending Contact Form 
 if (isset($_POST['agree']) && isset($_POST['email']) && $_POST['email'] != '') {
 
  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

    $sender_name = $_POST['fname']." ".$_POST['lname'];
    $sender_email = $_POST['email'];
    $sender_number= $_POST['phonenumber'];
    $carType= $_POST['carType'];
    $sender_subject = $_POST['subject'];
    $sender_message = $_POST['message'];
		
        
    $to      = 'info@accarsgmbh.de';
	$subject = ''.$sender_subject;
		
      
    $message = "\r\n";
    $message .= "Von: " . $sender_name . "\r\n";
    $message .= "Telefonnummer number : " . $sender_number . "\r\n";
    $message .= "Auto zum Fahren auf Fahrprobe: " . $carType . "\r\n";
    $message .= "Mehr Informationen: " . $sender_message . "\r\n";
	$headers = array(
    			'From' => ''.$sender_email,
    			'Reply-To' => ''.$sender_email,
    			'X-Mailer' => 'PHP/' . phpversion()
				);


    $message_sent = mail($to, $subject, $message, $headers);
  }
  if ($message_sent) {
    echo "<script>
            Swal.fire('Gut gemacht!','Ihr Probefahrtantrag ist bei uns eingegangen. Wir werden Sie so schnell wie möglich kontaktieren. Vielen Dank!','success')</script>";
  } else {
    echo "<script>
        Swal.fire({ type: 'error',title: 'Oops...',text: 'Etwas ist schief gelaufen, bitte überprüfen Sie Ihre Eingaben noch einmal. Vielen Dank'})</script>";
  }
}





}
}


?>