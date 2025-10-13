<?php

	/**
	 * Template Name: Услуги
	 * Template Post Type: page, service
	 */
	
	get_header();
	
?>
		
		
<!-- Header -->
<header>
	<div class="parallax"></div>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="mb-3"><?php wp_title( "", true ); ?></h1>
				<div class="breadcrumbs mb-4">
					<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/home-breadcrumbs.png"></a>
					<span class="mx-1">/</span>
					<span><?php wp_title( "", true ); ?></span>
				</div>
				
				
				<button data-bs-toggle="modal" data-bs-target="#orderModal" class="btn btn-lg btn-corporate-color-1">Предварительный расчет</button>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<!-- Section descount prices -->
<section class="prices-section bg-white py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<?php
					while( have_posts() ) {
						the_post();
						the_content();
					}
				?>
			</div>
		</div>
	</div>
</section>
<!-- /Section descount prices -->
		
		
<!-- Advantages -->
<div id="advantages-sp" class="scroll-point"></div>
<section class="advantages bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2>Наши преимущества</h2>
				<!--p class="section-sutitle text-center mb-5"></p-->
				<div class="section-title-decoration text-center mb-5"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-decoration-image.png"></div>
				<div class="row justify-content-center gx-0">
					<div class="col-md-4 mb-5">
						<div class="row gx-0">
							<div class="col-3 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-section-ico-1.png" class="img-fluid">
							</div>
							<div class="col-9">
								<h3>Большой опыт работы</h3>
								<p class="mb-0">Средний стаж работы нашего инженера более 8 лет.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row gx-0">
							<div class="col-3 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-section-ico-2.png" class="img-fluid">
							</div>
							<div class="col-9">
								<h3>Гарантия до 10 лет</h3>
								<p class="mb-0">Гарантия на все наши работы и услуги до 10 лет.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row gx-0">
							<div class="col-3 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-section-ico-3.png" class="img-fluid">
							</div>
							<div class="col-9">
								<h3>Фиксированная цена и сроки</h3>
								<p class="mb-0">После подписания договора цена и сроки не изменятся.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row gx-0">
							<div class="col-3 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-section-ico-4.png" class="img-fluid">
							</div>
							<div class="col-9">
								<h3>Скидки до 50%</h3>
								<p class="mb-0">Скидка до 50% при покупке отопительного оборудования и запчастей.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row gx-0">
							<div class="col-3 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-section-ico-5.png" class="img-fluid">
							</div>
							<div class="col-9">
								<h3>Современные технологии</h3>
								<p class="mb-0">Используем современные решения, обеспечивающие комфорт в пользовании системой отопления.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row gx-0">
							<div class="col-3 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-section-ico-6.png" class="img-fluid">
							</div>
							<div class="col-9">
								<h3>Все работы под ключ</h3>
								<p class="mb-0">Оказываем полный спектр услуг в области отопления, водоснабжения и водотведения.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Advantages -->


<!-- Advantages -->
<div id="advantages-sp" class="scroll-point"></div>
<section class="advantages bg-white pt-5 pb-3">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2>Как мы работаем</h2>
				<!--p class="section-sutitle text-center mb-5"></p-->
				<div class="section-title-decoration text-center mb-5"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-decoration-image.png"></div>
				<div class="row justify-content-center gx-0">
					<div class="col-md-4 mb-5">
						<div class="row gx-0">
							<div class="col-3 text-center pt-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/1.png" class="img-fluid">
							</div>
							<div class="col-9">
								<p class="mb-0">Позвоните нам по телефону или оставьте заявку на сайте.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row gx-0">
							<div class="col-3 text-center pt-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/2.png" class="img-fluid">
							</div>
							<div class="col-9">
								<p class="mb-0">Наш инженер выезжает к Вам на объект для уточнения деталей будущего проекта.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row gx-0">
							<div class="col-3 text-center pt-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/3.png" class="img-fluid">
							</div>
							<div class="col-9">
								<p class="mb-0">Расчет сметы проекта, заключение договора при Вашем положительном решении.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row gx-0">
							<div class="col-3 text-center pt-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/4.png" class="img-fluid">
							</div>
							<div class="col-9">
								<p class="mb-0">Подбираем и закупаем оборудование и материал, производим монтаж.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row gx-0">
							<div class="col-3 text-center pt-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/5.png" class="img-fluid">
							</div>
							<div class="col-9">
								<p class="mb-0">Проводим пусконаладочные работы, сдаем объект.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row gx-0">
							<div class="col-3 text-center pt-2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/6.png" class="img-fluid">
							</div>
							<div class="col-9">
								<p class="mb-0">Регулярно проводим гарантийное обслуживание системы.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Advantages -->


<!-- Order section -->
<section class="order-section bg-light">
	<div class="container"> <!-- container/container-fluid -->
		<div class="row justify-content-center">
			<div class="col-lg-10 py-lg-5" style="position: relative;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ico/order-section-men.png" class="d-none d-lg-block" style="max-width: 425px; position: absolute; bottom: -300px; left: 50px;">
				<div class="row">
					<div class="col-lg-6 offset-lg-6 py-5 my-0 my-lg-3 text-dark">
						<h2 class="mb-5">Рассчитайте предварительную смету или вызовите инженера для расчета точной стоимости Вашего проекта</h2>
						<div class="btn-group" role="group" aria-label="Basic example">
							<button type="button" class="btn btn-lg btn-corporate-color-1 mb-3 mb-md-0" style="width: 250px; padding-left: 10px; padding-right: 10px;" data-bs-toggle="modal" data-bs-target="#orderModal">Предварительный расчет</button>
							<button type="button" class="btn btn-lg btn-corporate-color-outline-1" style="width: 250px; padding-left: 10px; padding-right: 10px;" data-bs-toggle="modal" data-bs-target="#orderModal">Вызвать инженера</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Order section -->
		
		
<?php get_footer(); ?>