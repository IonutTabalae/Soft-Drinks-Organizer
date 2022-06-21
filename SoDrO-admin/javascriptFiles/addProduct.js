$(document).ready(function () {


  $('#addProduct').click(function (e) {
    e.preventDefault();

    var name = $("#name").val();
    var category = $("#category").val();
    var size = $("#size").val();
    var calories = $("#calories").val();

    $.ajax({
      type: 'POST',
      url: 'http://localhost/SoDrO-admin/includes/addProduct.inc.php',
      data: { 'name': name, 'category': category, 'size': size, 'calories': calories },
      success: function (msg) {
        if (msg == "Insert succesfully!") {
          alert("Product added succesfully!");
          window.location.replace("http://localhost/SoDrO-admin/index.php#addProduct");
        }
      }

    })
  });
});