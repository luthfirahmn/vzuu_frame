function modalMarketplace() {
  var modals = new bootstrap.Modal($("#modalMarketplace"));
  modals.show();
}

document.addEventListener("DOMContentLoaded", function () {
  const thumbnails = Array.from(
    document.querySelectorAll(".thumbnails .col-12 img")
  );
  let currentIndex = 0;

  function updateCarouselImage(index) {
    const thumbnail = thumbnails[index];
    const activeCarouselItem = document.querySelector(
      "#productCarousel .carousel-item.active"
    );
    const carouselImage = activeCarouselItem.querySelector("img");
    carouselImage.src = thumbnail.src;
  }

  thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener("click", function () {
      currentIndex = index;
      updateCarouselImage(currentIndex);
    });
  });

  const myCarousel = document.getElementById("productCarousel");
  const carousel = new bootstrap.Carousel(myCarousel, {
    interval: false,
  });

  document
    .getElementById("nextThumbnail")
    .addEventListener("click", function () {
      currentIndex = (currentIndex + 1) % thumbnails.length;
      updateCarouselImage(currentIndex);
    });

  document
    .getElementById("prevThumbnail")
    .addEventListener("click", function () {
      currentIndex = (currentIndex - 1 + thumbnails.length) % thumbnails.length;
      updateCarouselImage(currentIndex);
    });
});

$(".input-group-capsule").on("click", ".btn-capsule", function () {
  var input = $(this).closest(".input-group-capsule").find(".input-capsule");
  var currentValue = parseInt(input.val());

  if ($(this).text() === "+") {
    input.val(currentValue + 1);
  } else if ($(this).text() === "-" && currentValue > 1) {
    input.val(currentValue - 1);
  }
});
