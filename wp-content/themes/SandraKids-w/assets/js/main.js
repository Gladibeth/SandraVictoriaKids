/* -------------------------
   -----  Import Font-----
   ------------------------- */
$(document).ready(function () {
  WebFontConfig = {
    google: {
      families: ['Poppins:400,500,600,700', 'Open+Sans:300,400,600,700']
    }
  };
  (function () {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();
});

/* -------------------------
   -- -- Menu hamburger -----
   ------------------------- */

$(".hamburger").on("click", function () {
  if (!$(this).hasClass("is-active")) {
    $(this).addClass("is-active");
    $('.main-general__sidebar').addClass('active-sidebar')
    $('.hamburger-inner').addClass('js-hamburger');
    $('.input-group').addClass('input-group-xs');



  } else {
    $(this).removeClass("is-active")
    $('.main-general__sidebar').removeClass('active-sidebar')
    $('.hamburger-inner').removeClass('js-hamburger');
    $('.input-group').removeClass('input-group-xs');
  }
});

$('.nav-link-p').click(function () {
  $('.offcanvas-collapse').removeClass('open')
})
/* -------------------------
   ----- Navbar link active  -----
   ------------------------- */
let activeOne = $('#navbarNav').find('a.nav-link.active');

$(window).on('activate.bs.scrollspy', function (e, obj) {
  activeOne = $('#navbarNav').find('a.nav-link.active');
});

$('a.nav-link').hover(function () {
  activeOne.removeClass('active')
  $(this).addClass('active')
}, function () {
  console.log('hover out')
  $(this).removeClass('active')
  activeOne.addClass('active')
})

/* -------------------------
   -- -- Search -----
   ------------------------- */

var searchWrapper = document.querySelector('.search-wrapper'),
  searchInput = document.querySelector('.search-input');

document.addEventListener('click', function (e) {
  if (~e.target.className.indexOf('search')) {
    searchWrapper.classList.add('focused');
    searchInput.focus();
  } else {
    searchWrapper.classList.remove('focused');
  }
});

/* -------------------------
   -- -- Menú fixed -----
   ------------------------- */
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >= 768)) {
    $('.navbar-fixed-js').addClass('fixed');
    $('.nav-link').addClass('fixed-color');
    $('.nav-top__header').addClass('nav-top__header--detele');
    // $("#iso").addClass('img-size').attr('src', 'assets/img/logo-white.jpg').removeClass('scroll-up');

  } else {
    $('.navbar-fixed-js').removeClass('fixed');
    $('.nav-link').removeClass('fixed-color');
    $('.nav-top__header').removeClass('nav-top__header--detele');
    // $("#iso").removeClass('img-size').attr('src', 'assets/img/logo-fvr.jpg').removeClass('scroll-up');

  }
});


$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
})