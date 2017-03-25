<?php



if (isset($_POST["points"])) {

    //data is an array

    $json = ($_POST["points"]);

    //Array
    $data = array(json_decode($json,true));

    foreach ($data[0] as $key => $value) {

        print_r ("$key => $value\n");

    }



    echo print_r($data);





   // {"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

  //  $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

  //  $copName = json_decode($json);

  //  echo $copName->cop." "." ".$copName->airman;




}
