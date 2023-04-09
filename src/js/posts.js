const postFilterForm = document.getElementById("postFilterForm");
const filterOption = document.querySelectorAll(
  "#postFilterForm input[type='radio']"
);

if (postFilterForm) {
  filterOption.forEach((option) => {
    option.addEventListener("click", () => {
      postFilterForm.submit();
    });
  });
}
