let popupBackground = document.querySelector('.popup__bg'); // Фон попап окна
let popup = document.querySelector('.popup'); // Само окно
let openPopupButtonHeader = document.querySelector('.header_enroll_open_pop_up'); // Кнопки для показа окна
let openPopupButtonMain = document.querySelector('.button__text');
let closePopupButton = document.querySelector('.close_button');

openPopupButtonHeader.addEventListener('click', openPopup);
openPopupButtonMain.addEventListener('click', openPopup);
closePopupButton.addEventListener('click', closePopup);

document.addEventListener('click', closeByClickOnBackground);
document.addEventListener('keydown', closeByEscape);

function openPopup() {
    popupBackground.classList.add('active'); // Добавляем класс 'active' для фона
    popup.classList.add('active'); // И для самого окна
}

function closePopup() {
    popupBackground.classList.remove('active'); // Убираем класс 'active' для фона
    popup.classList.remove('active'); // И для самого окна
}

function closeByClickOnBackground(event) { // Вешаем обработчик на весь документ
    if(event.target === popupBackground) { // Если цель клика - фот, то:
        closePopup();
    }
}

function closeByEscape(event) { // Вешаем обработчик на весь документ
    if(event.key === "Escape") { // Если цель клика - фот, то:
        closePopup();
    }
}