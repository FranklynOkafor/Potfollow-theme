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



// skills sectio 
document.addEventListener("DOMContentLoaded", () => {
  const bars = document.querySelectorAll(".skill-fill");

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const level = entry.target.dataset.level;
        entry.target.style.width = level + "%";
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.4 });

  bars.forEach(bar => observer.observe(bar));
});
