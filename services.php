<?php
if (isset($_POST["points"])) {

    // Decode our JSON into PHP objects we can use
    //Pulling
    $points = json_decode($_POST["points"]);

    echo $_POST['points'];

    //For loop through the points
    echo ($points);

    // Access our object's data and array values.
    //Extract values and write to variables
}
