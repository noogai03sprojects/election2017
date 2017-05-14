$(document).ready(function() {

    var request;

    $("#results").submit(function(event) {
        event.preventDefault();

        if(request)
            request.abort();

        var $form = $(this);

        var $inputs = $form.find("input, submit");

        // var serializedArray = $form.serializeArray();
        // var serializedData = JSON.stringify(serializedArray);

        var serializedData = $form.serialize();
        // $inputs.prop("disabled", true);
        console.log("Data: " + serializedData);

        request = $.ajax({
            url: "doaddresult.php",
            type: "post",
            data: serializedData,
            success: function(data) {
                console.log(data);
            }
        });

        // request.success(function(data) {
        //     console.log(data);
        // });
    });
});
