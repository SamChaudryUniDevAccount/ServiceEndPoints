<?php
if (isset($_POST["points"])) {


    $Points = json_decode($_POST["points"]);

    //Object values
    //Points object shows {"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}
    echo $Points-> {'cop'};

    //Hard coded version -> Works on decode

    //{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

   // $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

    //$copName = json_decode($json);

     //key is cop and value is John Mclane
    //echo $copName->cop; echos John Maclane





}
