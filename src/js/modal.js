const popupButtons = document.querySelectorAll(".popup");

if (popupButtons) {
  popupButtons.forEach((button) => {
    const shareUrl = button.getAttribute("data-share");
    const modal = document.querySelector(
      `.modal#${button.getAttribute("data-popup-id")}`
    );
    button.addEventListener("click", () => {
      modal.querySelectorAll(".link").forEach((link) => {
        var href = new URL(link.getAttribute("href"));
        if (href.searchParams.has("url")) {
          href.searchParams.set("url", shareUrl);
        }
        if (href.searchParams.has("u")) {
          href.searchParams.set("u", shareUrl);
        }
        if (href.searchParams.has("body")) {
          href.searchParams.set("body", shareUrl);
        }

        link.setAttribute(
          "href",
          link.getAttribute("href").replaceAll(shareUrl, "")
        );
        link.setAttribute("href", href.toString());
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
