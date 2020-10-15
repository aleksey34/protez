<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package protez
 */

?>
	<footer id="colophon" class="container-fluid   site-footer">
        <div class="footer   row">
            <nav class="nav-bottom col-12">
                <div class="row justify-content-center justify-content-sm-around justify-content-md-between  footer-menu-wrap">
                    <div class="col-10 col-sm-6 col-md-4 col-lg-2 col-xl-2">
                        <?php
                        wp_nav_menu(
	                        array(
		                        'theme_location' => 'footer_menu_1',
		                        "container" => false,
	                        )
                        );
                        ?>
                    </div>
                    <div class="col-10 col-sm-6 col-md-4 col-lg-2 col-xl-2">
	                    <?php
	                    wp_nav_menu(
		                    array(
			                   'theme_location' => 'footer_menu_2',
			                    "container" => false,
		                    )
	                    );
	                    ?>
                    </div>
                    <div class="col-10 col-sm-6 col-md-4 col-lg-2 col-xl-2">
	                    <?php
	                    wp_nav_menu(
		                    array(
			                    'theme_location' => 'footer_menu_3',
			                    "container" => false,
		                    )
	                    );
	                    ?>
                    </div>
                    <div class="col-10 col-sm-6 col-md-4 col-lg-2 col-xl-2  ">
	                    <?php
	                    wp_nav_menu(
		                    array(
			                    'theme_location' => 'footer_menu_4',
			                    "container" => false,
		                    )
	                    );
	                    ?>
                    </div>
                    <div class="col-10 col-sm-6 col-md-4 col-lg-2 col-xl-2">
	                    <?php
	                    wp_nav_menu(
		                    array(
			                    'theme_location' => 'footer_menu_5',
			                    "container" => false,
		                    )
	                    );
	                    ?>
                    </div>
                    <div class="col-10 col-sm-6 col-md-4 col-lg-2 col-xl-2">
	                    <?php
	                    wp_nav_menu(
		                    array(
			                    'theme_location' => 'footer_menu_6',
			                    "container" => false,
		                    )
	                    );
	                    ?>
                    </div>
                </div>
            </nav>
            <div class="col-12 row">
                <div class="col-11 mx-auto  footer-information">
                    <div class="row   justify-content-center justify-content-mb-between">
	                    <?php
	                    $footer_address = carbon_get_theme_option("footer_address");
	                    //  print_r($footer_socil_media);
	                    if($footer_address):
		                    ?>
                        <div class="col-12 col-md-8 col-lg-8">
                            <p><?php echo $footer_address ?></p>
                        </div>
	                    <?php endif;  ?>
                        <div class="col-12 col-md-4 col-lg-4">
                            <p class="social-networks">МЫ В СОЦИАЛЬНЫХ СЕТЯХ</p>
		                    <?php
		                    $footer_socil_media = carbon_get_theme_option("footer_social_media");
		                    if(!empty($footer_socil_media)) :
			                  ?>
                                <div>
                            <?php
			                    foreach ($footer_socil_media as $key=> $media) :
				                    //  print_r($media);
				                    ?>
                                 <span>
                                    <a href="<?php  echo $media['footer_social_link'] ; ?>">
                                        <i class="<?php  echo $media['footer_social_icon_class'] ;  ?>"></i>
                                    </a>
                                 </span>
			                    <?php endforeach; ?>
			                  </div>
		                 <?php   endif;
		                    ?>
                        </div>
                    </div>
                </div>
            </div>
	        <?php
	        $footer_copy = carbon_get_theme_option("footer_copyrights");
            if(!empty($footer_copy)):
	        ?>
            <div class="col-11 mx-auto">
                <p class="footer-copyright text-center py-3">
		            <?php echo $footer_copy  ?>
                </p>
            </div>
            <?php endif; ?>
        </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php  wp_footer(); ?>
</body>
</html>
