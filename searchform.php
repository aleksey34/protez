<form  role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>"  >
	<span>Поиск</span>
	<input type="text" placeholder="искать" value="<?php echo get_search_query() ?>"  name="s" id="s" />
	<button  id="searchsubmit" type="submit"><i class="fas fa-search"></i></button>
</form>