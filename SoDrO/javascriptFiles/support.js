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

function putMessageAfterChangePassword(msg) {
  $(".messageAfterUpdatePassword").html("<b>" + msg + "</b>");
  $(".messageAfterUpdatePassword").css("display", "block");
  $(".messageAfterUpdatePassword").css("color", "red");
}

function putMessageAfterNewsletter(msg) {
  $(".MessageAfterNewsletter").html("<b>" + msg + "</b>");
  $(".MessageAfterNewsletter").css("display", "block");
  $(".MessageAfterNewsletter").css("color", "red");
}

function putMessageAfterAddProduct(msg) {
  $(".MessageAfterAddProduct").html("<b>" + msg + "</b>");
  $(".MessageAfterAddProduct").css("display", "block");
  $(".MessageAfterAddProduct").css("color", "green");
}
