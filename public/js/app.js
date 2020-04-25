/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function ($) {
  "use strict"; // Preloader

  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(300).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  }); // Back to top button

  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 2500, 'easeInOutBack');
    return false;
  }); // Initiate the wowjs animation library

  new WOW().init();
  var wave1 = $('#wave1').wavify({
    height: 490,
    bones: 2,
    amplitude: 200,
    color: 'rgba(251, 227, 75, 0.3)',
    speed: .35
  });
  wave1.updateColor({
    color: 'rgba(251, 216, 0, 0.5)',
    timing: 8
  });
  var wave2 = $('#wave2').wavify({
    height: 540,
    bones: 5,
    amplitude: 120,
    color: 'rgba(251, 227, 75, 0.4)',
    speed: .25
  });
  wave2.updateColor({
    color: 'rgba(253, 231, 109, 0.7)',
    timing: 8
  });
  var wave3 = $('#wave3').wavify({
    height: 580,
    bones: 3,
    amplitude: 70,
    color: 'rgba(253, 231, 109, 1)',
    speed: .25
  });
  var wave4 = $('#wave4').wavify({
    height: 740,
    bones: 2,
    amplitude: 200,
    color: 'rgba(251, 227, 75, 0.3)',
    speed: .35
  });
  wave4.updateColor({
    color: 'rgba(251, 216, 0, 0.5)',
    timing: 8
  });
  var wave5 = $('#wave5').wavify({
    height: 800,
    bones: 5,
    amplitude: 120,
    color: 'rgba(251, 227, 75, 0.4)',
    speed: .25
  });
  wave5.updateColor({
    color: 'rgba(253, 231, 109, 0.7)',
    timing: 8
  });
  var wave6 = $('#wave6').wavify({
    height: 840,
    bones: 3,
    amplitude: 70,
    color: 'rgba(253, 231, 109, 1)',
    speed: .25
  }); // COSA FACCIAMO animations

  $('#cosa-facciamo').waypoint(function () {
    var textWrapper = document.querySelector('.ml1 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    var cosa = anime.timeline({
      loop: false
    }).add({
      targets: '.ml1 .letter',
      scale: [0.3, 1],
      opacity: [0, 1],
      translateZ: 0,
      easing: "easeOutExpo",
      duration: 1200,
      delay: function delay(el, i) {
        return 70 * (i + 1);
      },
      loop: 1
    });
  }, {
    offset: '100%'
  }); // COME LAVORIAMO animation

  $('#metodo').waypoint(function () {
    var textWrapper = document.querySelector('.ml2 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    var cosa = anime.timeline({
      loop: false
    }).add({
      targets: '.ml2 .letter',
      scale: [0.3, 1],
      opacity: [0, 1],
      translateZ: 0,
      easing: "easeOutExpo",
      duration: 1400,
      delay: function delay(el, i) {
        return 100 * (i + 1);
      },
      loop: 1
    });
  }, {
    offset: '100%'
  }); //cambia icona on hover

  $('.uno').mouseover(function () {
    $('#img-uno').addClass('d-none');
    $('#img-sei').removeClass('d-none');
  }).mouseout(function () {
    $('#img-uno').removeClass('d-none');
    $('#img-sei').addClass('d-none');
  });
  $('.due').mouseover(function () {
    $('#img-due').addClass('d-none');
    $('#img-sette').removeClass('d-none');
  }).mouseout(function () {
    $('#img-due').removeClass('d-none');
    $('#img-sette').addClass('d-none');
  });
  $('.tre').mouseover(function () {
    $('#img-tre').addClass('d-none');
    $('#img-otto').removeClass('d-none');
  }).mouseout(function () {
    $('#img-tre').removeClass('d-none');
    $('#img-otto').addClass('d-none');
  });
  $('.quattro').mouseover(function () {
    $('#img-quattro').addClass('d-none');
    $('#img-nove').removeClass('d-none');
  }).mouseout(function () {
    $('#img-quattro').removeClass('d-none');
    $('#img-nove').addClass('d-none');
  });
  $('.cinque').mouseover(function () {
    $('#img-cinque').addClass('d-none');
    $('#img-dieci').removeClass('d-none');
  }).mouseout(function () {
    $('#img-cinque').removeClass('d-none');
    $('#img-dieci').addClass('d-none');
  }); //animazione empatizziamo

  TweenLite.set(stepuno, {
    x: 0,
    xPercent: -200
  });
  $('#uno').on('click', function () {
    $('#stepuno').removeClass('d-none');
    TweenMax.to(stepuno, 0.8, {
      xPercent: 7,
      ease: Power1.easeInOut
    });
  });
  $('.close-icon').on('click', function () {
    TweenMax.to(stepuno, 0.6, {
      xPercent: -120,
      ease: Power1.easeInOut
    });
    $('#stepuno').addClass('d-none');
  }); //clicca qui stop

  $('#uno').on('click', function () {
    $('#img-uno').removeClass('blob');
    $('#clicca-qui').addClass('d-none');
  }); //animazione esploriamo

  TweenLite.set(stepdue, {
    x: 0,
    xPercent: -120
  });
  $('#due').on('click', function () {
    $('#stepdue').removeClass('d-none');
    TweenMax.to(stepdue, 0.8, {
      xPercent: 7,
      ease: Power1.easeInOut
    });
  });
  $('.close-icon').on('click', function () {
    TweenMax.to(stepdue, 0.6, {
      xPercent: -120,
      ease: Power1.easeInOut
    });
    $('#stepdue').addClass('d-none');
  }); //animazione ideiamo

  TweenLite.set(steptre, {
    x: 0,
    xPercent: -120
  });
  $('#tre').on('click', function () {
    $('#steptre').removeClass('d-none');
    TweenMax.to(steptre, 0.8, {
      xPercent: 7,
      ease: Power1.easeInOut
    });
  });
  $('.close-icon').on('click', function () {
    TweenMax.to(steptre, 0.6, {
      xPercent: -120,
      ease: Power1.easeInOut
    });
    $('#steptre').addClass('d-none');
  }); //animazione testiamo

  TweenLite.set(stepquattro, {
    x: 0,
    xPercent: -120
  });
  $('#quattro').on('click', function () {
    $('#stepquattro').removeClass('d-none');
    TweenMax.to(stepquattro, 0.8, {
      xPercent: 7,
      ease: Power1.easeInOut
    });
  });
  $('.close-icon').on('click', function () {
    TweenMax.to(stepquattro, 0.6, {
      xPercent: -120,
      ease: Power1.easeInOut
    });
    $('#stepquattro').addClass('d-none');
  }); //animazione sviluppiamo

  TweenLite.set(stepcinque, {
    x: 0,
    xPercent: -120
  });
  $('#cinque').on('click', function () {
    $('#stepcinque').removeClass('d-none');
    TweenMax.to(stepcinque, 0.8, {
      xPercent: 7,
      ease: Power1.easeInOut
    });
  });
  $('.close-icon').on('click', function () {
    TweenMax.to(stepcinque, 0.6, {
      xPercent: -120,
      ease: Power1.easeInOut
    });
    $('#stepcinque').addClass('d-none');
  }); //footer

  $('#footer').hover(function () {
    $('#social-bar').addClass('remove-bar');
  });
  $('#footer').mouseover(function () {
    $('#social-bar').addClass('remove-bar');
  }).mouseout(function () {
    $('#social-bar').removeClass('remove-bar');
  });
  $('.nav-link').on('click', function () {
    $('#navbarSupportedContent').toggle();
  });
  $('.navbar-toggler').on('click', function () {
    $('#navbarSupportedContent').toggle();
  });
  $('.close').on('click', function () {
    $('#navbarSupportedContent').toggle();
  });
})(jQuery);

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/donato/Desktop/Prelibato/Laraprelibato/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /Users/donato/Desktop/Prelibato/Laraprelibato/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });