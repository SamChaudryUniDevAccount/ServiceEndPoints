<?php
if (isset($_POST["points"])) {

    // Decode our JSON into PHP objects we can use
    //Pulling
    $points = json_decode($_POST["points"]);

    //You can for loop through this and grab the values by key value pairs and get what you want
    //$data =  $_POST['points'];

    //For loop through the points
  //  echo ("".$points);

    foreach($points as $obj){

        echo $obj->name;

    }


    // Access our object's data and array values.
    //Extract values and write to variables





}
