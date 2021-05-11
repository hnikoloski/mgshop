<?php

// Enque ajax filter js

function load_scirpts()
{
	wp_enqueue_script('ajax', get_template_directory_uri() . '/js/ajax-filter.js', array('jquery'), NULL, true);

	wp_localize_script(
		'ajax',
		'wpAjax',
		array('ajaxUrl' => admin_url('admin-ajax.php'))
	);
}

add_action('wp_enqueue_scripts', 'load_scripts');
