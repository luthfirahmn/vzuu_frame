$(document).ready(function() {
  var baseurl = base_url() + "administrator/menu_frontend/show";
  var column = [
    { data: "id" },
    { data: "name_ind" },
    { data: "name_eng" },
    { data: "action", width: "17%" },
  ];

  gridDatatables(baseurl, column);


  // $(document).on("click", "#buttonDeleted", function () {
  //   $(this).parent().parent().remove();
  // });

  // modalClose();
  // process();
});
