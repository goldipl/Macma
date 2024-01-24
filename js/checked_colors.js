document.addEventListener('DOMContentLoaded', function () {
    const mixCheckbox = document.querySelector('.mix-container .custom_input');
    const colorSquares = document.querySelectorAll('.colors-squares .color');
    let lastCheckedSquare = null;

    function enableColorSquareSelection() {
        colorSquares.forEach(function (square) {
            square.addEventListener('click', function () {
                if (!mixCheckbox.checked) {
                    colorSquares.forEach(function (otherSquare) {
                        otherSquare.classList.remove('checked');
                    });
                    this.classList.add('checked');
                    lastCheckedSquare = this;
                }
            });
        });
    }

    mixCheckbox.addEventListener('change', function () {
        if (mixCheckbox.checked) {
            // Add event listener to allow multiple color squares to be checked
            colorSquares.forEach(function (square) {
                square.addEventListener('click', function () {
                    this.classList.toggle('checked');
                });
            });
        } else {
            // If mixCheckbox is unchecked, remove the event listeners and reset the state
            colorSquares.forEach(function (square) {
                square.removeEventListener('click', null);
                square.classList.remove('checked');
            });
            lastCheckedSquare = null;
            enableColorSquareSelection();
        }
    });

    // Enable color square selection initially
    enableColorSquareSelection();
});