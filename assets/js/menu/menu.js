$(document).ready(function () {
  var baseurl = base_url() + "menu/show";

  var column = [
    { data: "id" },
    { data: "controller" },
    { data: "menu_name" },
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
