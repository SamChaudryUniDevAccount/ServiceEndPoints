<?php
if (isset($_POST["points"])) {


     //Crate assoctiative array
     $obj = json_decode($_POST["points"]);


      $jsonData = stripslashes(html_entity_decode($_POST["points"]));

      $array= (array)json_decode($jsonData,true);

      foreach ($array as $k=>$v){

        echo "Keys are..".$k. "Values are...".$v;


     }



    //$array = (array)json_decode($_POST["points"],true);

    /*
    foreach ($array as $k=>$v){

        echo "Keys are..".$k. "Values are...".$v;


    }
*/







    //Hard coded  -> Works on decode

    //{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

   // $json = '{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}';

    //$copName = json_decode($json);

    //echo $copName->cop; echos John Mclane




}
