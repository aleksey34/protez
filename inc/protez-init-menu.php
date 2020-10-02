<?php

if(!defined("ABSPATH")) return;

function protez_init_menu(){
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'top-menu' => esc_html__( 'Primary', 'protez' ),

			"footer_menu_1" => esc_html__("Footer menu column 1" , "protez"),
			"footer_menu_2" => esc_html__("Footer menu column 2" , "protez"),
			"footer_menu_3" => esc_html__("Footer menu column 3" , "protez"),
			"footer_menu_4" => esc_html__("Footer menu column 4" , "protez"),
			"footer_menu_5" => esc_html__("Footer menu column 5" , "protez"),
			"footer_menu_6" => esc_html__("Footer menu column 6" , "protez"),

		)
	);

}


add_action( 'after_setup_theme', 'protez_init_menu' );

