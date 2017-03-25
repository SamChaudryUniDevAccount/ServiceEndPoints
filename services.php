<?php
if (isset($_POST["points"])) {

    // Decode our JSON into PHP objects we can use
    //Pulling
   echo $data = json_decode($_POST["points"],true);

    //You can for loop through this and grab the values by key value pairs and get what you want
    //$data =  $_POST['points'];

    //echo $jsondecoded;

    //$arr = json_decode($data["points"], true);




     echo   $data["points"]->{'cop'};


/*
    $json = '{"type": "donut",
    "name": "Cake"}';

    $yummy = json_decode($json);

    echo $yummy->type; //donut
*/




}
