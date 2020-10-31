<footer class="row">
    <div class="row m0 footer-top">
        <div class="container">
            <div class="row footer-sidebar">

                <div class="widget about-us-widget col-sm-6 col-lg-3">
                    <a href="index.html" class="brand_logo">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo/logo-white.png" alt="">
                    </a>
                    <p>Наше ателье - это эстетика, сдержанные линии, слегка переходящие в легкий романтизм, которые добавляют образу легкой нежности, теплоты, заботы, но при этом не уходя от четких жизненных позиций</p>
                </div>

                <div class="widget widget-links col-sm-6 col-lg-3">
                    <h4 class="widget_title">Меню</h4>
                    <div class="widget-contact-list row m0">
                        <ul>
                            <li><a href="#header"><i class="fa fa-angle-right"></i>Главная</a></li>
                            <li><a href="#about-own-page"><i class="fa fa-angle-right"></i>Модели платьев</a></li>
                            <li><a href="#prem"><i class="fa fa-angle-right"></i>Преимущества</a></li>
                            <li><a href="#testimonials"><i class="fa fa-angle-right"></i>Отзывы</a></li>
                            <li><a href="#about-descr-wr"><i class="fa fa-angle-right"></i>Об ателье</a></li>
                            <li><a href="#mp-wrap"><i class="fa fa-angle-right"></i>Контакты</a></li>
                        </ul>
                    </div>
                </div>

                <div class="widget widget-contact  col-sm-6 col-lg-3">
                    <h4 class="widget_title">Контакты</h4>
                    <div class="widget-contact-list row m0">
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <div class="fleft location_address">
                                    Адрес компании
                                </div>

                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <div class="fleft contact_no">
                                    <a href="+375000000000">+375 00 000 00 00</a>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <div class="fleft contact_no">
                                    <a href="+375000000000">+375 00 000 00 00</a>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <div class="fleft contact_mail">
                                    <a href="mailto:ваш-email@mail.ru">ваш-email@mail.ru</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="widget widget4 widget-form col-sm-6 col-lg-3">
                    <h4 class="widget_title">Заказать</h4>
                    <div class="widget-contact-list row m0">
                        <form class="submet-form row m0" action="#" method="post">
                            <input type="text" class="form-control" id="name" placeholder="Ваше имя">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                            <textarea class="form-control message" placeholder="Сообщение"></textarea>
                            <button class="submit" type="submit">Отправить</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

</footer>

<div class="hidden"></div>

<div id="callback" class="white-popup mfp-with-anim mfp-hide">
    <form class="contact-form form-callback">

        <input type="hidden" name="admin-data">
        <input type="hidden" name="project_name" value="Название сайта">
        <input type="hidden" name="admin_email" value="bestlanding777@gmail.com">
        <input type="hidden" name="form_subject" value="Заявка с верхней формы">

        <div class="contact-form-head">
            <h4>Оставить заявку</h4>
        </div>

        <label>
            <!--<span>Ваше имя:</span>-->
            <input type="text" name="Имя" placeholder="Ваше имя...">
        </label>

        <label>
            <!--<span>Ваш телефон:</span>-->
            <input type="text" name="Телефон" placeholder="Ваш телефон..." required>
        </label>

        <div class="text-center">
            <button class="button button-small">Отправить</button>
        </div>

        <div class="politic-conf" style="text-align:center;font-size:12px;padding-top:10px">
            <p>Отправляя сообщение, вы соглашаетесь с <a href="politic.html" target="_blank">"Политикой конфиденциальности"</a></p>
        </div>

    </form>
</div>

<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri()?>/libs/html5shiv/es5-shim.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/libs/html5shiv/html5shiv.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/libs/respond/respond.min.js"></script>
<![endif]-->

<script src="<?php echo get_template_directory_uri()?>/libs/jquery/jquery-2.1.3.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/libs/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/libs/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/libs/mixitup/mixitup.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/libs/waypoints/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/libs/equalHeights/equalHeights.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/libs/scroll2id/PageScroll2id.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/scripts.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/common.js"></script>
<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>