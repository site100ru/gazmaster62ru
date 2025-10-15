<?php
	
	session_start();
	if ( isset( $_SESSION['win'] ) ) {
		unset( $_SESSION['win'] );
		$_SESSION['display'] = "block";
	} else { $_SESSION['display'] = "none"; }
	
?>
<!doctype html>
<html lang="ru">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="<?php echo_description(); ?>" />
        <meta property="og:description" content="<?php echo_description(); ?>" />
        <meta name="keywords" content="<?php echo wp_get_document_title(); ?>" />
        <meta property="og:locale" content="ru_RU" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
        <meta property="og:title" content="<?php echo wp_get_document_title(); ?>" />

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<!-- Style CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/theme.css" rel="stylesheet">

		<!-- <title>Монтаж систем отопления, водоснабжения и водоотведения</title> -->

        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon-light-1.svg" type="image/x-icon" id="favicon">

        <title><?php echo wp_get_document_title(); ?></title>

        <?php if ($counter_head = get_theme_mod('mytheme_counter_head')): ?>
            <!-- Код счетчика в (head) -->
            <?php echo $counter_head; ?>
        <?php endif; ?>
    
	</head>
	<body data-bs-spy="scroll" data-bs-target="#top-menu-2" data-bs-offset="75" class="scrollspy-example" tabindex="0">

		<div id="home-sp" class="scroll-point"></div>
		<nav id="top-menu-1" class="navbar navbar-expand-xl navbar-light d-none d-lg-block py-1">
			<div class="container">
				<div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
						
						<!-- Адрес -->
						<?php if ( get_theme_mod( 'mytheme_address' ) ) : ?>
						<li class="nav-item me-5">
							<span class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.png" class="me-2"><?php echo get_theme_mod( 'mytheme_address' ); ?></span>
						</li>
						<?php endif; ?>
						
						<!-- Время работы -->
						<?php if ( get_theme_mod( 'mytheme_job_time' ) ) : ?>
						<li class="nav-item me-5">
							<div class="row align-items-center">
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.png" style="position: relative; right: -8px;">
								</div>
								<div class="col-10">
									<span class="nav-link" style="line-height: 20px;"><?php echo get_theme_mod( 'mytheme_job_time' ); ?></span>
								</div>
							</div>
						</li>
						<?php endif; ?>
						
						<!-- Email -->
						<?php if ( get_theme_mod( 'mytheme_email' ) ) : ?>
						<li class="nav-item me-5">
							<a href="mailto:<?php echo get_theme_mod( 'mytheme_email' ); ?>" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.png" class="me-2"><?php echo get_theme_mod( 'mytheme_email' ); ?></a>
						</li>
						<?php endif; ?>
						
						<!-- Основной номер телефона -->
						<?php if ( get_theme_mod( 'mytheme_main_phone_number' ) ) : ?>
						<li class="nav-item me-5">
							<a href="tel:<?php echo get_theme_mod( 'mytheme_main_phone_country_code' ); echo get_theme_mod( 'mytheme_main_phone_region_code' ); echo str_replace(array('-'), '', get_theme_mod( 'mytheme_main_phone_number' )); ?>" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telephone-ico.png" class="me-2"><?php echo get_theme_mod( 'mytheme_main_phone_country_code' ); ?> (<?php echo get_theme_mod( 'mytheme_main_phone_region_code' ); ?>) <?php echo get_theme_mod( 'mytheme_main_phone_number' ); ?></a>
						</li>
						<?php endif; ?>
						
						<!-- Whatsapp -->
						<?php if ( get_theme_mod( 'mytheme_whatsapp' ) ) : ?>
							<li class="nav-item">
								<a class="nav-link ico-button pe-0" href="<?php echo get_theme_mod( 'mytheme_whatsapp' ); ?>" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png">
								</a>
							</li>
						<?php endif; ?>
						
						<!-- Telegram -->
						<?php if ( get_theme_mod( 'mytheme_telegram' ) ) : ?>
							<li class="nav-item">
								<a class="nav-link ico-button pe-0" href="<?php echo get_theme_mod( 'mytheme_telegram' ); ?>" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png">
								</a>
							</li>
						<?php endif; ?>
						
						<!-- Vkontakte -->
						<?php if ( get_theme_mod( 'mytheme_vk' ) ) : ?>
							<li class="nav-item">
								<a class="nav-link ico-button pe-0" href="<?php echo get_theme_mod( 'mytheme_vk' ); ?>" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.png">
								</a>
							</li>
						<?php endif; ?>

						<!--li class="nav-item">
							<a class="nav-link ico-button pe-0" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a>
						</li-->
					</ul>
				</div>
			</div>
		</nav>
		
		
		<nav id="top-menu-2" class="navbar navbar-expand-xl navbar-dark py-md-4"><!-- py-3 -->
			<div class="container">
				<a class="navbar-brand" href="#">
					<img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/ico/logo.png" style="transition: .25s;">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent2">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0 pt-3 pt-md-0">
						
						<?php
							wp_nav_menu(array(
								'theme_location' => 'main-menu',
								'container' => false,
								'menu_class' => '',
								'fallback_cb' => '__return_false',
								'items_wrap' => '
									<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 %2$s">%3$s
										<!-- Mobile menu -->
										<li class="nav-item d-xl-none pt-2">
											<a class="ico-button pe-2" href="'.get_theme_mod( 'mytheme_whatsapp' ).'"><img src="'.get_template_directory_uri().'/img/ico/whatsapp-ico.png"></a>
											<a class="ico-button pe-2" href="'.get_theme_mod( 'mytheme_telegram' ).'"><img src="'.get_template_directory_uri().'/img/ico/telegram-ico.png"></a>
											
											<!--a class="ico-button pe-2" href="viber://chat?number=78008808088"><img src="'.get_template_directory_uri().'/img/ico/viber-ico.png"></a>
											<a class="ico-button pe-2" href="https://www.instagram.com/stock_line_msk"><img src="'.get_template_directory_uri().'/img/ico/inst-ico.png"></a>
											<a class="ico-button" href="https://vk.com/stock_line"><img src="'.get_template_directory_uri().'/img/ico/vk-ico.png"></a-->
										</li>
										<!-- End mobile menu -->
									</ul>
								',
								'depth' => 2,
								'walker' => new bootstrap_5_wp_nav_menu_walker()
							));
						?>
						
						<!--li class="nav-item">
							<a class="nav-link active" href="index.html">Главная</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Наши&nbsp;услуги
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="single-service.html">Отопление</a></li>
								<li><a class="dropdown-item" href="single-service.html">Водоснабжение</a></li>
								<li><a class="dropdown-item" href="single-service.html">Водоотведение</a></li>
								<li><a class="dropdown-item" href="single-service.html">Ремонт и обслуживание</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="archive-product.html">Каталог&nbsp;товаров</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about-us.html">О&nbsp;нас</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="portfolio.html">Наши&nbsp;работы</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contacts.html">Контакты</a>
						</li-->
						<!-- Mobile menu -->
						<!--li class="nav-item d-xl-none">
							<a class="nav-link" href="#">Предварительный расчет</a>
						</li>
						<li class="nav-item d-xl-none">
							<a class="nav-link" href="#">Вызвать инженера</a>
						</li>
						<li class="nav-item d-xl-none mb-2">
							<a id="top-menu-tel" class="nav-link" href="tel:88008808088">8 (800) 880-80-88</a>
						</li>
						<li class="nav-item d-xl-none">
							<a class="ico-button pe-2" href="whatsapp://send?phone=+79778073386" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
							<a class="ico-button pe-2" href="tg://resolve?domain=elansky_dmitry" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
							<a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a>
							<a class="ico-button" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.png"></a>
						</li-->
						<!-- End mobile menu -->
						
					</ul>
				</div>
			</div>
		</nav> 