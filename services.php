<?php
if (isset($_POST["points"])) {


    $pointsArray = json_decode($_POST["points"],true);

    //Points object shows {"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

    $key = "cop";

    $bestMovieCop = $pointsArray[$key];

    echo "Best movie cop is".$bestMovieCop;







    //Hard coded version -> Works on decode

    //{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

   // $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

    //$copName = json_decode($json);

    //echo $copName->cop; echos John Mclane



}
