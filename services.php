<?php
if (isset($_POST["points"])) {

    // Decode our JSON into PHP objects we can use

    /// $points echo {"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}



    $points = json_decode($_POST["points"]);

    //echo $_POST["points"];

   // echo $points;

    foreach ($points as $key=>$value){

        echo $key.":".$value."\n";


    }
}

?>
