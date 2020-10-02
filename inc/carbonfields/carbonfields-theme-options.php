<?php


use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'protez_crb_attach_theme_options' );
function protez_crb_attach_theme_options() {
	Container::make( 'theme_options', __( 'Theme Options' ) )
		->set_icon("dashicons-carrot")
		->add_tab(__("Common") , array(
			//		Field::make( 'text', 'crb_first_name', __( 'First Name' ) ),

		))
		->add_tab( __( 'Head' ), array(
			Field::make( 'image', 'protez_header_logo_1', __( 'Logo Image 1' , "protez" ) )
				->set_value_type( 'url' )
				->set_width("50"),
			Field::make( 'image', 'protez_header_logo_2', __( 'Logo Image 2' , "protez" ) )
				->set_value_type( 'url' )
				->set_width("50"),


		) )
		->add_tab( __( 'Footer' ), array(
			Field::make( 'text', 'footer_address', __( 'Address' ) ),
			Field::make( 'text', 'footer_copyrights', __( 'Copyrights' ) ),
			Field::make( 'complex', 'footer_social_media', __( 'Social media' ) )
			     ->add_fields( array(
				     Field::make( 'text', 'footer_social_link', __( 'Social Link' ) )
			           // ->set_default_value()
			            ->set_width("50"),
				     Field::make( 'select', 'footer_social_icon_class', __( 'Choose your social media' ) )
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
			Field::make( 'complex', 'side_menu_social_media', __( 'Social media' ) )
				->add_fields( array(
					Field::make( 'text', 'side_menu_social_link', __( 'Social Link' ) )
						// ->set_default_value()
						 ->set_width("50"),
					Field::make( 'select', 'side_menu_social_icon_class', __( 'Choose your social media' ) )
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

			Field::make( 'complex', 'side_menu_column_1', __( 'Side Menu Column 1' ) )
				->set_width("33")
			     ->add_fields( array(
				     Field::make( 'complex', 'side_menu_column_1_menu', __( 'Column 1 menu' ) )
			            ->add_fields(array(
				            Field::make( 'text', 'side_menu_column_title', __( 'Title for menu item' ) ),
				            Field::make( 'text', 'side_menu_column_link', __( 'Link for menu item' ) ),
			            )),

			     ) ),


			Field::make( 'complex', 'side_menu_column_2', __( 'Side Menu Column 2' ) )
			     ->set_width("33")
			     ->add_fields( array(
				     Field::make( 'complex', 'side_menu_column_2_menu', __( 'Column 2 menu' ) )
				          ->add_fields(array(
					          Field::make( 'text', 'side_menu_column_title', __( 'Title for menu item' ) ),
					          Field::make( 'text', 'side_menu_column_link', __( 'Link for menu item' ) ),
				          )),

			     ) ),


			Field::make( 'complex', 'side_menu_column_3', __( 'Side Menu Column 3' ) )
			     ->set_width("33")
			     ->add_fields( array(
				     Field::make( 'complex', 'side_menu_column_3_menu', __( 'Column 3 menu' ) )
				          ->add_fields(array(
					          Field::make( 'text', 'side_menu_column_title', __( 'Title for menu item' ) ),
					          Field::make( 'text', 'side_menu_column_link', __( 'Link for menu item' ) ),
				          )),

			     ) ),



		) );

}