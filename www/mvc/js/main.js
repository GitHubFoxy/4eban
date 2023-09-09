//Слайдер на главной странице – запускаем всегда!
window.onload = function () {
  slide_left = document.getElementById("btnLeft");
  (slide_right = document.getElementById("btnRight")),
    (total_img = document.getElementsByClassName("index-img"));
  idx = 0;
  slide_left.style.display = "none";
  slide_right.addEventListener("click", moveLeft);
  function moveLeft() {
    slide_left.style.display = "block";
    total_img[idx].style.display = "none";
    total_img[++idx].style.display = "block";
    if (idx === total_img.length - 1) {
      slide_right.style.display = "none";
    } else {
      slide_right.style.display = "block";
    }
  }
  slide_left.addEventListener("click", moveRight);
  function moveRight() {
    slide_right.style.display = "block";
    total_img[idx].style.display = "none";
    total_img[--idx].style.display = "block";
    if (idx === 0) {
      slide_left.style.display = "none";
    } else {
      slide_left.style.display = "block";
    }
  }
};
