<?php
if (isset($_POST["points"])) {

    $cleanData = json_decode($_POST["points"]);

    echo $cleanData;




     //Crate assoctiative array
    // $obj = json_decode($_POST["points"]);

    // echo $obj;








    //Hard coded  -> Works on decode

    //{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

   // $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

    //$copName = json_decode($json);

    //echo $copName->cop; echos John Mclane




}
