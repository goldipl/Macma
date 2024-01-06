const expand_btn = document.querySelector('.dashboard-menu .expand-menu');
const expand_btn_text = document.querySelector('.dashboard-menu .expand-menu p');
const dashboard_menu = document.querySelector('.dashboard-container .menu-links-container');

expand_btn.addEventListener('click', () => {
    dashboard_menu.classList.toggle('active');
    expand_btn.classList.toggle('active');
    if (expand_btn.classList.contains('active')) {
        expand_btn_text.innerHTML = `
            <img src="./assets/icons/common/grey-arrow-down.svg" alt="arrow down icon" width="12" height="8">Zwiń menu<img src="./assets/icons/common/grey-arrow-down.svg" alt="arrow down icon" width="12" height="8">
            `
    } else {
        expand_btn_text.innerHTML = `
        <img src="./assets/icons/common/grey-arrow-down.svg" alt="arrow down icon" width="12" height="8">Rozwiń menu<img src="./assets/icons/common/grey-arrow-down.svg" alt="arrow down icon" width="12" height="8">
        `   
    }
});