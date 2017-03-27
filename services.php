<?php
if (isset($_POST["points"])) {

    // Decode our JSON into PHP objects we can use

    /// $points echo {"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

    //is_array checks if it is an array // echo "is array: ".is_array($points);

    $points = json_decode($_POST["points"],true);

    $cop;

    foreach ($points as $key=>$value){

        if($key =="cop"){

            $cop = $value;


        }

        //echo $key.":".$value."\n";
    }

    //Outside of the main loop below works

    echo "Best TV cop is...".$cop;



    //Update my table via SQL query
    //$sql = "UPDATE * FROM moviestars WHERE username = '$cop' and airman = '$airman'";

    //if ($result = mysqli_query($link,$sql))
    //{
       // $count = mysqli_num_rows($result);
     //   echo $count;

   // }
    //else{

      //  echo "ERROR Something not working!";

    //}


   // if($count > 1) {

     //   return true;

   // }else {

   //     return false;
 //   }


}

?>

