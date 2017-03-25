<?php
if (isset($_POST["update"])) {

    // Decode our JSON into PHP objects we can use

    $points = json_decode($_POST["points"]);

    // Access  object's data and array values.


    foreach($points as $key => $value){

        $credentials[$key] = $value;

    };
    echo print_r($credentials);

    //Extract values and write to variables
}
