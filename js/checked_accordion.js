document.addEventListener("DOMContentLoaded", function () {
    // Get the button element
    const orangeBtnColors = document.querySelector('#collapse12 button.orange-btn');

    // Add click event listener to the button
    orangeBtnColors.addEventListener('click', function () {
        // Get the accordion button image element
        const accordionColorsButtonImg = document.querySelector('.accordion-container #heading12 .accordion-button img');

        // Add "display: flex" style to the accordion button image
        accordionColorsButtonImg.style.display = 'flex';

        // Add the "show" class from the collapse div & remove from preview
        const collapse12 = document.getElementById('collapse12');
        const collapse13 = document.getElementById('collapse13');
        collapse12.classList.remove('show');
        collapse13.classList.add('show');
        window.location.href = "#step-three";
    });

    // Get the button element
    const orangeBtnQuantity = document.querySelector('#collapse13 button.orange-btn');

    // Add click event listener to the button
    orangeBtnQuantity.addEventListener('click', function () {
        // Get the accordion button image element
        const accordionQuantityButtonImg = document.querySelector('.accordion-container #heading13 .accordion-button img');

        // Add "display: flex" style to the accordion button image
        accordionQuantityButtonImg.style.display = 'flex';

        // Add the "show" class from the collapse div & remove from preview
        const collapse13 = document.getElementById('collapse13');
        const collapse14= document.getElementById('collapse14');
        collapse13.classList.remove('show');
        collapse14.classList.add('show');
        window.location.href = "#step-four";
    });

    // Get the button element
    const orangeBtnBranding = document.querySelector('#collapse14 button.orange-btn');

    // Add click event listener to the button
    orangeBtnBranding.addEventListener('click', function () {
        // Get the accordion button image element
        const accordionBrandingButtonImg = document.querySelector('.accordion-container #heading14 .accordion-button img');

        // Add "display: flex" style to the accordion button image
        accordionBrandingButtonImg.style.display = 'flex';

        // Add the "show" class from the collapse div & remove from preview
        const collapse14 = document.getElementById('collapse14');
        const collapse15 = document.getElementById('collapse15');
        const collapse16 = document.getElementById('collapse16');
        collapse14.classList.remove('show');
        collapse15.classList.add('show');
        collapse16.classList.add('show');
        window.location.href = "#step-five";
    });
});
