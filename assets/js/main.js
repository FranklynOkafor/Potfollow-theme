// JS FOR HEADER
document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.querySelector(".menu-toggle");
  const menu = document.querySelector(".nav-menu");

  // Only run if both elements exist
  if (toggle && menu) {
    toggle.addEventListener("click", function () {
      menu.classList.toggle("active");
      menu.style.display = menu.classList.contains("active") ? "flex" : "none";
    });
  }
});
