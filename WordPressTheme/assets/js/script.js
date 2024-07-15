"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  /* ハンバーガーメニュー */
  $("#js-hamburger").click(function () {
    $("body").toggleClass("is-open");
    if ($(this).attr("aria-expanded") == "false") {
      $(this).attr("aria-expanded", "true");
      $("#js-sp-nav").attr("aria-hidden", "false");
    } else {
      $(this).attr("aria-expanded", "false");
      $("#js-sp-nav").attr("aria-hidden", "true");
    }
  });

  // ハンバーガーメニューアンカーリンク
  $(".js-sp-nav-item a").click(function () {
    $("body").removeClass("is-open");
    $("#js-hamburger").attr("aria-expanded", "false");
    $("#js-sp-nav").attr("aria-hidden", "true");
  });

  // ボタンの表示設定
  var topBtn = $(".js-pagetop");
  topBtn.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });

  // mv swiper
  var swiper1 = new Swiper(".p-mv-swiper", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 15,
    speed: 1000,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

  // staff swiper
  var swiper2 = new Swiper(".p-staff-swiper", {
    loop: true,
    slidesPerView: 1.8,
    speed: 6000,
    allowTouchMove: true,
    spaceBetween: 10,
    autoplay: {
      delay: 0
    },
    breakpoints: {
      768: {
        slidesPerView: 4,
        spaceBetween: 20
      }
    }
  });

  // コンタクトフォーム、selectボックス プレースホルダーの色
  $(function () {
    $('.p-form__select').on('change', function () {
      if ($(this).val() == "") {
        $(this).addClass('placeholder').css('color', '#999');
      } else {
        $(this).removeClass('placeholder').css('color', '#393939');
      }
    });
  });

  // コンタクトフォーム、日付ボックス プレースホルダーの色
  $(function () {
    $('input[type="date"].p-form__text').on('input', function () {
      if ($(this).val() == "") {
        $(this).addClass('placeholder').css('color', '#999');
      } else {
        $(this).removeClass('placeholder').css('color', '#393939');
      }
    });
    $('input[type="date"].p-form__text').each(function () {
      if ($(this).val() == "") {
        $(this).addClass('placeholder').css('color', '#999');
      }
    });
  });
});