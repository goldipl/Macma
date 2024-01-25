<form class="import_form container">
    <div class="title">
        <span class="form-number">1</span>Szczegóły produktu
    </div>
    <input class="form-input" type="text" name="product-name" id="product-name" placeholder="Nazwa produktu *" required>
    <input class="form-input" type="text" name="product-color" id="product-color" placeholder="Kolory produktu">
    <input class="form-input" type="text" name="product-size" id="product-size" placeholder="Rozmiar produktu">
    <input class="form-input" type="text" name="product-material" id="product-material" placeholder="Materiał">
    <input class="form-input" type="text" name="product-quantity" id="product-quantity" placeholder="Ilość">
    <input class="form-input" type="text" name="product-box" id="product-box" placeholder="Opakowanie">
    <div class="title">
        <span class="form-number">2</span>Dane dotyczące znakowania
    </div>
    <input class="form-input" type="text" name="product-branding" id="product-branding" placeholder="Znakowanie">
    <input class="form-input" type="text" name="product-quantity-location" id="product-quantity-location" placeholder="Liczba miejsc">
    <input class="form-input" type="text" name="product-quantity-colors" id="product-quantity-colors" placeholder="Ilość kolorów">
    <div class="title">
        <span class="form-number">3</span>Inne informacje
    </div>
    <div class="d-flex flex-row flex-wrap">
        <input class="form-input" type="text" name="product-price" id="product-price" placeholder="Cena">
        <label for="files" class="add-files" id="add-files">
            <img class="add-files-img" src="./assets/icons/upload-icon.svg" alt="upload" width="21" height="14">
            <p class="add-files-text">Wgraj zdjęcie produktu <br>lub <u>dodaj plik</u>
            </p>
            <input class="file file-block" type="file" id="files">
        </label>
        <textarea class="form-textarea" name="product-additional-info" id="product-additional-info" placeholder="Dodatkowe informacje"></textarea>
    </div>
    <div class="title">
        <span class="form-number">4</span>Dane kontaktowe
    </div>
    <div class="d-flex flex-row flex-wrap">
        <input class="form-input" type="text" name="company" id="company" placeholder="Firma *" required>
        <input class="form-input" type="text" name="contact-person" id="contact-person" placeholder="Osoba kontaktowa *" required>
        <input class="form-input" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" id="email" placeholder="Email *" required>
        <input class="form-input" type="text" name="telephone" id="telephone" placeholder="Telefon *" required>
        <input class="form-input" type="text" name="nip" id="nip" placeholder="NIP *" required>
    </div>
    <button class="orange-btn">Wyślij <img src="./assets/icons/common/buttons/button_white_arrow.svg" alt="arrow icon" width="18" height="18">
    </button>
</form>