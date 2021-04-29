require('./bootstrap');

import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import App from "./components/App";
import Home from "./components/Home";

const router = new VueRouter({
    mode: "history",
    routes: [{
        path: "/",
        component: Home,
    }],
});

new Vue(Vue.util.extend(App, {router})).$mount("#app");

const navbarToggler = document.querySelector(".navbar-toggler");
const navbarNav = document.querySelector(".navbar-nav");

navbarToggler.addEventListener("click", () => {
    navbarNav.classList.toggle("toggled");
    navbarToggler.classList.toggle("toggled");
});

const slider = document.getElementById("slider");
const slides = document.querySelectorAll(".slide");
let activeSlide = 0;

const indicatorContainer = document.createElement("ol");
indicatorContainer.classList.add("indicator");
slider.appendChild(indicatorContainer);
slides.forEach(() => indicatorContainer.appendChild(document.createElement("li")));

const indicators = indicatorContainer.querySelectorAll("li");
indicators.forEach((indicator, i) => {
    indicator.addEventListener("click", () => {
        showSlide(i);
    });
});

const showSlide = (i = 0) => {
    slides.forEach((slide) => slide.classList.remove("active"));
    indicators.forEach((slide) => slide.classList.remove("active"));
    i = i < slides.length ? i : 0;
    slides[i].classList.add("active");
    indicators[i].classList.add("active");
    activeSlide = i;
};

const autoSlide = (interval = 5000) => {
    setInterval(() => {
        showSlide(++activeSlide);
    }, interval);
};

showSlide();
autoSlide();

const vaccine = document.getElementById("vaccine");
const getYourVaccine = document.getElementById("get-your-vaccine");
vaccine.addEventListener("mouseenter", () => {
    getYourVaccine.innerText = "Click Here";
});
vaccine.addEventListener("mouseleave", () => {
    getYourVaccine.innerText = "Get Your Vaccine";
});

const sidebar = document.getElementById("sidebar");
const btnSidebar = document.querySelector(".btn-sidebar");
const sidebarBackdrop = document.querySelector(".sidebar-backdrop");
sidebarBackdrop.style.display = "none";
btnSidebar.addEventListener("click", () => {
    sidebar.classList.add("active");
    sidebarBackdrop.style.display = "block";
});
sidebarBackdrop.addEventListener("click", () => {
    sidebar.classList.remove("active");
    sidebarBackdrop.style.display = "none";
});

const modalToggles = document.querySelectorAll("[data-toggle=modal]");
modalToggles.forEach((toggle) => {
    toggle.addEventListener("click", (ev) => {
        ev.preventDefault();

        const target = ev.target.dataset.target;
        const modal = document.querySelector(target);

        const display = modal.style.display;
        modal.style.display = display === "block" ? "none" : "block";
    });
});

const modalDismisses = document.querySelectorAll("[data-dismiss=modal]");
modalDismisses.forEach((dismiss) => {
    dismiss.addEventListener("click", (ev) => {
        ev.preventDefault();

        const modal = ev.target.parentElement.parentElement.parentElement;

        modal.style.display = "none";
    });
});
