<?php
include 'config/included_functions.php';
$ob_start = ob_start();
$session_start = session_start();
$ob_end_flush = ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>A&C Cars GmbH</title>
  	<meta name="description" content="Herzlich Willkommen bei A&C Cars GmbH in Kamp-lintfort.
                                      Schön das Sie zu uns gefunden haben… Die Priorität bei A&C Cars besteht in der höchstmöglichen Abdeckung von Kundenwünschen
                                      und einer sehr flexiblen und Kundenorientierten Arbeitsweise. 
                                      Wir denken dass es für unsere Kunden ein riesen Vorteil ist, wenn
                                      Ihre Anliegen größtmöglich von einem Dienstleister abgedeckt werden können.
                                      Gerne beraten Sie bei Fragen rund um das Thema Finanzierung, Inzahlungnahmen und Garantie angelegenheiten." />
    <meta name="author" content="URM" />
   
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/icon.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- Sweet Alert link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/all.css" rel="stylesheet" />

</head>

<body id="page-top">

    <!-- Page Loading Begin -->
    
            <?php
  			
            $switch_pages = new switch_pages();
            $switch_pages->pages($page);
            ?>









    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>