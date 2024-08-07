const anchorLink = window.location.hash;

document.addEventListener("DOMContentLoaded", function () {
  const firstLink = document.querySelector('.sidebar a[href="#first"]');
  const addressLink = document.querySelector('.sidebar a[href="#alamat"]');
  const orderLink = document.querySelector('.sidebar a[href="#pesanan-saya"]');
  const confirm = document.querySelector('.sidebar a[href="#konfirmasi"]');
  const viewButtons = document.querySelectorAll(".lihat-pesanan");

  if (anchorLink != "#konfirmasi") {
    document.getElementById("alamat").style.display = "none";
    document.getElementById("simpan").style.display = "block";
    document.getElementById("batal").style.display = "block";
  }

  function removeActiveClass() {
    document.querySelectorAll(".sidebar a, .lihat-pesanan").forEach((el) => {
      el.classList.remove("active");
    });
  }

  function hideAllSections() {
    const sections = [
      "orderDetails",
      "orderList",
      "firstForms",
      "addressForm",
      "konfirmasiPesanan",
      "konfirmasi-bayar",
      "alamat",
      "simpan",
      "batal",
    ];
    sections.forEach((section) => {
      document.getElementById(section).style.display = "none";
    });
  }

  viewButtons.forEach(function (button) {
    button.addEventListener("click", function (e) {
      e.preventDefault();
      hideAllSections();
      document.getElementById("orderDetails").style.display = "block";
      removeActiveClass();
    });
  });

  if (firstLink) {
    firstLink.addEventListener("click", function (event) {
      event.preventDefault();
      hideAllSections();
      document.getElementById("firstForms").style.display = "block";
      document.getElementById("simpan").style.display = "block";
      document.getElementById("batal").style.display = "block";
      removeActiveClass();
      firstLink.classList.add("active");
    });
  }

  if (addressLink) {
    addressLink.addEventListener("click", function (event) {
      event.preventDefault();
      hideAllSections();
      document.getElementById("addressForm").style.display = "block";
      document.getElementById("alamat").style.display = "block";
      document.getElementById("batal").style.display = "block";
      removeActiveClass();
      addressLink.classList.add("active");
    });
  }

  if (orderLink) {
    orderLink.addEventListener("click", function (event) {
      event.preventDefault();
      hideAllSections();
      document.getElementById("orderList").style.display = "block";
      removeActiveClass();
      orderLink.classList.add("active");
    });
  }

  if (confirm) {
    confirm.addEventListener("click", function (event) {
      event.preventDefault();
      hideAllSections();
      document.getElementById("konfirmasiPesanan").style.display = "block";
      document.getElementById("konfirmasi-bayar").style.display = "block";
      removeActiveClass();
      confirm.classList.add("active");
    });
  }

  // Check if the anchor link matches the expected value
  if (anchorLink === "#konfirmasi") {
    // Load the form
    document.getElementById("konfirmasiPesanan").style.display = "block";
    document.getElementById("firstForms").style.display = "none";
    document.getElementById("orderList").style.display = "none";
    document.getElementById("addressForm").style.display = "none";
    document.getElementById("orderDetails").style.display = "none";
    document.getElementById("simpan").style.display = "none";
    document.getElementById("batal").style.display = "none";
    document.getElementById("alamat").style.display = "none";
    document.getElementById("konfirmasi-bayar").style.display = "block";

    // Set the active class on the corresponding link
    const confirmLink = document.querySelector(
      'a.text-demibold[href="#konfirmasi"]'
    );
    if (confirmLink) {
      confirmLink.classList.add("active");
    } // Add active class to the parent element (li)
  } else if (anchorLink === "#pesanan-saya") {
    if (orderLink) {
      hideAllSections();
      document.getElementById("orderList").style.display = "block";
      removeActiveClass();
      orderLink.classList.add("active");
    }
  }
});

function hideOrderDetails() {
  document.getElementById("orderDetails").style.display = "none";
  document.getElementById("orderList").style.display = "block";
}

$(".toggle-password").each(function () {
  var toggleImage = $(this).find("img");
  var passwordInput = $(this).prev("input");

  if (toggleImage.attr("src").indexOf("eye1.png") !== -1) {
    passwordInput.attr("type", "password");
  } else {
    passwordInput.attr("type", "text");
  }
});

$(".toggle-password").on("click", function () {
  var passwordInput = $(this).prev("input");
  var toggleImage = $(this).find("img");

  if (passwordInput.attr("type") === "text") {
    passwordInput.attr("type", "password");
    toggleImage.attr("src", `${getBaseUrl()}assets/frontend/img/eye1.png`);
  } else {
    passwordInput.attr("type", "text");
    toggleImage.attr("src", `${getBaseUrl()}assets/frontend/img/eye2.png`);
  }
});

$(document).on("click", "#simpan", function (e) {
  e.preventDefault();
  var btn = $("#simpan");
  var textButton = btn.text();
  var url = base_url() + "dashboard/update_information";
  var msgAlert = $("#alert-messages");

  var data = $("#informasi_pribadi").serializeArray();

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
      } else {
        // window.location.href = base_url() + "dashboard";
        Swal.fire({
          title: "Success",
          icon: "success",
          text: "Data Kamu Berhasil Disimpan!!",
          customClass: {
            popup: "my-swal-popup",
          },
        });
        loadingButtonOff(btn, textButton);
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {},
  });
});

$(document).on("click", "#logout", function (e) {
  e.preventDefault();
  Swal.fire({
    title: "Are you sure?",
    text: "Logout",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes",
    customClass: {
      popup: "my-swal-popup",
    },
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = base_url() + "logout";
    }
  });
});
