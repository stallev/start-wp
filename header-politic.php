<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Политика конфиденциальности</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="keywords" content="купить адаптивный сайт для продажи платьев, создать адаптивный сайт для продажи платьев, разработать адаптивный сайт для продажи платьев, заказать сайт для продажи платьев">
	<meta name="description" content="Веб-студия Интех https://inteh-studio.com/ и http://inteh-studio.ru/ рекомендует купить адаптивный сайт для продажи платьев.">
	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/img/logo/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri()?>/img/logo/logo-1.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri()?>/img/logo/logo-2.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri()?>/img/logo/logo-3.png">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/media.css" />
	
	<?php wp_head(); ?>

</head>
<body>

<header id="header">
	
	<div class="adress-line">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p> <span>Адрес:</span> <?php echo carbon_get_theme_option( 'company_address' ); ?></p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="logo-adr-line">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12">
					<div class="mobile-center">
						<a href="index.html">
							<div class="logo">
								<img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo' ), 'array(140, 48)'); ?>" alt="Логотип">
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 text-center">
					<div class="head_text">
						<p class="first_p_wrap"><?php echo carbon_get_theme_option( 'company_occupation' ); ?></p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<div class="header-number">
						<ul>
							<li><a href="tel:<?php echo carbon_get_theme_option( 'company_contact-phone-1' ); ?>"><?php echo carbon_get_theme_option( 'company_contact-phone-1-printing' ); ?> </a></li>
							<li><a href="tel:<?php echo carbon_get_theme_option( 'company_contact-phone-2' ); ?>"><?php echo carbon_get_theme_option( 'company_contact-phone-2-printing' ); ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	


</header>
