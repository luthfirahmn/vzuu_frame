$(document).ready(function () {
  $(document).on("click", "#sendEmail", function () {
    var url = $("#form").data("url");
    var data = $("#form").serializeArray(); // convert form to array
    data.push({ name: "_token", value: getCookie() });
    $.ajax({
      url: url,
      method: "POST",
      dataType: "JSON",
      async: false,
      data: data,
      success: function (response) {

        // if (!response.success) {
        //   if (!response.validate) {
        //     $.each(response.messages, function (key, value) {
        //       addErrorValidation(key, value);
        //     });
        //   }
        // } else {
        //   if (response.type == "insert") {
        //     if (typeof response.data != "undefined") {
        //       addDataOption(response.data);
        //     }
        //     reset_input();
        //     modalAutoClose(closeModal);
        //   }
        //   reloadDatatables();
        // }
        // loadingButtonOff(btn, textButton);
        // enabledButton($(btnCloseModal));

        // if (response.validate) {
        //   message(response.success, response.messages);
        // }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        switch (jqXHR.status) {
          case 401:
            sweetAlertMessageWithConfirmNotShowCancelButton(
              "Your session has expired or invalid. Please relogin",
              function () {
                window.location.href = base_url();
              }
            );
            break;

          default:
            sweetAlertMessageWithConfirmNotShowCancelButton(
              "We are sorry, but you do not have access to this service",
              function () {
                location.reload();
              }
            );
            break;
        }
      },
    });
  });
});
