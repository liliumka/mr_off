<!--Все формы-->

<!--фон для модальных окон-->
<div id="fade"></div>

<!--Заказ звонка-->
<div class="modal" id="callback" >
    <div class="modal-close"></div>
    <div class="modal-title">
        <h3>Заказ звонка</h3>
        <p>
            Оставьте свой номер телефона
            <br />и специалист свяжется с вами
        </p>
    </div>
    <div class="modal-form">
        <form action="js/sendform.php" method="post">
            <input type="text" name="mname" class="i-user" placeholder="Введите имя">
            <input type="text" name="mphone" class="i-phone" placeholder="Введите номер телефона" data-inputmask="'alias': 'phone'">
            <span class="button">
                <span>Отправить заявку</span>
            </span>
        </form>
    </div>
</div>

<!--Бесплатная консультация-->
<div class="modal" id="consultback">
    <div class="modal-close"></div>
    <div class="modal-title">
        <h3>Бесплатная консультация</h3>
        <p>
            Оставьте заявку на бесплатную консультацию
            <br />и специалист свяжется с вами
        </p>
    </div>
    <div class="modal-form">
        <form action="js/sendform.php" method="post">
            <input type="text" name="mname" class="i-user" placeholder="Введите имя">
            <input type="text" name="mphone" class="i-phone" placeholder="Введите номер телефона" data-inputmask="'alias': 'phone'">
            <span class="button">
                <span>Отправить заявку</span>
            </span>
        </form>
    </div>
</div>

<!--Консультация управляющего-->
<div class="modal" id="majorback">
    <div class="modal-close"></div>
    <div class="modal-title">
        <h3>Консультация управляющего</h3>
        <p>
            Оставьте свой номер телефона
            <br />и Андрей Владимирович свяжется с вами
        </p>
    </div>
    <div class="modal-form">
        <form action="js/sendform.php" method="post">
            <input type="text" name="mname" class="i-user" placeholder="Введите имя">
            <input type="text" name="mphone" class="i-phone" placeholder="Введите номер телефона" data-inputmask="'alias': 'phone'">
            <span class="button">
                <span>Отправить заявку</span>
            </span>
        </form>
    </div>
</div>

<!--Расчёт стоимости-->
<div class="modal" id="priceback">
    <div class="modal-close"></div>
    <div class="modal-title">
        <h3>Расчёт стоимости</h3>
        <p>
            Оставьте заявку на расчёт стоимости
            <br />и специалист свяжется с вами
        </p>
    </div>
    <div class="modal-form">
        <form action="js/sendform.php" method="post">
            <input type="text" name="mname" class="i-user" placeholder="Введите имя">
            <input type="text" name="mphone" class="i-phone" placeholder="Введите номер телефона" data-inputmask="'alias': 'phone'">
            <span class="button">
                <span>Отправить заявку</span>
            </span>
        </form>
    </div>
</div>

<!--Спасибо-->
<div class="modal" id="thanks">
    <div class="modal-close"></div>
    <div class="modal-title">
        <h3>Ваша заявка отправлена</h3>
        <p>
            Благодарим за проявленный интерес,
            <br />в ближайшее время наш специалист свяжется с вами
        </p>
    </div>
</div>