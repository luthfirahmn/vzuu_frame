$(document).ready(function () {
  var baseurl = base_url() + "administrator/blog/show";

  var column = [
    {
      data: null,
      render: function (data, type, row, meta) {
        return meta.row + 1;
      },
    },
    { data: "title", width: "25%" },
    { data: "body", className: "dt-left" },
    {
      data: "status",
      render: function (data) {
        let status = "";
        if (data != "published") {
          status = `<span class="badge badge-light-danger me-auto">In Active</span>`;
        } else {
          status = `<span class="badge badge-light-success me-auto">Publish</span>`;
        }

        return status;
      },
    },
    { data: "action", width: "20%" },
  ];

  gridDatatables(baseurl, column);

  var editors = {};

  $(document).on("click", "#btnProcessModal", function () {
    var url = $("#form").data("url");
    let form = document.getElementById("form");
    let formData = new FormData(form);

    var editorData = {};
    $.each(editors, function (name, editor) {
      editorData[name] = editor.getData();
    });

    // var data = {};
    // for (let [key, value] of formData.entries()) {
    //     data[key] = value;
    // }

    $.each(editorData, function (name, value) {
      formData.append(name, value);
    });

    formData.append("_token", getCookie());

    $.ajax({
      url: url,
      method: "POST",
      mimeType: "multipart/form-data",
      dataType: "JSON",
      contentType: false,
      processData: false,
      cache: false,
      async: false,
      data: formData,
      beforeSend: function () {
        disabledButton($(btnCloseModal));
      },
      success: function (response) {
        if (!response.success) {
          if (!response.validate) {
            $.each(response.messages, function (key, value) {
              addErrorValidation(key, value);
            });

            let check_image = $("#image_file").prop("files");

            if (typeof check_image != "undefined") {
              if (check_image.length === 0) {
                $(".image-validation").text("Bukti Gambar Harus Diisi");
              }
            }
          }
        } else {
          if (response.type == "insert") {
            if (typeof response.data != "undefined") {
              addDataOption(response.data);
            }
            reset_input();
            modalAutoClose(closeModal);
          }
          reloadDatatables();
        }

        enabledButton($(btnCloseModal));
        if (response.type == "update") {
          if (response.success) {
            var closeModal =
              btnCloseModal != "#btnCloseModal" ? btnCloseModal : "#modalLarge";
            modalAutoClose(closeModal);
          }
        }

        if (response.validate) {
          message(response.success, response.messages);
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        exception_handling(jqXHR);
      },
    });
  });

  $(document).on("click", "#add_blog", function () {
    buttonAction($(this), "#modalLarge");
    KTImageInput.createInstances();

    $("textarea").each(function () {
      var textarea = this;
      ClassicEditor.create(textarea, {
        toolbar: {
          items: [
            "heading",
            "bold",
            "italic",
            "link",
            "bulletedList",
            "numberedList",
            "blockQuote",
            "undo",
            "redo",
          ],
        },
      })
        .then((editor) => {
          editors[textarea.name] = editor;
        })
        .catch((error) => {
          console.error(error);
        });
    });
  });

  $(document).on("click", "#status", function () {
    if ($("#status").is(":checked")) {
      $('label[for="githubswitch"]').text("Publish");
    } else {
      $('label[for="githubswitch"]').text("Inactive");
    }
  });

  $(document).on("click", "#btnCloseModal", function () {
    $("#modalLarge").modal("hide");
  });
});
