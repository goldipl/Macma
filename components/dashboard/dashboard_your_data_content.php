<form class="dashboard-wrapper">
    <div class="title">
        <p><img src="./assets/icons/dashboard/profile.svg" alt="menu icon" width="20" height="20">Twoje dane<span class="orange">Pola oznaczone * są wymagane.</span></p>
    </div>
    <div class="inputs-wrapper">
        <div class="inputs-wrapper__slot">
            <label for="name-surname">Twoje imię i nazwisko<span class="orange">*</span></label>
            <input class="form-input" type="text" name="name-surname" id="name-surname" required>
        </div>
        <div class="inputs-wrapper__slot">
            <label for="telephone">Tel<span class="orange">*</span></label>
            <input class="form-input" type="text" name="telephone" id="telephone" required>
        </div>
        <div class="inputs-wrapper__slot">
            <label for="email">E-mail / To będzie Twój login<span class="orange">*</span></label>
            <input class="form-input" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" id="email" required>
        </div>
        <div class="inputs-wrapper__slot">
            <label for="password">Hasło<span class="orange">*</span></label>
            <input class="form-input" type="password" name="password" id="password" required>
        </div>
        <div class="inputs-wrapper__slot">
            <label for="repeat-password">Powtórz hasło<span class="orange">*</span></label>
            <input class="form-input" type="password" name="repeat-password" id="repeat-password" required>
        </div>
    </div>
    <div class="title">
        <p><img src="./assets/icons/dashboard/profile.svg" alt="menu icon" width="20" height="20">Twoje dane firmowe</p>
    </div>
    <div class="inputs-wrapper">
        <div class="inputs-wrapper__slot">
            <label for="company">Firma<span class="orange">*</span></label>
            <input class="form-input" type="text" name="company" id="company" required>
        </div>
        <div class="inputs-wrapper__slot">
            <label for="street">Ulica<span class="orange">*</span></label>
            <input class="form-input" type="text" name="street" id="street" required>
        </div>
        <div class="inputs-wrapper__slot">
            <label for="zipcode">Kod pocztowy<span class="orange">*</span></label>
            <input class="form-input" type="text" name="zipcode" id="zipcode" required>
        </div>
        <div class="inputs-wrapper__slot">
            <label for="city">Miasto<span class="orange">*</span></label>
            <input class="form-input" type="text" name="city" id="city" required>
        </div>
        <div class="inputs-wrapper__slot">
            <label for="country">Państwo<span class="orange">*</span></label>
            <input class="form-input" type="text" name="country" id="country" required>
        </div>
        <div class="inputs-wrapper__slot">
            <label for="nipcode">NIP<span class="orange">*</span><small>Masz nowy NIP? Poinformuj o tym swojego opiekuna  handlowego.</small></label>
            <input class="form-input" type="text" name="nipcode" id="nipcode" required>
        </div>
        <div class="inputs-wrapper__slot">
            <label for="tel1">Tel. - 1<span class="orange">*</span></label>
            <input class="form-input" type="text" name="tel1" id="tel1" required>
        </div>
        <div class="inputs-wrapper__slot">
            <label for="invoiceemail">Adres e-mail do e-faktur<span class="orange">*</span></label>
            <input class="form-input" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="invoiceemail" id="invoiceemail" required>
        </div>
    </div>
    <div class="inputs-wrapper">
        <div class="inputs-wrapper__slot">
            <label class="label-logo" for="logo">Logo</label>
            <img class="your-logo" src="./assets/img/dashboard/logo-box.jpg" alt="Twoje logo" name="logo" id="logo" width="382" height="120"/>
            <input type='file' onchange="readURL(this);"/>
        </div>
    </div>
    <div class="button-box">
        <button class="orange-btn">Zapisz <img src="./assets/icons/dashboard/save-btn.svg" alt="save btn icon" width="18" height="18"></button>
     </div>
</form>