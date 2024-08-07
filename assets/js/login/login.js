$(document).on("submit", "form#login", function (e) {
  e.preventDefault();
  var btn = $("#btnSubmit");
  var textButton = btn.text();
  var url = base_url() + "login/auth";
  var msgAlert = $("#alert-messages");

  var data = $(this).serializeArray();

  data.forEach(function (field) {
    if (
      (field.name === "password" || field.name === "email") &&
      field.value !== ""
    ) {
      field.value = encrypt(field.value);
    }
  });
  data.push({ name: "_token", value: getCookie() });

  $.ajax({
    url: url,
    method: "POST",
    dataType: "JSON",
    data: $.param(data),
    beforeSend: function () {
      loadingButton(btn);
    },
    success: function (response) {
      msgAlert.html("");
      if (!response.success) {
        if (!response.validate) {
          $.each(response.messages, function (key, value) {
            var element = $("#" + key);
            element
              .removeClass("fv-plugins-bootstrap5-row-invalid")
              .addClass(
                value.length > 0 ? "fv-plugins-bootstrap5-row-invalid" : ""
              )
              .next(".invalid-feedback")
              .remove();
            element.after(value);
            element.addClass(value.length > 0 ? "is-invalid" : "");
          });
        } else {
          document.getElementById("alert-messages").style.display = "block";
          msgAlert.html(textWarning(response.messages));
        }
        loadingButtonOff(btn, textButton);
      } else {
        window.location.href = base_url() + response.menu_first;
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      loadingButtonOff(btn, textButton);
    },
  });
});

function textWarning(message) {
  let warning = `<span class="alert" onclick="this.parentElement.style.display='none';">×</span> <strong>Warning!</strong><br>Invalid Email or Password.`;

  return warning;
}
