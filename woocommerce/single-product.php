<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>


<!-- Header -->
<header>
	<div class="parallax"></div>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="mb-4">Каталог товаров</h1>
				<h2 class="header-subtitle">Baxi LUNA 3 comfort 1.240 Fi Baxi LUNA 3 comfort 1.240 Fi</h2>
				<div class="breadcrumbs mb-4">
					<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/home-breadcrumbs.png"></a>
					<span class="mx-1">/</span>
					<a href="archive-product.html">Каталог товаров</a>
					<span class="mx-1">/</span>
					<span>Baxi LUNA 3 comfort 1.240 Fi Baxi LUNA 3 comfort 1.240 Fi</span>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
do_action( 'woocommerce_before_main_content' );

?>


<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>

	<?php wc_get_template_part( 'content', 'single-product' ); ?>

<?php endwhile; // end of the loop. ?>


<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>


<?php
/**
 * woocommerce_sidebar hook.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
//do_action( 'woocommerce_sidebar' );
?>		
		
		
<!-- PROCESS -->
<div id="advantages-sp" class="scroll-point"></div>
<section class="advantages bg-white pt-5 pb-3">
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
<!-- /PROCESS -->


<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */