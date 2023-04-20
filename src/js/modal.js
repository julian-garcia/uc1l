const popupButtons = document.querySelectorAll(".popup");

if (popupButtons) {
  popupButtons.forEach((button) => {
    const shareUrl = button.getAttribute("data-share");
    const modal = document.querySelector(
      `.modal#${button.getAttribute("data-popup-id")}`
    );
    modal.querySelectorAll(".link").forEach((link) => {
      link.setAttribute("href", link.getAttribute("href") + shareUrl);
    });
    button.addEventListener("click", () => {
      modal.classList.add("show");
    });
    modal.addEventListener("click", () => {
      modal.classList.remove("show");
    });
  });
}
