<!-- Модальное окно -->
<div class="md-modal md-effect-1" id="modal-1">
    <div class="md-content">
        <h1>Записаться</h1>
        <form action="" id="appointmentForm">
            <div class="name">
            <input type="text" placeholder="Ваше имя*" oninvalid="setCustomValidity('Заполните это поле')"
                       oninput="setCustomValidity('')" required>
                <svg width="12" height="12" fill="none">
                    <path d="M9.29 8.04C7.79 7.5 7.3 7.77 7.3 6.8l.01-.22h.07c1.03.07 2.02.14 2.24-.01.36-.25-.86-.63-.86-3.81C8.76 1.15 7.7 0 6.09 0h-.17C4.3 0 3.25 1.14 3.25 2.75c0 3.18-1.22 3.56-.87 3.8.22.16 1.21.1 2.24.02h.07l.01.22c0 .98-.48.7-1.98 1.25C1.2 8.6.77 9.14.77 9.52V12H11.23V9.52c0-.38-.43-.93-1.94-1.48Z"></path>
                </svg>
            </div>
            <div class="phone">
            <input type="text" placeholder="000 000 000*" oninvalid="setCustomValidity('Заполните это поле')"
                       oninput="setCustomValidity('')" id="phone-input" autocomplete="off" required>
                <div class="num">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#000000}</style><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                    <span>+48</span>
                </div>
            </div>
            <div class="custom-select">
                <select>
                    <option value="0">Окрашивание</option>
                    <option value="1">Окрашивание</option>
                    <option value="2">Коррекция</option>
                    <option value="3">Ламинирование</option>
                    <option value="4">Ботокс</option>
                </select>
            </div>
            <button type="submit">Записаться</button>

        </form>
        <button class="md-close">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#000000}</style><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
        </button>
    </div>
</div>
<!-- Конец модального окна -->

<div class="md-overlay"></div>