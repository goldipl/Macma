const show_more_btn = document.querySelectorAll(".category-left-filters .show-more");

show_more_btn.forEach((e) => {
    e.addEventListener("click", () => {
        e.nextElementSibling.classList.add('show');
        e.classList.add('hide');
    });
});

const show_filters_btn = document.querySelector('.category-left-filters-box__button');
const filters_box = document.querySelector(".category-left-filters");
const btn_img = document.querySelector(".category-left-filters-box__button img");

show_filters_btn.addEventListener('click', () => {
    filters_box.classList.toggle('show');
    btn_img.classList.toggle('rotate');
});