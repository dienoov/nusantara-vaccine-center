/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/website.js ***!
  \*********************************/
var nav = document.querySelector("nav");

var transNav = function transNav() {
  var logo = nav.querySelector("img");
  var links = nav.querySelectorAll(".nav-link");
  var hamburger = nav.querySelector(".hamburger");

  if (window.scrollY > 300) {
    nav.classList.add("bg-light", "shadow-md");
    logo.src = "/svg/logo-black.svg";
    links.forEach(function (link) {
      return link.style.color = "var(--nvc-black)";
    });
    hamburger.classList.add("black");
  } else {
    nav.classList.remove("bg-light", "shadow-md");
    logo.src = "/svg/logo-white.svg";
    links.forEach(function (link) {
      return link.style.color = "var(--nvc-white)";
    });
    hamburger.classList.remove("black");
  }
};

document.addEventListener("scroll", transNav);
var navbarToggler = document.querySelector(".navbar-toggler");
var navbarNav = document.querySelector(".navbar-nav");
navbarToggler.addEventListener("click", function () {
  navbarNav.classList.toggle("toggled");
  navbarToggler.classList.toggle("toggled");
});
var slider = document.getElementById("slider");
var slides = document.querySelectorAll(".slide");
var activeSlide = 0;
var indicatorContainer = document.createElement("ol");
indicatorContainer.classList.add("indicator");
slider.appendChild(indicatorContainer);
slides.forEach(function () {
  return indicatorContainer.appendChild(document.createElement("li"));
});
var indicators = indicatorContainer.querySelectorAll("li");
indicators.forEach(function (indicator, i) {
  indicator.addEventListener("click", function () {
    showSlide(i);
  });
});

var showSlide = function showSlide() {
  var i = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;
  slides.forEach(function (slide) {
    return slide.classList.remove("active");
  });
  indicators.forEach(function (slide) {
    return slide.classList.remove("active");
  });
  i = i < slides.length ? i : 0;
  slides[i].classList.add("active");
  indicators[i].classList.add("active");
  activeSlide = i;
};

var autoSlide = function autoSlide() {
  var interval = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 5000;
  setInterval(function () {
    showSlide(++activeSlide);
  }, interval);
};

showSlide();
autoSlide();
var vaccine = document.getElementById("vaccine");
var getYourVaccine = document.getElementById("get-your-vaccine");
vaccine.addEventListener("mouseenter", function () {
  getYourVaccine.innerText = "Click Here";
});
vaccine.addEventListener("mouseleave", function () {
  getYourVaccine.innerText = "Get Your Vaccine";
});
var sidebar = document.getElementById("sidebar");
var btnSidebar = document.querySelector(".btn-sidebar");
var sidebarBackdrop = document.querySelector(".sidebar-backdrop");
sidebarBackdrop.style.display = "none";
btnSidebar.addEventListener("click", function () {
  sidebar.classList.add("active");
  sidebarBackdrop.style.display = "block";
});
sidebarBackdrop.addEventListener("click", function () {
  sidebar.classList.remove("active");
  sidebarBackdrop.style.display = "none";
});
var modalToggles = document.querySelectorAll("[data-toggle=modal]");
modalToggles.forEach(function (toggle) {
  toggle.addEventListener("click", function (ev) {
    ev.preventDefault();
    var target = ev.target.dataset.target;
    var modal = document.querySelector(target);
    var display = modal.style.display;
    modal.style.display = display === "block" ? "none" : "block";
  });
});
var modalDismisses = document.querySelectorAll("[data-dismiss=modal]");
modalDismisses.forEach(function (dismiss) {
  dismiss.addEventListener("click", function (ev) {
    ev.preventDefault();
    var modal = ev.target.parentElement.parentElement.parentElement;
    modal.style.display = "none";
  });
});
/******/ })()
;