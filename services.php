<?php
if (isset($_POST["update"])) {

    // Decode our JSON into PHP objects we can use
    // Decode our JSON into PHP objects we can use
    ///{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}


    $String = stripslashes($_POST["points"]);

    $points = json_decode($String,true);

     echo $points;

}
