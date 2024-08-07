$(document).ready(function () {
  $(".carousel-inner .nav-link").on("click", function () {
    $(".carousel-inner .nav-link").removeClass("active");

    $(this).addClass("active");
  });
});
