<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>


<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'container single-product-section pt-5', $product ); ?>>
	<div class="row">
		<div class="col-md-6">
			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
			?>
		</div>
		<div class="col-md-6 summary entry-summary">
			<div class="row">
				<div class="col-6">
										<?php
					/**
					 * Hook: woocommerce_single_product_summary.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */
					do_action( 'woocommerce_single_product_summary' );
					?>

				</div>
				<div class="col-6">
					<button class="btn btn-sm btn-corporate-color-1" style="width: 175px;">Заказать</button>
				</div>
			</div>
			
			<!-- Выводим дополнительную информацию -->
			<?php do_action( 'woocommerce_product_additional_information', $product ); ?>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<h2>Описание</h2>
			<?php the_content(); ?>
		</div>
	</div>
</div>


<?php
			/**
			 * Hook: woocommerce_after_single_product_summary.
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			do_action( 'woocommerce_after_single_product_summary' );
			?>


<?php do_action( 'woocommerce_after_single_product' ); ?>


<!-- SINGLE PRODUCT SECTION --
<section class="single-product-section bg-white py-5">
	<div class="container py-3">
		<div class="row">
			<div class="col-md-6 mb-4 mb-md-0">
				<div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="<?php echo get_template_directory_uri(); ?>/img/single-product-img.jpg" class="d-block w-100 rounded" alt="...">
						</div>
						<div class="carousel-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/single-product-img.jpg" class="d-block w-100 rounded" alt="...">
						</div>
						<div class="carousel-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/single-product-img.jpg" class="d-block w-100 rounded" alt="...">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
			<div class="col-md-6">
				<!--h2 class="mb-4">Фанера ФСФ, толщина 12 мм, размер 1220х2440 мм, сорт 4/4</h2--
				<div class="row gx-0 mb-4 mb-md-0 align-items-center">
					<div class="col-6 col-md-4">
						<p class="mb-0">
							<span class="old-price"><strike>2750 ₽</strike></span> <span class="price">2500 ₽</span>
						</p>
					</div>
					<!--div class="col-4 col-md-2">
						<div class="input-group">
							<button class="btn btn-sm btn-corporate-1" type="button" style="width: 30px;">+</button>
							
							<input type="number" step="1" min="1" max="999" id="" name="quantity" value="1" title="Qty" class="form-control form-control-sm text-center" placeholder="Recipient's username" aria-label="Recipient's username with two button addons" style="">
							
							<button class="btn btn-sm btn-corporate-1" type="button" style="width: 30px;">-</button>
						</div>
					</div--
					<div class="col-6 col-md-3 ps-3">
						<button class="btn btn-sm btn-corporate-color-1" style="width: 100%;">Заказать</button>
					</div>
				</div>
				<p class="mt-4 mb-4">Краткое описание товара Baxi LUNA 3 comfort 1.240 Fi Baxi LUNA 3 comfort 1.240 Fi. Краткое описание товара Baxi LUNA 3 comfort 1.240 Fi Baxi LUNA 3 comfort 1.240 Fi. Краткое описание товара Baxi LUNA 3 comfort 1.240 Fi Baxi LUNA 3 comfort 1.240 Fi. Краткое описание товара Baxi LUNA 3 comfort 1.240 Fi Baxi LUNA 3 comfort 1.240 Fi.</p>
				
				<table class="table" style="max-width: 450px;">
					<tbody>
						<tr>
							<td>Газовый котел</td>
							<td>Конвекционный</td>
						<tr>
						<tr>
							<td>Мощность</td>
							<td>125 кВт</td>
						<tr>
						<tr>
							<td>Контурность</td>
							<td>Одноконтурный</td>
						<tr>
						<tr>
							<td>КПД</td>
							<td>92.9 %</td>
						<tr>
						<tr>
							<td>Камера сгорания</td>
							<td>Закрытая</td>
						<tr>
						<tr>
							<td>Насос</td>
							<td>Циркуляционный</td>
						<tr>
						<tr>
							<td>Расширительный бак</td>
							<td>Есть</td>
						<tr>
						<tr>
							<td>Необходимая сеть</td>
							<td>Однофазная</td>
						<tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h2 class="mb-3 text-start">Описание</h2>
				<p>Полное описание товара Baxi LUNA 3 comfort 1.240 Fi Baxi LUNA 3 comfort 1.240 Fi. Полное описание товара Baxi LUNA 3 comfort 1.240 Fi Baxi LUNA 3 comfort 1.240 Fi. Полное описание товара Baxi LUNA 3 comfort 1.240 Fi Baxi LUNA 3 comfort 1.240 Fi. Полное описание товара Baxi LUNA 3 comfort 1.240 Fi Baxi LUNA 3 comfort 1.240 Fi. Полное описание товара Baxi LUNA 3 comfort 1.240 Fi Baxi LUNA 3 comfort 1.240 Fi. Полное описание товара Baxi LUNA 3 comfort 1.240 Fi Baxi LUNA 3 comfort 1.240 Fi. Полное описание товара Baxi LUNA 3 comfort 1.240 Fi Baxi LUNA 3 comfort 1.240 Fi. Полное описание товара Baxi LUNA 3 comfort 1.240 Fi Baxi LUNA 3 comfort 1.240 Fi.</p>
			</div>
		</div>
	</div>
</section>
<!-- /SINGLE PRODUCT SECTION -->


<!-- Similar products --
<section class="similar-product-section catalogy-section bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2>Похожие товары</h2>
				<div class="section-title-decoration text-center mb-5"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-decoration-image.png"></div>
				<div class="row">
					<div class="col-md-3 mb-5">
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
					<div class="col-md-3 mb-5">
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
					<div class="col-md-3 mb-5">
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
					<div class="col-md-3 mb-5">
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
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /End similar products -->