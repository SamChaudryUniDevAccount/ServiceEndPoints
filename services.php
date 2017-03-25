<?php
if (isset($_POST["points"])) {

    // Decode our JSON into PHP objects we can use
    //Pulling
    //$jsondecoded = json_decode($_POST["points"]);

    //You can for loop through this and grab the values by key value pairs and get what you want
    //$data =  $_POST['points'];



    $arr = json_decode('[{"var1":"9","var2":"16","var3":"16"},{"var1":"8","var2":"15","var3":"15"}]');

    foreach($arr as $item) { //foreach element in $arr

      echo $uses = $item['var1']; //etc
    }





}
