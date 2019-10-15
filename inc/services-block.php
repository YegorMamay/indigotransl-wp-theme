<?php
function services_block()
{
	wp_enqueue_script('services_tab', get_template_directory_uri() . '/assets/js/services-tab.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'services_block');
