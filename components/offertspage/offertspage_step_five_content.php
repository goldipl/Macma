<div class="offertspage_container step_five">
    <div class="container">
        <div class="top-title-box">
            <div class="top-title-box__left">
                <h1>Ofertownik</h1>
            </div>
            <div class="top-title-box__right">
            </div>
        </div>
        <div class="offertspage-offerts-details">
            <div class="offertspage-offerts-details-container">
                <div class="offerts-details__top">
                    <div class="offerts-details__top__col">
                        <div class="centered-title">
                            <p>Nazwa oferty</p>
                        </div>
                        <div class="details-content border-bottom">
                            <input type="text" class="form-input">
                        </div>
                        <div class="title flex-column align-items-start">
                            <p>Wypełnij dane oferenta lub wybierz z listy</p>
                            <p class="desc orange">Dodaj oferentów do profilu, abyś mógł w przyszłości wybierać ich z listy</p>
                        </div>
                        <div class="details-content">
                            <textarea class="form-textarea"></textarea>
                        </div>
                    </div>
                    <div class="offerts-details__top__col">
                        <div class="title">
                            <p>Uwagi</p>
                        </div>
                        <div class="details-content">
                            <textarea class="form-textarea"></textarea>
                            <label for="color-offert">Wybierz wersję kolorystyczną oferty:</label>
                            <select name="color-offert" id="color-offert" class="form-select">
                                <option value="Pomarańczowa">Pomarańczowa</option>
                                <option value="Czarna">Czarna</option>
                            </select>
                            <label for="color-offert">Wybierz motyw tematyczny:</label>
                            <select name="theme-offert" id="theme-offert" class="form-select">
                                <option value="Grafika1">Grafika1</option>
                                <option value="Grafika2">Grafika2</option>
                            </select>
                        </div>
                    </div>
                    <div class="offerts-details__top__col">
                        <div class="title">
                            <p>Inne</p>
                        </div>
                        <div class="details-content">
                            <div class="details-two-col">
                                <div class="details-two-col__left">
                                    <label for="valid-to">Oferta ważna do</label>
                                    <input type="date" name="valid-to" id="valid-to" class="form-input">
                                </div>
                                <div class="details-two-col__right">
                                    <label for="delivery-time">Termin dostawy</label>
                                    <input type="date" name="delivery-time" id="delivery-time" class="form-input">
                                </div>
                            </div>
                            <div class="inline-flex flex-wrap">

                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="flexSwitchTransportYes">Cena zawiera koszty transportu</label>
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchTransportYes" onclick="toggleExclusiveSwitch('flexSwitchTransportYes', 'flexSwitchTransportNo')" checked>
                                </div>

                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="flexSwitchTransportNo">Cena nie zawiera kosztów transportu</label>
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchTransportNo" onclick="toggleExclusiveSwitch('flexSwitchTransportNo', 'flexSwitchTransportYes')">
                                </div>

                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="flexSwitchZnakowanie">Pokaż osobno cenę za znakowanie</label>
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchZnakowanie">
                                </div>

                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="flexSwitchPodsumowanie">Pokaż wartość oferty w podsumowaniu</label>
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchPodsumowanie">
                                </div>
                            </div>

                            <p class="additional-info">
                                <span>Dodaj</span> swoje logo aby załączyć je do nagłówka PDF.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="offerts-details__bottom">
                    <div class="title">
                        <p>Wypełnij dane klienta lub wybierz z listy</p>
                        <select name="client-data-offert" id="client-data-offert" class="form-select">
                            <option value="test">test</option>
                            <option value="test2">test2</option>
                        </select>
                    </div>
                    <div class="details-content">
                        <textarea class="form-textarea"></textarea>
                    </div>
                </div>
            </div>
            <div class="bottom-offertspage-box-with-btn">
                <div class="bottom-offertspage-button">
                    <a href="#" class="white-btn prev left-btn">
                        <img src="./assets/icons/common/buttons/button_orange_arrow.svg" alt="arrow icon" width="18" height="18"> Powrót </a>
                </div>
                <div class="bottom-offertspage-button right-btn">
                    <a href="#" class="orange-btn next">Dalej <img src="./assets/icons/common/buttons/button_white_arrow.svg" alt="arrow icon" width="18" height="18">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleExclusiveSwitch(checkedId, uncheckedId) {
        const checkedSwitch = document.getElementById(checkedId);
        const uncheckedSwitch = document.getElementById(uncheckedId);
        
        if (checkedSwitch.checked) {
            uncheckedSwitch.checked = false;
        }
    }
</script>