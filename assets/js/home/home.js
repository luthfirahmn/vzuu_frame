$(document).ready(function () {
  var video = $("#backgroundVideo").get(0);
  video.autoplay = true;
  video.muted = true;
  video.controls = false;
  video.loop = true;
  video.play();

  $(".overlay-text").each(function () {
    $(this).on({
      mouseenter: function () {
        let $p = $(this).find("p");
        if (!$(this).find(".hover-span").length) {
          let $span = $("<span >", {
            html: "VZUU clinic hadir dengan kesadaran akan kebutuhan untuk memberikan perawatan estetika yang inovatif dan profesional.",
            class: "hover-span",
          });
          $span.attr("style", "padding-bottom: 10px");
          $p.after($span);

          let $prevDiv = $(this).find("div.hover-div").first();
          $prevDiv.css("padding-bottom", "20px");
        }
      },
      mouseleave: function () {
        $(this).find(".hover-span").remove();
        $(this).find("div.hover-div").css("padding-bottom", "");
      },
    });
  });
});
