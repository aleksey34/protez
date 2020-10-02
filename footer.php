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
	<footer id="colophon" class="site-footer">
        <div class="footer">
            <nav class="nav-bottom">
                <div class="footer-menu-wrap">
                    <div class="d-col">
                        <?php
                        wp_nav_menu(
	                        array(
		                        'theme_location' => 'footer_menu_1',
		                        //	'menu_id'        => 'primary-menu',
		                       // "menu_id" => "footer_menu_1",
		                        "container" => false,
	                        )
                        );
                        ?>
                    </div>
                    <div class="d-col">
	                    <?php
	                    wp_nav_menu(
		                    array(
			                   'theme_location' => 'footer_menu_2',
			                    //	'menu_id'        => 'primary-menu',
			                  //  "menu_id" => "footer_menu_2",
			                    "container" => false,
		                    )
	                    );
	                    ?>
                    </div>
                    <div class="d-col">
	                    <?php
	                    wp_nav_menu(
		                    array(
			                    'theme_location' => 'footer_menu_3',
			                    //	'menu_id'        => 'primary-menu',
			                   // "menu_id" => "footer_menu_3",
			                    "container" => false,
		                    )
	                    );
	                    ?>
                    </div>
                    <div class="d-col">
	                    <?php
	                    wp_nav_menu(
		                    array(
			                    'theme_location' => 'footer_menu_4',
			                    //	'menu_id'        => 'primary-menu',
			                  //  "menu_id" => "footer_menu_4",
			                    "container" => false,
		                    )
	                    );
	                    ?>
                    </div>
                    <div class="d-col">
	                    <?php
	                    wp_nav_menu(
		                    array(
			                    'theme_location' => 'footer_menu_5',
			                    //	'menu_id'        => 'primary-menu',
			                   // "menu_id" => "footer_menu_5",
			                    "container" => false,
		                    )
	                    );
	                    ?>
                    </div>
                    <div class="d-col">
	                    <?php
	                    wp_nav_menu(
		                    array(
			                    'theme_location' => 'footer_menu_6',
			                    //	'menu_id'        => 'primary-menu',
			                    //"menu_id" => "footer_menu_6",
			                    "container" => false,
		                    )
	                    );
	                    ?>
                    </div>
                </div>
            </nav>
            <div>
                <div class="footer-information">
	                    <?php
	                    $footer_address = carbon_get_theme_option("footer_address");
	                    //  print_r($footer_socil_media);

                    if($footer_address):
	                    ?>
                    <div>
                        <p><?php echo $footer_address ?></p>
                    </div>
                    <?php endif;  ?>
                    <div>
                        <p class="social-networks">МЫ В СОЦИАЛЬНЫХ СЕТЯХ</p>
<!--                        <img class="social-networks" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/ico_socials2.svg" alt="">-->
                       <?php
                       $footer_socil_media = carbon_get_theme_option("footer_social_media");
                      if(!empty($footer_socil_media)) :
                       foreach ($footer_socil_media as $key=> $media) :
	                     //  print_r($media);
                       ?>
                           <a href="<?php  echo $media['footer_social_link'] ; ?>"><i class="<?php  echo $media['footer_social_icon_class'] ;  ?>"></i></a></span>
                        <?php endforeach;
                        endif;
                        ?>
                    </div>
                    <div>
                        <img class="footer-logo-corruption" src="<?php echo get_template_directory_uri(); ?>/assets/images/rostec_hotline.png" alt="">
                    </div>
                </div>
            </div>
	        <?php
	        $footer_copy = carbon_get_theme_option("footer_copyrights");
	        //  print_r($footer_socil_media);
            if(!empty($footer_copy)):
	        ?>
            <p class="footer-copyright">
               <?php echo $footer_copy  ?>
            <?php endif; ?>
        </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php  wp_footer(); ?>
</body>
</html>
