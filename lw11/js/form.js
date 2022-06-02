let popupBg = document.querySelector('.popup__bg'); // Фон попап окна
let popup = document.querySelector('.popup'); // Само окно
let openPopupButtonHeader = document.querySelector('.header_enroll_open_pop_up'); // Кнопки для показа окна
let openPopupButtonMain = document.querySelector('.button__text');
let closePopupButton = document.querySelector('.close_button');
openPopupButtonHeader.addEventListener('click', ChangeStyle);
openPopupButtonMain.addEventListener('click', ChangeStyle);
closePopupButton.addEventListener('click', removeChangeStyle);
document.addEventListener('click', close_Bg);
document.addEventListener('keydown', close_Esc);
function ChangeStyle() {
    popupBg.classList.add('active'); // Добавляем класс 'active' для фона
    popup.classList.add('active'); // И для самого окна
}
function removeChangeStyle() {
    popupBg.classList.remove('active'); // Убираем класс 'active' для фона
    popup.classList.remove('active'); // И для самого окна
}
function close_Bg(event) { // Вешаем обработчик на весь документ
    if(event.target === popupBg) { // Если цель клика - фот, то:
        removeChangeStyle();
    }
}
function close_Esc(event) { // Вешаем обработчик на весь документ
    if(event.key === "Escape") { // Если цель клика - фот, то:
        removeChangeStyle();
    }
}