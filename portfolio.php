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
				<h2>Наши работы</h2>
				<div class="section-title-decoration text-center mb-5">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-decoration-image.png" alt="Decoration">
				</div>

				<?php
				// Запрос для получения всех работ из портфолио
				$args = array(
					'post_type' => 'portfolio',
					'posts_per_page' => -1, // Выводим все записи
					'orderby' => 'date',
					'order' => 'DESC'
				);
				
				$portfolio_query = new WP_Query($args);
				
				if ($portfolio_query->have_posts()) :
					$portfolio_counter = 0;
					
					while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
						$portfolio_counter++;
						$post_id = get_the_ID();
						
						// Получаем изображения из метаполей
						$images = array();
						for ($i = 1; $i <= 9; $i++) {
							$img_url = get_post_meta($post_id, '_img-' . $i, true);
							if (!empty($img_url)) {
								$images[] = $img_url;
							}
						}
						
						// Если нет изображений, используем миниатюру поста или дефолтные
                        if (has_post_thumbnail()) {
                            $thumbnail_id = get_post_thumbnail_id($post_id);
                            $images[] = wp_get_attachment_image_url($thumbnail_id, 'full');
						}
						
						// Ограничиваем до первых 9 изображений для галереи
						$images = array_slice($images, 0, 9);
						?>
						
						<div class="row mb-5">
							<div class="col-md-6 mb-3 mb-md-0">
								<div id="carouselExampleControls-<?php echo $portfolio_counter; ?>" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
									<div class="carousel-inner shadow rounded">
										<?php foreach ($images as $index => $image_url) : ?>
											<div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
												<a href="#" data-bs-toggle="modal" data-bs-target="#portfolioModal<?php echo $portfolio_counter; ?>" data-slide-index="<?php echo $index; ?>" class="portfolio-image-link">
													<div class="light">
														<img src="<?php echo esc_url($image_url); ?>" class="d-block w-100 <?php echo $index > 0 ? 'lazyload' : ''; ?>" <?php echo $index > 0 ? 'loading="lazy"' : ''; ?> alt="<?php echo esc_attr(get_the_title()); ?>">
														<div class="magnifier"></div>
													</div>
												</a>
											</div>
										<?php endforeach; ?>
									</div>
									
									<?php if (count($images) > 1) : ?>
										<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls-<?php echo $portfolio_counter; ?>" data-bs-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Previous</span>
										</button>
										<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls-<?php echo $portfolio_counter; ?>" data-bs-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Next</span>
										</button>
									<?php endif; ?>
								</div>
							</div>
							
							<div class="col-md-6">
								<h3><?php the_title(); ?></h3>
								
								<?php if (get_the_content()) : ?>
									<?php the_content(); ?>
								<?php endif; ?>
							</div>
						</div>
						
					<?php endwhile;
					wp_reset_postdata();
				?>
				<?php endif; ?>
				
				<div class="text-center">
					<button data-bs-toggle="modal" data-bs-target="#orderModal" class="btn btn-lg btn-corporate-color-1 mt-4">Рассчитать мою смету</button>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Portfolio Modals -->
<?php
if ($portfolio_query->have_posts()) :
	$portfolio_query->rewind_posts();
	$modal_counter = 0;
	
	while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
		$modal_counter++;
		$post_id = get_the_ID();
		
		// Получаем изображения
		$modal_images = array();
		for ($i = 1; $i <= 9; $i++) {
			$img_url = get_post_meta($post_id, '_img-' . $i, true);
			if (!empty($img_url)) {
				$modal_images[] = $img_url;
			}
		}
		
        if (has_post_thumbnail()) {
            $thumbnail_id = get_post_thumbnail_id($post_id);
            $modal_images[] = wp_get_attachment_image_url($thumbnail_id, 'full');
        }
		
		$modal_images = array_slice($modal_images, 0, 9);
		?>
		
		<!-- Modal <?php echo $modal_counter; ?> -->
		<div class="modal fade" id="portfolioModal<?php echo $modal_counter; ?>" tabindex="-1" aria-labelledby="portfolioModalLabel<?php echo $modal_counter; ?>" aria-hidden="true">
			<div class="modal-dialog modal-fullscreen">
				<div class="modal-content" style="background: rgba(0,0,0,0.85);">
					<div class="modal-header border-0">
						<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body d-flex align-items-center justify-content-center p-0">
						<div id="carouselModal<?php echo $modal_counter; ?>" class="carousel slide w-100 h-100" data-bs-ride="false" data-bs-interval="false">
							<?php if (count($modal_images) > 1) : ?>
								<div class="carousel-indicators">
									<?php foreach ($modal_images as $img_index => $img_url) : ?>
										<button type="button" data-bs-target="#carouselModal<?php echo $modal_counter; ?>" data-bs-slide-to="<?php echo $img_index; ?>" <?php echo $img_index === 0 ? 'class="active" aria-current="true"' : ''; ?> aria-label="Slide <?php echo $img_index + 1; ?>"></button>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
							
							<div class="carousel-inner h-100">
								<?php foreach ($modal_images as $img_index => $img_url) : ?>
									<div class="carousel-item h-100 <?php echo $img_index === 0 ? 'active' : ''; ?>">
										<div class="d-flex align-items-center justify-content-center h-100">
											<img src="<?php echo esc_url($img_url); ?>" class="img-fluid" style="max-width: 90vw; max-height: 90vh; object-fit: contain;" alt="<?php echo esc_attr(get_the_title()); ?>">
										</div>
									</div>
								<?php endforeach; ?>
							</div>
							
							<?php if (count($modal_images) > 1) : ?>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselModal<?php echo $modal_counter; ?>" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselModal<?php echo $modal_counter; ?>" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	<?php endwhile;
	wp_reset_postdata();
endif;
?>

<script>
	// Скрипт для открытия модального окна на нужном слайде
	document.addEventListener('DOMContentLoaded', function() {
		// Обработчики для всех модальных окон портфолио
		document.querySelectorAll('.portfolio-image-link').forEach(function(link) {
			link.addEventListener('click', function(e) {
				e.preventDefault();
				
				var modalId = this.getAttribute('data-bs-target');
				var slideIndex = parseInt(this.getAttribute('data-slide-index'));
				var carouselId = modalId.replace('portfolioModal', 'carouselModal');
				
				// Ждем открытия модального окна
				var modalElement = document.querySelector(modalId);
				modalElement.addEventListener('shown.bs.modal', function() {
					var carouselElement = document.querySelector(carouselId);
					var carousel = bootstrap.Carousel.getInstance(carouselElement);
					
					if (!carousel) {
						carousel = new bootstrap.Carousel(carouselElement, {
							interval: false
						});
					}
					
					carousel.to(slideIndex);
				}, { once: true });
			});
		});
	});
</script>
<!-- /Portfolio - All Cards Block -->


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