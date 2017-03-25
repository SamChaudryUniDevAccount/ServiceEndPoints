<?php



if (isset($_POST["points"])) {

    //data is an array

    $json = ($_POST["points"]);

    $data = json_decode($json);

    echo "" .$data[1];


   // {"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

  //  $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

  //  $copName = json_decode($json);

  //  echo $copName->cop." "." ".$copName->airman;




}
