let show_more_btn = document.querySelectorAll(".category-left-filters .show-more");

show_more_btn.forEach((e) => {
    e.addEventListener("click", () => {
        e.nextElementSibling.classList.add('show');
        e.classList.add('hide');
    });
});