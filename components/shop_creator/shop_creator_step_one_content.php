<form class="shopcreator-content container">
    <h3>Wpisz nazwę subdomeny</h3>
    <div class="textbox">
        <p>pod którą będzie widoczny Twój sklep. Nie używaj polskich znaków.</p>
        <p>Subdomena to tylko fragment pełnego adresu strony - zobacz przykład poniżej. Przykładowa subdomena wyróżniona jest kolorem pomarańczowym.</p>
    </div>
    <div class="greybox">
        <p>Np. https://<span>gadzety-reklamowe</span>.howtowow.pl </p>
        <div class="subdomain-box">
            <input class="form-input" type="text" name="subdomain" id="subdomain">
            <p>Twój aktualny adres url: https://<span class="subdomain-name"></span>.howtowow.pl/ </p>
            <button class="orange-save-btn">Zapisz <img src="./assets/icons/dashboard/save-btn.svg" alt="save btn icon" width="18" height="18">
            </button>
        </div>
    </div>
    <div class="info-box">
        <h3>
            <svg width="31" height="28" viewBox="0 0 31 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="30" height="27" rx="13.5" fill="white" />
                <rect x="0.5" y="0.5" width="30" height="27" rx="13.5" stroke="#D3CBCB" />
                <path d="M14.428 15.842C14.428 15.194 14.506 14.654 14.662 14.222C14.83 13.778 15.046 13.406 15.31 13.106C15.586 12.806 15.868 12.542 16.156 12.314C16.456 12.086 16.738 11.864 17.002 11.648C17.278 11.432 17.5 11.192 17.668 10.928C17.836 10.652 17.92 10.328 17.92 9.956C17.92 9.38 17.704 8.924 17.272 8.588C16.84 8.24 16.252 8.066 15.508 8.066C14.68 8.066 14.008 8.276 13.492 8.696C12.976 9.104 12.658 9.686 12.538 10.442H10.702C10.798 9.638 11.056 8.942 11.476 8.354C11.896 7.766 12.454 7.31 13.15 6.986C13.846 6.662 14.644 6.5 15.544 6.5C16.396 6.5 17.14 6.644 17.776 6.932C18.412 7.208 18.91 7.61 19.27 8.138C19.63 8.654 19.81 9.26 19.81 9.956C19.81 10.496 19.72 10.952 19.54 11.324C19.372 11.696 19.15 12.014 18.874 12.278C18.61 12.53 18.322 12.77 18.01 12.998C17.698 13.214 17.404 13.448 17.128 13.7C16.864 13.94 16.642 14.234 16.462 14.582C16.294 14.918 16.21 15.338 16.21 15.842H14.428ZM14.194 20V17.768H16.426V20H14.194Z" fill="black" />
            </svg>
            <span>Wskazówka</span>
        </h3>
        <p>Kliknij przycisk 'Zapisz”, skopiuj swój adres url i otwórz go w przeglądarce (w osobnej karcie), dzięki temu będziesz widzieć wszystkie zmiany, które wprowadzisz. Wystarczy, że po każdej zapisanej zmianie odświeżysz stronę ze swoim sklepem/katalogiem w przeglądarce. </p>
    </div>
    <div class="bottom-button right-btn">
        <button class="orange-btn next">Dalej <img src="./assets/icons/common/buttons/button_white_arrow.svg" alt="arrow icon" width="18" height="18">
        </button>
    </div>
    <div class="shopcreator-dots">
        <div class="shopcreator-dots__dot active"></div>
        <div class="shopcreator-dots__dot"></div>
        <div class="shopcreator-dots__dot"></div>
        <div class="shopcreator-dots__dot"></div>
        <div class="shopcreator-dots__dot"></div>
        <div class="shopcreator-dots__dot"></div>
        <div class="shopcreator-dots__dot"></div>
    </div>
</form>

<script>
    const subdomainInput = document.getElementById("subdomain");
    const subdomainSpan = document.querySelector(".subdomain-name");

    subdomainInput.addEventListener("input", () => {
        const subdomainValue = subdomainInput.value;

        subdomainSpan.textContent = subdomainValue;
    });
</script>