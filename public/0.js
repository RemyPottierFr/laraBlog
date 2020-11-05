(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./resources/js/header.js":
/*!********************************!*\
  !*** ./resources/js/header.js ***!
  \********************************/
/*! exports provided: headerToggle */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "headerToggle", function() { return headerToggle; });
function headerToggle() {
  var headerMenu = document.getElementById('header-menu');
  var headerButton = document.getElementById('header-button');
  headerButton.addEventListener('click', function () {
    headerMenu.classList.toggle('right-0');
    headerMenu.classList.toggle('-right-full');
  });
}

/***/ })

}]);