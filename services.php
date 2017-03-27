<?php
if (isset($_POST["points"])) {

    // Decode our JSON into PHP objects we can use

    /// $points echo {"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}



    $points = json_decode($_POST["points"],true);


  //  echo "Type is".gettype($points);

  //  echo "decode result: ".$points;

  //  echo "is array: ".is_array($points);

  //  echo "is object: ".is_object($points);


//    $points = json_decode("{\"cop\":\"John Mclane\",\"airman\":\"Maverick\",\"wing\":\"Iceman\",\"rock\":\"Rocky Balboa\"}");

//    echo "comparison: ".($_POST["points"]=="{\"cop\":\"John Mclane\",\"airman\":\"Maverick\",\"wing\":\"Iceman\",\"rock\":\"Rocky Balboa\"}");

    //echo $_POST["points"];

   // echo $points;


    $cop;



    foreach ($points as $key=>$value){

        if($key =='cop'){

            $cop += $value;


        }


        echo "Best TV cop is...".$cop;

        //echo $key.":".$value."\n";


    }
}

?>

