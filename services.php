<?php
if (isset($_POST["points"])) {

    //{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

     //$json = json_decode($_POST["points"]);

     //$cop =  $json["points"]["cop"]->cop;

     //echo $cop;



    $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

    $yummy = json_decode($json);

    echo $yummy->cop; 





}
