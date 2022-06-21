<?php
class service
{

    public function display_services($page)
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
    
        <!-- Contact-->
        <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

            <div class="container">
                <div class="text-center">
                    
                    <h3 class="" style="color: #ffffff;">Willkommen bei A&C Auto GmbH.</h3>
                </div>
                <div class="col-lg-12 d-flex flex-column justify-content-center p-5">

                    <h3>
                        Service
                    </h3>

                    <p>
                        <b>Inzahlungnahme</b> <br>
                        Natürlich kaufen auch wir Gebrauchtfahrzeuge an. Alter und Zustand spielen da keine Rolle, alles eine Frage der Einigung! Sprechen Sie mit uns, wir bieten Ihnen <br>
                        Höchstpreise für Ihren Gebrauchten. Es bestehet auch die Möglichkeit, Ihr finanziertes Fahrzeug oder Leasing Fahrzeug auszulösen.
                    </p>
                    <p>
                        Sie haben ein besonderes oder sehr gepflegtes Fahrzeug?<br>
                        Wir bzw. unsere Gutachter kennen sich gut aus und bewerten auch diese Kriterien, freuen Sie sich auf unser Höchstgebot.
                    </p>
                    <p>
                        <b>Wir melden Ihr Fahrzeug für Sie ab</b> <br>
                        Sobald der Ankauf abgeschlossen ist können Sie sich zurücklehnen. <br>
                        Wir erledigen sämtliche Formularietäten zur Abmeldung Ihres Fahrzeuges und lassen Ihnen Kopien zukommen.
                    </p> <br>
                    <p>Hier können Sie uns Ihre Ankauf Anfrage direkt zukommen lassen.</p><br>
                    <p>
                        Unser Verkäufer Team wird sich dann umgehend mit Ihnen in Verbindung setzen und alles weitere besprechen.
                    </p><br>
                    <p>Bitte haben Sie Verständnis dafür, das nur vollständig ausgefüllte Formulare bearbeitet werden können.
                    </p><br>
                </div>
                <div class="row">



                    <div class="col-lg-12">
                        <form action="index.php?p=service" method="POST" role="form" class="php-email-form">
                            <div>
                                <h3>Ankaufformular</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="Vorname" required><br>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Nachname" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required><br>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="reference" id="reference" placeholder="Betreff" required><br>
                            </div>
                            <br>
                            <div>
                                <h5>Angaben zum Fahrzeug</h5> <br>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="manufacturer" class="form-control" id="manufacturer" placeholder="Hersteller" required><br>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="model" id="model" placeholder="Modell" required> <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="thunderstorm" class="form-control" id="thunderstorm" placeholder="Baujhar" required><br>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="power" id="power" placeholder="Leistung" required><br>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="chassisnumber" id="chassisnumber" placeholder="Fahrgestellnummer" required><br>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="mileage" class="form-control" id="mileage" placeholder="Kilometerstand" required><br>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="price" id="price" placeholder="Preisvorstellung" required><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="fuel" class="form-control" id="fuel" placeholder="Kraftstoff" required><br>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="transmission" id="transmission" placeholder="Getriebe" required><br>
                                </div>
                            </div>
                            <br>
                            <h5>Angaben zur Ausstattung</h5> <br>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input class="form-check-input mt-0" type="checkbox" name="Lederausstattung" value="Lederausstattung" aria-label="Checkbox for following text input"> Lederausstattung <br>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input class="form-check-input mt-0" type="checkbox" name="Scheckheft" value="Scheckheft" aria-label="Checkbox for following text input"> Scheckheft <br>
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input class="form-check-input mt-0" type="checkbox" name="Schiebedach" value="Schiebedach" aria-label="Checkbox for following text input"> Schiebedach <br>
                                </div><br>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input class="form-check-input mt-0" type="checkbox" name="Klimaautomatik" value="Klimaautomatik" aria-label="Checkbox for following text input"> Klimaautomatik <br>
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input class="form-check-input mt-0" type="checkbox" name="Automatik" value="Automatik" aria-label="Checkbox for following text input"> Automatik <br>
                                </div><br>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input class="form-check-input mt-0" type="checkbox" name="Navigationsystem" value="Navigationsystem" aria-label="Checkbox for following text input"> Navigationsystem <br>
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input class="form-check-input mt-0" type="checkbox" name="Sitzheizung" value="Sitzheizung" aria-label="Checkbox for following text input"> Sitzheizung <br>
                                </div><br>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input class="form-check-input mt-0" type="checkbox" name="Panoramadach" value="Panoramadach" aria-label="Checkbox for following text input"> Panoramadach <br>
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input class="form-check-input mt-0" type="checkbox" name="Unfallwagen" value="Unfallwagen" aria-label="Checkbox for following text input"> Unfallwagen <br>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input class="form-check-input mt-0" type="checkbox" name="Unfallfrei" value="Unfallfrei" aria-label="Checkbox for following text input"> Unfallfrei <br>
                                </div>
                            </div>
                            <br>
                            <p><b>Sonstige Bemerkungen: Allgemeiner Zustand, Sonderausstattungen, Tuning, etc...</b></p>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Ihre Nachricht" required></textarea>
                            </div>

                            <div class="form-group mt-3">
                                <br><input class="form-check-input mt-0" type="checkbox" name="agree" value="agree" aria-label="Checkbox for following text input"> Sind sie damit einverstanden, dass ihre persönlichen Daten gespeichert und verwendet werden, um wieder mit ihnen in Kontakt zu treten.
                            </div>

                            <br>
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
                <strong>Landnummer:</strong><a href="tel:+4928429039168" style="text-decoration: none;"> +492842 9039168</a> <br>
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
        if (isset($_POST['email']) && $_POST['email'] != '') {
           

                $sender_name = $_POST['fname'] . "  " . $_POST['lname'];
                $sender_email = $_POST['email'];
                $reference = $_POST['reference'];
                $manufacture = $_POST['manufacture'];
                $model = $_POST['model'];
                $thunderstorm = $_POST['thunderstorm'];
                $power = $_POST['power'];
                $chaassisnumber = $_POST['chassisnumber'];
                $mileage = $_POST['milege'];
                $price = $_POST['price'];
                $fuel = $_POST['fuel'];
                $transmission = $_POST['transmission'];
                $lederausstattung = $_POST['Lederausstattung'];
                $scheckheft = $_POST['Scheckheft'];
                $schiebedach = $_POST['Schiebedach'];
                $klimaautomatik = $_POST['Klimaautomatik'];
                $automatik = $_POST['Automatik'];
                $navigationsystem = $_POST['Navigationsystem'];
                $sitzheizung = $_POST['Sitzheizung'];
                $panoramadach = $_POST['Panoramadach'];
                $unfallwagen = $_POST['Unfallwagen'];
                $unfallfrei = $_POST['Unfallfrei'];
                $sender_subject = $_POST['subject'];
                $sender_message = $_POST['message'];
		
        
       			$to      = 'info@accarsgmbh.de';
				$subject = ''.$sender_subject;
		
                $to = "info@accarsgmbh.de";
              	$message = "\r\n";
              	$message .= "Ankaufformular". "\r\n";
                $message .= "Von: " . $sender_name . "\r\n";
                $message .= "Email: " . $sender_email . "\r\n";
                $message .= "Betreff: " . $reference . "\r\n";
                
                $message .= "Angaben Zum Fahrzeug". "\r\n";
                $message .= "Hersteller: " . $manufacture . "\n" . "Modell: " . $model . "\r\n";
                $message .= "Baujhar: " . $thunderstorm . "\n" . "Leistung: " . $power . "\r\n";
                $message .= "Fahrgestellnummer: " . $chaassisnumber . "\n" . "Kilometerstand: " . $mileage . "\r\n";
                $message .= "Preisvorstellung: " . $price . "\n" . "Kraftstoff: " . $fuel . "\r\n";
                $message .= "Getriebe: " . $transmission . "\r\n";
                
                $message .= "Angaben Zur Ausstattung". "\r\n";;
                if(isset($_POST['Lederausstattung']))
                $message .= "Lederausstattung: " . $lederausstattung. "\r\n";
                if(isset($_POST['Scheckheft']))
                $message .= "Scheckheft: " . $scheckheft . "\r\n";
                if(isset($_POST['Schiebedach']))
                $message .= "Schiebedach: " . $schiebedach ."\r\n";
                if(isset($_POST['Klimaautomatik']))
                $message .= "Klimaautomatik: " . $klimaautomatik . "\r\n";
                if(isset($_POST['Automatik']))
                $message .= "Automatik: " . $automatik . "\r\n";
                if(isset($_POST['Navigationsystem']))
                $message .= "Navigationsystem: " . $navigationsystem . "\r\n";
                if(isset($_POST['Sitzheizung']))
                $message .= "Sitzheizung: " . $sitzheizung . "\r\n";
                if(isset($_POST['Panoramadach'])) 
                $message .= "Panoramadach: " . $panoramadach . "\r\n";
                if(isset($_POST['Unfallwagen']))
                $message .= "Unfallwagen: " . $unfallwagen .  "\r\n";
                if(isset($_POST['Unfallfrei']))
                $message .= "Unfallfrei: " . $unfallfrei . "\r\n";
                if(isset($_POST['agree'])){
                $message .= "Sind sie damit einverstanden, dass ihre persönlichen Daten gespeichert und verwendet werden, um wieder mit ihnen in Kontakt zu treten.:" . "\r\n";}
                

                $message .= "Mehr Informationen: " . $sender_message . "\r\n";
				
				$headers = array(
    			'From' => ''.$sender_email,
    			'Reply-To' => ''.$sender_email,
    			'X-Mailer' => 'PHP/' . phpversion()
				);


        		$message_sent = mail($to, $subject, $message, $headers);
            
            if ($message_sent) {
                echo "<script>
              Swal.fire('Gut erledigt! ',' Ihre Fahrzeuginformationen wurden empfangen. Wir werden Sie so schnell wie möglich kontaktieren. Vielen Dank!','success')</script>";
            } else {
                echo "<script>
          Swal.fire({ type: 'error',title: 'Oops...',text: 'Etwas ist schief gelaufen, bitte überprüfen Sie Ihre Eingaben noch einmal. Vielen Dank'})</script>";
            }
        }
    }
}

?>