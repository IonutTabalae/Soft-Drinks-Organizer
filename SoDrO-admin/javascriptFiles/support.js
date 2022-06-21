function putMessageAfterNewsletter(msg) {
  $(".messageUnderNewsletter").html("<b>" + msg + "</b>");
  $(".messageUnderNewsletter").css("display", "block");
  $(".messageUnderNewsletter").css("color", "red");
}

function putMessageAfterUsers(msg) {
  $(".messageAfterDeleteUsers").html("<b>" + msg + "</b>");
  $(".messageAfterDeleteUsers").css("display", "block");
  $(".messageAfterDeleteUsers").css("color", "red");
}

function putMessageAfterProduct(msg) {
  $(".messageAfterInsertProduct").html("<b>" + msg + "</b>");
  $(".messageAfterInsertProduct").css("display", "block");
  $(".messageAfterInsertProduct").css("color", "red");
}