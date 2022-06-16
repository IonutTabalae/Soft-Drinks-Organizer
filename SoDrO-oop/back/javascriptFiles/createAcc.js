$(document).ready(function () {
  var server = 'http://localhost/SoDrO/back/phpFiles/verifyRegister.php'
  $('#submit').click(function (e) {
    e.preventDefault();
    var email = $("#email").val();
    var username = $("#username").val();
    var password = $("#password").val();
    var confirm_password = $("#confirm_password").val();
    $.post(server,
      {
        email: email,
        username: username,
        password: password,
        confirm_password: confirm_password
      },
      function (data) {

        data = JSON.parse(data);
        console.log(data.code);
        if (data.code == 200) {
          $(".messageAfterRegister").html("<b>" + data.msg + "</b>");
          $(".messageAfterRegister").css("display", "block");
//          $(".display-error").css("display", "none");
        } else {
          $(".messageAfterRegister").html("<b>" + data.msg + "</b>");
          $(".messageAfterRegister").css("display", "block");
          $(".messageAfterRegister").css("color", "red");
  //        $(".error").css("display", "none");
        }
      });
  });
});