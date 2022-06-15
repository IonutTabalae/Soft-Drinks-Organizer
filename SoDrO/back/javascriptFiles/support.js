function putMessageAfterLogin(msg){
  $(".messageAfterLogin").html("<b>" + msg + "</b>");
  $(".messageAfterLogin").css("display", "block");
  $(".messageAfterLogin").css("color", "red");
}