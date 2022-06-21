<?php

if (isset($_GET["p"])) {
    $page = $_GET["p"];
} else {
    $page = "home";
}
// echo $page;
class switch_pages
{

    public function pages($page)
    {

        switch ($page) {

            case "home":
                $home = new home();
                $home->display_home($page);
                break;

            case "cars":
                $home = new cars();
                $home->display_cars($page);
                break;

            case "service":
                $service = new service();
                $service->display_services($page);
                break;

            case "imprint":
                $about_us = new imprint();
                $about_us->display_imprint($page);
                break;


            case "contact_us":
                $contact_us = new contact_us();
                $contact_us->display_contact_us($page);
                break;

            case "dataprotection":
                $contact_us = new dataprotection();
                $contact_us->display_dataprotection($page);
                break;





            default:
                $notfound = new notfound();
                $notfound->display_notfound($page);
                break;
        }
    }
}
