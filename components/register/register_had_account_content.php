<div class="grey-background">
    <div class="register container">
        <h2>Jestem już klientem <span>Macma Polska</span> i zakładam dodatkowe konto</h2>
        <form class="inputs-form-container-wrapper">
            <div class="register-top-container">
                <div class="register-top-container__slot">
                    <div class="title">
                        <p><img src="./assets/icons/dashboard/profile.svg" alt="menu icon" width="20" height="20">Twoje dane<span class="orange">Pola oznaczone * są wymagane.</span></p>
                    </div>
                    <div class="inputs-wrapper">
                        <div class="inputs-wrapper__slot">
                            <label for="name-surname">Twoje imię i nazwisko<span class="orange">*</span></label>
                            <input class="form-input" type="text" name="name-surname" id="name-surname" required="">
                        </div>
                        <div class="inputs-wrapper__slot">
                            <label for="telephone">Telefon<span class="orange">*</span></label>
                            <input class="form-input" type="text" name="telephone" id="telephone" required="">
                        </div>
                    </div>
                </div>
                <div class="register-top-container__slot">
                    <div class="title">
                        <p><img src="./assets/icons/dashboard/profile.svg" alt="menu icon" width="20" height="20">Twoje dane firmowe</p>
                    </div>
                    <div class="inputs-wrapper">
                        <div class="inputs-wrapper__slot">
                            <label for="company">Firma<span class="orange">*</span></label>
                            <input class="form-input" type="text" name="company" id="company" required="">
                        </div>
                        <div class="inputs-wrapper__slot">
                            <label for="nip">NIP<span class="orange">*</span><small>Masz nowy NIP? Poinformuj o tym swojego opiekuna handlowego.</small></label>
                            <input class="form-input" type="text" name="nip" id="nip" required="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <p><img src="./assets/icons/dashboard/profile.svg" alt="menu icon" width="20" height="20">Twoje dane logowania</p>
            </div>
            <div class="inputs-wrapper">
                <div class="d-flex flex-column input-column">      
                    <div class="inputs-wrapper__slot">
                        <label for="login">Login – wpisz swój adres e-mail<span class="orange">*</span></label>
                        <input class="form-input" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="login" id="login" required="">
                    </div>
                    <div class="inputs-wrapper__slot">
                        <label class="custom-checkbox-container newsletter">Zapisz się do naszego newslettera<input type="checkbox" class="custom_input" required="">
                            <span class="custom-checkbox-checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="inputs-wrapper__slot">
                    <label class="custom-checkbox-container marketing-consents">Wyrażam zgodę na przetwarzanie moich danych przez Macma Polska Sp. z o.o. w celu otrzymywania aktualności oraz treści marketingowych, za pomocą automatycznych wiadomości e-mail w ramach usługi „Newsletter”, zgodnie z art. 10 ust. 2 ustawy o świadczeniu usług drogą elektroniczną oraz art. 172 ust. 1 ustawy Prawo telekomunikacyjne.<input type="checkbox" class="custom_input" required="">
                    <span class="custom-checkbox-checkmark"></span>
                    </label>
                </div>
                <div class="inputs-wrapper__slot">
                    <label for="password">Hasło<span class="orange">*</span></label>
                    <input class="form-input" type="password" name="password" id="password" required="">
                </div>
                <div class="inputs-wrapper__slot">
                    <label for="repeat-password">Powtórz hasło<span class="orange">*</span></label>
                    <input class="form-input" type="password" name="repeat-password" id="repeat-password" required="">
                </div>
            </div>
            <div class="checkboxes-box">
                <div class="checkboxes-box__slot">
                    <label class="custom-checkbox-container newsletter">Zapoznałem/zapoznałam się z treścią Regulaminu Sklepu Internetowego Macma, jego treść jest dla mnie zrozumiała i w całości go akceptuję.<input type="checkbox" class="custom_input" required="">
                    <span class="custom-checkbox-checkmark"></span>
                    </label>
                </div>
                <div class="checkboxes-box__slot">
                    <label class="custom-checkbox-container newsletter">Zapoznałem/zapoznałam się z treścią Polityki prywatności, jej treść jest dla mnie zrozumiała i w całości ją akceptuję.<input type="checkbox" class="custom_input" required="">
                    <span class="custom-checkbox-checkmark"></span>
                    </label>
                </div>
                <div class="checkboxes-box__slot">
                    <label class="custom-checkbox-container newsletter">Zapoznałem/zapoznałam się z treścią Polityki wykorzystywania plików cookies, jej treść jest dla mnie zrozumiała i w całości ją akceptuję.<input type="checkbox" class="custom_input" required="">
                    <span class="custom-checkbox-checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="button-box">
                <button class="orange-btn">Wyślij <img src="./assets/icons/dashboard/save-btn.svg" alt="save btn icon" width="18" height="18"></button>
            </div>
        </form>
    </div>
</div>