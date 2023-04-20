const popupButtons = document.querySelectorAll(".popup");

if (popupButtons) {
  popupButtons.forEach((button) => {
    const shareUrl = button.getAttribute("data-share");
    const modal = document.querySelector(
      `.modal#${button.getAttribute("data-popup-id")}`
    );
    button.addEventListener("click", () => {
      modal.querySelectorAll(".link").forEach((link) => {
        link.setAttribute(
          "href",
          link.getAttribute("href").replaceAll(shareUrl, "")
        );
        link.setAttribute("href", link.getAttribute("href") + shareUrl);
      });
      modal.classList.add("show");
    });
    modal.addEventListener("click", () => {
      modal.classList.remove("show");
      modal.querySelectorAll(".link").forEach((link) => {
        link.setAttribute(
          "href",
          link.getAttribute("href").replaceAll(shareUrl, "")
        );
      });
    });
  });
}
