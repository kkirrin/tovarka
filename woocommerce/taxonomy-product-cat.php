<?php

if (!defined('ABSPATH')) {
	exit; // Защита от прямого доступа.
}


get_header('shop');

?>

<div class="container">
	<?php
	wc_print_notices();
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

	<?php

	// Получаем текущую категорию (термин)
	$current_term = get_queried_object();

	// Проверяем, является ли текущая категория родительской
	if ($current_term) {
		// Получаем ID родительской категории
		$parent_id = $current_term->parent;

		if ($parent_id === 0) {
			// Это родительская категория
			// Получаем подкатегории у текущей категории
			$subcategories = get_terms(array(
				'taxonomy' => 'product_cat',
				'parent' => $current_term->term_id,
				'hide_empty' => false, // Показываем пустые подкатегории
			));

			if (!is_wp_error($subcategories) && !empty($subcategories)) {
				// Если подкатегории существуют, загружаем шаблон для их отображения
				// echo '<p>Это де я?.</p>';
				// wc_get_template('archive-single-category.php');
	?>

				<section>
					<img src="" alt="БАННЕР ДУЩНЫЙ">
				</section>

				<section class="catalog__category__list">
					<ul class="grid grid-cols-2 gap-[30px]">


						<?php foreach ($subcategories as $sub) { ?>
							<li>
								<a href="<?php echo get_category_link($sub->term_id); ?>">

									<?php
									$sub_thumbnail_url = wp_get_attachment_url(get_woocommerce_term_meta($sub->term_id, 'thumbnail_id', true));
									?>
									<img src="<?php echo esc_url($sub_thumbnail_url ? $sub_thumbnail_url : '/wp-content/uploads/woocommerce-placeholder.png'); ?>" alt="<?php echo esc_attr($sub->name); ?>" />

									<p><?php echo esc_html($sub->name); ?>&nbsp;(<?php echo $sub->count; ?>)</p>
								</a>
							</li>
						<?php } ?>


					</ul>
				</section>
	<?php
			}
			wc_get_template('archive-category.php');

			// else {
			// 	// Если это не родительская категория, вы можете обработать другие случаи
			// 	// wc_get_template('archive-single-category.php');
			// }
		} else {
			wc_get_template('archive-category.php');
		}
	}

	?>

</div>

<?php get_footer(); ?>