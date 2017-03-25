<?php
if (isset($_POST["update"])) {

    // Decode our JSON into PHP objects we can use

     $points = json_decode($_POST["points"]);

     echo $points-> cop;

}
