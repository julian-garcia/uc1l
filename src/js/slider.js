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
