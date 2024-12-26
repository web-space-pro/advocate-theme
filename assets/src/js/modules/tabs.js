let itemTab    = document.querySelectorAll(".tab"),
    currentTab = document.querySelector(".tab-indicator"),
    panelBox   = document.querySelector(".box-panel"),
    panelList  = document.querySelectorAll(".panel"),
    maxHeight = 0;

itemTab.forEach((item) => {
    item.addEventListener("click", () => {
        itemTab.forEach((tabs) => {
            tabs.classList.remove("active");
        })
        item.classList.add("active");
        let getAttrControls = item.getAttribute("aria-controls");
            panelList.forEach((panelItem) => {
                let itemID = panelItem.getAttribute("id");
                let setHeightPanel = panelItem.clientHeight;
                if(getAttrControls === itemID){
                    panelBox.style.height = `${setHeightPanel}px`;
                }
                getAttrControls === itemID
                    ? (panelItem.classList.remove("invisible", "opacity-0", "scale-90"), panelItem.classList.add("visible", "opacity-100", "scale-100"))
                    : (panelItem.classList.add("invisible", "opacity-0", "scale-90"), panelItem.classList.remove("visible", "opacity-100", "scale-100"))
                ;
            });
    });
});

panelList.forEach((panelItem) => {

});

let setHeightPanel = panelList[0].clientHeight;
panelBox.style.height = `${setHeightPanel}px`;

const container = document.querySelector('.tabList');

let isTouching = false;
let startY = 0;
let scrollStart = 0;
let targetScroll = 0; // Место, к которому хотим прокрутить
let currentScroll = 0; // Текущее положение прокрутки
let ease = 0.6; // Степень плавности прокрутки (чем меньше, тем плавнее)

// Для касания (свайпа на мобильных устройствах)
container.addEventListener('touchstart', (e) => {
    isTouching = true;
    startX = e.touches[0].clientX; // Начальная позиция пальца по оси X
    scrollStart = container.scrollLeft; // Начальное положение скролла по оси X
});

container.addEventListener('touchmove', (e) => {
    if (!isTouching) return;

    const touchMove = e.touches[0].clientX;
    const deltaX = touchMove - startX; // Сколько мы провели пальцем по оси X

    container.scrollLeft = scrollStart - deltaX; // Обновляем положение скролла по оси X
    e.preventDefault(); // Предотвращаем стандартное поведение прокрутки
});

container.addEventListener('touchend', () => {
    isTouching = false;
});

// Функция для плавного перемещения прокрутки
function smoothScroll() {
    if (Math.abs(currentScroll - targetScroll) > 0.5) { // Если текущее положение не слишком близко к целевому
        currentScroll += (targetScroll - currentScroll) * ease; // Линейное движение с замедлением
        container.scrollLeft = currentScroll; // Обновляем положение скролла

        // Запрашиваем следующий кадр анимации
        requestAnimationFrame(smoothScroll);
    }
}

// Запускаем плавную прокрутку
smoothScroll();

