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
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;
$product_title = $product->get_title();

$short_description = $product->get_short_description();
$attr = $product->get_attributes();

// обращаемся по ключу к каждому атрибуту
$product_class = $product->get_attribute('pa_class');
$product_compound = $product->get_attribute('pa_compound');
$product_viscosity = $product->get_attribute('pa_viscosity');
$product_volume = $product->get_attribute('pa_volume');
$product_sku = $product->get_sku();

$product_price = $product->get_price_html();
$product_id = $product->get_id();
$product_desc = $product->get_description();






// echo '<pre>';
// print_r($array);
// echo '</pre>';

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
	<h1 class="title">
		<div class="">
			<?php echo $product_title ?>
		</div>
	</h1>
	<div class="single-product__wrapper">
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action('woocommerce_before_single_product_summary');
		?>

		<div class="single-product__description">
			<ul class="single-product__list">

				<li style="justify-content: space-between;">
					<p class="font-medium md:text-[16px] text-[14px]" style="color: rgb(153, 153, 153);">Код товара</p>
					<p style="color: rgb(13, 43, 0);">
						<?php echo $product_sku; ?>
					</p>
				</li>
				<li style="justify-content: space-between;">
					<p class="font-medium md:text-[16px] text-[14px]" style="color: rgb(153, 153, 153);">Состав</p>
					<p style="color: rgb(13, 43, 0);">
						<?php echo $product_compound; ?>
					</p>
				</li>
				<li style="justify-content: space-between;">
					<p class="font-medium md:text-[16px] text-[14px]" style="color: rgb(153, 153, 153);">Объём</p>
					<p style="color: rgb(13, 43, 0);">
						<?php echo $product_volume; ?>
					</p>
				</li>
				<li style="justify-content: space-between;">
					<p class="font-medium md:text-[16px] text-[14px]" style="color: rgb(153, 153, 153);">Вязкость SAE</p>
					<p style="color: rgb(13, 43, 0);">
						<?php echo $product_viscosity; ?>
					</p>
				</li>

				<li style="justify-content: space-between;">
					<p class="font-medium md:text-[16px] text-[14px]" style="color: rgb(153, 153, 153);">Класс по API</p>
					<p style="color: rgb(13, 43, 0);">
						<?php echo $product_class; ?>
					</p>
				</li>
			</ul>


			<div class="summary entry-summary">
				<div class="entry-summary-wrapper">
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
					do_action('woocommerce_single_product_summary');
					?>
				</div>
			</div>

			<div style="max-width: 400px;">
				<?php echo $product_desc; ?>
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
	do_action('woocommerce_after_single_product_summary');
	?>

</div>

<?php do_action('woocommerce_after_single_product'); ?>