$(document).ready(function() {
  $("#form").on("submit", function() {
    formvalid=true;

    var emailIsValid = $("#uemail").prop("validity").valid;
    if(emailIsValid) {
      $("#emailError").hide();
    } else {
      $("#emailError").show();
      formvalid=false;
    }

    var userIsValid = $("#uname").prop("validity").valid;
    if(userIsValid) {
      $("#userError").hide();
    } else {
      $("#userError").show();
      formvalid=false;
    }

    var msgIsValid = $("#message").prop("validity").valid;
    if(msgIsValid) {
      $("#msgError").hide();
    } else {
      $("#msgError").show();
      formvalid=false;
    }

  return formvalid;
  });

});
