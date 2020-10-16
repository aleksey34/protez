<?php
if(!defined("ABSPATH")) exit;


if( wp_doing_ajax() ){

	add_action("wp_ajax_search-ajax" , "protez_ajax_search");
	add_action("wp_ajax_nopriv_search-ajax" , "protez_ajax_search");

	function protez_ajax_search(){
		$nonce = $_POST['nonce'];
		if(!wp_verify_nonce($nonce , 'search_form')){
			wp_send_json_success(
				'<ul class="list-group">
<li class="list-group-item">
Ошибка безопастности.
</li>
</ul>');
			die;
		}
		$search_str = htmlspecialchars($_POST['s']);

		$args = [
			"post_type"=> array("post" , "page"),
			"post_status"=> "publish",
			"s"=> $search_str,

		];


		$query = new WP_Query($args);
		if($query->have_posts()) {

			ob_start();

			echo '<div class="list-group">' ;

			$str_length = 25;
			while ( $query->have_posts() ) {
				$query->the_post();
				?>
					<a  class="list-group-item list-group-item-action list-group-item-light" href="<?php the_permalink(); ?>">
						<?php
						$title = get_the_title();
						if(mb_strlen($title) > $str_length){
						    $title = mb_substr($title , 0 , $str_length-3 )."...";
							esc_html_e($title);
						}else{
							esc_html_e($title);
						}

						?>
					</a>
				<?php
			}
			echo "</div>" ;

			$res = ob_get_contents();
			ob_clean();


		}else{
			$res = '<ul class="list-group">
<li class="list-group-item">
ничего не найадено
</li>
</ul>';
		}

		wp_reset_postdata();
		$data = [ "html" => $res ];
		$data[s] = $search_str ;

		wp_send_json_success( $data );
		die;

	}


}