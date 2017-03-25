<?php
if (isset($_POST["points"])) {

    // Decode our JSON into PHP objects we can use
    //Pulling
    $jsondecoded = json_decode($_POST["points"]);

    //You can for loop through this and grab the values by key value pairs and get what you want
    //$data =  $_POST['points'];

    //For loop through the points
     echo ("".$jsondecoded);


    $obj = json_decode($_POST["points"], TRUE);

    foreach($obj['points'] as  $key => $value){

        echo "Key: $key; Value: $value<br />\n";
    }


    // Access our object's data and array values.
    //Extract values and write to variables





}
