
document.addEventListener("DOMContentLoaded", () => {
    const contents = document.querySelector(".box-list");
    const boxes = document.querySelectorAll(".box-container");
    let index = 0;

    function slide(direction) {
      const boxWidth = boxes[0].offsetWidth + 20; // Box width + gap
      const visibleBoxes = Math.floor(contents.parentElement.offsetWidth / boxWidth);
      const maxIndex = boxes.length - visibleBoxes;

      index += direction;
      if (index < 0) index = 0;
      if (index > maxIndex) index = maxIndex;

      contents.style.transform = `translateX(${-index * boxWidth}px)`;
    }

    document.querySelector(".prev").addEventListener("click", () => slide(-1));
    document.querySelector(".next").addEventListener("click", () => slide(1));
});
