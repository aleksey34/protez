<?php


use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'protez_crb_attach_theme_options' );
function protez_crb_attach_theme_options() {

	$common_tab_404_page_arr = array(
		"off"=> "По умолчанию",
//		'1' => 1,
//		'2' => 2,
//		'3' => 3,
//		'4' => 4,
//		'5' => 5,
	);
	$pages = get_pages();
	foreach($pages as $page){
		$common_tab_404_page_arr[get_the_permalink($page->ID)] = $page->post_title;
	}
	Container::make( 'theme_options', __( 'Theme Options' ) )
		->set_icon("dashicons-carrot")
		->add_tab(__("Common") , array(
			Field::make( 'select', 'protez-404-redirect-page', __( 'Выберете 404 страницу' ) )
			     ->set_options(  $common_tab_404_page_arr)
				->set_default_value('off'),


		))
		->add_tab( __( 'Head' ), array(
			Field::make( 'image', 'protez_header_logo_1', __( 'Логотип 1' , "protez" ) )
				->set_value_type( 'url' )
				->set_width("50"),
			Field::make( 'image', 'protez_header_logo_2', __( 'Логотип 2' , "protez" ) )
				->set_value_type( 'url' )
				->set_width("50"),


		) )
		->add_tab( __( 'Footer' ), array(
			Field::make( 'text', 'footer_address', __( 'Адрес' ) ),
			Field::make( 'text', 'footer_copyrights', __( 'Копирайт' ) ),
			Field::make( 'complex', 'footer_social_media', __( 'Социальные сети' ) )
			     ->add_fields( array(
				     Field::make( 'text', 'footer_social_link', __( 'Ссылка' ) )
			           // ->set_default_value()
			            ->set_width("50"),
				     Field::make( 'select', 'footer_social_icon_class', __( 'Выберите социальную сеть' ) )
					     ->set_options( array(
						     "fab fa-facebook" => 'facebook' ,
						     "fab fa-vk" => 'vk',
						     "fab fa-odnoklassniki" => 'ok' ,
						      "fab fa-twitter" => 'twitter' ,
						      "fab fa-youtube" => 'youtube',
					     ) )
				          ->set_width("50"),
			     ) ),


		) )
		->add_tab( __( 'Side Menu' ), array(
			Field::make( 'complex', 'side_menu_social_media', __( 'Социальные сети' ) )
				->add_fields( array(
					Field::make( 'text', 'side_menu_social_link', __( 'Ссылка' ) )
						// ->set_default_value()
						 ->set_width("50"),
					Field::make( 'select', 'side_menu_social_icon_class', __( 'Выберите социальную сеть' ) )
					     ->set_options( array(
						     "fab fa-facebook" => 'facebook' ,
						     "fab fa-vk" => 'vk',
						     "fab fa-odnoklassniki" => 'ok' ,
						     "fab fa-twitter" => 'twitter' ,
						     "fab fa-youtube" => 'youtube',
					     ) )
					     ->set_width("50"),
				) ),


//----------------------------- side menu settings

			Field::make( 'complex', 'side_menu_column_1', __( 'Боковое меню колонка 1' ) )
				->set_width("33")
			     ->add_fields( array(
				     Field::make( 'complex', 'side_menu_column_1_menu', __( 'Добавить меню к 1 колонке' ) )
			            ->add_fields(array(
				            Field::make( 'text', 'side_menu_column_title', __( 'Имя пункта меню' ) ),
				            Field::make( 'text', 'side_menu_column_link', __( 'Ссылка' ) ),
			            )),

			     ) ),


			Field::make( 'complex', 'side_menu_column_2', __( 'Боковое меню колонка 2' ) )
			     ->set_width("33")
			     ->add_fields( array(
				     Field::make( 'complex', 'side_menu_column_2_menu', __( 'Добавить меню к 2 колонке' ) )
				          ->add_fields(array(
					          Field::make( 'text', 'side_menu_column_title', __( 'Имя пункта меню' ) ),
					          Field::make( 'text', 'side_menu_column_link', __( 'Ссылка' ) ),
				          )),

			     ) ),


			Field::make( 'complex', 'side_menu_column_3', __( 'Боковое меню колонка 3' ) )
			     ->set_width("33")
			     ->add_fields( array(
				     Field::make( 'complex', 'side_menu_column_3_menu', __( 'Добавить меню к 3 колонке' ) )
				          ->add_fields(array(
					          Field::make( 'text', 'side_menu_column_title', __( 'Имя пункта меню' ) ),
					          Field::make( 'text', 'side_menu_column_link', __( 'Ссылка' ) ),
				          )),

			     ) ),



		) );

}