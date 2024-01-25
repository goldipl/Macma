<div class="category-left-filters-box">
    <div class="category-left-filters-box__button">
        <h3>Rozwiń filtry</h3>
        <img src="./assets/icons/common/grey-arrow-down.svg" width="9" height="9">
    </div>
    <div class="category-left-filters">
        <div class="category-left-filters__slot">
            <div class="header">
                <h3>Sortuj</h3>
            </div>
            <div class="content">
                <label class="custom-checkbox-container">Nowość <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Bestseller <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Promocja <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Ekologiczny <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
            </div>
        </div>
        <div class="category-left-filters__slot price-type">
            <div class="header">
                <h3>Typ ceny</h3>
            </div>
            <div class="content">
                <label class="custom-checkbox-container">
                    Katalogowa <input type="checkbox" class="custom_input" name="priceType" onclick="handleCheckboxClick(this)">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">
                    Twoja cena <input type="checkbox" class="custom_input" name="priceType" onclick="handleCheckboxClick(this)">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
            </div>
        </div>
        <div class="category-left-filters__slot">
            <div class="header">
                <h3>Cena</h3>
            </div>
            <div class="content">
                <div class="row-inputs">
                    <div class="row-inputs__left">
                        <input class="form-input" type="text" name="price-left-input" id="price-left-input" placeholder="Od" min="0">
                    </div>
                    <span class="spacer">-</span>
                    <div class="row-inputs__right">
                        <input class="form-input" type="text" name="price-right-input" id="price-right-input" placeholder="Do" min="0">
                    </div>
                </div>
            </div>
        </div>
        <div class="category-left-filters__slot">
            <div class="header">
                <h3>Ilość</h3>
            </div>
            <div class="content">
                <input class="form-input" type="text" name="quantity-input" id="quantity-input" min="1">
            </div>
        </div>
        <div class="category-left-filters__slot">
            <div class="header">
                <h3>Dostępność</h3>
            </div>
            <div class="content">
                <label class="custom-checkbox-container">24h/48h <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">2-3 dni <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Dostawa <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
            </div>
        </div>
        <div class="category-left-filters__slot">
            <div class="header">
                <h3>Kolor</h3>
            </div>
            <div class="content">
                <label class="custom-checkbox-container">
                    <div class="color white"></div>Biały <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">
                    <div class="color grey"></div>Szary <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">
                    <div class="color black"></div>Czarny <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">
                    <div class="color red"></div>Czerwony <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">
                    <div class="color green"></div>Zielony <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">
                    <div class="color blue"></div>Granatowy <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">
                    <div class="color purple"></div>Fioletowy <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">
                    <div class="color orange"></div>Pomarańczowy <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">
                    <div class="color yellow"></div>Zółty <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">
                    <div class="color pink"></div>Rózowy <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">
                    <div class="color lightblue"></div>Niebieski <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
            </div>
        </div>
        <div class="category-left-filters__slot">
            <div class="header">
                <h3>Marka</h3>
            </div>
            <div class="content">
                <label class="custom-checkbox-container">M-Collection <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">CrisMA <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Ferraghini <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Mark Twain <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Pierre Cardin <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Schwarzwolf <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
            </div>
        </div>
        <div class="category-left-filters__slot">
            <div class="header">
                <h3>Materiał</h3>
            </div>
            <div class="content">
                <label class="custom-checkbox-container">Bambus <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Plastik <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Metal <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Bawełna <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Ceramika <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Karton <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Juta <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Tworzywo sztuczne <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
            </div>
            <div class="show-more">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                        <path d="M5 1V10.5" stroke="#374957" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 5.75L0.5 5.75" stroke="#374957" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>Więcej 
                </span>
            </div>
            <div class="content hidden">
                <label class="custom-checkbox-container">Ukryty filtr <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Ukryty filtr <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Ukryty filtr <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
            </div>
        </div>
        <div class="category-left-filters__slot">
            <div class="header">
                <h3>Technika znakowania</h3>
            </div>
            <div class="content">
                <label class="custom-checkbox-container">Tampodruk <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Druk UV <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Grawer laserowy <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Sublimacja <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Doming <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
            </div>
            <div class="show-more">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                        <path d="M5 1V10.5" stroke="#374957" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 5.75L0.5 5.75" stroke="#374957" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>Więcej 
                </span>
            </div>
            <div class="content hidden">
                <label class="custom-checkbox-container">Ukryty filtr <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Ukryty filtr <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
                <label class="custom-checkbox-container">Ukryty filtr <input type="checkbox" class="custom_input">
                    <span class="custom-checkbox-checkmark"></span>
                </label>
            </div>
        </div>
    </div>
</div>