<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 
//---------------- регистрация меню----------------
register_nav_menus(
array(
'menu-clean' => esc_html__( 'menu-clean', 'menu-clean' ),    
)
);

// function add_menuclass($ulclass) {
// return preg_replace('/<a /', '<a class="menu__link-header" ' , $ulclass); }
//   add_filter('wp_nav_menu','add_menuclass');