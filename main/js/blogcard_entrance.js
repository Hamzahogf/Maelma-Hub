const cards = document.querySelectorAll(".card");
cards.forEach((card, index) => {
  setTimeout(() => {
    card.style.transform = "translateX(0)";
    card.style.opacity = "1";
  }, index * 200); // Delay each card's animation
});