<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

if ( is_product() ) { // По 3 в ряд на странице архива
	$classes = 'col-md-3 mb-5';
} else { // По 4 в ряд на странице продукта
	$classes = 'col-md-4 mb-5';
}

?>
<div <?php wc_product_class( $classes, $product ); ?>>
	<div class="card">
		<div class="card-body">
			<?php
			/**
			 * Hook: woocommerce_before_shop_loop_item.
			 *
			 * @hooked woocommerce_template_loop_product_link_open - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item' );

			/**
			 * Hook: woocommerce_before_shop_loop_item_title.
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item_title' );

			/**
			 * Hook: woocommerce_shop_loop_item_title.
			 *
			 * @hooked woocommerce_template_loop_product_title - 10
			 */
			do_action( 'woocommerce_shop_loop_item_title' );
			
			
			/**
			 * Hook: woocommerce_after_shop_loop_item.
			 *
			 * @hooked woocommerce_template_loop_product_link_close - 5
			 * @hooked woocommerce_template_loop_add_to_cart - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item' );
			 ?>
			<div class="row align-items-center">
				<div class="col-6">
					<?php
					/**
					 * Hook: woocommerce_after_shop_loop_item_title.
					 *
					 * @hooked woocommerce_template_loop_rating - 5
					 * @hooked woocommerce_template_loop_price - 10
					 */
					do_action( 'woocommerce_after_shop_loop_item_title' );
					?>
				</div>
				<div class="col-6">
					<button class="btn btn-sm btn-corporate-color-1" style="width: 100%;">Заказать</button>
				</div>
			</div>
			<!--div class="row align-items-center">
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
			</div-->
		</div>
	</div>
</div>
