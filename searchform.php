<form class="container"  role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>"  >
	<div class="row">
        <span class="col-12 col-sm-4 com-md-4">Поиск</span>
        <div class="pt-3 col-12 col-sm-8 com-md-8  form-group search-fields">
            <input class="form-control" type="text" placeholder="искать" value="<?php echo get_search_query() ?>"  name="s" id="s" />
            <button class=""  id="searchsubmit" type="submit"><i class="fas fa-search"></i></button>
            <div class="ajax-search-result"></div>
            <button class="header-search-clear-btn header-search-clear-btn_hidden"></button>
        </div>
    </div>
</form>