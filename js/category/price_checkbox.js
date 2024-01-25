function handleCheckboxClick(clickedCheckbox) {
    const checkboxes = document.querySelectorAll('.category-left-filters__slot.price-type .custom_input');

    checkboxes.forEach(function (checkbox) {
        if (checkbox !== clickedCheckbox) {
            checkbox.checked = false;
        }
    });
}