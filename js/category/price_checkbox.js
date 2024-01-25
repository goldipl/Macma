function handleCheckboxClick(clickedCheckbox) {
    // Pobierz wszystkie checkboxy w danym bloku
    var checkboxes = document.querySelectorAll('.category-left-filters__slot.price-type .custom_input');

    // Odznacz wszystkie checkboxy
    checkboxes.forEach(function (checkbox) {
        if (checkbox !== clickedCheckbox) {
            checkbox.checked = false;
        }
    });
}