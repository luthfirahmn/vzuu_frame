function base_url() {
  var pathparts = window.location.pathname.split("/");
  if (
    location.host == "localhost:8090" ||
    location.host == "localhost" ||
    location.host == "172.17.1.25"
  ) {
    var folder = pathparts[2].trim("/");
    if (folder == "admins") {
      return (
        window.location.origin +
        "/" +
        pathparts[1].trim("/") +
        "/" +
        pathparts[2].trim("/") +
        "/"
      );
    }
    return window.location.origin + "/" + pathparts[1].trim("/") + "/";
  } else {
    return window.location.origin + "/" + pathparts[1].trim("/") + "/";
  }
}

var lang = localStorage.getItem('language');

// $(document).on("click", ".dropdown-item", function () {
//   const lang = $(this).data('lang');
//   localStorage.setItem('language', lang);
//   updateLanguage(lang);
//   changePage(lang,'terms');
//   changePage(lang,'privacy');
//   loadMenu(lang);
// });

// function updateLanguage(lang) {
//   $('#languageDropdown img').attr('src', `${getBaseUrl()}assets/frontend/img/${lang === 'ID' ? 'ind' : 'eng'}.png`);
//   $('#languageDropdown img').attr('alt', lang);
//   $('.dropdown-item').removeClass('active');
//   $(`.dropdown-item[data-lang="${lang}"]`).addClass('active');
// }

$(document).ready(function () {
  // setActiveNavLink();
  
  function updateButton(language) {
    var selectedItem = $('.lang-item[data-lang="' + language + '"]');
    if (selectedItem.length) {
        var newImageSrc = selectedItem.find('img').attr('src');
        var newAltText = selectedItem.find('img').attr('alt');

        $('#languageDropdown')
            .find('img')
            .attr('src', newImageSrc)
            .attr('alt', newAltText);
    }
  }

  var activeLanguage = localStorage.getItem('language');
  console.log(activeLanguage);
  
  if (activeLanguage) {
      $('.lang-item').removeClass('active');
      $('.lang-item[data-lang="' + activeLanguage + '"]').addClass('active');
      updateButton(activeLanguage);
  }

  $(document).on("click", ".dropdown-item", function (event) {
      event.preventDefault();

      var selectedLanguage = $(this).data('lang');
      localStorage.setItem('language', selectedLanguage);

      $('.lang-item').removeClass('active');

      $(this).addClass('active');

      updateButton(selectedLanguage);
  });

  var currentUrl = window.location.href;
  const clinicPage = ["clinic", "faq", "perawatan", "perawatan/detail"];
  const beautyPage = ["product", "login", "signup", "dashboard"];

  // Handle click events
  // $('.nav-link').on('click', function(e) {
  //     e.preventDefault();
      
  //     // Remove active class from all links
  //     $('.nav-link').removeClass('active');
      
  //     // Add active class to clicked link
  //     $(this).addClass('active');
      
  //     // If you want to actually navigate to the page:
  //     // window.location.href = $(this).attr('href');
      
  //     // Alternatively, update the URL without page reload and set active link:
  //     // history.pushState(null, '', $(this).attr('href'));
  //     // setActiveNavLink();
  // });

  // $('.nav-link').on('click', function(e) {
  //   e.preventDefault();
  //   $('.nav-link').removeClass('active');
  //   $(this).addClass('active');
  // });

  const getLang = localStorage.getItem('language');

  if (getLang) {
    changePage(getLang,'terms');
    changePage(getLang,'privacy');
  }

  if (beautyPage.some((pattern) => currentUrl.includes(pattern))) {
    $(".navbar-list").html(
      `
      <a class="navbar-brand" href="#">
        <img src="${getBaseUrl()}assets/frontend/img/logo-beauty.png" alt="Vzuu Clinic Logo" class="img-fluid" style="max-width: 150px;">
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="${base_url()}home">Tentang Vzuu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="${base_url()}clinic">Vzuu Clinic</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="${base_url()}product">Vzuu Beauty</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="${base_url()}blog">Blog</a>
          </li>
        </ul>
      </div>
      <div class="d-flex align-items-center ms-3">
        <a href="javascript:void(0)" class="me-3" onClick="toggleSearch()">
          <img src="${getBaseUrl()}assets/frontend/img/search.svg" alt="Search" style="width: 20px; height: 20px;">
        </a>
        <a href="${base_url()}login" class="me-3">
          <img src="${getBaseUrl()}assets/frontend/img/profile-circle.svg" alt="Search" style="width: 20px; height: 20px;">
        </a>
        <a href="javascript:void(0)" class="me-3 position-relative" id="cart-link">
          <img src="${getBaseUrl()}assets/frontend/img/bag-2.svg" id="cart-nav" alt="Search" style="width: 20px; height: 20px;" onclick="openCart()">
          <span id="cart-badge" class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="font-size: 10px;">0</span>
        </a>
        ` +
        loadFlag() +
        `
      </div>
      <div id="searchBox" class="search-box d-flex">
      <div class="search-container">
        <i class=" search-icon"></i>
        <input type="text" placeholder="Search..." id="searchInput">
        <a href="javascript:void(0)" class="search-submit"><i class="fa fa-arrow-right"></i></a>

      </div>
      <a href="javascript:void(0)" class="search-close" onclick="toggleSearch()"><i class="fa fa-times"></i></a>
    </div>
  `
    );
  } else if (clinicPage.some((pattern) => currentUrl.includes(pattern))) {
    $(".navbar-list").html(
      `<a class="navbar-brand" href="#">
        <img src="${getBaseUrl()}assets/frontend/img/logo-klinik.png" alt="Vzuu Clinic Logo" class="img-fluid" style="max-width: 150px;">
      </a>
      <!-- Navbar Menu -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="${base_url()}home">Tentang Vzuu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="${base_url()}clinic">Tentang Vzuu Clinic</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="${base_url()}perawatan">Perawatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="${base_url()}faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="${base_url()}product">Vzuu Beauty</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="${base_url()}blog">Blog</a>
          </li>
        </ul>
      </div>
      <div class="d-flex align-items-center">
      ` +
        loadFlag() +
        `
      </div>`
    );
  } else {
    loadMenu(getLang);
  }

  $(".datepicker input")
    .datepicker({
      clearBtn: true,
      format: "dd/mm/yyyy",
      autoclose: true,
      todayHighlight: true,
    })
    .on("click", function (e) {
      e.stopPropagation();
      $(this).datepicker("show");
    });
});

function setActiveNavLink() {
  var currentPath = window.location.pathname;
  var lastPart = currentPath.split("/").pop();

  // Remove leading slash and file extension for comparison
  lastPart = lastPart.replace(/^\//, "").replace(/\.[^/.]+$/, "");

  $(".nav-link").each(function () {
    // Get the href of the link
    var linkHref = $(this).attr("href");

    // Extract the last part of the href
    var linkLastPart = linkHref.split("/").pop();

    // Remove file extension from linkLastPart for comparison
    linkLastPart = linkLastPart.replace(/\.[^/.]+$/, "");

    // Check if linkLastPart matches lastPart
    if (linkLastPart === lastPart) {
      // Add 'active' class to the link
      $(this).addClass("active");
    } else {
      // Remove 'active' class from the link
      $(this).removeClass("active");
    }
  });
}

window.addEventListener("scroll", function () {
  var navbar = document.querySelector("nav.navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("bg-white-nav");
  } else {
    navbar.classList.remove("bg-white-nav");
  }
});

jQuery(function ($) {
  var doAnimations = function () {
    var offset = $(window).scrollTop() + $(window).height(),
      $animatables = $(".animatable");

    if ($animatables.length == 0) {
      $(window).off("scroll", doAnimations);
    }

    $animatables.each(function (i) {
      var $animatable = $(this);
      if ($animatable.offset().top + $animatable.height() - 300 < offset) {
        $animatable.removeClass("animatable").addClass("animated");
      }
    });
  };

  $(window).on("scroll", doAnimations);
  $(window).trigger("scroll");
});

function searchModal() {
  var modals = new bootstrap.Modal($("#searchModal"));
  modals.show();
}

function toggleSearch() {
  var searchBox = document.getElementById("searchBox");
  if (searchBox.classList.contains("active")) {
    searchBox.classList.remove("active");
    $("#main-section").css("display", "block");
    $("#search-result").html("");
  } else {
    searchBox.classList.add("active");
  }
}

function getBaseUrl() {
  var pathArray = window.location.pathname.split("/");
  var baseURL =
    window.location.protocol +
    "//" +
    window.location.host +
    "/" +
    pathArray[1] +
    "/";
  return baseURL;
}

function setCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function getCookie() {
  return setCookie("csrf_cookie_name");
}

function loadingButton(selector) {
  disabledButton(selector);
  selector.html(
    '<span class="indicator-label">Please wait...<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>'
  );
}

function disabledButton(selector) {
  selector.prop("disabled", true);
}

function loadingButtonOff(selector, text) {
  enabledButton(selector);
  selector.html('<span class="indicator-label">' + text + "</span>");
}

function enabledButton(selector) {
  selector.prop("disabled", false);
}

$(document).on("keyup", ":input", function () {
  $(this).removeClass("fv-plugins-bootstrap5-row-invalid");
  $(this).next(".invalid-feedback").remove();
  $(this).removeClass("is-invalid");
});

function generateSalt(length) {
  const characters =
    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  let salt = "";
  for (let i = 0; i < length; i++) {
    salt += characters.charAt(Math.floor(Math.random() * characters.length));
  }
  return salt;
}

function encrypt(password) {
  const salt = generateSalt(8);
  const saltedPassword = password + salt;
  const base64Password = btoa(saltedPassword);

  const reversedBase64Password = base64Password.split("").reverse().join("");

  const encryptedPassword = salt + reversedBase64Password;
  return encryptedPassword;
}

function changePage(lang,page) {

  if (page === 'terms') {
    var thisUrl = base_url() + "/terms_condition/show";
  }else{
    var thisUrl = base_url() + "/privacy/show";
  }

  $.ajax({
    type: 'POST',
    url: thisUrl,
    dataType: 'JSON',
    data: {
      _token: getCookie(),
      language: lang
    },
    success: function(data) {
      const title = lang === 'ID' ? data.title_ind : data.title_eng;
      const subtitle = lang === 'ID' ? data.subtitle_ind : data.subtitle_eng;
      const content = lang === 'ID' ? data.desc_ind : data.desc_eng;

      if (page === 'terms') {
        $('.title_terms').html(title);
        $('.subtitle_terms').html(subtitle);
        $('#content_terms').html(content);
      }else{
        $('.title_privacy').html(title);
        $('.subtitle_privacy').html(subtitle);
        $('#content_privacy').html(content);
      }
    },
    error: function(xhr, status, error) {
      console.log('Request failed');
    }
  });
}

function loadMenu(lang) {
  let menuHtml = '';
  $.ajax({
    type: 'POST',
    url: base_url() + "home/show",
    dataType: 'JSON',
    data: {
      _token: getCookie()
    },
    success: function(data) {
      const dataMenu = data;

      menuHtml = `<div class="d-flex justify-content-center flex-grow-1" style="margin-left: 19%;">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav">`;

          for (let i = 0; i < dataMenu.length; i++) {
            if(lang === 'ID'){
              menuHtml += `
              <li class="nav-item">
                <a class="nav-link ${dataMenu[i].route === 'home'?'active':''}" href="${base_url()}${dataMenu[i].route}">${dataMenu[i].name_ind}</a>
              </li>
            `;
            }else{
              menuHtml += `
              <li class="nav-item">
                <a class="nav-link ${dataMenu[i].route === 'home'?'active':''}" href="${base_url()}${dataMenu[i].route}">${dataMenu[i].name_eng}</a>
              </li>
            `;
            }
          }
          menuHtml +=`</ul>
        </div>
      </div>`;

      $(".navbar-list").html(menuHtml + `
        <div class="d-flex align-items-center">
          `+loadFlag(lang)+`
        </div>`
      );
    },
    error: function(xhr, status, error) {
      console.log('Request failed = ',xhr);
    }
  });
}

function loadFlag(lang) {  
  const flag = `
    <div class="dropdown">
      <button class="btn btn-sm" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="true">
        <img src="${getBaseUrl()}assets/frontend/img/${lang === 'ID' ? 'ind' : 'eng'}.png" alt="${lang}" width="25" height="18">
      </button>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
        <li>
          <a class="dropdown-item ${lang === 'ID' ? 'active' : ''}" href="#" data-lang="ID">
            <img src="${getBaseUrl()}assets/frontend/img/ind.png" alt="ID" width="20" height="15">
            ID
          </a>
        </li>
        <li>
          <a class="dropdown-item ${lang === 'EN' ? 'active' : ''}" href="#" data-lang="EN">
            <img src="${getBaseUrl()}assets/frontend/img/eng.png" alt="EN" width="20" height="15">
            EN
          </a>
        </li>
      </ul>
    </div>
  `;

  return flag;
}