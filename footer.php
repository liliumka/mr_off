<?php global $u_home, $u_tpl, $b_name, $b_desc; ?>
<!--Подвал-->
<div class="footer">
    <div class="container">
        <div class="floor">
            <div class="floor-left">
                <a href="#">Мастерофф Мебель © 2015</a>
            </div>
            <div class="floor-right">
                <a href="http://m2bizz.ru/" target="_blank"><span class="no-mb">Создаём<br />Landing Page:</span></a>
            </div>
        </div>
    </div>
</div><!--.box-footer-->


<!--ВСЕ ФОРМЫ-->

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
            <input type="tel" name="mphone" class="i-phone" required pattern="[0-9_-]{10}" title="Формат: +99 (096) 999 99 99" placeholder="+_(___)___ __ __" data-inputmask="'alias': 'phone'"/>
            <div class="btn btn_ button">
                Отправить заявку
            </div>
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
            <input type="tel" name="mphone" class="i-phone" required pattern="[0-9_-]{10}" title="Формат: +99 (096) 999 99 99" placeholder="+_(___)___ __ __" data-inputmask="'alias': 'phone'"/>
            <div class="btn btn_ button">
                Отправить заявку
            </div>
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
            <input type="tel" name="mphone" class="i-phone" required pattern="[0-9_-]{10}" title="Формат: +99 (096) 999 99 99" placeholder="+_(___)___ __ __" data-inputmask="'alias': 'phone'"/>
            <div class="btn btn_ button">
                Отправить заявку
            </div>
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
            <input type="tel" name="mphone" class="i-phone" required pattern="[0-9_-]{10}" title="Формат: +99 (096) 999 99 99" placeholder="+_(___)___ __ __" data-inputmask="'alias': 'phone'"/>
            <div class="btn btn_ button">
                Отправить заявку
            </div>
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
<!--END Content-->



<!--Загрузка стилей-->
<link rel="stylesheet" href="<?=$u_tpl?>/css/main.css" property="" />
<link rel="stylesheet" href="<?=$u_tpl?>/css/media.css?1" media="(max-width:800px)" property="" />
<link rel="stylesheet" href="<?=$u_tpl?>/js/lightGallery/css/lightgallery.css" property="" />
<!--<script type="text/javascript">function b(){var a=document.createElement("link");a.rel="stylesheet";a.href="<?/*=$u_tpl*/?>/css/main.css";document.getElementsByTagName("head")[0].appendChild(a)}var c=requestAnimationFrame||mozRequestAnimationFrame||webkitRequestAnimationFrame||msRequestAnimationFrame;c?c(b):window.addEventListener("load",b);</script><script type="text/javascript">function b(){var a=document.createElement("link");a.rel="stylesheet";a.href="<?/*=$u_tpl*/?>/css/media.css";document.getElementsByTagName("head")[0].appendChild(a)}var c=requestAnimationFrame||mozRequestAnimationFrame||webkitRequestAnimationFrame||msRequestAnimationFrame;c?c(b):window.addEventListener("load",b);</script>-->
<!--<script type="text/javascript">function b(){var a=document.createElement("link");a.rel="stylesheet";a.href="<?/*=$u_tpl*/?>/js/lightGallery/css/lightgallery.css";document.getElementsByTagName("head")[0].appendChild(a)}var c=requestAnimationFrame||mozRequestAnimationFrame||webkitRequestAnimationFrame||msRequestAnimationFrame;c?c(b):window.addEventListener("load",b);</script>-->

<!--<script type="text/javascript">
    function downloadJSAtOnload() {
        var element = document.createElement("script");
        element.src = "<?/*=$u_tpl*/?>/js/document.js";
        document.body.appendChild(element);
    }
    if (window.addEventListener)window.addEventListener("load", downloadJSAtOnload, false); else if (window.attachEvent) window.attachEvent("onload", downloadJSAtOnload); else window.onload = downloadJSAtOnload;</script>-->



<!-- подключение скриптов -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?=$u_tpl?>/js/font-lato.js" type="text/javascript"></script>

<script src="<?=$u_tpl?>/js/is.mobile.js"></script>

<!--  Маска ввода телефона  -->
<script src="<?=$u_tpl?>/js/mask/inputmask.js"></script>
<script src="<?=$u_tpl?>/js/mask/inputmask.phone.extensions.js"></script>
<script src="<?=$u_tpl?>/js/mask/inputmask.regex.extensions.js"></script>

<!--lightGallery-->
<script src="<?=$u_tpl?>/js/lightGallery/lightgallery.min.js"></script>
<script src="<?=$u_tpl?>/js/lightGallery/lg-thumbnail.min.js"></script>

<!--Слайдер-->
<script src="<?=$u_tpl?>/js/slidertop/jquery.flexslider.js"></script>

<!--script Google Map-->
<script src='https://maps.googleapis.com/maps/api/js'></script>
<script src="<?=$u_tpl?>/js/googlemap.js"></script>
<!--end script Google Map-->

<script src="<?=$u_tpl?>/js/document.js"></script>

<!-- A jQuery plugin that adds cross-browser mouse wheel support. (Optional) -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>-->

<!--Start Uptolike-->
<script type="text/javascript">(function(w,doc) {
if (!w.utlWdgt ) {
w.utlWdgt = true;
var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
s.src = ('https:' == w.location.protocol ? 'https' : 'http') + '://w.uptolike.com/widgets/v1/uptolike.js';
var h=d[g]('body')[0];
h.appendChild(s);
}})(window,document);
</script>
<div data-background-alpha="0.0" data-buttons-color="#ffffff" data-counter-background-color="#ffffff" data-share-counter-size="12" data-top-button="true" data-share-counter-type="disable" data-share-style="1" data-mode="share" data-like-text-enable="false" data-hover-effect="scale" data-mobile-view="true" data-icon-color="#ffffff" data-orientation="fixed-left" data-text-color="#000000" data-share-shape="round-rectangle" data-sn-ids="vk.ok." data-share-size="30" data-background-color="#ffffff" data-preview-mobile="false" data-mobile-sn-ids="fb.vk.tw.wh.ok.vb." data-pid="1469322" data-counter-background-alpha="1.0" data-following-enable="false" data-exclude-show-more="true" data-selection-enable="true" class="uptolike-buttons" ></div>
<!--uptolike-->
</body>
</html>