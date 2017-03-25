/**
 * Created by SamChaudry on 23/03/2017.
 */

$( document ).ready(function() {



});



$("#postData").click(function(){

    var jsonObject = {};
    var JSONstr;

    var inputDataArray = ($(".inputData").serializeArray());

    for (var i = 0; i < inputDataArray.length; i++){

        jsonObject[inputDataArray[i]['name']] = inputDataArray[i]['value'];

    }
    

     var data = JSON.stringify(jsonObject);

      var JSONstr = encodeURIComponent(JSON.stringify(data));

    $.ajax({

        url: 'services.php',
        type: 'post',
        data: {"points" :  JSON.stringify(JSONstr)},
        success: function(data) {

        // Do something with data that came back.

       alert(data);

    }

});



});

