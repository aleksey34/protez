<!-- modal top side menu  -->
<div class="top-side-menu container-fluid pt-3 pb-3">
    <div class="top-side-menu-close-btn">
        &#10011;
    </div>
    <div class="top-side-menu-header row justify-content-between">
		<div class="top-side-menu-search col-12 col-md-7 col-lg-8">
            <?php get_search_form();  ?>
		</div>
		<div class="top-side-menu-social pt-4 col-12 col-md-5 col-lg-4">
            <?php
            $side_menu_media = carbon_get_theme_option("side_menu_social_media");
            if(!empty($side_menu_media)) :
            foreach ($side_menu_media as $key=> $media):
            ?>
                <a href="<?php echo $media['side_menu_social_link'] ;  ?>"><i class="<?php echo $media['side_menu_social_icon_class'];   ?>"></i></a>
            <?php endforeach;
            endif;
            ?>
		</div>
	</div>
	<div class="pt-5 row justify-content-center justify-content-md-between top-side-menu-body">
		<div class="col-9 col-md-4 top-side-menu-columns">
            <?php
            $top_side_menu_column_1 =  carbon_get_theme_option("side_menu_column_1");
            if(!empty($top_side_menu_column_1)) :
                for($i =0 ; $i< count($top_side_menu_column_1); $i++):
                   $menu = $top_side_menu_column_1[$i]['side_menu_column_1_menu'];
            echo '<ul class="top-side-menu-body-list">';
                    for($j =0; $j < count($menu) ; $j++) :
                ?>
                        <li><a href="<?php esc_attr_e($menu[$j]['side_menu_column_link'])  ?>"><?php esc_html_e($menu[$j]['side_menu_column_title'])  ?></a></li>
                    <?php
                    endfor;
                  echo '</ul>';
                endfor;
            endif;
            ?>
		</div>
		<div class="col-9 col-md-4 top-side-menu-columns">
			<?php
			$top_side_menu_column_2 =  carbon_get_theme_option("side_menu_column_2");
			if(!empty($top_side_menu_column_2)) :
				for($i =0 ; $i< count($top_side_menu_column_2); $i++):
					$menu = $top_side_menu_column_2[$i]['side_menu_column_2_menu'];
					echo '<ul class="top-side-menu-body-list">';
					for($j =0; $j < count($menu) ; $j++) :
						?>
                        <li><a href="<?php esc_attr_e($menu[$j]['side_menu_column_link'])  ?>"><?php esc_html_e($menu[$j]['side_menu_column_title'])  ?></a></li>
					<?php
					endfor;
					echo '</ul>';
				endfor;
			endif;
			?>
		</div>
		<div class="col-9 col-md-4 top-side-menu-columns">
			<?php
			$top_side_menu_column_3 =  carbon_get_theme_option("side_menu_column_3");
			if(!empty($top_side_menu_column_3)) :
				for($i =0 ; $i< count($top_side_menu_column_3); $i++):
					$menu = $top_side_menu_column_3[$i]['side_menu_column_3_menu'];
					echo '<ul class="top-side-menu-body-list">';
					for($j =0; $j < count($menu) ; $j++) :
						?>
                        <li><a href="<?php esc_attr_e($menu[$j]['side_menu_column_link'])  ?>"><?php esc_html_e($menu[$j]['side_menu_column_title'])  ?></a></li>
					<?php
					endfor;
					echo '</ul>';
				endfor;
			endif;
			?>
		</div>
	</div>
</div>
