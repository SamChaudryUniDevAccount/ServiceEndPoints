<?php
if (isset($_POST["points"])) {

    // Decode our JSON into PHP objects we can use
    //Pulling
    $points = json_decode($_POST["points"]);

    //You can for loop through this and grab the values by key value pairs and get what you want
    //$data =  $_POST['points'];

    //For loop through the points
  //  echo ("".$points);

    $array = array('key1' => 'value1', 'key2' => 'value2');

    $keys = array_keys($array);

    for($i=0; $i < count($keys); ++$i) {

        echo $keys[$i] . ' ' . $array[$keys[$i]] . "\n";
    }



    // Access our object's data and array values.
    //Extract values and write to variables





}
