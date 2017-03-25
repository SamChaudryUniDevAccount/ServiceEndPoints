<?php
if (isset($_POST["points"])) {


    $tempData = html_entity_decode($tempData);
    $cleanData = json_decode($tempData);

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
