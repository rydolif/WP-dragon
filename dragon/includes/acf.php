<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


//------------------настройка- ACF---------------------
    if( function_exists('acf_add_options_page') ) {
     
        $option_page = acf_add_options_page(array(
            'page_title'    => 'Информация',
            'menu_title'    => 'Информация',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'  => false
        ));
     
    }

