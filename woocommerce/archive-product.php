<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

//get_header( 'shop' );
get_header();

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );

?>
<!--header class="woocommerce-products-header">
	<?php /*if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	//do_action( 'woocommerce_archive_description' );
	?>
</header-->


<!-- Header -->
<header>
	<div class="parallax"></div>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="mb-3">Каталог товаров</h1>
				<div class="breadcrumbs mb-4">
					<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/home-breadcrumbs.png"></a>
					<span class="mx-1">/</span>
					<span>Каталог товаров</span>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	//do_action( 'woocommerce_before_shop_loop' );

	//woocommerce_product_loop_start(); */ ?>

	
		
		<!-- Archive product -->
		<section class="archive-product-section catalogy-section bg-white py-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2>Ассортимент и цены</h2>
						<div class="section-title-decoration text-center mb-5"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-decoration-image.png"></div>
						<div class="row">
							
							<div class="col-md-3">
								<?php dynamic_sidebar( 'wsidebar-1' ); ?>
							</div>
							
							<div class="col-md-9">
								<div class="row">
									
									<?php
										if ( wc_get_loop_prop( 'total' ) ) {
											while ( have_posts() ) {
												the_post();

												/**
												 * Hook: woocommerce_shop_loop.
												 */
												do_action( 'woocommerce_shop_loop' );

												wc_get_template_part( 'content', 'product' );
											}
										}
									?>
								</div>
									<!--div class="col-md-4 mb-5">
										<div class="card">
											<a href="single-product.html">
												<img src="<?php echo get_template_directory_uri(); ?>/img/archive-product-thumbnail-img.jpg" class="card-img-top p-3 pb-0" alt="...">
											</a>
											<div class="card-body">
												<a href="single-product.html" class="text-decoration-none">
													<h3 class="card-title">Baxi LUNA 3 comfort 1.240 Fi Baxi LUNA 3 comfort 1.240 Fi</h3>
												</a>
												<!--p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p--
												<div class="row align-items-center">
													<div class="col-5">
														<div>
															<p class="old-price"><strike>2750 ₽</strike></p>
															<p class="price">2500 ₽</p>
														</div>
														<!--div class="input-group">
															<button class="btn btn-sm btn-corporate-1" type="button" style="width: 30px;">+</button>
															
															<input type="number" step="1" min="1" max="999" id="" name="quantity" value="1" title="Qty" class="form-control form-control-sm text-center" placeholder="Recipient's username" aria-label="Recipient's username with two button addons" style="">
															
															<button class="btn btn-sm btn-corporate-1" type="button" style="width: 30px;">-</button>
														</div--
													</div>
													<div class="col-7">
														<button class="btn btn-sm btn-corporate-color-1" style="width: 100%;">Заказать</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 mb-5">
										<div class="card">
											<a href="single-product.html">
												<img src="<?php echo get_template_directory_uri(); ?>/img/archive-product-thumbnail-img.jpg" class="card-img-top p-3 pb-0" alt="...">
											</a>
											<div class="card-body">
												<a href="single-product.html" class="text-decoration-none">
													<h3 class="card-title">Baxi LUNA 3 comfort 1.240 Fi Baxi LUNA 3 comfort 1.240 Fi</h3>
												</a>
												<div class="row align-items-center">
													<div class="col-5">
														<div>
															<p class="old-price"><strike>2750 ₽</strike></p>
															<p class="price">2500 ₽</p>
														</div>
														<!--div class="input-group">
															<button class="btn btn-sm btn-corporate-1" type="button" style="width: 30px;">+</button>
															
															<input type="number" step="1" min="1" max="999" id="" name="quantity" value="1" title="Qty" class="form-control form-control-sm text-center" placeholder="Recipient's username" aria-label="Recipient's username with two button addons" style="">
															
															<button class="btn btn-sm btn-corporate-1" type="button" style="width: 30px;">-</button>
														</div--
													</div>
													<div class="col-7">
														<button class="btn btn-sm btn-corporate-color-1" style="width: 100%;">Заказать</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center text-corporate-color-1">
										<li class="page-item"><a class="page-link" href="#">←</a></li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">...</a></li>
										<li class="page-item"><a class="page-link" href="#">10</a></li>
										<li class="page-item"><a class="page-link" href="#">11</a></li>
										<li class="page-item"><a class="page-link" href="#">12</a></li>
										<li class="page-item"><a class="page-link" href="#">→</a></li>
									</ul>
								</nav-->
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!-- Archive product -->
	
	<?php /*
	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 *
	do_action( 'woocommerce_after_shop_loop' ); */
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	//do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 *
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 *
do_action( 'woocommerce_sidebar' ); */ ?>


<!-- Process -->
<div id="advantages-sp" class="scroll-point"></div>
<section class="advantages bg-light pt-5 pb-3">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2>Как заказать</h2>
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
<!-- /Process -->


<?php get_footer(); ?>