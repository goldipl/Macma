// Function to toggle checked state of color squares and check mix-container checkbox accordingly
function toggleChecked(colorElement) {
    // Toggle checked state of color square
    colorElement.classList.toggle('checked');

    // Get all checked color squares
    var checkedColors = document.querySelectorAll('.colors-squares .color.checked');

    // Get the mix checkbox element
    var mixCheckbox = document.querySelector('.mix-container .custom_input');

    // Set the mix checkbox checked if at least two colors are checked
    mixCheckbox.checked = checkedColors.length >= 2;
}

// Add event listeners to color squares for click event
var colorSquares = document.querySelectorAll('.colors-squares .color');
colorSquares.forEach(function(colorElement) {
    colorElement.addEventListener('click', function() {
        toggleChecked(colorElement);
    });
});