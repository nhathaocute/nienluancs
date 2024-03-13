$(document).ready(function () {
  function handleEventToggleClass(selector) {
    $(selector).click(function () {
      $(selector).each((_, el) => {
        $(el).removeClass("active");
      });
      $(this).addClass("active");
    });
  }

  // slide
  $(".slider-footer").flickity({
    draggable: true,
    pageDots: false,
    autoPlay: 3000,
    pauseAutoPlayOnHover: true,
    wrapAround: true,
    prevNextButtons: false,
  });

  const $carousel = $(".slider-footer").flickity();
  $(".home-btn__prev").on("click", function () {
    $carousel.flickity("previous", true);
  });

  $(".home-btn__next").on("click", function () {
    $carousel.flickity("next", true);
  });
  //
  $(".sl-bao").flickity({
    draggable: false,
    // keo chuot
    pageDots: false,
    // cham trang
    pauseAutoPlayOnHover: true,
    wrapAround: true,
    // slide vo han
    prevNextButtons: false,
  });
  const $carousel1 = $(".sl-bao").flickity();
  $(".bannha-btn__prev").on("click", function () {
    $carousel1.flickity("previous", true);
  });

  $(".bannha-btn__next").on("click", function () {
    $carousel1.flickity("next", true);
  });
  //

  //
  // Show or hide the back-to-top button based on scroll position
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $("#back-to-top").addClass("show");
    } else {
      $("#back-to-top").removeClass("show");
    }
  });

  // Scroll to the top of the page when the button is clicked
  $(".back-to-top-button").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 800);
    return false;
  });
});

// Lấy các phần tử cần sử dụng
var signupForm = document.getElementById("signup-form");
var signupBtn = document.getElementById("signup-btn");
var passwordInput = document.getElementById("password");
var confirmPasswordInput = document.getElementById("confirm-password");

// Xử lý sự kiện submit của form
signupForm.addEventListener("submit", function (event) {
  // Ngăn chặn chuyển trang mặc định
  event.preventDefault();

  // Kiểm tra mật khẩu
  if (passwordInput.value !== confirmPasswordInput.value) {
    alert("Passwords do not match. Please try again.");
    return;
  }

  // Nếu mật khẩu khớp, submit form
  signupForm.submit();
});
