//Слайдер на главной странице – запускаем всегда!
window.onload = function () {
<<<<<<< HEAD
    slide_left = document.getElementById("btnLeft")
    slide_right = document.getElementById("btnRight"),
    total_img = document.getElementsByClassName("index-img")
    idx = 0
    slide_left.style.display = "none"
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
=======
  //Левая кнопка
  (slide_left = document.getElementById("btnLeft")),
    //Правая кнопка
    (slide_right = document.getElementById("btnRight")),
    //Массив картинок
    (total_img = document.getElementsByClassName("index-img")),
    (idx = 0); // Индекс текущего слайда.
  //Обрабатываем событие - щелчок по правой кнопке
  slide_right.addEventListener("click", moveLeft);
  function moveLeft() {
    alert(idx);
    slide_left.style.display = "block";
    total_img[idx].style.display = "none"; // Скрываем текущий слайд
    // Увеличиваем индекс и показываем следующий слайд
    total_img[++idx].style.display = "block";
    // Убираем "правую" стрелку, если справа слайдов больше нет
    if (idx === total_img.length - 1) {
      slide_right.style.display = "none";
    }
  }
  //Аналогично, только для левой стрелки
  slide_left.addEventListener("click", moveRight);
  function moveRight() {
    alert(idx);
    slide_right.style.display = "block";
    total_img[idx].style.display = "none";
    total_img[--idx].style.display = "block";
    if (idx === 1) {
      slide_left.style.display = "none";
    }
  } //end function
}; //end OnLoad
>>>>>>> cef5ad0591ada8eae26ada88bfb9e3579ab34b61
