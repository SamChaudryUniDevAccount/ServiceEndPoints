<?php
if (isset($_POST["points"])) {

    //Cast into array and is working!!!
    $array = (array)json_decode($_POST["points"],true);

    foreach ($array as $k=>$v){

        //echo "".$k.$v;

        if($k == "cop"){

            echo $v;
        }

    }








    //Hard coded version -> Works on decode

    //{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

   // $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

    //$copName = json_decode($json);

    //echo $copName->cop; echos John Mclane

    // Shows {"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}


}
