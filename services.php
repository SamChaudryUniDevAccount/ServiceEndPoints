<?php
if (isset($_POST["update"])) {

    // Decode our JSON into PHP objects we can use

    $points = json_decode($_POST["points"]);

    // Access  object's data and array values.


    for ($row = 0; $row < sizeof($points); $row++) {


        echo $points[$row]['cop'];

    }

    //Extract values and write to variables
}
