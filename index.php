<?php

	/**
	 * Template Name: Главная
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
				<h1>Монтаж систем отопления, водоснабжения и водоотведения</h1>
				<h2 class="header-subtitle">Продажа отопительного оборудования и запчастей</h2>
				
				<!-- Header advantages block -->
				<div class="row py-2 py-lg-3">
					<div class="col-md-6 col-xl-3">
						<div class="header-advantage-float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/header-advantage-ico-1.png" class="img-fluid">
						</div>
						<div class="header-advantage-float-right">
							<h3 class="header-advantage-title">Более 8 лет</h3>
							<p class="header-advantage-description">Средний стаж работы нашего инженера</p>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="header-advantage-float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/header-advantage-ico-2.png" class="img-fluid">
						</div>
						<div class="header-advantage-float-right">
							<h3 class="header-advantage-title">Гарантия до 10 лет</h3>
							<p class="header-advantage-description">На все наши работы и услуги</p>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="header-advantage-float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/header-advantage-ico-3.png" class="img-fluid">
						</div>
						<div class="header-advantage-float-right">
							<h3 class="header-advantage-title">Фиксированная смета</h3>
							<p class="header-advantage-description">В процессе цена и сроки не изменятся</p>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="header-advantage-float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/header-advantage-ico-4.png" class="img-fluid">
						</div>
						<div class="header-advantage-float-right">
							<h3 class="header-advantage-title">Экономия до 50%</h3>
							<p class="header-advantage-description mb-3 mb-lg-4">При покупке отопительного оборудования и запчастей</p>
						</div>
					</div>
				</div><!-- /Header advantages block -->
				<button data-bs-toggle="modal" data-bs-target="#orderModal" class="btn btn-lg btn-corporate-color-1">Предварительный расчет</button>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<!-- Archive cat product section -->
<section class="archive-product-cat-section pt-5 pb-2">
	<div class="container site-section">
		<div class="row">
			<div class="col">
				<h2>Наши услуги</h2>
				<!--p class="section-sutitle text-center mb-5"></p-->
				<div class="section-title-decoration text-center mb-5"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-decoration-image.png"></div>

				<div class="row justify-content-center">
					<div class="col-md-4 mb-5">
						<div class="approximation shadow rounded">
							<a href="https://gazmaster62.ru/service/montazh-sistem-otopleniya/">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-img-1.jpg" alt="">
								<div class="card-wrapper">
									<!--div class="flag">
										<div class="flag-old-price">100 руб</div>
										<div class="flag-price">200 руб</div>
									</div-->
									<h3>Монтаж систем отопления</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="approximation shadow rounded">
							<a href="https://gazmaster62.ru/service/montazh-sistem-vodosnabzheniya/">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-img-2.jpg" alt="">
								<div class="card-wrapper">
									<!--div class="flag">
										<div class="flag-old-price">100 руб</div>
										<div class="flag-price">200 руб</div>
									</div-->
									<h3>Монтаж систем водоснабжения</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="approximation shadow rounded">
							<a href="https://gazmaster62.ru/service/montazh-sistem-vodootvedeniya/">
								<img src="<?php echo get_template_directory_uri(); ?>/img/vodootvedenie.jpg" alt="">
								<div class="card-wrapper">
									<!--div class="flag">
										<div class="flag-old-price">100 руб</div>
										<div class="flag-price">200 руб</div>
									</div-->
									<h3>Монтаж систем водоотведения</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="approximation shadow rounded">
							<a href="https://gazmaster62.ru/service/sistemy-vodoochistki/">
								<img src="<?php echo get_template_directory_uri(); ?>/img/vodoochistka.jpg" alt="">
								<div class="card-wrapper">
									<!--div class="flag">
										<div class="flag-old-price">100 руб</div>
										<div class="flag-price">200 руб</div>
									</div-->
									<h3>Монтаж систем водоочистки</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="approximation shadow rounded">
							<a href="https://gazmaster62.ru/service/remont-and-obsluzhivanie/">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-img-6.jpg" alt="">
								<div class="card-wrapper">
									<!--div class="flag">
										<div class="flag-old-price">100 руб</div>
										<div class="flag-price">200 руб</div>
									</div-->
									<h3>Техническое обслуживание и ремонт</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="approximation shadow rounded">
							<a href="https://gazmaster62.ru/catalog/">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-img-3.jpg" alt="">
								<div class="card-wrapper">
									<!--div class="flag">
										<div class="flag-old-price">100 руб</div>
										<div class="flag-price">200 руб</div>
									</div-->
									<h3>Продажа отопительного оборудования и запчастей</h3>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Archive cat product section -->


<!-- Portfolio -->
<div id="portfolio-sp" class="scroll-point"></div>
<section class="portfolio bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2>Наши услуги</h2>
				<!--p class="section-sutitle text-center mb-5"></p-->
				<div class="section-title-decoration text-center mb-5"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-decoration-image.png"></div>
				<div class="row mb-5">
					<div class="col-md-6 mb-3 mb-md-0">
						<div id="carouselExampleControls-1" class="carousel slide" data-bs-ride="false"  data-bs-interval="false">
							<div class="carousel-inner shadow rounded">
								<div class="carousel-inner shadow rounded">
									<div class="carousel-item active">
										<a onClick="galleryOn( 'gal-1', 'img-1-1' );">	
											<div class="light">
												<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1-1.webp" class="d-block w-100" alt="...">
												<div class="magnifier"></div>
											</div>
										</a>
									</div>
									<div class="carousel-item">
										<a onClick="galleryOn('gal-1','img-1-2');">	
											<div class="light">
												<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1-2.webp" class="d-block w-100 lazyload" loading="lazy" alt="...">
												<div class="magnifier"></div>
											</div>
										</a>
									</div>
									<div class="carousel-item">
										<a onClick="galleryOn('gal-1','img-1-3');">	
											<div class="light">
												<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1-3.webp" class="d-block w-100 lazyload" loading="lazy" alt="...">
												<div class="magnifier"></div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls-1"  data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls-1"  data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
					
					<div class="col-md-6">
						<h3>Монтаж системы отопления в частном доме</h3>
						<h5>Что сделано:</h5>
						<ul>
							<li>Монтаж котла Baxi.</li>
							<li>Монтаж бойлера Drazice.</li>
							<li>Монтаж насоса Grundfos.</li>
							<li>Монтаж источника бесперебойного питания CyberPower.</li>
							<li>Монтаж расширительных баков Reflex.</li>
							<li>Монтаж запорной арматуры Stout Itap Watts.</li>
							<li>Монтаж трубопровода Kalde.</li>
						</ul>
						<!--h5>Сроки выполнения работ: <span>61 день</span></h5>
						<h5>Стоимость работ: <span>250 000 руб</span></h5>
						<h5>Стоимость оборудования: <span>625 000 руб</span></h5-->
					</div>
				</div>
				
				<div class="row mb-5">
					<div class="col-md-6 mb-3 mb-md-0">
						<div id="carouselExampleControls-2" class="carousel slide" data-bs-ride="false"  data-bs-interval="false">
							<div class="carousel-inner shadow rounded">
								<div class="carousel-inner shadow rounded">
									<div class="carousel-item active">
										<a onClick="galleryOn( 'gal-2', 'img-2-1' );">	
											<div class="light">
												<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-img-2.jpg" class="d-block w-100" alt="...">
												<div class="magnifier"></div>
											</div>
										</a>
									</div>
									<div class="carousel-item">
										<a onClick="galleryOn('gal-2','img-2-2');">	
											<div class="light">
												<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-img-3.jpg" class="d-block w-100 lazyload" loading="lazy" alt="...">
												<div class="magnifier"></div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls-2"  data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls-2"  data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
					
					<div class="col-md-6">
						<h3>Монтаж системы отопления в кирпичном доме 250 кв.м.</h3>
						<h5>Что сделано:</h5>
						<ul>
							<li>Монтаж газового котла отопления</li>
							<li>Монтаж системы водоочистки</li>
							<li>Монтаж системы водоотведения</li>
						</ul>
						<h5>Сроки выполнения работ: <span>61 день</span></h5>
						<h5>Стоимость работ: <span>250 000 руб</span></h5>
						<h5>Стоимость оборудования: <span>625 000 руб</span></h5>
					</div>
				</div>
				
				<div class="row mb-5">
					<div class="col-md-6 mb-3 mb-md-0">
						<div id="carouselExampleControls-3" class="carousel slide" data-bs-ride="false"  data-bs-interval="false">
							<div class="carousel-inner shadow rounded">
								<div class="carousel-inner shadow rounded">
									<div class="carousel-item active">
										<a onClick="galleryOn( 'gal-3', 'img-3-1' );">	
											<div class="light">
												<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-img-3.jpg" class="d-block w-100" alt="...">
												<div class="magnifier"></div>
											</div>
										</a>
									</div>
									<div class="carousel-item">
										<a onClick="galleryOn('gal-3','img-3-2');">	
											<div class="light">
												<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-img-1.jpg" class="d-block w-100 lazyload" loading="lazy" alt="...">
												<div class="magnifier"></div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls-3"  data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls-3"  data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
					
					<div class="col-md-6">
						<h3>Монтаж системы отопления в кирпичном доме 250 кв.м.</h3>
						<h5>Что сделано:</h5>
						<ul>
							<li>Монтаж газового котла отопления</li>
							<li>Монтаж системы водоочистки</li>
							<li>Монтаж системы водоотведения</li>
						</ul>
						<h5>Сроки выполнения работ: <span>61 день</span></h5>
						<h5>Стоимость работ: <span>250 000 руб</span></h5>
						<h5 class="mb-0">Стоимость оборудования: <span>625 000 руб</span></h5>
					</div>
				</div>
				
				<div class="text-center">
					<a href="https://gazmaster62.ru/наши-работы/">Смотреть еще работы</a>
					<br>
					<button data-bs-toggle="modal" data-bs-target="#orderModal" class="btn btn-lg btn-corporate-color-1 mt-4">Рассчитать мою смету</button>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Portfolio -->


<!-- About us section -->
<section class="order-section bg-white">
	<div class="order-section-img d-none d-xl-block" style="background: url(<?php echo get_template_directory_uri(); ?>/img/about-us-section-img-1.jpg) center; background-size: cover; right: 50%; left: 0%;"></div>
	<div class="container py-0">
		<div class="row align-items-center">
			<div class="offset-xl-7 col-xl-5">
				<h2 class="text-start">О нас</h2>
				<!--p class="section-sutitle text-center mb-5"></p-->
				<div class="section-title-decoration text-xxl-center mb-5"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-decoration-image.png"></div>
				<p>Компания «Газмастер» является специализированным предприятием, работающим на рынке монтажа, обслуживания и ремонта систем отопления, водоснабжения и водоподготовки.</p>
				<p class="mb-0">Мы предлагаем нашим клиентам полный комплекс работ по созданию благоприятного климата в Вашем доме. Специалисты фирмы всегда готовы оказать консультационные услуги по всем интересующим вас вопросам, подобрать оборудование в соответствии с техническими условиями и вашими пожеланиями, быстро и качественно выполнить расчет и монтаж систем отопления, ввести оборудование в эксплуатацию, произвести диагностику и обследование существующих систем, осуществить техническое обслуживание, гарантийный и послегарантийный ремонт систем отопления и кондиционирование.</p>
			</div>
			<div class="col-xl-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/about-us-section-img-1.jpg" class="img-fluid rounded d-xl-none mt-5">
			</div>
		</div>
	</div>
</section>
<!-- /About us section -->


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