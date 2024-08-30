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
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header();





?>

<div class="container">
	<?php
	/**
	 * Hook: woocommerce_before_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 * @hooked WC_Structured_Data::generate_website_data() - 30
	 */
	do_action('woocommerce_before_main_content');
	?>
</div>

<div class="container">
	<header class="woocommerce-products-header">
		<?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
			<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
		<?php endif; ?>

		<?php
		/**
		 * Hook: woocommerce_archive_description.
		 *
		 * @hooked woocommerce_taxonomy_archive_description - 10
		 * @hooked woocommerce_product_archive_description - 10
		 */
		do_action('woocommerce_archive_description');
		?>
	</header>

	<div class="catalog_list--category">
		<!-- ТОЛЬКО КАТЕГОРИИ И ПОДКАТЕГОРИИ -->
		<ul class="grid md:grid-cols-4 grid-cols-2 gap-[20px]">
			<?php
			$categories = get_terms(array(
				'taxonomy'   => 'product_cat',
				'orderby'    => 'meta_value_num',
				'order'      => 'ASC',
				'hide_empty' => true,
				'parent'     => 0,
			));

			// Проверяем, растет ли массив категорий
			if (!is_wp_error($categories) && !empty($categories)) :
				foreach ($categories as $category) :
			?>
					<li class="catalog_list__item">
						<a href="<?php echo get_category_link($category->term_id); ?>">
							<?php
							$thumbnail_url = wp_get_attachment_url(get_woocommerce_term_meta($category->term_id, 'thumbnail_id', true));
							?>
							<img style="max-width: 40px; max-height: 40px;" src="<?php echo esc_url($thumbnail_url ? $thumbnail_url : '/wp-content/uploads/woocommerce-placeholder.png'); ?>" alt="<?php echo esc_attr($category->name); ?>" />
							<p class="text"><?php echo esc_html($category->name); ?></p>
						</a>

						<?php
						// Получаем подкатегории
						$sub_categories = get_terms(array(
							'taxonomy'   => 'product_cat',
							'parent'     => $category->term_id,
							'orderby'    => 'meta_value_num',
							'order'      => 'ASC',
							'hide_empty' => false,
						));

						if (!is_wp_error($sub_categories) && !empty($sub_categories)) :
						?>
							<ul class="sub-menu">
								<?php foreach ($sub_categories as $sub_category) : ?>
									<li>
										<a href="<?php echo get_category_link($sub_category->term_id); ?>">
											<p><?php echo esc_html($sub_category->name); ?></p>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			<?php endif; ?>
		</ul>


	</div>
</div>

<?php get_footer(); ?>