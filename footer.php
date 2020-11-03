<footer class="row">
    <div class="row m0 footer-top">
        <div class="container">
            <div class="row footer-sidebar">

                <div class="widget about-us-widget col-sm-6 col-lg-3">
                    <a href="index.html" class="brand_logo">
                        <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_footer_logo' ), 'array(200, 68)'); ?>" alt="">
                    </a>
                    <p><?php echo carbon_get_theme_option( 'company_footer_description' );?></p>
                </div>

                <div class="widget widget-links col-sm-6 col-lg-3">
                    <h4 class="widget_title"><?php echo carbon_get_theme_option( 'company_footer_menu-title' );?></h4>
                    <div class="widget-contact-list row m0">
                        <ul>
                            <li><a href="/"><i class="fa fa-angle-right"></i><?php echo carbon_get_theme_option( 'menu-item-1-main-page' );?></a></li>
                            <li><a href="#about-own-page"><i class="fa fa-angle-right"></i><?php echo carbon_get_theme_option( 'menu-item-2-dress-models' );?></a></li>
                            <li><a href="#prem"><i class="fa fa-angle-right"></i><?php echo carbon_get_theme_option( 'menu-item-3-advantages' );?></a></li>
                            <li><a href="#testimonials"><i class="fa fa-angle-right"></i><?php echo carbon_get_theme_option( 'menu-item-4-reviews' );?></a></li>
                            <li><a href="#about-descr-wr"><i class="fa fa-angle-right"></i><?php echo carbon_get_theme_option( 'menu-item-5-about-company' );?></a></li>
                            <li><a href="#mp-wrap"><i class="fa fa-angle-right"></i><?php echo carbon_get_theme_option( 'menu-item-6-contacts' );?></a></li>
                        </ul>
                    </div>
                </div>

                <div class="widget widget-contact  col-sm-6 col-lg-3">
                    <h4 class="widget_title"><?php echo carbon_get_theme_option( 'company_footer_contacts-title' );?></h4>
                    <div class="widget-contact-list row m0">
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <div class="fleft location_address">
									<?php echo carbon_get_theme_option( 'company_address' );?>
                                </div>

                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <div class="fleft contact_no">
                                    <a href="tel:<?php echo carbon_get_theme_option( 'company_contact-phone-1' ); ?>"><?php echo carbon_get_theme_option( 'company_contact-phone-1-printing' ); ?></a>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <div class="fleft contact_no">
                                    <a href="tel:<?php echo carbon_get_theme_option( 'company_contact-phone-2' ); ?>"><?php echo carbon_get_theme_option( 'company_contact-phone-2-printing' ); ?></a>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <div class="fleft contact_mail">
                                    <a href="mailto:<?php echo carbon_get_theme_option( 'company_email' );?>"><?php echo carbon_get_theme_option( 'company_email' );?></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="widget widget4 widget-form col-sm-6 col-lg-3">
                    <h4 class="widget_title"><?php echo carbon_get_theme_option( 'company_footer_order-form-title' );?></h4>
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
    <div class="contact-form form-callback">

        <input type="hidden" name="admin-data">
        <input type="hidden" name="project_name" value="Название сайта">
        <input type="hidden" name="admin_email" value="bestlanding777@gmail.com">
        <input type="hidden" name="form_subject" value="Заявка с верхней формы">

        <div class="contact-form-head">
            <h4>Оставить заявку</h4>
        </div>
        <div>
          <?php echo do_shortcode( '[contact-form-7 id="33" title="Форма заказа"]' ); ?>
        </div>
        

        <div class="politic-conf" style="text-align:center;font-size:12px;padding-top:10px">
            <p>Отправляя сообщение, вы соглашаетесь с <a href="<?php echo get_template_directory_uri()?>/politic/" target="_blank">"Политикой конфиденциальности"</a></p>
        </div>
    </div>
    
</div>

<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri()?>/libs/html5shiv/es5-shim.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/libs/html5shiv/html5shiv.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/libs/respond/respond.min.js"></script>
<![endif]-->

<script src="<?php echo get_template_directory_uri()?>/libs/jquery/jquery-2.1.3.min.js"></script>
<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
<?php wp_footer(); ?>
</body>
</html>