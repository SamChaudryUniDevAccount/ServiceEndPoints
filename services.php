<?php
if (isset($_POST["points"])) {


     //$json = json_decode($_POST["points"]);

     //$cop =  $json["points"]["cop"]->cop;

     //echo $cop;



    //Hard coded version -> Works on decode

    //{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

    $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

    $copName = json_decode($json);

    echo $copName->cop;





}
