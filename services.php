<?php
if (isset($_POST["points"])) {

    // Decode our JSON into PHP objects we can use
    //Pulling
    $jsondecoded = json_decode($_POST["points"]);

    //You can for loop through this and grab the values by key value pairs and get what you want
    //$data =  $_POST['points'];

    //For loop through the points
    // echo ("".$points);

   // $array = array('key1' => 'value1', 'key2' => 'value2');


    $obj = json_decode($data, TRUE);
    for($i=0; $i<count($obj['points']); $i++) {

        echo $obj['points'][i];
    }


    // Access our object's data and array values.
    //Extract values and write to variables





}
