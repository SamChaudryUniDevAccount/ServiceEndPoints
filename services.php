<?php
if ($_POST['action'] = "follow") {

    //data is an array

    $json = $_POST["action"]; // return array not object

    $data = json_decode($json);

    echo $data;


   // {"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

  //  $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

  //  $copName = json_decode($json);

  //  echo $copName->cop." "." ".$copName->airman;




}
