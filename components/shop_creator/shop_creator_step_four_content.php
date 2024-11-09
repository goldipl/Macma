<form class="shopcreator-content container">
    <h3>Ustal narzut na ceny</h3>
    <div class="textbox">
        <p>Poniżej znajdują się ustawienia umożliwiające zmianę cen na Twojej stronie. Możesz samodzielnie ustalać politykę cenowąpoprzez dodawanie lub odejmowanie narzutu w %.</p>
    </div>
    <div class="shopcreator-prices">
        <div class="shopcreator-prices__slot">
            <label for="products-prices">Zmiana cen produktów: Rabat/Narzut %</label>
            <div class="d-flex mt-2">
                <select name="products-prices-select" id="products-prices-select">
                    <option value="+">+</option>
                    <option value="-">-</option>
                </select>
                <input class="form-input" type="text" name="products-prices" id="products-prices">
            </div>
        </div>
        <div class="shopcreator-prices__slot">
            <label for="products-prices">Zmiana cen oznakowań: Rabat/Narzut %</label>
            <div class="d-flex mt-2">
                <select name="products-branding-select" id="products-branding-select">
                    <option value="+">+</option>
                    <option value="-">-</option>
                </select>
                <input class="form-input" type="text" name="products-branding" id="products-branding">
            </div>
        </div>
    </div>
    <div class="shopprices-info-text">
        <p><strong>Ceny oferty podstawowej:</strong> Widoczne na Twojej stronie, to ceny katalogowe bez rabatu agencyjnego.</p>
        <p><strong>Ceny oferty markowej:</strong> Widoczne na Twojej stronie, to ceny zakupu, które mają ustawiony automatyczny narzut +50%.
        </p>
        <p><strong>Uwaga:</strong> Ceny znakowania są zgodne z aktualnym cennikiem nadruków. Jeśli chcesz, możesz dodać własny narzut w %.</p>
    </div>
    <div class="bottom-button right-btn">
        <button class="orange-btn next">Dalej <img src="./assets/icons/common/buttons/button_white_arrow.svg" alt="arrow icon" width="18" height="18">
        </button>
    </div>
    <div class="shopcreator-dots">
        <div class="shopcreator-dots__dot"></div>
        <div class="shopcreator-dots__dot"></div>
        <div class="shopcreator-dots__dot"></div>
        <div class="shopcreator-dots__dot active"></div>
        <div class="shopcreator-dots__dot"></div>
        <div class="shopcreator-dots__dot"></div>
        <div class="shopcreator-dots__dot"></div>
    </div>
</form>