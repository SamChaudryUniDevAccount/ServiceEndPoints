<?php
if (isset($_POST["points"])) {

    // Decode our JSON into PHP objects we can use
    //Pulling
    $points = json_decode($_POST["points"]);


    echo $_POST['points'];


    echo ($points); 

    // Access our object's data and array values.

    echo "Data is: " . $points->data . "<br>";

    echo "Values" . $points->arPoints[0]->x . ", " . $points->arPoints[0]->y;


    //Extract values and write to variables
}
