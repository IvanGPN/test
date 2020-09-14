$("#ajaxForm").on("submit", function (event) {
  $.ajax({
    url: "action_ajax.php",
    type: "post",
    dataType: "json",
    data: $(this).serialize(),
    success: function (data) {
      $("#alert")
        .contents()
        .filter(function () {
          return this.nodeType === 3;
        })
        .remove();
      $("#alert").prepend(data.result);
      $("#alert").removeClass("d-none");
      $("#alert").addClass("show");

      if (data.result == 'Регистрация прошла успешно'){
        $("#alert").removeClass("alert-danger");
        $("#alert").addClass("alert-success");
        $(".container").addClass("d-none");
      }
    },
    error: function () {
      $("#result").data("some error");
    },
  });
  event.preventDefault();
});

$("#close").on("click", function () {
  $("#alert").addClass("d-none");
  $("#alert").removeClass("show");
});
