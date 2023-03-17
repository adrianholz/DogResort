// Get the menu toggle button
const menuToggle = document.querySelector(".menu-toggle");
const offCanvas = document.querySelector(".off-canvas");
const overlay = document.querySelector(".overlay");

menuToggle.addEventListener("click", () => {
  offCanvas.classList.toggle("show");
  overlay.classList.toggle("show");
});

overlay.addEventListener("click", () => {
  offCanvas.classList.toggle("show");
  overlay.classList.toggle("show");
});

const menuClickable = document.querySelectorAll(".menu-clickable");
const menuShowable = document.querySelectorAll(".menu-showable");

menuClickable.forEach((item, index) => {
  item.addEventListener("click", () => {
    menuShowable[index].classList.toggle("show");
    item.classList.toggle("active");
  });
});

const faqButtons = document.querySelectorAll(".faq button");
const faqDescriptions = document.querySelectorAll("dd");

faqButtons.forEach((item, index) => {
  item.addEventListener("click", () => {
    faqDescriptions[index].classList.toggle("active");
    item.classList.toggle("active");
  });
});
