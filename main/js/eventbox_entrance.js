const cards = document.querySelectorAll(".box-container");
  cards.forEach((card, index) => {
    setTimeout(() => {
      card.style.transform = "translateY(0)";
      card.style.opacity = "1";
    }, index * 200); // Delay each card's animation
});