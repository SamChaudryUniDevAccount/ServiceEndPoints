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

     //alert(data);
     //console.log(data);

     //Data structure
    //{"cop":"John Mclane","airman":"Maverick","wing":"Iceman","rock":"Rocky Balboa"}

    var postArray = new Array();

    postArray.push(jsonObject);
    
    alert(postArray);


    $.ajax({

        url: 'services.php',
        type: 'post',
        data: {"points" : JSON.stringify(postArray)},
        success: function(data) {

        // Do something with data that came back.

       alert(data);

    }

});



});

