<?php



if (isset($_POST["points"])) {

    //data is an array

    $json = ($_POST["points"]);

    $data = array(json_decode($json));

    foreach ($toppings as $data) {



    }


    echo $topping, "\n";

   // {"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

  //  $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

  //  $copName = json_decode($json);

  //  echo $copName->cop." "." ".$copName->airman;




}
