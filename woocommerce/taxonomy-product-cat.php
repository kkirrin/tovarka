<?php

if (!defined('ABSPATH')) {
	exit; // Защита от прямого доступа.
}

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
			wc_get_template('archive-single-category.php');
		} else {
			// Если подкатегорий нет, можно вывести сообщение или загрузить другой шаблон
			echo '<p>У этой категории нет подкатегорий.</p>';
			wc_get_template('archive-category.php');
		}
	} else {
		// Если это не родительская категория, вы можете обработать другие случаи
		echo '<p>Это дочерняя категория.</p>';
		wc_get_template('archive-single-category.php');
	}
} else {
	echo '<p>Не удалось получить текущую категорию.</p>';
}
