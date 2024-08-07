$(document).ready(function () {
  var baseurl = base_url() + "admins/spp/show";
  var column = [
    { data: "id" },
    { data: "DESCRIPTION" },
    { data: "CATEGORY" },
    {
      data: "VALUE",
      render: function (data) {
        return format_number_to_idr(data);
      },
    },
    {
      data: "STATUS",
      render: function (data) {
        if (data === "active") {
          return '<div class="badge badge-light-success">' + data + "</div>";
        } else {
          return '<div class="badge badge-light-danger">' + data + "</div>";
        }
      },
    },
    {
      data: "CREATED_DATE",
      render: function (data) {
        return formatDateIndonesia(data);
      },
    },
    { data: "action", width: "17%" },
  ];

  ajax_crud_table(baseurl, column);

  sweetAlertConfirm();
  libraryInput();

  $(document).on("click", "#buttonDeleted", function () {
    $(this).parent().parent().remove();
  });

  $(document).on("click", "#btnAdd", function () {
    buttonAction($(this));
  });

  modalClose();
  process();
});
