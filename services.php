<?php
if (isset($_POST["points"])) {

    // Decode our JSON into PHP objects we can use
    //Pulling
    //$data = json_decode($_POST["points"],true);

    //You can for loop through this and grab the values by key value pairs and get what you want
    //$data =  $_POST['points'];

    //echo $jsondecoded;

    //$arr = json_decode($data["points"], true);

    //echo "Values echoed are". $String = $arr[0];


    /* Extract data from this and donut works
    $json = '
{
    Key      value
    "type": "donut",
    "name": "Cake"
}';

    $yummy = json_decode($json);

    echo $yummy->type; //donut
*/

    $data = json_decode($_POST["points"]);

    echo $data; 
    echo $data->cop;


}
