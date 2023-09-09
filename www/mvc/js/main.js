//Слайдер на главной странице – запускаем всегда!
window.onload = function () {
    slide_left = document.getElementById('btnLeft')
    ;(slide_right = document.getElementById('btnRight')),
        (total_img = document.getElementsByClassName('index-img'))
    idx = 0
    slide_left.style.display = 'none'
    slide_right.addEventListener('click', moveLeft)
    function moveLeft() {
        slide_left.style.display = 'block'
        total_img[idx].style.display = 'none'
        total_img[++idx].style.display = 'block'
        if (idx === total_img.length - 1) {
            slide_right.style.display = 'none'
        } else {
            slide_right.style.display = 'block'
        }
    }
    slide_left.addEventListener('click', moveRight)
    function moveRight() {
        slide_right.style.display = 'block'
        total_img[idx].style.display = 'none'
        total_img[--idx].style.display = 'block'
        if (idx === 0) {
            slide_left.style.display = 'none'
        } else {
            slide_left.style.display = 'block'
        }
    }
}
function load(session) {
    var btn = document.getElementById('btn_modal_window')
    var out = document.getElementById('btn_out')
    if (session) {
        btn.style.display = 'none'
        out.style.display = 'block'
    } else {
        btn.style.display = 'block'
        out.style.display = 'none'
    }
}
//Управление модальным окном
window.onload = function () {
    var modal = document.getElementById('my_modal')
    var btn = document.getElementById('btn_modal_window')
    var span = document.getElementById('close_modal')
    var out = document.getElementById('btn_out')
    modal.style.display = 'none'
    out.onclick = function () {
        btn.style.display = 'block'
        out.style.display = 'none'
        document.location.href = '?exit'
    }
    btn.onclick = function () {
        modal.style.display = 'block'
    }
    span.onclick = function () {
        modal.style.display = 'none'
    }
    //Слайдер
    var slide_left = document.getElementById('btnLeft'),
        slide_right = document.getElementById('btnRight'),
        total_img = document.getElementsByClassName('index-img'),
        idx = 0 // Индекс текущего слайда.
    //Прячем левую кнопку
    slide_left.style.display = 'none'
    //Обрабатываем событие - щелчок по кнопке
    slide_right.addEventListener('click', moveLeft)
    //для правой кнопки
    function moveLeft() {
        slide_left.style.display = 'block'
        total_img[idx].style.display = 'none' // Скрываем текущий слайд
        total_img[++idx].style.display = 'block' // Инкрементируем индекс и показываем
        if (idx === total_img.length - 1) {
            // Убираем "правую" стрелку, если справа слайдов нет
            slide_right.style.display = 'none'
        }
    }
    //для левой стрелки
    slide_left.addEventListener('click', moveRight)
    function moveRight() {
        slide_right.style.display = 'block'
        total_img[idx].style.display = 'none'
        total_img[--idx].style.display = 'block'
        if (idx === 0) {
            // Убираем "левую" стрелку, если слева слайдов больше нет
            slide_left.style.display = 'none'
        }
    } //end function
} //end OnLoad
