<?php
if (isset($_POST["points"])) {

    //data is an array

    $json = $_POST["points"]; // return array not object

    $data = json_decode($json);

    echo "Data elements returned" .$data->cop;

    //{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

   // $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

    //$copName = json_decode($json);

    //echo $copName->cop; echos John Mclane




}
