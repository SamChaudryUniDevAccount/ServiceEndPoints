<?php
if (isset($_POST["points"])) {

    //Cast into array and is working!!!

     //Crate assoctiative array
     $obj = json_decode($_POST["points"],true);
     echo "First value..".$obj['cop'];




    //$array = (array)json_decode($_POST["points"],true);

    /*
    foreach ($array as $k=>$v){

        echo "Keys are..".$k. "Values are...".$v;


    }
*/







    //Hard coded version -> Works on decode

    //{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

   // $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

    //$copName = json_decode($json);

    //echo $copName->cop; echos John Mclane

    // Shows {"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}


}
