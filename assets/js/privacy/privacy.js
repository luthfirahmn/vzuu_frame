var editors = {};
$(document).ready(function () {

$(document).on("click", "#save_terms", function () {
  var url = $("#form").data("url");
  let form = document.getElementById("form");
  let formData = new FormData(form);

  $.each(editors, function (name, editor) {
    editorData[name] = editor.getData();
  });

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
    success: function (response) {
      if (!response.success) {
        if (!response.validate) {
          $.each(response.messages, function (key, value) {
            addErrorValidation(key, value);
          })
        }
      } else {
        if (response.validate) {
          message(response.success, response.messages);
        }
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      exception_handling(jqXHR);
    },
  });
});

loadCkEditor(); 
});


