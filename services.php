<?php
if (isset($_POST["points"])) {

    // Decode our JSON into PHP objects we can use
    //Pulling
    $points = json_decode($_POST["points"]);

    //You can for loop through this and grab the values by key value pairs and get what you want
    $data =  $_POST['points'];

    //For loop through the points
    //echo ("Data returned from ther server is".$points);

    // Access our object's data and array values.
    //Extract values and write to variables

    foreach ($data as $key => $value)
    {
        echo "Data echo is". "<p>$key = $value</p>";
    }

    foreach ($points as $key => $value)
    {
        echo "Points echo is"." <p>$key = $value</p>";
    }



}
