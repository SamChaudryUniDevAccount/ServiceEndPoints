<?php
if (isset($_POST["points"])) {

    //data is an array

    $data = json_decode($_POST["points"]); // return array not object

    echo $data;






    //{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

   // $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

    //$copName = json_decode($json);

    //echo $copName->cop; echos John Mclane




}
