function putMessageAfterLogin(msg) {
  $(".messageAfterLogin").html("<b>" + msg + "</b>");
  $(".messageAfterLogin").css("display", "block");
  $(".messageAfterLogin").css("color", "red");
}

function putMessageAfterRegister(msg) {
  $(".messageAfterRegister").html("<b>" + msg + "</b>");
  $(".messageAfterRegister").css("display", "block");
  $(".messageAfterRegister").css("color", "red");
}

function putMessageAfterChangePassword(msg){
  $(".messageAfterUpdatePassword").html("<b>" + msg + "</b>");
  $(".messageAfterUpdatePassword").css("display", "block");
  $(".messageAfterUpdatePassword").css("color", "red");
}