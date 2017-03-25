<?php
if (isset($_POST["points"])) {

    //$cleanData = json_decode($_POST["points"]);

    //echo $cleanData;

    $data = json_decode($_POST["points"], true); // return array not object

    foreach($data['points'] as $key => $customer) {
     
        echo $customer['cop'];

    }










    //Hard coded  -> Works on decode

    //{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

   // $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

    //$copName = json_decode($json);

    //echo $copName->cop; echos John Mclane




}
