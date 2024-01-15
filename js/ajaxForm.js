var $ = jQuery;
$(document).ready(function () {
    $("#sendingForm, #calculateInsurance").submit(function (event) {
        event.preventDefault();

        // var isChecked = $("#myCheckbox").is(":checked");
        // if (!isChecked) {
        //     alert("Musisz zaznaczyć checkbox, aby kontynuować.");
        //     return false; // Zatrzymuje wysyłanie formularza
        // }

        // Dodajemy napis "Processing..."
        $("#sendingForm").after('<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');

        var form = $(this);
        var actionUrl = form.attr('action');

        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(),
            dataType: "json", 
            success: function(data) {
                $(".lds-spinner").remove();

                if (data.message) {
                    $("#sendingForm").after("<h1>" + data.message + "</h1>");
                    $("#sendingForm").trigger("reset");
                    $(".errorPara").remove();
                } else {
                    $("#sendingForm").after("<h1>Received an unexpected response</h1>");
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $(".lds-spinner").remove();

                if (jqXHR.responseJSON && jqXHR.responseJSON.errors) {
                    var errors = jqXHR.responseJSON.errors;

                    $(".errorPara").remove();

                    Object.keys(errors).forEach(function(key) {
                        var message = errors[key];
                        var inputField = $("input[name='" + key + "'], textarea[name='" + key + "']");
                        $("<p class='errorPara'>" + message + "</p>").insertAfter(inputField);
                    });
                } else {
                    var generalErrorMsg = jqXHR.status + ': ' + jqXHR.statusText;
                    $("#sendingForm").after("<h1>Error - " + generalErrorMsg + "</h1>");
                }
            }
        });
    });
});
