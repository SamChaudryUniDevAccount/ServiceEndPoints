<?php
if (isset($_POST["update"])) {

    // Decode our JSON into PHP objects we can use

    $points = json_decode($_POST["points"]);

    // Access  object's data and array values.

    $title = $points->points->cop;

    echo $title;

    //Extract values and write to variables
}
