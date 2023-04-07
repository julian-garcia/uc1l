import Swiper, { Navigation, Pagination, Autoplay } from "swiper";

var swiper = new Swiper(".swiper", {
  modules: [Navigation, Pagination, Autoplay],
  loop: true,
  spaceBetween: 5,
  speed: 1200,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay: {
    delay: 12000,
    disableOnInteraction: false,
  },
});

const mobileMenu = document.getElementById("mobileMenu");
const mobileMenuClosed = document.getElementById("mobileMenuClosed");
const mobileMenuOpen = document.getElementById("mobileMenuOpen");

document.getElementById("mobileMenuToggle").addEventListener("click", () => {
  mobileMenu.classList.toggle("hidden");
  mobileMenuClosed.classList.toggle("hidden");
  mobileMenuOpen.classList.toggle("hidden");
});

window.addEventListener("resize", () => {
  mobileMenu.classList.add("hidden");
  mobileMenuClosed.classList.remove("hidden");
  mobileMenuOpen.classList.add("hidden");
});
