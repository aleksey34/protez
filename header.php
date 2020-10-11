<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package protez
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		    <?php
		    $logo1 = carbon_get_theme_option("protez_header_logo_1");
		    $logo2 = carbon_get_theme_option("protez_header_logo_2");
		    ?>
            <div class="photo-header-wrap">
                <div class="photo-header"><img  class="photo-logo"  src="<?php echo $logo1 ?>" alt="logo 1"></div>
                <div class="photo-header-rostex"><img  src="<?php echo $logo2 ?>"   alt="logo 2"></div>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><?php esc_html_e('Меню', 'protez');  ?></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <?php
			    protez_get_primary_menu();
			    ?>
            </div>
        </nav>
    </header>



<?php   get_template_part('template-parts/top-side-menu'); ?>