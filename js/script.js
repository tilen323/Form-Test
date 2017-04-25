$("form").submit(function() {
              
    var error = "";

    if ($("#name").val() == "") {

        error += "<br>- manjka ime"

    }

    if ($("#email").val() == "") {

        error += "<br>- manjka email"

    }

    if ($("#content").val() == "") {

        error += "<br>- manjka sporočilo"

    }

    if (error != "") {

        $("#error").html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p><strong>Izpolniti je potrebno vsa polja:</strong>' + error + '</p></div>');

        return false;

    } else {

        return true;

    }
});

$("#close-btn").click(function () {
    
    $("#form-box").fadeOut();
});