<?php 

// setup theme
function pipilika_setup() {
	load_theme_textdomain('pipilika');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	register_nav_menus(array(
		'mainmenu' => __('Main Menu', 'healthcare'),
		'secondary' => __('Secondary Menu', 'healthcare'),
	));
}
add_action('after_setup_theme', 'pipilika_setup');


// reade more 
function pipilika_continue($words) {
	$pipilika_article = explode(' ', get_the_content());
	$pipilika_article_slice = array_slice($pipilika_article, 0, $words);
	echo implode(' ', $pipilika_article_slice);
}