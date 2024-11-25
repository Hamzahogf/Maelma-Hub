const navbarLinks = document.querySelector(".navbar-links");
const loginNav = document.querySelector(".navbar-login");
const nav = document.querySelector("nav");

function toggleMenu() {
  const links = document.querySelector(".navbar-links");
  const loginButton = document.querySelector(".navbar-login");
  links.classList.toggle("show");
  //loginButton.classList.toggle("show");
}

window.addEventListener("scroll", function() {
  const header = document.querySelector(".navbar");
  if (window.scrollY > 50) {  // Change 50 to the amount of scroll you prefer
      header.style.backgroundColor = "#ffffffee"; // Set to white on scroll
  } else {
      header.style.backgroundColor = "#f4f5f9"; // Reset to grey when at the top
  }
});

