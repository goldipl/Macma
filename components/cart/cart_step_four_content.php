<div class="cart_container step_four">
    <div class="container">
        <h1>Twoje Dane</h1>
        <div class="cart-table_full_box d-flex flex-row">
            <div class="cart-table_box d-flex flex-column">
                <form class="cart-your-data-container">
                    <div class="cart-your-data-container__col">
                        <div class="title">
                            <p>Dane do faktury</p>
                        </div>
                        <div class="inputs-container">
                            <div class="input-slot">
                                <label for="company">Firma</label>
                                <input class="form-input" type="text" name="company">
                            </div>
                            <div class="input-slot">
                                <label for="street">Ulica</label>
                                <input class="form-input" type="text" name="street">
                            </div>
                            <div class="input-slot">
                                <label for="zipcode">Kod pocztowy</label>
                                <input class="form-input" type="text" name="zipcode">
                            </div>
                            <div class="input-slot">
                                <label for="city">Miasto</label>
                                <input class="form-input" type="text" name="city">
                            </div>
                            <div class="input-slot">
                                <label for="tel">Tel.</label>
                                <input class="form-input" type="number" name="tel">
                            </div>
                            <div class="input-slot">
                                <label for="nip">NIP</label>
                                <input class="form-input" type="number" name="nip">
                            </div>
                        </div>
                    </div>
                    <div class="cart-your-data-container__col">
                        <div class="title email">
                            <p>Adres email</p>
                            <p class="subtitle">na który zostanie wysłane potwierdzenia zamówienia</p>
                        </div>
                        <div class="inputs-container">
                            <div class="input-slot">
                                <label for="email">Email</label>
                                <input class="form-input" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email">
                            </div>
                            <div class="input-slot">
                                <label for="comments">Uwagi</label>
                                <textarea class="form-textarea" name="comments" id="comments"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="cart-your-data-container__col">
                        <div class="title send-address">
                            <div class="title-top">
                                <p>Adres wysyłki</p>
                                <label class="custom-checkbox-container">Wysyłka na adres fakturowy:
                                    <input type="checkbox" class="custom_input">
                                    <span class="custom-checkbox-checkmark"></span>
                                </label>
                            </div>
                            <div class="title-bottom">
                                <label for="saved-address">Wybierz zapisany adres</label>
                                <select name="saved-address" id="saved-address" class="form-select">
                                    <option value="Adres, kod pocztowy, tel:666666666">Adres, kod pocztowy, tel:666666666</option>
                                </select>
                            </div>
                        </div>
                        <div class="inputs-container">
                            <div class="input-slot">
                                <label for="address-company">Firma</label>
                                <input class="form-input" type="text" name="address-company">
                            </div>
                            <div class="input-slot">
                                <label for="address-street">Ulica</label>
                                <input class="form-input" type="text" name="address-street">
                            </div>
                            <div class="input-slot">
                                <label for="address-zipcode">Kod pocztowy</label>
                                <input class="form-input" type="text" name="address-zipcode">
                            </div>
                            <div class="input-slot">
                                <label for="address-city">Miasto</label>
                                <input class="form-input" type="text" name="address-city">
                            </div>
                            <div class="input-slot">
                                <label for="address-telephone-person">Telefon do odbiorcy</label>
                                <input class="form-input" type="text" name="address-telephone-person">
                            </div>
                            <div class="input-slot">
                                <label for="address-contact-person">Osoba kontaktowa (odbiorca)</label>
                                <input class="form-input" type="text" name="address-contact-person">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="bottom-cart-box-with-btn">
                    <div class="bottom-cart-button">
                        <a href="#" class="white-btn prev left-btn"><img src="./assets/icons/common/buttons/button_orange_arrow.svg" alt="arrow icon" width="18" height="18"> Powrót</a>
                    </div>
                    <div class="bottom-cart-button right-btn">
                        <a href="#" class="orange-btn next">Dalej <img src="./assets/icons/common/buttons/button_white_arrow.svg" alt="arrow icon" width="18" height="18"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>