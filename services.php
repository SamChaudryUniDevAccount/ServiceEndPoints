<?php
if (isset($_POST["update"])) {

    // Decode our JSON into PHP objects we can use

   // $points = json_decode($_POST["points"]);

    // Access  object's data and array values.

    //$title = $points->cop;

    //echo $title;

    $value = json_decode($_POST['json']);

   // echo $value->cop;

    //Extract values and write to variables

    $value = json_decode(stripslashes($_POST), true);
    echo $value->cop;

}
