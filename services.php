<?php
if (isset($_POST["points"])) {

    // Decode our JSON into PHP objects we can use
    ///{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

    $points = json_decode($_POST["points"],true);

    $stringJSON = $_POST["points"];

    $stringObject = json_decode(stripslashes($stringJSON));

     echo $stringObject->cop;

}
