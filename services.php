<?php
if (isset($_POST["points"])) {

    // Decode our JSON into PHP objects we can use
    //Pulling
    $jsondecoded = json_decode($_POST["points"]);

    //You can for loop through this and grab the values by key value pairs and get what you want
    $data =  $_POST['points'];

    echo $data;







}
