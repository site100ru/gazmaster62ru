<?php

	/**
	 * Template Name: Наши работы
	 * Template Post Type: page, portfolio
	 */
	
	get_header();
	
?>
		
		
<!-- Header -->
<header>
	<div class="parallax"></div>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="mb-3">Наши работы</h1>
				<div class="breadcrumbs mb-4">
					<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/home-breadcrumbs.png"></a>
					<span class="mx-1">/</span>
					<span>Наши работы</span>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<!-- Portfolio -->
<div id="portfolio-sp" class="scroll-point"></div>
<section class="portfolio bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="row mb-5">
					<div class="col-md-6 mb-3 mb-md-0">
						<div id="carouselExampleControls-1" class="carousel slide" data-bs-ride="false"  data-bs-interval="false">
							<div class="carousel-inner shadow rounded">
								<div class="carousel-inner shadow rounded">
									<div class="carousel-item active">
										<a onClick="galleryOn( 'gal-1', 'img-1-1' );">	
											<div class="light">
												<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-img-1.jpg" class="d-block w-100" alt="...">
												<div class="magnifier"></div>
											</div>
										</a>
									</div>
									<div class="carousel-item">
										<a onClick="galleryOn('gal-1','img-1-2');">	
											<div class="light">
												<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-img-2.jpg" class="d-block w-100 lazyload" loading="lazy" alt="...">
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
					<button data-bs-toggle="modal" data-bs-target="#orderModal" class="btn btn-lg btn-corporate-color-1 mt-4">Рассчитать мою смету</button>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Portfolio -->


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
		
		
<?php get_footer(); ?>