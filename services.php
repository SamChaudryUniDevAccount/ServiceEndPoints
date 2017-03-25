<?php
if (isset($_POST["points"])) {

     // echos {"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}
    $Points = json_decode($_POST["points"]);
    
     echo $Points;


    //Hard coded version -> Works on decode

    //{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

   // $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

    //$copName = json_decode($json);

    //echo $copName->cop; echos John Maclane





}
