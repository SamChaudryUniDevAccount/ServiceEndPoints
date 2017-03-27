<?php
if (isset($_POST["points"])) {

    // Decode our JSON into PHP objects we can use

    /// $points echo {"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

    ////echo $points->cop; Not working...


    $points = json_decode('{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}');

    echo $points->cop;





}

?>
