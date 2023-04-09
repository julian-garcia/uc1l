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
