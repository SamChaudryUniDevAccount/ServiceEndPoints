/**
 * Created by SamChaudry on 23/03/2017.
 */

$( document ).ready(function() {



});



$("#postData").click(function(){



     var jsonObject = {};

     var inputDataArray = ($(".inputData").serializeArray());

     for (var i = 0; i < inputDataArray.length; i++){

     jsonObject[inputDataArray[i]['name']] = inputDataArray[i]['value'];

     }


     var data = JSON.stringify(jsonObject);


    //alert("" + data);
    // console.log(data);
    //{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}


    $.ajax({

        "url": 'services.php',
        "type": 'POST',
        "data": {"points" : data},
        success: function(data) {

        // Do something with data that came back.

          alert(data);

        }

});


});

