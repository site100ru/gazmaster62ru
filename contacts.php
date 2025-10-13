<?php

	/**
	 * Template Name: Контакты
	 * Template Post Type: page
	 */
	
	get_header();
	
?>
		
		
<!-- Header -->
<header>
	<div class="parallax"></div>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="mb-3">Контакты</h1>
				<div class="breadcrumbs mb-4">
					<?php true_breadcrumbs(); ?>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<!-- Contacts section -->
<section class="contacts-section-2 bg-white pb-5">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-4 py-5">
				<ul style="list-style: none; padding-left: 0;">
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-corporate-color-1-ico.png">
						</div>
						<div class="float-right">
							<strong>Офис:</strong> <?php echo get_theme_mod( 'mytheme_address' ); ?>
						</div>
						<div style="clear: both;"></div>
					</li>
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-corporate-color-1-ico.png">
						</div>
						<div class="float-right">
							<strong>Время работы:</strong> <?php echo get_theme_mod( 'mytheme_job_time' ); ?>
						</div>
						<div style="clear: both;"></div>
					</li>
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/phone-corporate-color-1-ico.png">
						</div>
						<div class="float-right">
							<strong>Телефон:</strong> <a href="tel:<?php echo get_theme_mod( 'mytheme_main_phone_country_code' ); echo get_theme_mod( 'mytheme_main_phone_region_code' ); echo str_replace(array('-'), '', get_theme_mod( 'mytheme_main_phone_number' )); ?>"><?php echo get_theme_mod( 'mytheme_main_phone_country_code' ); ?> (<?php echo get_theme_mod( 'mytheme_main_phone_region_code' ); ?>) <?php echo get_theme_mod( 'mytheme_main_phone_number' ); ?></a>
						</div>
						<div style="clear: both;"></div>
					</li>
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-corporate-color-1-ico.png">
						</div>
						<div class="float-right">
							<strong>Email:</strong> <a href="mailto:<?php echo get_theme_mod( 'mytheme_email' ); ?>"><?php echo get_theme_mod( 'mytheme_email' ); ?></a>
						</div>
						<div style="clear: both;"></div>
					</li>
				</ul>
			</div>
			<div class="col-md-4 py-5">
				<ul style="list-style: none; padding-left: 0;">
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-corporate-color-1-ico.png">
						</div>
						<div class="float-right">
							<strong>WhatsApp:</strong> <a href="tel:<?php echo get_theme_mod( 'mytheme_main_phone_country_code' ); echo get_theme_mod( 'mytheme_main_phone_region_code' ); echo str_replace(array('-'), '', get_theme_mod( 'mytheme_main_phone_number' )); ?>"><?php echo get_theme_mod( 'mytheme_main_phone_country_code' ); ?> (<?php echo get_theme_mod( 'mytheme_main_phone_region_code' ); ?>) <?php echo get_theme_mod( 'mytheme_main_phone_number' ); ?></a>
						</div>
						<div style="clear: both;"></div>
					</li>
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-corporate-color-1-ico.png">
						</div>
						<div class="float-right">
							<strong>Telegram:</strong> <a href="<?php echo get_theme_mod( 'mytheme_telegram' ); ?>"><?php echo get_theme_mod( 'mytheme_telegram' ); ?></a>
						</div>
						<div style="clear: both;"></div>
					</li>
					<!--li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/instagram-corporate-color-1-ico.png">
						</div>
						<div class="float-right">
							<strong>Instagram:</strong> <a href="#">@name</a>
						</div>
						<div style="clear: both;"></div>
					</li>
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-corporate-color-1-ico.png">
						</div>
						<div class="float-right">
							<strong>Вконтакте:</strong> <a href="https://vk.com/name">name</a>
						</div>
						<div style="clear: both;"></div>
					</li-->
				</ul>
			</div>
			<div class="col-md-4 py-5">
				<ul style="list-style: none; padding-left: 0;">
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/company-corporate-color-1-ico.png">
						</div>
						<div class="float-right">
							<strong>Наименование организации:</strong> ООО«Орион»
						</div>
						<div style="clear: both;"></div>
					</li>
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/company-corporate-color-1-ico.png">
						</div>
						<div class="float-right">
							<strong>ИНН:</strong> 6229039979
						</div>
						<div style="clear: both;"></div>
					</li>
					<!--li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/company-corporate-color-1-ico.png">
						</div>
						<div class="float-right">
							<strong>КПП:</strong> 504001001
						</div>
						<div style="clear: both;"></div>
					</li>
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/company-corporate-color-1-ico.png">
						</div>
						<div class="float-right">
							<strong>ОГРН:</strong> 1185027024643
						</div>
						<div style="clear: both;"></div>
					</li-->
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div id="map"></div>
			</div>
		</div>
	</div>

	
	<div class="container">
		<div class="row">
			<div class="col">
				<h2>Есть вопросы?</h2>
				<h3 class="section-sutitle text-center">Напишите нам!</h3>
				<div class="section-title-decoration text-center mb-5"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-decoration-image.png"></div>
				
				<div class="row">
					<div class="col">
						<form style="background: #f5f5f5; padding: 50px; padding-top: 35px;">
							<div class="row justify-content-center">
								<div class="col-md-5">
									<label for="contactsTextarea" class="form-label">Ваше сообщение:</label>
									<textarea id="contactsTextarea" class="form-control mb-3 mb-md-0" style="height: 180px;"></textarea>
								</div>
								<div class="col-md-3">
									<label for="contactsName" class="form-label">Ваше сообщение:</label>
									<input id="contactsName" type="text" name="name" class="form-control mb-3">
									<label for="contactsEmail" class="form-label">Ваше сообщение:</label>
									<input id="contactsEmail" type="email" name="email" class="form-control mb-3">
									<input type="submit" class="btn btn-corporate-color-1 w-100">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!-- /Contacts section -->
		
		
<?php get_footer(); ?>