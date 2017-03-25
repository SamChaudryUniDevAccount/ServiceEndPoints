<?php
if (isset($_POST["points"])) {


   // $Points = json_decode($_POST["points"]);

    //Points object shows {"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}
    //echo $Points-> cop;

    //Hard coded version -> Works on decode


    $json = $_POST["points"];

    $copName = json_decode($json);

    echo $copName->cop;





}
