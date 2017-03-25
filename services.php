<?php

header('Content-type: application/json;');

if (isset($_POST["points"])) {

    //data is an array

    $json = (stripslashes($_POST["points"]));

    $data = json_decode($json);

    echo "" .var_dump($data);


   // {"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

  //  $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

  //  $copName = json_decode($json);

  //  echo $copName->cop." "." ".$copName->airman;




}
