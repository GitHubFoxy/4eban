document.addEventListener("DOMContentLoaded", () => {
  //Получаем список элементов родителя
  buttons = document.querySelector("button");
  //в 1 параметре - событие (щелчок по кнопке)
  //во 2 - анонимная функция с контекстом вызвавшим событие
  buttons.addEventListener("click", function (e) {
    //метод, предотвращающий реакцию по умолчанию
    e.preventDefault();
    //Значение из поля e-mail
    var email = document.getElementById("contact-email").value;
    //Объект поля e-mail
    var emailid = document.getElementById("contact-email");
    //Если символ @ не найден в строке получаем -1
    if (email.indexOf("@") == -1) {
      //Добавляем подкласс об ошибке!
      emailid.classList.add("is-invalid");
      //Удаляем подкласс валидности!
      emailid.classList.remove("is-valid");
    } else {
      //Удаляем подкласс об ошибке!
      emailid.classList.remove("is-invalid");
      //Добавляем класс валидности
      emailid.classList.add("is-valid");
    }
    const fullNameInput = document.querySelector("#fullName");
    const textArea = document.querySelector("#textArea");
    console.log(fullNameInput.value.length);
    if (fullNameInput.value.length < 4) {
      //Добавляем подкласс об ошибке!
      fullNameInput.classList.add("is-invalid");
      //Удаляем подкласс валидности!
      fullNameInput.classList.remove("is-valid");
    } else {
      //Удаляем подкласс об ошибке!
      fullNameInput.classList.remove("is-invalid");
      //Добавляем класс валидности
      fullNameInput.classList.add("is-valid");
    }
    if (textArea.value.length == 0) {
      //Добавляем подкласс об ошибке!
      textArea.classList.add("is-invalid");
      //Удаляем подкласс валидности!
      textArea.classList.remove("is-valid");
    } else {
      //Удаляем подкласс об ошибке!
      textArea.classList.remove("is-invalid");
      //Добавляем класс валидности
      textArea.classList.add("is-valid");
    }
  });
});
