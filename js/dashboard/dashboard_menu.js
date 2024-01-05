const expand_btn = document.querySelector('.dashboard-menu .expand-menu');
const dashboard_menu = document.querySelector('.dashboard-container .menu-links-container');

expand_btn.addEventListener('click', () => {
    dashboard_menu.classList.toggle('active');
    expand_btn.classList.toggle('active');
});